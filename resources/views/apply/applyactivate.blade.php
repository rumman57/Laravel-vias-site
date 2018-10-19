@extends('master')
@section('title','Application Active')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->apply_bg_img)}}') !important;--}}
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 250px;
    padding-top: 50px;
  }
</style>

@endsection
@section('content')
<div class="container fullwidth1">
   <div class="newpage">
      <div class="newpageheader">
         <h1 class="fmgp53">{{__('applyactive.payment')}}</h1>
      </div>
      <div class="row fmgp60">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <ul class="breadcrumb fmgp765 animated bounceIn">
                  <li><a href="{{route('home.index')}}" class="fmgp764">{{__('applyactive.homePage')}}</a></li>
                  <li><a href="#" class="fmgp764">{{__('applyactive.payment')}}</a></li>
               </ul>
               <div class="col-lg-8 padding_left_0 animated bounceInUp">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-1">
                           <i class="fa fa-check-circle fa-3x text-center fmgpr45"></i>
                        </div>
                        <div class="col-lg-10">
                           <span class="fmgpr46">{{__('applyactive.refNumber')}} {{$ref}}</span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-xs-12 padding_left_0 colstyle6">
                        <form method="POST" action="#">
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th class="fmgpr49">{{__('applyactive.Service')}}</th>
                                    <th class="fmgpr49">{{__('applyactive.Summary')}}</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><span class="fmgpr50">{{$applicant}} x eVisa Government fee + Service Fee + Taxes + Bank Commission</span></td>
                                    <td><span class="fmgpr50">{{$totalusd}} USD</span></td>
                                 </tr>
                                 <tr>
                                    <td colspan="2" align="right"><strong>Total: {{$totalusd}} USD</strong></td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="text-right">
                              <button type="submit" name="activate_payment_submit" class="btn btn-success btn-lg">{{__('applyactive.makePayment')}}</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="commentsitem">
                     <div class="text-center">
                        <span class="fmgp55">{{__('applyactive.infoNote')}}</span>
                     </div>
                     <div class="fmgp82">
                        <span>
                           {!!__('applyactive.infoNoteOne')!!}
                           
                           <p style="color:#ff0000; font-weight: bold;">{{__('applyactive.attention')}}!</p>

                           {!!__('applyactive.infoNoteTwo')!!}
                           
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