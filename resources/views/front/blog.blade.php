@extends('front.layout.master')

@section('title','Blog')

@section('body')
<!--Breadcrumb -->
<div class = "container">
    <div class = "rowr">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "index.html">Home</a>
                <span>Blogs</span>
            </div>
        </div>
    </div>
</div>

<!-- Banner Header -->
<div id = "banner" style = "background-image: url(img/blog/bannerall.png)">
    <div id = "banner-text">
        <h2>Our Blog</h2>
    </div>
</div>


<!-- Body -->
<div class = "container">
    <section class="blog">
        @foreach($blogs as $blog)
        <div class = "row blog-title">
            <div class = "col-lg-5 blog-image">
                <img src="front/img/blog/{{ $blog->image }}" style="height: 300px; width: 180px;">
            </div>
            <div class = "col-lg-7">
                <div>
                    <h6>{{$blog->category}}</h6>
                </div>
                <div>
                    <a href = "blogdetail/{{$blog->id}}"><h3>{{$blog->title}}</h3></a>
                </div>
                <div>
                    <p>{{$blog->subtitle}}</p>
                </div>
                <div>
                    <h6 class = "date">{{$blog->created_at}}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </section>
{{--    <div class="d-flex card-footer justify-content-center align-items-center">--}}
{{--        {{ $blogs->links() }}--}}
{{--    </div>--}}
</div>

@endsection
