@extends('master')
@section('title','Faq')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->faq_bg_img)}}') !important;--}}
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
      <h1 class="fmgp53">{{__('faq.fq')}}</h1>
   </div>
   <div class="row fmgp52">
<div class="col-lg-12">
   <div class="col-lg-1"></div>
   <div class="col-lg-10">
      <ul itemscope itemtype="" class="breadcrumb fmgp765 fmgp58 animated bounceIn">
         <li itemprop="itemListElement" itemscope itemtype="">
            <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
            <span itemprop="name">Home Page</span>
            </a>
            <meta itemprop="position" content="1" />
         </li>
         <li itemprop="itemListElement" itemscope itemtype="">
            <a itemscope itemtype="" itemprop="item" href="{{route('pages.faq')}}" class="fmgp764">
            <span itemprop="name">FAQ</span>
            </a>
            <meta itemprop="position" content="2" />
         </li>
      </ul>
      <div id="faq_menus">
         <div class="form-group margin-bottom-0">
            <div class="input-group">
               <input type="text" class="form-control search" placeholder="Search" name="search_faq">
               <div class="input-group-btn">
                  <button class="btn btn-default btnstyle1" type="submit"><i class="fa fa-search"></i></button>
               </div>
            </div>
         </div>
        <div class="row fmgp778">
   <div class="col-lg-12">
      <div class="faqcontent animated bounceInUp">
         <div class="row rowstyle3">
            <div class="col-lg-12 col-xs-12 col-md-12">
               <div class="panel-group list" id="faq_accordion">
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion2" href="#collapse2" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q1')!!}</span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse2" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                              <ul style="list-style-type: circle;">
                                {!!__('faq.a1')!!}
                               
                              </ul>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion3" href="#collapse3" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q2')!!}</span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse3" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                              {!!__('faq.a2')!!}
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion4" href="#collapse4" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q3')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse4" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a3')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion5" href="#collapse5" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q4')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       </i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse5" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a4')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion6" href="#collapse6" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q5')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i>       <span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse6" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a5')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion19" href="#collapse19" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q6')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse19" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a6')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion20" href="#collapse20" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q7')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i></a> <span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse20" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a7')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion21" href="#collapse21" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q8')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse21" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a8')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion23" href="#collapse23" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q9')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse23" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a9')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion24" href="#collapse24" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q10')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       </i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse24" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a10')!!}
                             
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion26" href="#collapse26" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q11')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       </i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse26" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a11')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion36" href="#collapse36" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q12')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse36" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a12')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion37" href="#collapse37" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q13')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse37" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a13')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion38" href="#collapse38" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q14')!!}</span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      </i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse38" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a14')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion40" href="#collapse40" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q15')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse40" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a15')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion41" href="#collapse41" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q16')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse41" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a16')!!}
                            
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion42" href="#collapse42" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q17')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse42" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a17')!!}
                             
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion43" href="#collapse43" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q18')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse43" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a18')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion44" href="#collapse44" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q19')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                      <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse44" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a19')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion45" href="#collapse45" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q20')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse45" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a20')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37"  >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion46" href="#collapse46" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title"> {!!__('faq.q21')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse46" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                            {!!__('faq.a21')!!}
                              
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default fmgp37" style="display:none" >
                     <div class="panel-heading btn-none accordion_click">
                        <h4 class="panel-title">
                           <div data-toggle="collapse" data-parent="#accordion51" href="#collapse51" class="collapstyle1">
                              <div class="row">
                                 <div class="col-xs-12 col-md-12 col-lg-12 fmgp789">
                                    <div class="col-xs-11 col-md-11 colstyle5">
                                       <i class="sol_icon fmgp767 fa fa-plus fa-fw fa-lg pull-left"></i>
                                       <span class="fmgp766 faq_title">{!!__('faq.q22')!!} </span>
                                    </div>
                                    <div class="col-xs-1 col-md-1 colstyle5">
                                       <i class="fa fa-link fa-lg fa-fw pull-right"></i><span><i class="sag_icon fa fa-caret-square-o-up fa-lg fa-fw pull-right"></i></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </h4>
                     </div>
                     <div id="collapse51" class="panel-collapse collapse fmgp59">
                        <div class="panel-body">
                           <span class="faq_content">
                           {!!__('faq.a22')!!}
                            
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row fmgp58">
   <div class="text-right col-lg-12">
      <a href="{{route('pages.apply.now')}}" class="btn btn-success  btn-block"><strong> {!!__('faq.applyNow')!!}</strong></a>
   </div>
</div>
</div>
</div>
<div class="col-lg-1"></div>
</div>
</div>
</div>
@endsection