@extends('backend.master')
@section('title', 'sale view')
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
                        @lang('language.sale') @lang('language.view')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/admin/sale')}}">
                            @lang('language.sale')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.sale') @lang('language.view') </a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    <div class="row row-deck row-cards">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-print-none">
                  <h3 class="card-title"> @lang('language.invoice')</h3>
                  <div class="card-options">
                    <button type="button" class="btn btn-primary" onclick="javascript:window.print();"><i class="si si-printer"></i> @lang('language.print')
                    </button>
                  </div>
                </div>
                <div class="card-body">  
                  <div class="row">
                    <div class="col-12 text-center">
                      <p class="h3"> {{ @get_setting()->site_name}}</p>
                      <address>
                        {{ @get_setting()->address}}<br>
                       <b>Phone : </b>{{ @get_setting()->phone}}<br>
                       <b>Email : </b>{{ @get_setting()->email}}<br>
                      </address>
                    </div>
                  </div>             
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 5%">@lang('language.sl')</th>
                          <th>@lang('language.product') @lang('language.name')</th>
                          <th>@lang('language.service') @lang('language.name')</th>
                          <th class="text-center" style="width: 5%">@lang('language.Quantity')</th>
                          <th class="text-center" style="width: 10%">@lang('language.sft')</th>
                          <th class="text-center" style="width: 10%">@lang('language.sale_price')</th>
                          <th class="text-right" style="width: 5%">@lang('language.amount')</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pos->sale_item as $key => $item)  
                            <tr>
                                <td class="text-center">{{ $key +1 }}</td>
                                <td>
                                    <div class="text-muted">{{ @$item->product->title }}</div>
                                </td>
                                <td>
                                   {{ @$item->product->service->title }}
                                </td>
                                <td class="text-center"> {{ @$item->qty }} </td>
                                <td class="text-center"> {{ @$item->qty_sft }}</td>
                                <td class="text-center">Tk.{{ @$item->net_unit_cost }}</td>
                                <td class="text-right">Tk.{{ @$item->subtotal  }}</td>
                            </tr>
                          @endforeach

                      <tr>
                        <td colspan="6" class="strong text-right">@lang('language.Subtotal') </td>
                        <td class="text-right">Tk.{{ (@$pos->total)  }}</td>
                      </tr>
                    </tbody></table>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection