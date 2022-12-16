@extends('front.layout.master')

@section('title','Checkout')

@section('body')
                                                    <!-- Body -->
<!--Breadcrumb -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "/">Home</a>
                <span>Check out</span>
            </div>
        </div>
    </div>
</div>

<!-- Main -->

<section class = "checkout">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-6 main-info order-2 order-lg-1">
                <h2 class="mb-5">Delivery Information</h2>

                <form method="post" action="">
                    @csrf
                <div class = "row">
                    <div class = "col-lg-12 input-all">
                        <label class="font-weight-bold">First Name*</label>
                        <div class = "input-form">
                            <input type="text" placeholder="First Name" name="name" value="{{Auth::user()->name ?? ''}}">
                        </div>
                    </div>
{{--                    <div class="col-lg-6 input-all">--}}
{{--                        <label class="font-weight-bold">Last Name*</label>--}}
{{--                        <div class = "input-form">--}}
{{--                            <input type="text" placeholder="Last Name" value="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                    <div class = "row">
                        <div class = "col-lg-6 input-all">
                            <label class="font-weight-bold">Email*</label>
                            <div class = "input-form">
                                <input type="text" placeholder="Email" name="email" value="{{Auth::user()->email ?? ''}}">
                            </div>
                        </div>
                        <div class="col-lg-6 input-all">
                            <label class="font-weight-bold">Phone*</label>
                            <div class = "input-form">
                                <input type="text" placeholder="Phone*" name="phone" value="{{Auth::user()->phone ?? ''}}">
                            </div>
                        </div>
                    </div>
                <div class = "row">
                    <div class="col-lg-12 input-all">
                        <label class="font-weight-bold">Company Name</label>
                        <div class = "input-form">
                            <input type="text" placeholder="Company Name" name="company_name" value="{{Auth::user()->company_name ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-6 input-all">
                        <label class="font-weight-bold">Country*</label>
                        <div class = "input-form">
                            <input type="text" placeholder="Country" name="country" value="{{Auth::user()->country ?? ''}}">
                        </div>
                    </div>

                    <div class = "col-lg-6 input-all">
                        <label class="font-weight-bold">Town/City*</label>
                        <div class = "input-form">
                            <input type="text" placeholder="Town/City" name="town_city" value="{{Auth::user()->town_city ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-lg-12 input-all">
                        <label class="font-weight-bold">Street Address*</label>
                        <div class = "input-form">
                            <input type="text" placeholder="Street Address" name="street_address" value="{{Auth::user()->street_address ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-lg-12 input-all">
                        <label class="font-weight-bold">Postcode/Zip</label>
                        <div class = "input-form">
                            <input type="text" placeholder="Postcode/Zip" name="postcode_zip" value="{{Auth::user()->postcode_zip ?? ''}}">
                        </div>
                    </div>
                </div>

                <h6 class="mt-3">Payment method &nbsp;&nbsp;<i class="fa fa-lock"></i></h6>
                <div class = "method" id = "method1">
                    <input type="radio" name="payment_type" id = "cash" value = "COD">
                    <label class="radio-container cashLabel"> Cash on delivery (COD)</label>
                </div>
                <div class = "method" id = "method2">
                    <input type="radio" name="payment_type" id = "vnpay" value = "VNPAY">
                    <label class="radio-container"> VN PAY</label>
                </div>

                <div class = "input-checkbox">
                    <input type = "checkbox" id = "cc13" onblur = "checkdelivery();">
                    <p>I agree to <a href = "terms.html">Terms and Conditions</a>.
                    See <a href = "terms.html">Privacy and Cookie Policy</a> for information on how we use the information
                    you provide to us.</p>
                </div>

                <div class = " row buttons">
                    <div class = "col-lg-6">
                        <button class = "backtocart"><a href = "./cart">BACK TO CART</a></button>
                    </div>
                    <div class = "col-lg-6">
                        <button class = "placeorder" type = "submit"><a>PLACE MY ORDER</a></button>
                    </div>
                </div>
                </form>
            </div>

            <div class = "col-lg-6 main-info order-1 order-lg-2">
                <h2 class="mb-5"> Your Order</h2>

                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                            <th>PRODUCT NAME</th>
                            <th>SIZE</th>
                            <th>COLOR</th>
                            <th>PRICE</th>
                            <th>QTY</th>
                            <th>TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td class="first-row">
                                    <p>{{ $item->product_name }}</p>
                                </td>
                                <td class="first-row">
                                    <p>{{ $item->product_size }}</p>
                                </td>
                                <td class="first-row">
                                    <p>{{ $item->product_color }}</p>
                                </td>
                                <td class="p-price first-row">
                                    <p>${{ number_format($item->product_price,2) }}</p>
                                </td>
                                <td class="p-price first-row">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p> {{ $item->qty }}</p>
                                    </div>
                                </td>
                                <td class="total-price first-row">
                                    <p>${{ number_format($item->total,2) }}</p>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="first-row">
                                    <p>Subtotal</p>
                                </td>
                                <td class="first-row">
                                    <p>${{ number_format($subtotal,2) }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="first-row">
                                    <p>Total</p>
                                </td>
                                <td class="first-row">
                                    <p>${{ number_format($total,2) }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Vision -->

@endsection
