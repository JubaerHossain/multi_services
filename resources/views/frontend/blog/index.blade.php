@extends('frontend.layouts.app')
@section('title', 'Blogs')
@push('css')
@endpush
@section('content')
<input type="text" hidden id="_categor_id" value="{{ @$data['service']->id }}">

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blogs</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<div class="shape3"><img src="{{ asset('/front/') }}/assets/img/shape/1.svg" alt="image"></div>
</div>

<section class="blog-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row" >
                    <div class="col-lg-12" >
                        <div class="row" id="data">

                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12" id="bt">
                    </div>
                   
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input id="search" type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="button" id="btn-search"><i class="fas fa-search"></i></button>
                        </form>
                    </section>

                    <section class="widget widget_evolta_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>
                        @if (@popularPost())
                        @foreach (popularPost() as $item)   
                        <article class="item">
                            <a href="{{ route('blog_details',$item->slug) }}" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2019-06-30">{{main_date_format($item->created_at)}}</time>
                                <h4 class="title usmall"><a href="#">{{\Str::limit($item->title, 35)}}</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>
                        @endforeach
                            @endif
                    </section>


                    <section class="widget widget_recent_entries">
                        <h3 class="widget-title">Recent Posts</h3>

                        <ul>
                            @if (@recent_blog())
                            @foreach (recent_blog() as $item)                            
                            <li> <a href="{{ route('blog_details',$item->slug) }}"> {{\Str::limit($item->title, 35)}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </section>


                   
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')  
<script src="{{ asset('/front/assets/js/blog.js') }}"></script>  
@endpush