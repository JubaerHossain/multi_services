@extends('backend.master')
@section('title', 'View')
@push('css')

@endpush
 @section('content') 
  <div class="container-xl mb-5">
    <!-- Page title -->
    <div class="page-header">
        <div class="card p-2">

            <div class="row flex-fill">
                <div class="col-auto">
                    <h2 class="page-title">
                        @lang('language.course') @lang('supplied.show')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/course')}}">
                            @lang('language.course')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.course') @lang('supplied.show') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards custom_course">
        <div class="col-md-12">
            <div class="card">
                <div class="row p-5">
                    <div class="col-md-8" id="suppliedhow">
                            <h2>{{@$data['show']->title}}</h2>                           
                            <hr>
                            <h3>@lang('language.price')</h3>
                            @if ($data['show']->price_type == 1)
                            Tk.{{  @$data['show']->price}}
                            @else
                               Free 
                            @endif
                            <h3>@lang('language.venue')</h3>
                                 {!!  @$data['show']->venue !!}
                            <h3>Trainer</h3>
                                 {{  @$data['show']->trainer->name }}
                            <h3>Mentor</h3>
                                 {{  @$data['show']->mentor->name }}
                                 
                            <h3>@lang('language.date')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->date ))}}
                            <h3>@lang('language.last_date')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->last_date ))}}
                            <h3>@lang('language.class_start')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->class_start ))}}
                            <h3>@lang('language.total_class')</h3>
                            {{ date('d-M-y', strtotime( @$data['show']->no_of_class ))}}
                            <h3>@lang('language.total_hours')</h3>
                            {{  @$data['show']->total_hour }}
                            <h3>@lang('language.seat')</h3>
                            {{  @$data['show']->seat_available }}
                            <h3>@lang('language.class_schedule')</h3>
                            {{  @$data['show']->class_schedule }}

                            <h3>@lang('language.status')</h3>
                            @if (@$data['show']->status == 1)
                                Active
                            @else
                            Deactive
                            @endif
                            <hr>
                    </div> 
                    <div class="col-md-4 text-center">
                        <h3>@lang('language.attach_file')</h3>
                          <img src="{{ asset($data['show']->image) }}" width="400" alt="">
                    </div>
                    <div class="col-lg-12">
                        <h3>@lang('language.description')</h3>
                        {!!  @$data['show']->desciption !!}
                        <h3>@lang('language.outline')</h3>
                        {!!  @$data['show']->outline !!}
                    </div>

                </div>  
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{url('/admin/course')}}" class="btn btn-primary ml-auto">Back</a>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>

@endsection