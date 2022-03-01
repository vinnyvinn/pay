
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <!-- Site Title -->
    <title>Booking Invoice</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .checkout{
            font-size: 72px !important;
            background: -webkit-linear-gradient(#EEB, #003330) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="cs-container">
    <h2 class="checkout">Flexpay Checkout</h2>
    <div class="cs-invoice cs-style1">
        <form id="submitcheckout" action=" https://payment-gateway-v3-uat.azurewebsites.net/processPayment " method="POST">

        <div class="cs-invoice_in" id="download_section">
            <div class="cs-invoice_head cs-type1 cs-mb25">
                <div class="cs-invoice_left">
                    <p class="cs-invoice_number cs-primary_color cs-mb0 cs-f16"><b class="cs-primary_color">Booking Reference:</b> {{$booking->booking_reference}}</p>
                </div>
                <div class="cs-invoice_right cs-text_right">
                    <div class="cs-logo cs-mb5"><img src="/img/flex-logo.svg" alt="Logo" width="160"></div>
                </div>
            </div>
            <input type="hidden" name="token" value="{{$token}}">
                 <input type="hidden" id="merchantCode" name="merchantCode" value="6645652190">
                <input type="hidden" id="wallet" name="wallet" value="0181483852">
                <input type="hidden" id="orderReference" name="orderReference" value=" {{$booking->booking_reference}}">
                <input type="hidden" id="productType" name="productType" value="test">
                <input type="hidden" id="productDescription" name="productDescription" value="test test">
                <input type="hidden" id=" paymentTimeLimit " name="paymentTimeLimit" value="100">
                <input type="hidden" id="customerFirstName" name="customerFirstName" value="{{$booking->customer->first_name}}">
                <input type="hidden" id="customerLastName" name="customerLastName" value="{{$booking->customer->last_name}}">
                <input type="hidden" id="customerPostalCodeZip" name="customerPostalCodeZip" value="null">
                <input type="hidden" id="customerAddress" name="customerAddress" value="{{'long: '.$booking->customer->customer_longitude.' lat: '.$booking->customer->customer_latitude}}">
                <input type="hidden" id="customerEmail" name="customerEmail" value="{{$booking->user->email}}">
                <input type="hidden" id="customerPhone" name="customerPhone" value="{{$booking->customer->phone_number_1}}">
                <input type="hidden" id="extraData" name="extraData" value="test">
                <input type="hidden" id="callbackUrl" name="callbackUrl" value="{{url("api/success")}}">


            <div class="cs-table cs-style1">
                <div class="cs-round_border">
                    <div class="cs-table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="cs-width_6 cs-semi_bold cs-primary_color cs-focus_bg cs-f16" colspan="2">Customer Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cs-width_6"><b class="cs-primary_color">Name: </b>{{$booking->customer->first_name.' '.$booking->customer->last_name}}</td>
                                <td class="cs-width_6"><b class="cs-primary_color">Phone Number: </b>{{$booking->customer->phone_number_1}}</td>
                            </tr>
                            <tr>
                                <td class="cs-width_6"><b class="cs-primary_color">Booking Date: </b>{{\Carbon\Carbon::parse($booking->created_at)->format("d-m-y H:i A")}}</td>
                               <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <table>
                            <thead>
                            <tr>
                                <th class="cs-semi_bold cs-primary_color cs-focus_bg cs-f16 cs-border_top" colspan="4">Payment Information</th>
                            </tr>
                            <tr>
                                <td class="cs-width_3 cs-primary_color cs-semi_bold">Amount</td>
                                <td class="cs-width_3 cs-primary_color cs-semi_bold">Date</td>
                                <td class="cs-width_3 cs-primary_color cs-semi_bold">Booking Reference</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="cs-width_3"><input type="number" value="{{$booking->booking_price}}" name="orderAmount"  id="orderAmount" required min="0"></td>
                                <td class="cs-width_3">{{\Carbon\Carbon::parse($booking->created_at)->format("d-m-y H:i A")}}</td>
                                <td class="cs-width_3">{{$booking->booking_reference}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="cs-invoice_btns cs-hide_print">
            <a href="#" class="cs-invoice_btn cs-color1">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Make Payments</title><path d="M154.4 203.09999999999997A53.8 53.8 0 1 0 154.4 310.7 53.8 53.8 0 1 0 154.4 203.09999999999997zM318.7 107.39999999999999A53.8 53.8 0 1 0 318.7 215 53.8 53.8 0 1 0 318.7 107.39999999999999zM318.7 297A53.8 53.8 0 1 0 318.7 404.6 53.8 53.8 0 1 0 318.7 297z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
                       <span>Share</span>
            </a>
            <button id="download_btn" class="cs-invoice_btn cs-color2" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Make Payments</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
                <span>Make Payments</span>
            </button>
        </div>
        </form>

    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/jspdf.min.js"></script>
<script src="/js/html2canvas.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
