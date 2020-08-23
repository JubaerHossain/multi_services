@extends('backend.master')
@section('title', 'Invoice view')
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
                        @lang('language.invoice') @lang('language.view')
                    </h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <div class="d-flex">
                        <a href="{{url('/pos')}}">
                            @lang('language.sale')
                        </a>
                        <a href="javascript:;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><polyline points="9 6 15 12 9 18"></polyline></svg>
                        </a>
                        <a> @lang('language.invoice') @lang('language.view') </a>
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
                    <button type="button" class="btn btn-primary" onclick="javascript:window.print();"><i class="si si-printer"></i> @lang('language.print') @lang('language.invoice')
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <p class="h3">@lang('language.billing_from')</p>
                      <address>
                        {{ @get_setting()->site_name}}<br>
                        {{ @get_setting()->address}}<br>
                       <b>Phone : </b>{{ @get_setting()->phone}}<br>
                       <b>Email : </b>{{ @get_setting()->email}}<br>
                      </address>
                    </div>
                    <div class="col-6 text-right">
                      <p class="h3">@lang('language.invoice')</p>
                      <address>
                        <h4>@lang('language.invoice') @lang('language.no') : {{ @$purchase->invoice}}</h4>
                        <h4>@lang('language.purchase') @lang('language.date') : {{ date('d-M-Y', strtotime($purchase->date)) }}</h4>
                      </address>
                      <p class="h3">@lang('language.billing_to')</p>                      
                        <address>
                            {{ @$purchase->customer->name }}<br>
                            {{ @$purchase->customer->address}}<br>
                           <b>Phone : </b>{{ @$purchase->customer->phone}}<br>
                           <b>Email : </b>{{ @$purchase->customer->email}}<br>
                          </address>
                    </div>
                    <div class="col-12 my-5">
                      
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 5%">@lang('language.sl')</th>
                          <th>@lang('language.medicine') @lang('language.name')</th>
                          <th class="text-center" style="width: 5%">@lang('language.Quantity')</th>
                          <th class="text-center" style="width: 5%">@lang('language.Discount')</th>
                          <th class="text-center" style="width: 10%">@lang('language.sale_price')</th>
                          <th class="text-right" style="width: 5%">@lang('language.amount')</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($purchase->sale_item as $key => $item)                              
                            <tr>
                                <td class="text-center">{{ $key +1 }}</td>
                                <td>
                                    <div class="text-muted">{{ @$item->product->title }}</div>
                                </td>
                                <td class="text-center"> {{ @$item->qty }} </td>
                                <td class="text-center"> {{ currency_symbol() }}{{ @$item->discount }}</td>
                                <td class="text-center">{{ currency_symbol() }} {{ @$item->net_unit_cost }}</td>
                                <td class="text-right">{{ currency_symbol() }} {{ (@$item->net_unit_cost * @$item->qty) - @$item->discount  }}</td>
                            </tr>
                          @endforeach

                      <tr>
                        <td colspan="5" class="strong text-right">@lang('language.Subtotal') </td>
                        <td class="text-right">{{ currency_symbol() }} {{ (@$purchase->total_cost - @$purchase->total_tax)  }}</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="strong text-right">@lang('language.Tax')</td>
                        <td class="text-right">{{ currency_symbol() }} {{ @$purchase->total_tax }}</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="strong text-right">@lang('language.grand_total')</td>
                        <td class="text-right">{{ currency_symbol() }} {{ @$purchase->grand_total }}</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="strong text-right">@lang('language.paid')</td>
                        <td class="text-right">{{ currency_symbol() }} {{ @$purchase->paid_amount }}</td>
                      </tr>
                      <tr>
                        <td colspan="5" class="font-weight-bold text-uppercase text-right">@lang('language.dues')</td>
                        <td class="font-weight-bold text-right">{{ currency_symbol() }} {{  @$purchase->grand_total - @$purchase->paid_amount  }}</td>
                      </tr>
                    </tbody></table>
                  </div>
                  <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with
                    you again!</p>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection