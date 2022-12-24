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

    <!-- Main -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                            <th>PRODUCT</th>
                            <th>SIZE</th>
                            <th>COLOR</th>
                            <th>PRICE</th>
                            <th>QTY</th>
                            <th>TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            @foreach($orderDetails as $orderDetail)
                                @if($order->id == $orderDetail->order_id)

                                    <tr>
                                        <td class="first-row">{{$orderDetail->order_id}}</td>
                                        <td class="cart-pic first-row"><img style="height: 100px;"
                                        src="front/img/products/{{ $orderDetail->product_image}}" alt=""></td>
                                        <td class="cart-title first-row text-center">
                                            <h5>{{ $orderDetail->product_name }}
                                            </h5>
                                        </td>
                                        <td class="cart-title first-row text-center">
                                            {{ $orderDetail->product_size }}
                                        </td>
                                        <td class="cart-title first-row text-center">
                                            {{ $orderDetail->product_color }}
                                        </td>
                                        <td class="cart-title first-row text-center">
                                            {{ $orderDetail->amount }}
                                        </td>
                                        <td class="cart-title first-row text-center">
                                            {{ $orderDetail->qty }}
                                        </td>

                                        <td class="total-price first-row text-center">${{ $orderDetail->total }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
