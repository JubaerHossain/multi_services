@extends('backend.master')
@section('title',trans('language.pos'))
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
                      @lang('language.pos')                          
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/pos')}}">
                            @lang('language.sale') @lang('language.lists')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> 
                          @lang('language.pos')                           
                        </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
       <input type="text" hidden value="@lang('language.select_item')" id="select_item_error">
       <input type="text" hidden value="@lang('language.item_due')" id="select_item_due">
       <input type="text" hidden value="{{currency_symbol()}}" id="currency">
        <div class="row">
            <div class="col-12">  
                <div class="card">                  
                    {!! Form::open(['route' => 'pos.store', 'enctype' => 'multipart/form-data','method' => 'post', 'languages' => true, 'id' => 'pos-form']) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            {{Form::label('customer',trans('language.customer'), ['class' => 'form-label required'])}}
                                            {{Form::select('customer',$data['provider'], null, ['class' => 'form-control select'])}}
                                            <label id="customer-error" class="error" for="name"></label>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="file" class="form-label">  @lang('language.attach_file')
                                                <a href="javascript:;" class="text-reset" data-toggle-icon="help" data-toggle="tooltip" title="@lang('language.file_help')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="12" cy="12" r="9" /><line x1="12" y1="17" x2="12" y2="17.01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                                                </a>
                                            </label>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile" name="document">
                                                <label class="form-file-label" for="customFile">
                                                <span class="form-file-text">@lang('products.choose_file')...</span>
                                                <span class="form-file-button">@lang('products.browser')</span>
                                                </label>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            {{Form::label('payment_method',trans('language.payment_method'), ['class' => 'form-label required'])}}
                                            {{Form::select('payment_method',['Cash','Bank','Credit Card'],0 , ['class' => 'form-control select'])}}
                                        </div>  
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            {{Form::label('amount',trans('language.amount'), ['class' => 'form-label required'])}}
                                            {{Form::number('amount',0.00, ['class' => 'form-control'])}}
                                            <label id="amount-error" class="error" for="name"></label>

                                        </div>  
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            {{Form::label('dues',trans('language.dues'), ['class' => 'form-label required'])}}
                                            {{Form::number('dues',0.00, ['class' => 'form-control'])}}
                                            <label id="dues-error" class="error" for="name"></label>

                                        </div>  
                                    </div>
                                    
                                </div>
                                <div class="row d-none bank_select">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            {{Form::label('bank',trans('language.bank'), ['class' => 'form-label required'])}}
                                            {{Form::select('bank',@$data['bank'],null , ['class' => 'form-control select'])}}
                                            <label id="bank-error" class="error" for="name"></label>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            {{Form::label('date',trans('language.date'), ['class' => 'form-label required'])}}
                                            {{Form::text('date', \Carbon\Carbon::now()->format("Y-m-d"), ['class' => 'datepicker form-control date' ])}}  
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">                                    
                                    <div class="col-md-12 mt-3">
                                        <label class="form-label">{{trans('language.select_medicine')}}</label>
                                        <div class="search-box input-group mb-1" >
                                            <button class="btn btn-secondary"><i class="fa fa-barcode"></i></button>
                                            <input type="text" name="product_code_name" id="lims_productcodeSearch" onkeyup="PosSearch(this.value)" placeholder="@lang('language.select_medicine_name')..." class="form-control" />
                                        </div>
                                        <div id="livesearch">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        {{Form::label('file',trans('language.information_table'), ['class' => 'form-label required'])}}
                                        <div class="table-responsive mt-3">
                                            <table id="myTable" class="table table-hover order-list">
                                                <thead>
                                                    <tr>
                                                        <th>{{trans('language.name')}}</th>
                                                        <th>{{trans('language.Code')}}</th>
                                                        <th>{{trans('language.Quantity')}}</th>
                                                        <th>{{trans('language.Net Unit Cost')}}</th>
                                                        <th>{{trans('language.Discount')}}</th>
                                                        <th>{{trans('language.Tax')}}</th>
                                                        <th>{{trans('language.Subtotal')}}</th>
                                                        <th><i class="fa fa-trash"></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                <tfoot class="tfoot active">
                                                    <th colspan="2">{{trans('language.total')}}</th>
                                                    <th id="total-qty">0</th>
                                                    <th></th>
                                                    <th id="total-discount">0.00</th>
                                                    <th id="total-tax">0.00</th>
                                                    <th id="total">0.00</th>
                                                    <th><i class="fa fa-trash"></i></th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_qty" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_discount" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_tax" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_cost" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="item" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="grand_total" />
                                            <input type="hidden" name="paid_amount" value="0.00" />
                                            <input type="hidden" name="payment_status" value="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{trans('language.Note')}}</label>
                                            <textarea rows="5" class="form-control" name="note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                        <table class="table table-bordered table-condensed totals mt-5">
                            <td><strong>{{trans('language.medicine')}}</strong>
                                <span class="pull-right" id="item">0.00</span>
                            </td>
                            <td><strong>{{trans('language.total')}}</strong>
                                <span class="pull-right" id="subtotal">0.00</span>
                            </td>
                            <td><strong>{{trans('language.grand_total')}}</strong>
                                <span class="pull-right" id="grand_total">0.00</span>
                            </td>
                        </table>
                        <div class="card-footer text-right">
                            <div class="d-flex">
                                <a href="{{url('/pos')}}" class="btn btn-link">Back</a>
                                <button type="submit" class="btn btn-primary ml-auto">{{trans('language.submit')}}</button>
                            </div>
                        </div>
                    {{Form::close()}}
                    
                </div>
            </div>
        </div>
</div>

@endsection
@push('js')
<script src="{{asset('public/asset/dist/js/pos.js')}}"></script>
@endpush