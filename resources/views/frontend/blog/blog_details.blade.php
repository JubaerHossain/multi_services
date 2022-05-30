@extends('frontendlayouts.app')
@section('title', 'Blog Details')
@push('css')
@endpush
@section('content')
<input type="text" hidden id="_categor_id" value="{{ @$data['blog']->service }}">

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
<div class="shape3"><img src="{{ asset('public/front/') }}/assets/img/shape/1.svg" alt="image"></div>
</div>

<section class="blog-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    <div class="article-image">
                        <img src="{{ asset($data->image) }}" alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span>Posted On:</span> <a href="#">{{main_date_format($data->created_at)}}</a></li>
                                <li><span>Posted By:</span> <a href="#">{{ $data->user->name }}</a></li>
                            </ul>
                        </div>

                        <h3>{{ $data->title }}</h3>
                               {!! $data->content !!}
                        
                    </div>

                    {{-- <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i></span>

                            <a href="#">Fashion</a>,
                            <a href="#">Games</a>,
                            <a href="#">Travel</a>
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>

               
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    

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
