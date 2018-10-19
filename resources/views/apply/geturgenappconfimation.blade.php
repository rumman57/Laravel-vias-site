@extends('master')
@section('title','Urgent Application Confirmation')
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
         <h1 class="fmgp53">{{__('urgent_apply_confirmation.new_application')}}</h1>
      </div>
      <div class="row fmgp60">
         <div class="col-lg-12">
                  <div class="modal-dialog fmgp27">

      <div class="modal-content">

         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{{__('urgent_apply_confirmation.attention')}}!</h4>
         </div>

         <div class="modal-body">
         {!! __('urgent_apply_confirmation.attention_note') !!}
            
            <a class="btn btn-success btn-block" href="{{route('apply.personalinfo')}}">{!!__('urgent_apply_confirmation.accept_continue')!!}</a>
         </div>


      </div>


   </div>
               </div>
        
               </div>
               </div>
            </div>
            <div class="col-lg-1"></div>
         </div>
      </div>
      <!-- </div> --><!-- new_content end -->
   </div>
   <!--new page end -->
</div>
<!-- container end-->
@endsection