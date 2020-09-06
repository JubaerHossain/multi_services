@extends('backend.master')
@section('title', @$data['edit'] ? 'Edit course' : 'Create new course')
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
                        @if (@$data['edit'])
                          @lang('language.edit')                            
                        @else
                          @lang('language.create')                            
                        @endif
                        @lang('language.course')
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
                        <a> @if (@$data['edit'])
                            @lang('language.edit')                            
                          @else
                            @lang('language.create')                            
                          @endif
                          @lang('language.course')
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (@$data['edit'])
                   {{Form::open (['route' => ['course.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'add_course', 'files' => 'true', 'method' => 'PUT'] )}}                    
                @else                    
                   {{Form::open (['route' => 'course.store' ,'class' => 'card', 'id' => 'add_course', 'enctype' => 'multipart/form-data'] )}}
                @endif
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12"> 
                                        <div class="mb-3">
                                            {{Form::label('title' , trans('language.title'), ['class' => 'form-label required'])}}
                                            {{Form::text('title',@$data['edit'] ?@$data['edit']->title : null,['class' => 'form-control', 'placeholder' => trans('language.name')])}}
                                        </div>                                       

                                        <div class="mb-3">
                                            {{Form::label('venue',trans('language.venue'), ['class'=> 'form-label required'])}}
                                            {{Form::text('venue', @$data['edit'] ? @$data['edit']->venue :null, ['class' => 'form-control', 'placeholder' => trans('language.venue')])}}
                                        </div> 
                                        <div class="mb-3">
                                            {{Form::label('status','Trainer', ['class' => 'form-label required'])}}
                                            {{Form::select('trainer_id', $data['trainer'], @$data['edit'] ? @$data['edit']->trainer_id: null,  ['class' => 'form-control select'])}}
                                        </div>  
                                        <div class="mb-3">
                                            {{Form::label('status','Mentor', ['class' => 'form-label required'])}}
                                            {{Form::select('mentor_id', $data['trainer'], @$data['edit'] ? @$data['edit']->mentor_id: null,  ['class' => 'form-control select'])}}
                                        </div> 
                                        <div class="mb-3">
                                            {{Form::label('dates',trans('language.date'), ['class'=> 'form-label required'])}}
                                            {{Form::text('date',  @$data['edit'] ? @$data['edit']->date : \Carbon\Carbon::now()->format("Y-m-d"), ['class' => 'datepicker form-control startDate' ])}}  
                                        </div>  
                                        <div class="mb-3">
                                            {{Form::label('last_dates',trans('language.last_date'), ['class'=> 'form-label required'])}}
                                            {{Form::text('last_date', @$data['edit'] ? @$data['edit']->last_date : \Carbon\Carbon::now()->format("Y-m-d"),  ['class' => 'datepicker form-control endDate'])}}
                                        </div>  
                                        <div class="mb-3">
                                            {{Form::label('class_starts',trans('language.class_start'), ['class'=> 'form-label required'])}}
                                            {{Form::text('class_start', @$data['edit'] ? @$data['edit']->class_start : \Carbon\Carbon::now()->format("Y-m-d"), ['class' => 'datepicker form-control date'])}}
                                        </div> 
                                        <div class="mb-3">
                                            {{Form::label('description',trans('language.summary'), ['class' => 'form-label required'])}}
                                            {{Form::textarea('desciption',@$data['edit'] ? @$data['edit']->desciption : null,['class' => 'form-control' , 'placeholder' => trans('language.description'), 'Description'])}}
                                        </div>                                       
                                                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12"> 

                                        <div class="mb-3">
                                            <div class="form-label">{{trans('language.price')}}</div>
                                            <div>
                                              <label class="form-check form-check-inline">
                                                <input class="form-check-input" name="price_type" type="radio" {{ @$data['edit'] ?  @$data['edit']->price_type ==  1 ? 'checked' : '' :'checked' }}  value="1">
                                                <span class="form-check-label">Paid</span>
                                              </label>
                                              <label class="form-check form-check-inline">
                                                <input name="price_type" class="form-check-input" {{ @$data['edit'] ? @$data['edit']->price_type ==  1 ? '' : 'checked' : '' }} value="0" type="radio">
                                                <span class="form-check-label">Free</span>
                                              </label>
                                            </div>
                                          </div>
                                        <input type="text" hidden id="price_type" value="{{ @$data['edit'] ? @$data['edit']->price_type ==  1 ? 1 : 0 : 1 }}">
                                        <div class="mb-3">
                                            {{Form::text('price', @$data['edit'] ? @$data['edit']->price :null, ['class' => 'form-control custom_price', 'placeholder' => trans('language.price')])}}
                                        </div> 
                                                                          
                                        <div class="mb-3">
                                            {{Form::label('no_of_class',trans('language.total_class'), ['class'=> 'form-label required'])}}
                                            {{Form::text('no_of_class', @$data['edit'] ? @$data['edit']->no_of_class :null, ['class' => 'form-control', 'placeholder' => trans('language.total_class')])}}
                                        </div> 
                                          
                                        <div class="mb-3">
                                            {{Form::label('status','Status', ['class' => 'form-label required'])}}
                                            {{Form::select('status', [1 => 'Active',0 => 'Deactive'], @$data['edit'] ? @$data['edit']->status: null,  ['class' => 'form-control select'])}}
        
                                        </div>                                    
                                        <div class="mb-3">
                                            {{Form::label('total_hour',trans('language.total_hours'), ['class' => 'form-label required'])}}
                                            {{Form::text('total_hour', @$data['edit'] ? @$data['edit']->total_hour :null, ['class' => 'form-control', 'placeholder' => trans('language.total_hours')])}}
                                        </div>                                   
                                        <div class="mb-3">
                                            {{Form::label('seat',trans('language.seat'), ['class' => 'form-label required'])}}
                                            {{Form::text('seat_available', @$data['edit'] ? @$data['edit']->seat_available :null, ['class' => 'form-control', 'placeholder' =>  trans('language.seat')])}}
                                        </div>                                    
                                        {{-- <div class="mb-3">
                                            {{Form::label('who_can_join',trans('language.who_can_join'), ['class' => 'form-label required'])}}
                                            {{Form::text('who_can_join', @$data['edit'] ? @$data['edit']->who_can_join :null, ['class' => 'form-control', 'placeholder' =>  trans('language.who_can_join')])}}
                                        </div>                                     --}}
                                        <div class="mb-3">
                                            {{Form::label('class_schedule',trans('language.class_schedule'), ['class' => 'form-label required'])}}
                                            {{Form::text('class_schedule', @$data['edit'] ? @$data['edit']->class_schedule :null, ['class' => 'form-control', 'placeholder' =>  trans('language.class_schedule')])}}
                                        </div>                                    
                                                                           
                                        <div class="mb-3">
                                            {{Form::label('image',trans('products.img'), ['class' => 'form-label required'])}}
                                            <div class="row">
                                                @if (@$data['edit'])
                                                <div class="col-lg-12 spartan_item_wrapper wow" data-spartanindexrow="6"       style="margin-bottom : 20px; ">
                                                    <div style="position: relative;">
                                                        <div class="spartan_item_loader" data-spartanindexloader="6" style=" position: absolute; width: 100%; height: 200px; background: rgba(255,255,255, 0.7); z-index: 22; text-align: center; align-items: center; margin: auto; justify-content: center; flex-direction: column; display : none; font-size : 1.7em; color: #CECECE">
                                                            <i class="fas fa-sync fa-spin"></i>
                                                        </div>
                                                            <label class="file_upload" style="width: 100%; height: 200px; border: 2px dashed #ddd; border-radius: 3px; cursor: pointer; text-align: center; overflow: hidden; padding: 5px; margin-top: 5px; margin-bottom : 5px; position : relative; display: flex; align-items: center; margin: auto; justify-content: center; flex-direction: column;">
                                                                    <a href="javascript:void(0)" data-spartanindexremove="6" style="right: 3px; top: 3px; background: rgb(237, 60, 32); border-radius: 3px; width: 30px; height: 30px; line-height: 30px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;" class="spartan_remove_rows">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                <img style="width: 64px; margin: 0px auto; vertical-align: middle; display: none;" data-spartanindexi="6" src="" class="spartan_image_placeholder">
                                                                 <p data-spartanlbldropfile="6" style="color : #5FAAE1; display: none; width : auto; ">Drop Here</p><img style="width: 100%; vertical-align: middle;" class="img_" data-spartanindeximage="6" src="{{ asset($data['edit']->image) }}">
                                                            </label> 
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="main_image"></div>
                                            </div>
                                            <label id="file-error" class="error" for="name"></label>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                <div class="mb-3">
                                    {{Form::label('outline',trans('language.outline'), ['class' => 'form-label required'])}}
                                    {{Form::textarea('outline',@$data['edit'] ? @$data['edit']->outline : null,['class' => 'form-control','id' => 'textarea',  'placeholder' => trans('language.outline'), 'summary'])}}
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="{{url('/admin/course')}}" class="btn btn-link">Back</a>
                            <button type="submit" class="btn btn-primary ml-auto">{{ @$data['edit'] ? 'Update' : 'Create' }} data</button>
                        </div>
                    </div>
                {{Form::close()}}
            </div>
        </div>
</div>

@endsection
@push('js')
<script>
$(document).ready(function () {
    CKEDITOR.replace('textarea');
});

 if ($('#price_type').val() == 0) {
        $(".custom_price").hide();
    } else {
        $(".custom_price").show();
    }
$( ".form-check" ).on( "click", function() {
    if ($("input:checked" ).val() == 0) {
        $(".custom_price").hide();
    } else {
        $(".custom_price").show();
    }
});
</script>
@endpush