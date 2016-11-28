var registerUrl = '/uc/system/webjsp/member/registerByPhone';
// var getKeyUrl = '/uc/system/vcode/sendCgiSmsVCode';
var getKeyUrl = '/uc/system/vcode/sendSmsVCode';
var validPhoneUrl = '/uc/system/webjsp/member/isValidPhone';
var accountLoginUrl = 'https://login.flyme.cn/sso/login';
//var accountLoginUrl_jsonp = 'https://login.flyme.cn/sso/loginjcb';
var directLoginUrl = 'https://login.flyme.cn/login/login.html';

var isNotInChina = /in\.meizu\.com/.test(location.hostname);

if(isNotInChina) {
	accountLoginUrl = accountLoginUrl.replace(/\.flyme\.cn/, '.in.meizu.com')
//	accountLoginUrl_jsonp = accountLoginUrl_jsonp.replace(/\.flyme\.cn/, '.in.meizu.com')
    directLoginUrl = directLoginUrl.replace(/\.flyme\.cn/, '.in.meizu.com')
}

var clickSubmit = 0;

$(function () {
    $('#acceptFlyme').mzCheckBox({
        click: function (e, event) {
            var error = $('#acceptError');
            var $field = $('#rememberField');
            if (!$(e).prop('checked')) {
                error.show();
                $field.css('margin-bottom', 10);
            } else {
                error.hide();
                $field.css('margin-bottom', 30);
            }
        }
    });
    var form = new Form();
    form.init();
    if('CountryCode' in window) window['CountryCode'].init()

    $("#mainForm").click(function() {
        if (clickSubmit != 0) {
            clickSubmit = 0;
            return;
        }
        util.removeTipsShowMsg("tips-show");
    });

});
var Form = function () {
    this.$form = $("#mainForm");
    this.$cycodeBox = $('#cycode-box');
    this.$cycode = $('#cycode');
    this.$btn = $('#register');
    this.$getKey = $('#getKey');
    this.$phone = $('#phone');
    this.$pwd = $('#password');
    this.$pwd1 = $('#password1');
};
$.extend(Form.prototype, {
    init: function () {
        this.initParameter();
        this.initValidate();
        this.initFormEvent();
        // util.initPlaceholder(this.$phone, 'Phone number');
        // util.initPlaceholder($('#kapkey'), 'Verification code');
        // util.initPlaceholder(this.$pwd, 'Password');
        // util.initPlaceholder(this.$pwd1, 'Password');
        // this.initResize();
        $.floatTip({'data': [
            {'id': 'phone', 'text': 'Enter a mobile number for login and password retrieval', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10},
            {'id': 'kapkey', 'text': 'Please enter the verification code received on the mobile phone', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10},
            {'id': 'password1', 'text': 'The password shall contain 8 to 16 digits including at least two types among letters, numbers and symbols', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10},
            {'id': 'password', 'text': 'The password shall contain 8 to 16 digits including at least two types among letters, numbers and symbols', 'width': 200, 'loc': 1, 'diffy': 2, 'diff': 10}
        ]});
        util.disableVcode(this.$getKey);
        if ($.browser.msie && $.browser.version == '6.0') {
            this.$pwd.focus();
            this.$pwd.blur();
        }
    },
    initParameter: function () {
        var appuri = util.getParameter("appuri");
        var useruri = util.getParameter("useruri");
        var service = util.getParameter("service");
        var sid = util.getParameter("sid");
        var urlSubfix = "";
        if (appuri != null) {
            $('#appuri').val(appuri);
            urlSubfix = urlSubfix + "appuri=" + encodeURIComponent(appuri) + "&";
        }
        if (useruri != null) {
            $('#useruri').val(useruri);
            urlSubfix = urlSubfix + "useruri=" + encodeURIComponent(useruri) + "&";
        }
        if (service != null) {
            $('#service').val(service);
            urlSubfix = urlSubfix + "service=" + encodeURIComponent(service) + "&";
        }
        if (sid != null) {
            $('#sid').val(sid);
            urlSubfix = urlSubfix + "sid=" + encodeURIComponent(sid);
        }
        var oldLoginHerf = $("#toLogin").attr("href");
        var oldRegisterHerf = $("#toRegister").attr("href");
        var nameRegisterHref = "/nameRegister";
        if (urlSubfix != "") {
            urlSubfix = "?" + urlSubfix;
            $("#toLogin").attr("href", oldLoginHerf + urlSubfix);
            $("#toRegister").attr("href", oldRegisterHerf + urlSubfix);
            $("#toNameRegister").attr("href", nameRegisterHref + urlSubfix);
        }
    },
    initInput: function ($input, info) {
        util.initPlaceholder($input, info, 'emptyInput');
    },
    initResize: function () {
        global.resizer.setProperty('minH', 800);
        $(document.body).css('min-height', 800);
    },
    initFormEvent: function () {
        var _this = this;
        this.$btn.click(function () {
            _this.$form.submit();
        });
        this.$form.bind("keypress", function (e) {
            if (e.keyCode == 13) {
                _this.$btn.click();
            }
        });
        util.initVcode(this.$getKey, getKeyUrl, 60, function () {},function(after, dealCount){
            // nAlert('<p>Please enter the text in the image</p><p class="normalInput"><input type="text" value="" name="kapmap" id="kapmap" class="kapkey" maxlength="6" autocomplete="off"><img id="imgKey" class="pointer" title="Click to refresh the verification code" src="/kaptcha.jpg?t=1411024557506"></p>',"Alert",function(){
                var param = {};
                // param.kapkey = $('#kapmap').val();
                param.phone = '00' + (_this.$cycode.val() - 0) + ':' + _this.$phone.val();
                param.vCodeTypeValue = "10";
                util.doAsyncPost(getKeyUrl, function(result) {
                    result = util.getData(result, false, function(mes, code, callback){
                        // callback();
                        if (code != 200 && mes != "") {
                            util.addTipsShowMsg("tips-show", mes);
                            return true;
                        }
                    });
                    if(result == true){
                        dealCount();
                    }
                }, param);
            // });
            // $("#kapmap").focus();
            // function refreshImg(){
            //     $("#imgKey")[0].src = "/kaptcha.jpg?t="+new Date().getTime();
            //     return false;
            // }
            // $("#imgKey").click(refreshImg);
            // refreshImg();
            // $(".alertDialogMain").css("border","none");
        });
        function _createPwd(type) {
            if (type == 'text') {
                _this.$pwd.val(_this.$pwd1.val());
                _this.$pwd.attr('name', 'password').show();
                _this.$pwd1.removeAttr('name').hide();
                if (!_this.$pwd.val()) {
                    _this.$pwd.next('.inputTip').show();
                }
                _this.$pwd1.next('.inputTip').hide();
            } else {
                _this.$pwd1.val(_this.$pwd.val());
                _this.$pwd1.attr('name', 'password').show();
                _this.$pwd.removeAttr('name').hide();
                if (!_this.$pwd1.val()) {
                    _this.$pwd1.next('.inputTip').show();
                }
                _this.$pwd.next('.inputTip').hide();
            }
            $(this).removeClass(type == 'text' ? 'pwdBtn' : 'pwdBtnShow');
            $(this).addClass(type == 'text' ? 'pwdBtnShow' : 'pwdBtn');
        };
        $('#pwdBtn').click(function () {
            if ($(this).hasClass('pwdBtn')) {
                _createPwd.call(this, 'text');
            } else {
                _createPwd.call(this, 'password');
            }
        });
    },
    initValidate: function () {
        var _this = this;
        this.$form.validate($.extend(util.validate, {
            submitHandler: function () {
                var data = CountryCode.getFormData(_this.$form)

                data['phone'] = '00' + ($('#cycode').val() - 0)  + ':' + data['phone']
                data['vCodeTypeValue'] = '10'
                data['vcode'] = $('#kapkey').val()

				var kk = cryPP.generateMix();
                data['password'] = cryPP.excutePP(data['password'], kk);

                $.ajax({
                    type: "post",
                    url: registerUrl,
                    data: data,
                    dataType: "json",
					beforeSend: function(request) {
                        request.setRequestHeader("CryKK-Mix", kk);
                    },
                    success: function (result) {
                        result = util.getData(result, false, function(mes, code) {
                            if (util.addTipsShowMsg("tips-show", mes)) {
                                return;
                            }
                        });
                        if (result == null)return;
                        if (result) {

                            // util.doAsyncPost(accountLoginUrl, function (r) {
                            //     r = util.getData(r);
                            //     if (r == null)return;
                            //     location.href = r;
                            // }, {account: _this.$phone.val(), password: $('input[name=password]').val(), appuri: $('#appuri').val(), useruri: $('#useruri').val(), service: "unionlogin", sid: $('#sid').val()});

                            //注册完直接登录
                            var loginUrl = directLoginUrl+'?service='+$('#service').val()+'&sid='+$('#sid').val()+'&appuri='+$('#appuri').val()+'&useruri='+$('#useruri').val();
                            window.location.href = loginUrl;

//							var kk = cryPP.generateMix();
//							var password = cryPP.excutePP($('input[name=password]').val(), kk);

//                            var _s = document.createElement('script');
//                                _s.type = "text/javascript";
//                                _s.src = accountLoginUrl_jsonp+'?service='+$('#service').val()+'&account='+ '00' + ($('#cycode').val() - 0)  + ':' +_this.$phone.val()+'&password='+password+'&sid='+$('#sid').val()+'&appuri='+$('#appuri').val()+'&useruri='+$('#useruri').val()+'&cryKK='+kk;
//                            document.getElementsByTagName('head')[0].appendChild(_s);
                        }
                    },
                    error: function (result) {
//                        nAlert("Network error！", "Alert");
                        util.addTipsShowMsg("tips-show", "Network error");
                        $(".alertDialogMain").css("border", "")
                    }
                });
            },
            showErrors: function(errorMap, errorList) {
                var defShowErr = this.defaultShowErrors
                var phoneMsg = errorMap['phone']
                var kapkeyMsg = errorMap['kapkey']
                var passwordMsg = errorMap['password']

                if (phoneMsg == "Please enter the mobile number") {
                     util.addTipsShowMsg("tips-show", "Please enter complete registration information");
                     delete errorMap['phone']
                     clickSubmit = 1;
                     return false;
                 } else if (kapkeyMsg == "Please fill in the verification code") {
                     util.addTipsShowMsg("tips-show", "Please enter complete registration information");
                     delete errorMap['kapkey']
                     clickSubmit = 1;
                     return false;
                 } else if(passwordMsg == "The password cannot be empty") {
                    util.addTipsShowMsg("tips-show", "Please enter complete registration information");
                    delete errorMap['password']
                    clickSubmit = 1;
                    return false;
                 }

                if(phoneMsg) {
                    _this.$cycodeBox.addClass('error')
                    if(!$('#err-tips-phone').length)
                    	$('<span id="err-tips-phone" for="phone" class="error">'+phoneMsg+'</span>').insertAfter(_this.$cycodeBox)
                    delete errorMap['phone']
                }

                defShowErr.call(this, errorMap, errorList)
            },
            rules: util.createRule({phone: {zdiyRemote: validPhoneUrl}, password: null, kapkey: null}),
            messages: util.createMes({phone: {zdiyRemote: function(){
            	var u = 'https://login.flyme.cn/sso';
            	var u2 = 'https://i.flyme.cn/uc/webjsp/member/detail&sid=&service=unionlogin&autodirct=true';
            	if(isNotInChina) {
            		u = u.replace(/\.flyme\.cn/, '.in.meizu.com');
            		u2 = u2.replace(/\.flyme\.cn/, '.in.meizu.com');
            	}
            	return 'The mobile number is taken,<a class="linkABlue" href="'+u+'?registedAccount='+$.trim($("#phone").val())+'&useruri='+u2+'">Log in</a>'
            }}, password: null, kapkey: null})
        }));
        this.$pwd1.removeAttr('name');
    }
});
//注册成功返回登陆页面
function Glogin(json){
    if(json.code==200){
        location.href = json.url;
    }else{
        util.jAlert(json.message, 'Alert');
    }
}
