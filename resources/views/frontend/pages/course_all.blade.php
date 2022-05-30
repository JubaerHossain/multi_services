@extends('frontendlayouts.app')
@section('title', 'Course')
@push('css')

@endpush
@section('content')
    

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Course</li>
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
<section class="blog-area ptb-110 bg-f1f3f6">
    <div class="container">
        <div class="section-title">
            <h2>Available Courses</h2>
        </div>
    <div class="row">
       @foreach ($course as $item)    
        <div class="col-lg-4 col-md-6">       
                <div class="single-resources-box">
                    <div class="resources-image">
                        <a href="{{ route('pages.course',$item->slug)}}"><img src="{{ asset($item->image) }}" alt="image"></a>
                    </div>

                    <div class="resources-content update_card">
                        <h3><a href="{{ route('pages.course',$item->slug)}}">{{ $item->title }}</a></h3>
                     <p>{{Str::limit($item->desciption, 200, ' ...') }}</p>

                        <div class="card">
                            <div class="card-body">
                                <div class="course-time">
                                    <div class="date mb-2">
                                        <i class="far fa-calendar-alt"></i>
                                        <span class="pl-2">{{ main_date_format($item->created_at) }}</span>
                                    </div>
                                    <div class="hrs mb-2">
                                        <i class="far fa-clock"></i>
                                        <span>Total Hours: {{ $item->total_hour }}</span>
                                    </div>
                                    <div class="hrs">
                                        <i class="far fa-money-bill-alt"></i>
                                        <span>TK. {{ $item->price }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">                        
                                <a href="{{ route('pages.course',$item->slug)}}" class="btn btn-primary w-100"><i class="fa fa-eye"></i> Enroll Now</a>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
       @endforeach
       <div class="col-lg-12">
        {{ $course->links() }}
       </div>
    </div>
</div>


@endsection
@push('js')
@endpush