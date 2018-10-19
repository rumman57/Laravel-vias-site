@extends('master')
@section('title','General Conditions')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->gc_bg_img)}}') !important;--}}
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
   <!-- GET INFORMATION -->
   <div class="newpage">
      <div class="newpageheader">
         <h1 class="fmgp53">{!! __('gc.gc') !!}</h1>
      </div>
      <div class="row fmgp52">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <ul itemscope itemtype="" class="breadcrumb fmgp765 fmgp777 animated bounceIn">
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                     <span itemprop="name">Home Page</span>
                     </a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('pages.generalconditions')}}" class="fmgp764">
                     <span itemprop="name">General Conditions</span>
                     </a>
                     <meta itemprop="position" content="2" />
                  </li>
               </ul>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="information_content">
                        <div class="information_content_item animated bounceInRight"  >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-1" style="padding:0px;margin-left: -54px;">
                                    <span class="number1"></span>
                                 </div>
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                      {!! __('gc.firstPoint') !!}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="information_content_item animated bounceInLeft"  >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                      {!! __('gc.secondPoint') !!}
                                    </div>
                                 </div>
                                 <div class="col-lg-1" style="padding:0px;padding-left: 42px;">
                                    <span class="number2"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="information_content_item animated bounceInRight"  >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-1" style="padding:0px;margin-left: -54px;">
                                    <span class="number3"></span>
                                 </div>
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                      {!! __('gc.thirdpoint') !!}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="information_content_item animated bounceInLeft"  >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                       {!! __('gc.fourthPoint') !!}
                                    </div>
                                 </div>
                                 <div class="col-lg-1" style="padding:0px;padding-left: 42px;">
                                    <span class="number4"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="information_content_item animated bounceInRight"  >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-1" style="padding:0px;margin-left: -54px;">
                                    <span class="number5"></span>
                                 </div>
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                       {!! __('gc.fifthpoint') !!}
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="information_content_item animated bounceInLeft" style="display:none" >
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="col-lg-11">
                                    <div class="vertical_class1">
                                       <p></p>
                                    </div>
                                 </div>
                                 <div class="col-lg-1" style="padding:0px;padding-left: 42px;">
                                    <span class="number6"></span>
                                 </div>
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
      <div class="row fmgp58">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <div class="row formgroup9">
                  <div class="col-lg-6">
                     <a href="{{route('pages.faq')}}" class="btn btn-default btn-block"><strong>{!! __('gc.gmoreinformation') !!}</strong></a>
                  </div>
                  <div class="col-lg-6">
                     <a href="{{route('pages.apply.now')}}" class="btn btn-success btn-block"><strong>{!! __('gc.applynow') !!}</strong></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-1"></div>
         </div>
      </div>
   </div>
   <!-- GET INFORMATION -->
</div>
@endsection