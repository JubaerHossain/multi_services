@extends('frontend.layout.master')
@section('title','Shop')
@section('content')
            <!-- subheader -->
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Shop</h1>
                            <ul class="crumb">
                                <li><a href="{{ url('/')}}">Home</a></li>
                                <li class="sep">/</li>
                                <li>Shop</li>
                                @if (@$data['service'])                                    
                                    <li class="sep">/</li>
                                    <li>{{@$data['service']->title}}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->
            <input type="text" hidden id="_categor_id" value="{{ @$data['service']->id }}">
            <!-- content begin -->

            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                                <ul class="products row" id="data">

                                    
                                </ul>
                                <div class="row" id="bt">
                                </div>
                                
    
                        </div>
    
                        <div id="sidebar" class="col-md-3">
                            <div class="widget widget_search">
                                <input type='text' name='search' id='search' class="form-control" placeholder="search product">
                                <button id="btn-search" type='submit'></button>
                                <div class="clearfix"></div>
                            </div>
    
                            <div class="widget widget_top_rated_product">
                                <h4 class="text-white">Top Rated Product</h4>
                                <ul>
                                    @if (popularPost())                                        
                                    @foreach (popularPost() as $item)                                        
                                        <li>
                                            <img src="{{ asset($item->image)}}" alt="">
                                            <div class="text">
                                                {{\Str::limit($item->title, 40)}}
                                                <div class="price">Tk {{ $item->price }}</div>
                                            </div>
                                        </li>
                                    @endforeach
                                    @endif

                                   
                                </ul>
                            </div>
    
                            <div class="widget widget_category">
                                <h4 class="text-white">Product Category</h4>
                                <ul>
                                    @if (category())
                                        @foreach (category() as $key => $item)  
                                           <li><a href="{{ route('front.product_service',$key) }}">{{ $item}}</a></li>
                                        @endforeach                                        
                                    @endif
                                </ul>
                            </div>
                        </div>
    
                    </div>
                </div>
    
    
    
            </div>
    
@endsection
@push('js')  
<script src="{{ asset('/frontend/js/post.js') }}"></script>  
@endpush