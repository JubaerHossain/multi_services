@extends('backend.master')
@section('title', @$data['edit'] ? 'Edit blog' : 'Create new blog')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush
 @section('content') 
  <div class="container-xl mb-5 w-98">
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
                        @lang('language.blog')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/blog')}}">
                            @lang('language.blog') @lang('language.manage')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @if (@$data['edit'])
                            @lang('language.edit')                            
                          @else
                            @lang('language.create')                            
                          @endif
                          @lang('language.blog')
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if (@$data['edit'])
                   {{Form::open (['route' => ['blog.update', @$data['edit']->id] ,'class' => 'card', 'id' => 'add_blog', 'files' => 'true', 'method' => 'PUT'] )}}                    
                @else                    
                   {{Form::open (['route' => 'blog.store' ,'class' => 'card', 'id' => 'add_blog', 'enctype' => 'multipart/form-data'] )}}
                @endif
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 col-xl-8">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xl-12"> 
                                        <div class="mb-3">
                                            {{Form::label('name' , trans('language.title'), ['class' => 'form-label required'])}}
                                            {{Form::text('title',@$data['edit'] ?@$data['edit']->title : null,['class' => 'form-control', 'placeholder' => trans('language.title')])}}
                                        </div>
                                        
                                        
                                        <div class="mb-3">
                                            {{Form::label('description',trans('language.summary'), ['class' => 'form-label required'])}}
                                            {{Form::textarea('summary',@$data['edit'] ? @$data['edit']->summary : null,['class' => 'form-control' , 'placeholder' => trans('language.summary'), 'summary'])}}
                                        </div>
                                        <div class="mb-3">
                                            {{Form::label('description',trans('language.content'), ['class' => 'form-label required'])}}
                                            {{Form::textarea('content',@$data['edit'] ? @$data['edit']->content : null,['class' => 'form-control' ,'id' => 'textarea', 'placeholder' => trans('language.content'), 'Description'])}}
                                        </div>
                                                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xl-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-xl-12"> 
                                                                          
                                        <div class="mb-3">
                                            {{Form::label('status','Status', ['class' => 'form-label required'])}}
                                            {{Form::select('status', [1 => 'Active',0 => 'Deactive'], @$data['edit'] ? @$data['edit']->status: null,  ['class' => 'form-control select'])}}
        
                                        </div>                                   
                                        <div class="mb-3">
                                            {{Form::label('service' , trans('language.category'), ['class' => 'form-label required'])}}
                                            {{Form::select('service_id', $data['service'], @$data['edit'] ? @$data['edit']->service_id: null,  ['class' => 'form-control select'])}}
                                        </div>                             
                                        <div class="mb-3">
                                            {{Form::label('tag' , trans('language.tag'), ['class' => 'form-label required'])}}
                                            <select name="tags[]" class="form-select tag @error('tags') is-invalid @enderror" multiple="multiple" style="width: 100%" required>
                                               
                                               @if (@$data['edit'])                                                   
                                                @foreach(explode(',',$data['edit']->tags) as $item)
                                                @php
                                                    $tag =DB::table('tags')->where('name',$item)->first();
                                                @endphp
                                                    <option value="{{$tag->id}}"  selected="selected">{{$tag->name}}</option>
                                                @endforeach
                                                @endif

                                            </select>
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
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <a href="{{url('/product')}}" class="btn btn-link">Back</a>
                            <button type="submit" class="btn btn-primary ml-auto">{{ @$data['edit'] ? 'Update' : 'Create' }} data</button>
                        </div>
                    </div>
                {{Form::close()}}
            </div>
        </div>
</div>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
$(document).ready(function () {
    CKEDITOR.replace('textarea');
});
$(document).ready(function(){
        $(".tag").select2({
          tags: true,
          tokenSeparators: [',', ' '],
        ajax: { 
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: $("#url").val()+"/admin/tag-get",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
          return {
            searchTerm: params.term 
          };
          },
          processResults: function (response) {
            console.log(response);
            
            return {
              results: response
            };
          },
          formatResult: function(element){
          return element.text + ' (' + element.text + ')';
      },
          cache: true
        }
        });
      });
</script>
@endpush