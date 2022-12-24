@extends('front.layout.master')

@section('title','My Order')

@section('body')

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

    <div class="checkout-section spad">
        <div class="container">
            <div action="" class="checkout-form">
                <div class = "row">
                    <div class = "col-lg-6 main-info order-2 order-lg-1">
                        <div class="checkout-content">
                            <a href="" class="content-btn">
                                Order ID
                                <b> {{ $order->id }}</b>
                            </a>
                        </div>


                        <h2 class="mb-5">Delivery Information</h2>

                        <div>
                            <div class = "row">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                                <div class = "col-lg-12 input-all">
                                    <label class="font-weight-bold">First Name*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="First Name" name="name" value="{{$order->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-lg-6 input-all">
                                    <label class="font-weight-bold">Email*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Email" name="email" value="{{$order->email ?? ''}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 input-all">
                                    <label class="font-weight-bold">Phone*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Phone*" name="phone" value="{{$order->phone ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-12 input-all">
                                    <label class="font-weight-bold">Company Name</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Company Name" name="company_name" value="{{$order->company_name ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-lg-6 input-all">
                                    <label class="font-weight-bold">Country*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Country" name="country" value="{{$order->country ?? ''}}">
                                    </div>
                                </div>

                                <div class = "col-lg-6 input-all">
                                    <label class="font-weight-bold">Town/City*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Town/City" name="town_city" value="{{$order->town_city ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class="col-lg-12 input-all">
                                    <label class="font-weight-bold">Street Address*</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Street Address" name="street_address" value="{{$order->street_address ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class = "row">
                                <div class = "col-lg-12 input-all">
                                    <label class="font-weight-bold">Postcode/Zip</label>
                                    <div class = "input-form">
                                        <input type="text" placeholder="Postcode/Zip" name="postcode_zip" value="{{$order->postcode_zip ?? ''}}">
                                    </div>
                                </div>
                            </div>

                            <h6 class="mt-3">Payment method &nbsp;&nbsp;<i class="fa fa-lock"></i></h6>
                            <div class = "method" id = "method1">
                                <input disabled type="radio" name="payment_type" id = "cash" value = "COD"
                                {{ $order->payment_type == 'COD' ? 'checked' : '' }}>
                                <label class="radio-container cashLabel"> Cash on delivery (COD)</label>
                            </div>
                            <div class = "method" id = "method2">
                                <input disabled type="radio" name="payment_type" id = "vnpay" value = "VNPAY"
                                {{ $order->payment_type == 'VNPAY' ? 'checked' : '' }}>
                                <label class="radio-container"> VN PAY</label>
                            </div>


                            <div class = " row buttons">
                                <div class = "col-lg-6">
                                    <button class = "backtocart"><a href = "#">BACK TO ORDER</a></button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class = "col-lg-6 main-info order-1 order-lg-2">
                        <div class="checkout-content">
                            <a href="" class="content-btn">
                                Order Status
                                <b> {{ \App\Utilities\Constant::$order_status[$order->status] }}</b>
                            </a>
                        </div>

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
                                @foreach($order->orderDetails as $orderDetail)
                                    <tr>
                                        <td class="first-row">
                                            <p>{{ $orderDetail->product_id }}</p>
                                        </td>
                                        <td class="first-row">
                                            <p>{{ $orderDetail->product_size }}</p>
                                        </td>
                                        <td class="first-row">
                                            <p>{{ $orderDetail->product_color }}</p>
                                        </td>
                                        <td class="p-price first-row">
                                            <p>${{ number_format($orderDetail->amount,2) }}</p>
                                        </td>
                                        <td class="p-price first-row">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p> {{ $orderDetail->qty }}</p>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">
                                            <p>${{ number_format($orderDetail->total,2) }}</p>
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
            </form>
        </div>
    </div>



@endsection
