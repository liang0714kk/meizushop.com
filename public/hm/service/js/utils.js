var util = {
    tkscsrf: $('#mz_csrf_tks').val(),
    isIe: !!window.ActiveXObject || "ActiveXObject" in window,
    isPlaceholder: "placeholder" in document.createElement("input"),
    isMobile: function(){
        var mobile = /mobile|phone/i;
        var mzDesk = /x11\;/i;
        var ua = navigator.userAgent;
        return mobile.test(ua) || mzDesk.test(ua);
    }(),
    validate: {
        errorClass: "error",
        validClass: "checked",
        errorElement: "span",
        focusInvalid: false,
        onkeyup: function() {},
        errorPlacement: function(error, element) {
            if (!element.hasClass('normalInput')) {
                element = element.parent('.normalInput');
            }
            element.next('.normalTip').remove();
            element.addClass("error");
            error.insertAfter(element);
            element.css('margin-bottom', 10);
        },
        hideError: function (element) {
            if (!element.hasClass('normalInput')) {
                element.removeClass('checked');
                element = element.parent('.normalInput');
            }
            element.removeClass("error");
            element.next("span.error").remove();
            element.css('margin-bottom', 20);
            element.addClass("checked");
        }
    },
    simpleValidate: {
        errorClass: "error",
        validClass: "checked",
        errorElement: "span",
        focusInvalid: false,
        onkeyup: function() {},
        errorPlacement: function(error, element) {
            if (!element.hasClass('normalInput')) {
                element = element.parent('.normalInput');
            }
            element.next('.normalTip').remove();
            element.next('span.error').remove();
            element.addClass("error");
            error.insertAfter(element);
        },
        hideError: function(element) {
            if (!element.hasClass('normalInput')) {
                element.removeClass('checked');
                element = element.parent('.normalInput');
            }
            element.removeClass("error");
            element.next("span.error").remove();
            element.addClass("checked");
        }
    },
    rule: {
        account: {
            required: true,
            rangelength: [4, 32],
            userName: true
        },
        password: {
            required: true,
            accountChar: true,
            rangelength: [8, 16],
            accountTowType: true,
            accountNoEq: true
        },
        resetPassword: {
            required: true,
            accountChar: true,
            rangelength: [8, 16],
            accountTowType: true,
            accountNoEq: true
        },
        repeatPassword: {
            required: true,
            rangelength: [8, 16],
            equalTo: ''
        },
        kapkey: {
            required: true,
            rangelength: [6, 6]
        },
        vcode: {
            required: true,
            rangelength: [6, 6]
        },
        nickname: {
            required: true,
            nicknameLen: [2, 32],
            noEmpty: true,
            nickname: true,
            remote: ''
        },
        email: {
            pRequired: true,
            maxlength: 32,
            pEmail: true
        },
        phone: {
            pRequired: true,
            // ppDigits11: true,
            zdiyRemote: ''
        },
        localPhone: {
            pRequired: true,
            pDigits11: true
        },
        mobile: {
            required: true,
            pDigits11: true
        },
        money: {
            required: true,
            number: true,
            money: true,
            range: [0.01, 100]
        },
        accountOrPhone: {
            required: true,
            nameOrD11: true
        },
        questionOne: {
            required: true,
            nickname: true,
            answerLen: [1, 32]
        },
        questionTwo: {
            required: true,
            nickname: true,
            answerLen: [1, 32]
        },
        answer1: {
            required: true,
            nickname: true,
            answerLen: [1, 32]
        },
        answer2: {
            required: true,
            nickname: true,
            answerLen: [1, 32]
        },
        questionOneId: {
            min: 1
        },
        questionTwoId: {
            min: 1
        },
        cardId: {
            required: true,
            rangelength: [17, 17]
        },
        cardPwd: {
            required: true,
            rangelength: [18, 18]
        }
    },
    message: {
        account: {
            required: Glanguage.accountRequired,
            rangelength: Glanguage.accountRangelength,
            userName: Glanguage.accountUserName,
            remote: function(value, result){
                        var msg = result.message;
                        if(msg == ""){
                            msg = Glanguage.accountRegTips;
                        }
                        return msg;
                    }
        },
        password: {
            required: Glanguage.passwordRequired,
            accountChar: Glanguage.passwordAccountChar,
            rangelength: Glanguage.passwordRangelength,
            accountTowType: Glanguage.passwordAccountTowType,
            accountNoEq: Glanguage.passwordAccountNoEq
        },
        resetPassword: {
            required: Glanguage.passwordRequired,
            accountChar:Glanguage.passwordAccountChar,
            rangelength: Glanguage.passwordRangelength,
            accountTowType: Glanguage.passwordAccountTowType,
            accountNoEq: Glanguage.passwordAccountTowType
        },
        repeatPassword: {
            required: Glanguage.passwordRequired,
            rangelength: Glanguage.passwordRangelength,
            equalTo: Glanguage.repeatPasswordequalTo
        },
        kapkey: {
            required: Glanguage.kapkeyrequired,
            rangelength: Glanguage.kapkeyrangelength
        },
        vcode: {
            required: Glanguage.kapkeyrequired,
            rangelength: Glanguage.kapkeyrangelength
        },
        nickname: {
            required: Glanguage.nicknamerequired,
            nicknameLen: Glanguage.nicknameLen,
            noEmpty: Glanguage.nicknamenoEmpty,
            nickname: Glanguage.nickname,
            remote: Glanguage.nicknameremote
        },
        email: {
            pRequired: Glanguage.emailpRequired,
            maxlength: Glanguage.emailmaxlength,
            pEmail: Glanguage.emailpEmail,
            //todo 远程验证待添加url和自测
            remote: function(value, result){
                var msg = result.message;
                if(msg == ""){
                    msg = Glanguage.emailhasreg;
                }
                return msg;
            }
        },
        phone: {
            pRequired: Glanguage.phonepRequired,
            ppDigits11: Glanguage.phoneppDigits11,
            zdiyRemote: Glanguage.phonezdiyRemote
        },
        localPhone: {
            pRequired: Glanguage.phonepRequired,
            pDigits11: Glanguage.phonelength
        },
        mobile: {
            required: Glanguage.phonepRequired,
            pDigits11: Glanguage.phoneppDigits11
        },
        money: {
            required: Glanguage.moneyrequired,
            number: Glanguage.moneynumber,
            money:Glanguage.formaterror,
            range:Glanguage.moneyrange
        },
        accountOrPhone: {
            required: Glanguage.accountRequired,
            nameOrD11: Glanguage.formaterror
        },
        questionOne: {
            required: Glanguage.answerrequired,
            nickname: Glanguage.questionnickname,
            answerLen: Glanguage.questionanswerLen
        },
        questionTwo: {
            required: Glanguage.answerrequired,
            nickname: Glanguage.questionnickname,
            answerLen: Glanguage.questionanswerLen
        },
        answer1: {
           required: Glanguage.answerrequired,
            nickname: Glanguage.questionnickname,
            answerLen: Glanguage.questionanswerLen
        },
        answer2: {
           required: Glanguage.answerrequired,
            nickname: Glanguage.questionnickname,
            answerLen: Glanguage.questionanswerLen
        },
        questionOneId: {
            min:Glanguage.answerrequired
        },
        questionTwoId: {
            min:Glanguage.answerrequired
        },
        cardId: {
            required: Glanguage.cardIdrequired,
            rangelength: Glanguage.cardIdrangelength
        },
        cardPwd: {
            required: Glanguage.passwordRequired,
            rangelength:Glanguage.cardPwdrangelength
        }
    },
    createItem: function(src, des) {
        var r = {};
        for (var p in src) {
            if (src.hasOwnProperty(p)) {
                r[p] = des[p];
                if (src[p]) {
                    $.extend(r[p], src[p]);
                }
            }
        }
        return r;
    },
    createRule: function(json) {
        return this.createItem(json, this.rule);
    },
    createMes: function(json) {
        return this.createItem(json, this.message);
    },
    getTime: function() {
        return new Date().getTime();
    },
    getData: function(data, returnAll, errorCallback) {
        if (!data) return null;
        if (typeof(data) === 'object') {
            if (data.code !== '200') { //fail
                if (data.code === '201') { //never login
                    location.href = util.url.ucLogin;
                } else {
                    if (errorCallback) {
                        errorCallback(data.message, data.code, function() {
                            nAlert(data.message, Glanguage.tips, function() {
                                // location.reload();
                            });
                        });
                        return null;
                    }
                    if (data.code == '100000') {
                        data.message = Glanguage.serverError;
                    }
                    if (data.code == '401') {
                        util.jAlert(data.message, Glanguage.tips, function() {
                            location.reload();
                        });
                    }
                    util.jAlert(data.message, Glanguage.tips, function () {
                    	if($('#origImg').length>0){
                    		//$('#origImg').data('imgAreaSelect').update();
                    	}
                    });
                    if($('#origImg').length>0){
                    	//$('#origImg').data('imgAreaSelect').update();
                    }
                    return null;
                }
            } else {
                if (!returnAll) {
                    return data.value;
                }
                return data;
            }
        }
        return data;
    },
    getToken: function(type) {
        if (!type) {
            type = 'doSyncPost';
        }
        util[type]("/security/resubmit/token/get", function(result) {
            $("#form_resubmit_token_key").val(result.value);
        });
    },
    getUrl: function(url, isNotRandom) {
        return url + '?tkscsrf=' + this.tkscsrf + (isNotRandom ? '' : '&_' + this.getTime());
    },
    jAlert: function(m, t, f) { //对公用的jAlert进行重写，添加倒计时关闭功能
        var oldJalert = nAlert;
        var clearId = null;
        var callback = function() {
            if (f) f();
            clearInterval(clearId);
        };
        clearId = setInterval(function() {
            callback();
            window['nAlert'].$dia.close();
        }, 7000);
        oldJalert(m, t, callback);
    },
    doRequest: function(url, callback, config) { //以后使用
        var opt = {
            type: "GET",
            url: url,
            cache: false,
            success: function(d) {
                callback && $.isFunction(callback) && callback.call(null, d);
            },
            error: function(d) {
                nAlert(Glanguage.networkError, Glanguage.tips);
            },
            dataType: 'json'
        };
        $.extend(opt, config);
        return $.ajax(opt);
    },
    doSyncGet: function(url, callback, data) { //同步get
        return util.doRequest(url, callback, {
            "async": false,
            "data": data
        });
    },
    doAsyncGet: function(url, callback, data) { //异步get
        return util.doRequest(url, callback, {
            "async": true,
            "data": data
        });
    },
    doSyncPost: function(url, callback, data) { //同步post
        return util.doRequest(url, callback, {
            type: "POST",
            "async": false,
            "data": data
        });
    },
    doAsyncPost: function(url, callback, data) { //异步post
        return util.doRequest(url, callback, {
            type: "POST",
            "async": true,
            "data": data
        });
    },
    doGetByJsonp: function(url, callback, postData, jsonpCallback) {
        return util.doRequest(url, callback, {
            type: 'post',
            data: postData,
            async: true,
            dataType: "jsonp",
            jsonp: "callback", //传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
            jsonpCallback: jsonpCallback //自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
        });
    },
    getWeek: function(date) {
        return '日一二三四五六'.substr(date.getDay(), 1);
    },
    getEngMonth: function(date) {
        return ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Spt", "Oct", "Nov", "Dec"][date.getMonth()];
    },
    getEngWeek: function(date) {
        return ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"][date.getDay()];
    },
    format: function(date, format) {
        var o = {
            "M+": date.getMonth() + 1,
            "d+": date.getDate(),
            "h+": date.getHours(),
            "m+": date.getMinutes(),
            "s+": date.getSeconds()
        };

        for (var k in o) {
            if (new RegExp("(" + k + ")").test(format)) {
                format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));
            }
        }

        if (/(y+)/.test(format)) {
            format = format.replace(RegExp.$1, (date.getFullYear() + "").substr(4 - RegExp.$1.length));
        }
        if (/(w+)/.test(format)) {
            format = format.replace(RegExp.$1, util.getWeek(date));
        }
        if (/(e+)/.test(format)) {
            format = format.replace(RegExp.$1, util.getEngMonth(date));
        }
        if (/(k+)/.test(format)) {
            format = format.replace(RegExp.$1, util.getEngWeek(date));
        }
        return format;
    },
    formatFromDate: function(date, now, simple) { //精确到秒
        var zero = " 00:00:00 GMT+0800";
        var tFour = " 23:59:59 GMT+0800";
        var regStr = "k e dd yyyy"; //格式转换，格林尼治时间
        var calTime = date.getTime();
        var current = now || new Date();
        var currentStr = util.format(current, regStr);

        var format = 'yyyy/M/d hh:mm';
        if (simple) {
            format = 'yyyy/M/d';
        }
        var first = new Date(currentStr + zero);
        var end = new Date(currentStr + tFour);
        if (first.getTime() <= calTime && calTime <= end.getTime()) { //今天以内
            format = 'hh:mm';
        } else {
            var cDay = current.getDay();
            var cDate = current.getDate();
            var monday = new Date();
            var sunday = new Date();
            monday.setDate(cDate - cDay + 1);
            sunday.setDate(cDate - cDay + 7);
            first = new Date(util.format(monday, regStr) + zero);
            end = new Date(util.format(sunday, regStr) + tFour);
            if (first.getTime() <= calTime && calTime <= end.getTime()) { //本周内
                if (simple) {
                    format = '周w';
                } else {
                    format = '周w hh:mm';
                }
            } else {
                var cYear = current.getFullYear();
                var cWeek = util.getEngWeek(current);
                first = new Date(cWeek + " Jan 1 " + cYear + zero);
                end = new Date(cWeek + " Dec 31 " + cYear + tFour);
                if (first.getTime() <= calTime && calTime <= end.getTime()) { //本年内
                    if (simple) {
                        format = 'M/d';
                    } else {
                        format = 'M/d hh:mm';
                    }
                }
            }
        }
        return util.format(date, format);
    },
    formatFromMs: function(ms, nowMs, simple) {
        return util.formatFromDate(new Date(parseInt(ms)), nowMs && new Date(parseInt(nowMs)), simple);
    },
    interval: {}, //setinterval的句柄
    doWithInterval: function(callback, interval, count, data, key) {
        if (!$.isFunction(callback)) return;
        if (!key) key = flyMap.sn;
        clearInterval(util.interval[key]); //防止重复
        util.interval[key] = setInterval(function() {
            count--;
            if (count <= 0) {
                clearInterval(util.interval[key]);
                return;
            }
            callback(data);
        }, interval);
    },
    fillTemplate: function(t, opt) {
        for (var p in opt) {
            if (opt.hasOwnProperty(p)) {
                t = t.replace(new RegExp('\\${' + p + '}', 'g'), opt[p]);
            }
        }
        return t;
    },
    initPlaceholder: function($input, mes) {
        if (this.isPlaceholder && !this.isIe && !this.isMobile && !$.browser.safari) {
            $input.attr('placeholder', mes);
        } else {
            $input.removeAttr('placeholder');
            var $tip = $("<span class='inputTip'></span>");
            if ($input.is(':hidden')) {
                $tip.hide();
            }
            $tip.text(mes);
            $input.after($tip);
            $.data($input[0], 'tip', $tip);
            if ($input.val() != '') {
                this.hidePHTip($input);
            }
            this.dealPHTip($input, $tip);
        }
    },
    hidePHTip: function($input) {
        var $tip = $.data($input[0], 'tip');
        if ($tip) {
            $tip.hide();
        }
    },
    dealPHTip: function($input, $tip) {
        var _deal = function() {
            var val = $input.val();
            if (val == '') {
                $tip.show();
            } else {
                $tip.hide();
            }
        };
        $tip.click(function() {
            $input.focus();
        });
        $input.on('input propertychange', function(){
            clearTimeout(timeout);
            var timeout = setTimeout(_deal, 0);
        });
    },

    initVcode: function($o, url, count, dataFunc, validate) {
        var interval = null;
        var valid = validate;
        var _beginCount = function(count) {
            $o.addClass('invalidBtn');
            $o.text(Glanguage.send+' ' + count);
            interval = setInterval(function() {
                count--;
                $o.text(Glanguage.send+' ' + count);
                if (count <= 0) {
                    clearInterval(interval);
                    $o.text(Glanguage.getCode);
                    $.data($o[0], 'going', false);
                    if ($.data($o[0], 'isPhoneOk')) {
                        $o.removeClass('invalidBtn');
                    }
                }
            }, 1000);
        };
        function _dealCount(){
            $.data($o[0], 'going', true);
            _beginCount(count);
        }
        function _after (){
            _dealCount();
            util.doAsyncPost(url, function(result) {
                result = util.getData(result, false, function(mes, code, callback){
                    callback();
                    if(code == 200002){
                        $o.addClass('invalidBtn');
                        clearInterval(interval);
                        $o.text(Glanguage.getCode);
                    }
                });
                if (result == null) return;
            }, dataFunc());
        }
        $o.bind('click', function() {
            if ($.data($o[0], 'going') || !$.data($o[0], 'isPhoneOk')) {
                return;
            }
            if(!$.isFunction(valid)){
                _after()
            }else{
                valid(_after, _dealCount);
            }
        });
    },
    disableVcode: function($o) {
        $.data($o[0], 'isPhoneOk', false);
        $o.addClass('invalidBtn');
    },
    activeVcode: function($o) {
        $.data($o[0], 'isPhoneOk', true);
        if ($.data($o[0], 'going')) return;
        $o.removeClass('invalidBtn');
    },
    isString: function(o) {
        if (Object.prototype.toString.call(o).toLowerCase().indexOf('string') != -1) return true;
        return false;
    },
    addTips: function(elementId, errorMsg) {
        var error = $("<span class='error' for='" + elementId + "'>" + errorMsg + "</span>");
        var element = $('#' + elementId)
        if (!element.hasClass('normalInput')) {
            element = element.parent('.normalInput');
        }
        element.addClass('error');
        element.next('.normalTip').remove();
        error.insertAfter(element);
        element.css('margin-bottom', 10);
    },
    addTipsShowMsg: function(elementId, errorMsg) {
        var error = $("<div class='err_tip' id='error-outcon' style='display: block;'><div class='dis_box'><em class='icon_error'></em><span class='error-con'>" + errorMsg +"</span></div></div>");
        var element = $('#' + elementId)
        if (!element.hasClass('normalInput')) {
            element = element.parent('.normalInput');
        }
        element.next('.err_tip').remove();
        error.insertAfter(element);
    },
    removeTipsShowMsg: function(elementId) {
        var element = $('#' + elementId)
        if (!element.hasClass('normalInput')) {
            element = element.parent('.normalInput');
        }
        element.next('.err_tip').remove();
    },
    getParameter: function(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return decodeURIComponent(r[2]);
        return null;
    },
    addParameter: function(href, p) {
        if (href.indexOf('?') != -1) {
            return href + '&' + p;
        }
        return href + '?' + p;
    },
    setCookie: function(name, value) {
        var argv = arguments;
        var argc = arguments.length;
        var expires = (argc > 2) ? argv[2] : null;
        var LargeExpDate = new Date();
        if (expires != null) {
            LargeExpDate.setTime(LargeExpDate.getTime() + (expires * 1000 * 3600 * 24));
        }
        document.cookie = name + "=" + escape(value) + ((expires == null) ? "" : ("; expires=" + LargeExpDate.toGMTString()));
    },
    getCookie: function(name) {
        var search = name + "=";
        if (document.cookie.length > 0) {
            offset = document.cookie.lastIndexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = document.cookie.indexOf(";", offset);
                if (end == -1) end = document.cookie.length;
                return unescape(document.cookie.substring(offset, end));
            } else return "";
        }
    },
    deleteCookie: function(name) {
        var expdate = new Date();
        expdate.setTime(expdate.getTime() - (86400 * 1000 * 1));
        this.setCookie(name, "", expdate);
    },
    preview: function(img, selection) {
        var $img = $(img);
        var image = new Image();
        image.src = $(img).attr('src');
        image.onload = function () {
            var imgW = $img.width();
            var imgH = $img.height();
            var originalW = image.width;
            var originalH = image.height;

            if (!selection.width || !selection.height)
                return;
            var scaleX2 = 200 / selection.width;
            var scaleY2 = 200 / selection.height;

            var scaleX = 100 / selection.width;
            var scaleY = 100 / selection.height;

            var scaleX1 = 50 / selection.width;
            var scaleY1 = 50 / selection.height;

            var scaleOw = originalW / imgW;
            var scaleOh = originalH / imgH;

            $('#preview200 img').css({
                width: Math.round(scaleX2 * imgW),
                height: Math.round(scaleY2 * imgH),
                marginLeft: -Math.round(scaleX2 * selection.x1),
                marginTop: -Math.round(scaleY2 * selection.y1)
            });

            $('#preview100 img').css({
                width: Math.round(scaleX * imgW),
                height: Math.round(scaleY * imgH),
                marginLeft: -Math.round(scaleX * selection.x1),
                marginTop: -Math.round(scaleY * selection.y1)
            });

            $('#preview50 img').css({
                width: Math.round(scaleX1 * imgW),
                height: Math.round(scaleY1 * imgH),
                marginLeft: -Math.round(scaleX1 * selection.x1),
                marginTop: -Math.round(scaleY1 * selection.y1)
            });

            var tempX = Math.round(scaleOw * selection.x1);
            if (tempX < 0) {
                tempX = 0;
            }
            $('#x').val(tempX);

            var tempY = Math.round(scaleOw * selection.y1);
            if (tempY < 0) {
                tempY = 0;
            }
            $('#y').val(tempY);

            var tempW = Math.round(scaleOw * selection.width);
            if (tempW < 0) {
                tempW = 0;
            }
            $('#w').val(tempW);

            var tempH = Math.round(scaleOh * selection.height);
            if (tempH < 0) {
                tempH = 0;
            }
            $('#h').val(tempH);
        }
    },
    checkScropImg: function () {
        var w = $("#w").val();
        var h = $("#h").val();

        if (w == 0 || h == 0) {
            nAlert(Glanguage.uploadpicerror);
            return;
        }
    }
};
