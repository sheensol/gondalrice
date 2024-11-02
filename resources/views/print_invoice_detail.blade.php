<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freebw.com/templates/oragnive/account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 15:08:09 GMT -->
<head>
    <title>Invoice</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.png')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">

    <style>
        #invoice{
            padding: 15px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 10px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: #6ea029
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #6ea029
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td,.invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: #6ea029;
            font-size: 1.2em
        }

        .invoice table .qty,.invoice table .total,.invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: #6ea029
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: #6ea029;
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.4em;
            border-top: 1px solid #6ea029;
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice > div:last-child {
                page-break-before: always
            }
        }

    </style>

</head>
<body class="animsition" onload="javascript:window.print();">

<!-- content page -->
<div class="bg0 p-t-95 p-b-70">
    <div class="container">
        <!-- Tab03 -->
        <div class="tab03">
            <div class="row">

                <div class="col-md-9 col-lg-10 p-b-30">
                    <!-- Tab panes -->
                    <div class="tab-content p-l-70 p-l-0-lg">

                        <div id="invoice">

                            <div class="invoice overflow-auto">
                                <div>
                                    <header>
                                        <div class="row">
                                            <div class="col">
                                                <img src="{{asset('assets/images/icons/logo-01.png')}}" alt="IMG-LOGO">
                                            </div>
                                            <div class="col company-details">
                                                <h3 class="name">Gondal Rice Mills</h3>
                                                <div>40 Km Lahore,Jaranwala Road Thabal Stop, Mandi Faiz Abad, District Nankana Sahib.Punjab Pakistan</div>
                                                <div>0300 4488496</div>
                                                <div>gondalricemills@gmail.com</div>
                                            </div>
                                        </div>
                                    </header>
                                    <main>
                                        <div class="row contacts">
                                            <div class="col invoice-to">
                                                <div class="text-gray-light">INVOICE TO:</div>
                                                <h2 class="to">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2>
                                                <div class="address">{{Auth::user()->address1}} {{Auth::user()->address2}}</div>
                                                <div class="address">{{Auth::user()->city}} {{Auth::user()->country}}</div>
                                                <div class="email">{{Auth::user()->phone}}</div>
                                            </div>
                                            <div class="col invoice-details">
                                                <h3 class="invoice-id">INVOICE</h3>
                                                <h3 class="invoice-id">{{$order->invoice_no}}</h3>
                                                <div class="date">Date of Invoice: {{date('d/m/Y',strtotime($order->updated_at))}}</div>
                                                {{--<div class="date">Due Date: 30/10/2018</div>--}}
                                            </div>
                                        </div>
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">DESCRIPTION</th>
                                                    <th class="text-right">Quantity</th>
                                                    <th class="text-right">Price</th>
                                                    <th class="text-right">TOTAL</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if($orderDetails->count() > 0)
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach($orderDetails as $key=>$orderDetail)
                                                        @php
                                                          $orderProduct  = \App\Product::where('id',$orderDetail->product_id)->first();
                                                        @endphp
                                                        @if($orderProduct)
                                                            @php
                                                                $total = $total + ($orderDetail->quantity * $orderProduct->price);
                                                            @endphp

                                                            <tr>
                                                                <td class="no">{{str_pad($key+1,2,'0',STR_PAD_LEFT)}}</td>
                                                                <td class="text-left"><h3>{{$orderProduct->name}}</h3>
                                                                    Weight: {{$orderProduct->weight}}, Country of Origin: {{$orderProduct->country_origin}}, Quality: {{$orderProduct->quality}}
                                                                    </td>
                                                                <td class="unit">{{$orderDetail->quantity}}</td>
                                                                <td class="qty">{{session('currency')}} {{$orderProduct->price}}</td>
                                                                <td class="total">{{session('currency')}} {{$orderDetail->quantity * $orderProduct->price}}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                {{--<tr>
                                                    <td class="no">02</td>
                                                    <td class="text-left"><h3>Non Basmati 386 Rice</h3>Developing a Content Management System-based Website</td>
                                                    <td class="unit">3Kg</td>
                                                    <td class="qty">130</td>
                                                    <td class="total">390:00</td>
                                                </tr>--}}

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">SUBTOTAL</td>
                                                    <td>{{session('currency')}} {{$total}}</td>
                                                </tr>
                                                {{--<tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">TAX 17%</td>
                                                    <td>172.00</td>
                                                </tr>--}}
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">GRAND TOTAL</td>
                                                    <td>{{session('currency')}} {{$total}}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="thanks">Thank you!</div>
                                        <div class="notices">
                                            <div>NOTICE:</div>
                                            <div class="notice">We are offering free delivery in Lahore only within 15 km radius from the located shop.</div>
                                        </div>
                                    </main>
                                    <footer>
                                        Invoice was created on a computer and is valid without the signature and seal.
                                    </footer>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

<!-- Mirrored from freebw.com/templates/oragnive/account-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 15:08:09 GMT -->
</html>
