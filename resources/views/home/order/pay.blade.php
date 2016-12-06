@extends('home.layout')
@section('content')

 <div class="payment">
        <div class="mzcontainer">
            <div class="order-header">
                <div class="order-header-title">
                    在线支付
                </div>
                <ul class="order-header-bread">
                    <li class="order-header-bread-block active">确认订单</li>
                    <li class="order-header-bread-block active">在线支付</li>
                    <li class="order-header-bread-block">完成</li>
                </ul>
            </div>
            <div class="payment-body">
                    <div class="payment-info clearfix">
                        <i class="order-font payment-success"></i>
                        <div class="payment-info-content">
                            <div class="payment-info-title">
                                订单提交成功，应付金额
                                <span class="payment-info-total">{{$data['total'] or $data2 -> total}}</span>
                            </div>
                            <p class="payment-info-tips">该宝贝为付款减库存,拍下并不代表购买成功哦。请您尽快付款，付款后我们将会尽快安排发货。</p>
                            <p class="payment-info-desc">订单号：{{$data['no'] or $data2 -> no}}&nbsp;&nbsp;&nbsp;&nbsp;
                                请您在提交订单后 <span class="payment-info-time" id="paymentInfoTime"> 23时59分42秒 </span>内完成支付，否则订单会自动取消
                            </p>
                            <div class="payment-info-bottom">
                                    <p class="payment-info-row">
                                        <span class="payment-info-label">商品：</span>
                                        <span class="payment-info-product">{{$request -> name or $data2 -> goodname}} {{$request -> net or $data2 -> net}} {{$request -> color or $data2 -> color}} {{$request -> rom or $data2 -> rom}} X {{$data['num'] or $data2 -> num}}
                                            &nbsp;&nbsp;&nbsp;&nbsp;</span>
                                    </p>
                                <p class="payment-info-row">
                                    <span class="payment-info-label">收货地址：</span>
                                    <span> {{$data['adder'] or $data2 -> adder}} {{$data['name'] or $data2 -> name}}(收) {{$data['phone'] or $data2 -> phone}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="payment-tools">
                    <div class="mz-tab" id="mzTab">
                        <ul class="mz-tab-handlers">
                                <li class="mz-tab-handler active" data-type="bank">在线支付</li>
                                    <li class="mz-tab-handler" data-type="alipayCode">支付宝扫码</li>
                                <li class="mz-tab-handler" data-type="wechatCode">微信扫码</li>
                        </ul>
                        <ul class="mz-tab-panels">
                                <li class="mz-tab-panel payment-tools-banks active" id="paymentToolsBanks">
                                    <ul class="payment-tools-list clearfix">
                                                <li class="payment-tools-label huabei" data-bank="Huabei" data-third="true">
                                                    <div class="payment-tools-radio"></div>
                                                    <div class="payment-tools-img"></div>
                                                </li>
                                        <li class="payment-tools-label alipay active" data-bank="Alipay" data-third="true">
                                            <div class="payment-tools-radio"></div>
                                            <div class="payment-tools-img"></div>
                                        </li>
                                    </ul>

                                    <!-- huabei -->
                                    <div class="payment-tools-huabei" id="paymentToolsHuabei">
                                        <div class="payment-tools-huabei-header">
                                            花呗分期
                                        </div>
                                        <div class="payment-tools-huabei-content clearfix"><div class="payment-tools-huabei-choose active"><p class="payment-tools-huabei-top"><span class="payment-tools-huabei-price">408.86</span> x 3期</p><p>含手续费<span class="payment-tools-huabei-price">9.19</span>/期</p></div><div class="payment-tools-huabei-choose"><p class="payment-tools-huabei-top"><span class="payment-tools-huabei-price">208.83</span> x 6期</p><p>含手续费<span class="payment-tools-huabei-price">8.99</span>/期</p></div><div class="payment-tools-huabei-choose"><p class="payment-tools-huabei-top"><span class="payment-tools-huabei-price">107.91</span> x 12期</p><p>含手续费<span class="payment-tools-huabei-price">7.99</span>/期</p></div></div>
                                    </div>

                                        <ul class="payment-tools-list clearfix">
                                            <li class="payment-tools-label boc" data-bank="BOCB2C">
                                                <div class="payment-tools-radio"></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label ccb" data-bank="CCB">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label abc" data-bank="ABC">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label icbc" data-bank="ICBCB2C">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label comm" data-bank="COMM">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label cmb" data-bank="CMB">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label psbc" data-bank="PSBC-DEBIT">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                            <li class="payment-tools-label cib" data-bank="CIB">
                                                <div class="payment-tools-radio "></div>
                                                <div class="payment-tools-img"></div>
                                            </li>
                                        </ul>
                                    <table id="paymentToolsBanksDetail" class="payment-tools-banks-detail" cellspacing="0" cellpadding="0">
                                        <thead>
                                        <tr>
                                            <th width="150px">银行名称</th>
                                            <th width="400px">限额</th>
                                            <th width="140px">支持卡种</th>
                                            <th width="140px">客服电话</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div class="mz-btn warning xl payment-tools-submit" id="paymentToolsSubmit">立即支付
                                    </div>
                                </li>
                                    <li class="mz-tab-panel payment-tools-alipay">
                                        <iframe class="alipay-code-frame" src="./收银台-魅族商城_files/saved_resource.html" frameborder="0" id="alipayCodeFrame"></iframe>
                                    </li>
                                <li class="mz-tab-panel payment-tools-wechat">
                                    <div class="payment-tools-wechat-code" id="paymentToolsWechatCode"></div>
                                    <div class="payment-tools-wechat-line"></div>
                                    <div class="payment-tools-wechat-desc">请使用微信 - 扫一扫扫描二维码付款</div>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="paymentForm" action="https://paycenter.meizu.com/submit" method="post" target="_blank" class="payment-form">
        <!-- 支付工具 ALIPAY/WECHATPAY -->
        <input type="hidden" name="payTool" value="ALIPAY">
        <!-- 与原来的paymentWay参数一致 -->
        <input type="hidden" name="payMethod" value="Alipay">
        <input type="hidden" name="token" value="855ad2a82ace2d46f93781224e5a894b">
        <input type="hidden" name="huabei" value="3">
    </form>
@endsection