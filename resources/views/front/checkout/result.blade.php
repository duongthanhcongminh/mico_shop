@extends('front.layout.master')

@section('title','Result')

@section('body')
                                                    <!-- Body -->
<!--Breadcrumb -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "/">Home</a>
                <a href = "/checkout">Check out</a>
                <span>Result</span>
            </div>
        </div>
    </div>
</div>

<!-- Main -->

<section class = "checkout">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-12">
                <p>{{$notification}}</p>
                <a href="./" class="primary-btn mt-5"> Continue shopping</a>
            </div>
        </div>
    </div>
</section>

@endsection
