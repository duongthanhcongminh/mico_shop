@extends('front.layout.master')

@section('title','Blog')

@section('body')

    <!--Breadcrumb -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "index.html">Home</a>
                <span>Blogs</span>

            </div>
        </div>
    </div>
</div>

<!-- Banner Header -->
<div id = "banner" style = "background-image: url(img/blog/banner-getinsp.jpg)">
    <div id = "banner-text">
        <h2>Get Inspired</h2>
    </div>
</div>

<!-- Body -->
    <div class = "container">
        <section class="blog1">
            <div id="tittle1">
                <h6>{{$blog->category}}</h6>
                <a href = "blogdetail02.html"><h3>{{$blog->title}} </h3></a>
                <p>{{$blog->subtitle}}</p>
                <h6 class = "date">{{$blog->created_at}}</h6>
            </div>
            <div class = "row content1">
                <div class = "col-lg-12">
                    <p>
                        {{$blog->content}}
                    </p>

                </div>
            </div>
        </section>

    </div>

@endsection
