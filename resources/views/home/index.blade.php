@extends('master')
@section('title','Home')
@section('stylesheets')
<style type="text/css">
 .fmgp67{
    height: calc(100vh - 250px);
    background: url('{{URL::asset('uploads/'.$option->home_bg_img)}}') !important; 
     background-repeat: no-repeat !important;
    background-position: center center !important;
    background-size: cover !important; 
   } 
</style>

@endsection
@section('content')
 <div class="container fullwidth1">
   <div class="fmgp67">
      <h2 class="fmgp68 animated bounceInDown little_font font-size-36">{{__('home_index.in3steps')}} <br> {{__('home_index.Your-e-Visa-is-ready')}}</h2>
      <input type="hidden" name="lang_value" value="en">
      <div class="row">
         <div class="col-lg-12">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="col-lg-6 animated bounceInLeft">
                        <a href="{{route('pages.urgent.apply')}}" class="btn btn-default btn-block fmgp69x">{{__('home_index.ugevisa')}}</a>
                     </div>
                     <div class="col-lg-6 animated bounceInRight">
                        <a href="{{route('pages.standard.apply')}}" class="btn btn-default btn-block fmgp69">{{__('home_index.sevisa')}}</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3"></div>
         </div>
      </div>
      <div class="row fmgp70">
         <div class="col-lg-12 fmgp776">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
               <div class="cycles">
                  <ul class="ch-grid">
                     <li>
                        <div class="ch-item ">
                           <div class="ch-info-wrap">
                              <a href="{{route('pages.apply.now')}}">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-1">
                                       <div class="grid_text"><span class="grid_span">#1</span>{{__('home_index.apply')}}</div>
                                    </div>
                                    <div class="ch-info-back">
                                       <div class="grid_text"><span class="grid_span">#1</span>{{__('home_index.apply')}}</div>
                                       <p>{{__('home_index.apply_note')}}</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="ch-item">
                           <div class="ch-info-wrap">
                              <a href="{{route('pages.ongoing')}}">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-2">
                                       <div class="grid_text"><span class="grid_span">#2</span>{{__('home_index.makePayment')}}</div>
                                    </div>
                                    <div class="ch-info-back">
                                       <div class="grid_text"><span class="grid_span">#2</span>{{__('home_index.makePayment')}}</div>
                                       <p>{{__('home_index.makePay_note')}}</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="ch-item">
                           <div class="ch-info-wrap">
                              <a href="{{route('pages.ongoing')}}">
                                 <div class="ch-info">
                                    <div class="ch-info-front ch-img-3">
                                       <div class="grid_text"><span class="grid_span">#3</span>{{__('home_index.download')}}</div>
                                    </div>
                                    <div class="ch-info-back">
                                       <div class="grid_text"><span class="grid_span">#3</span>{{__('home_index.download')}}</div>
                                       <p>{{__('home_index.download_note')}}</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-2"></div>
         </div>
      </div>
   </div>
</div>
@endsection