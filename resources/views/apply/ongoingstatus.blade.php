@extends('master')
@section('title','Ongoing Application Status')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->ongoing_bg_img)}}') !important;--}}
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 250px;
    padding-top: 50px;
  }
  .commentsitem {
    border: 1px solid #00C0A6 !important;;
}
.fmgp765 {
    background-color: #00C0A6 !important;;
}
.country_passport_info {
    border: 1px solid #00C0A6 !important;;
}
</style>

@endsection
@section('content')
<div class="container fullwidth1">
<div class="newpage">
<div class="newpageheader">
   <h1 class="fmgp53">{{__('ongoingstatus.ongoing_application')}}</h1>
</div>
<div class="row fmgp52">
   <div class="col-lg-12">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
         <ul class="breadcrumb fmgp765 animated bounceIn">
            <li><a href="{{route('home.index')}}" class="fmgp764">{{__('ongoingstatus.homepage')}}</a></li>
            <li><a href="#" class="fmgp764">{{__('ongoingstatus.visa_payment')}}</a></li>
         </ul>
         <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-1">
                           <i class="fa fa-check-circle fa-3x text-center fmgpr45"></i>
                        </div>
                        <div class="col-lg-10">
                           <span class="fmgpr46">{!!__('ongoingstatus.app_succ_activated')!!}</span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 padding_left_0 colstyle6">
                        <form method="POST" action="#">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th class="fmgpr49">{!!__('ongoingstatus.Service')!!}</th>
                                    <th class="fmgpr49">{!!__('ongoingstatus.Summary')!!}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><span class="fmgpr50">{{$apply->applicant}} x eVisa Government fee + Service Fee + Taxes + Bank Commission</span></td>
                                    <td><span class="fmgpr50">{{$apply->totalusd}} USD</span></td>
                                 </tr>
                                 <tr>
                                    <td colspan="2" align="right"><strong>Total: {{$apply->totalusd}} USD</strong></td>
                                 </tr>
                                 <tr>
                                    <td colspan="2">{!!__('ongoingstatus.see_evissaz_bank_statement')!!} </td>
                                 </tr>
                              </tbody>
                           </table>
                           <input type="hidden" name="currency" value="">
                           <div class="text-center">
                              <button type="submit" name="activate_payment_submit" class="btn btn-success btn-lg save_continue7">{!!__('ongoingstatus.make_payment')!!}</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 padding_right_0">
                  <div class="commentsitem11">
                     <div class="text-center"><span class="fmgp55">{!!__('ongoingstatus.info_note')!!}</span></div>
                     <div class="fmgp82">
                        <span>
                        {!!__('ongoingstatus.info_note_first')!!}
                           
                           <p style="color:#ff0000; font-weight: bold;">{!!__('ongoingstatus.attention')!!}!</p>
                           
                           {!!__('ongoingstatus.attention_info')!!}
                           
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-1"></div>
         </div>
      </div>
   </div>
</div>
@endsection