@extends('master')
@section('title','Testimonial')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->tmn_bg_img)}}') !important;--}}
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
         <h1 class="fmgp53">Testimonials</h1>
      </div>
      <div class="row fmgp52">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <ul itemscope itemtype="" class="breadcrumb fmgp765 fmgp779 animated bounceIn">
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                     <span itemprop="name">Home Page</span>
                     </a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('pages.testimonials')}}" class="fmgp764">
                     <span itemprop="name">Testimonials</span>
                     </a>
                     <meta itemprop="position" content="2" />
                  </li>
               </ul>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="commentscontent animated bounceInUp" itemscope itemtype="http://schema.org/UserComments">
                        <div class="commentsitem3">
                           <div class="row rowstyle2">
                              <div class="col-lg-12 colstyle5">
                                 <div class="col-lg-10 fmgp781 colstyle5">
                                    <div itemprop="name" class="author">M.Dementjev<span class="spanstyle4">   (Estonia)</span></div>
                                    <div class="row fmgp782">
                                       <span itemprop="commentText"><i class="fa fa-quote-left icolor1"></i>   All worked out just fine and fast!  <i class="fa fa-quote-right icolor1"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-lg-2 text-center colstyle5">
                                    <span itemprop="commentTime">24-Apr-2018</span><br>
                                    <span>Rated Excellent</span><br>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="commentsitem3">
                           <div class="row rowstyle2">
                              <div class="col-lg-12 colstyle5">
                                 <div class="col-lg-10 fmgp781 colstyle5">
                                    <div itemprop="name" class="author">C.Naismith<span class="spanstyle4"> (United Kingdom)</span></div>
                                    <div class="row fmgp782">
                                       <span itemprop="commentText"><i class="fa fa-quote-left icolor1"></i>    Very good system, user friendly    <i class="fa fa-quote-right icolor1"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-lg-2 text-center colstyle5">
                                    <span itemprop="commentTime">20-Apr-2018</span><br>
                                    <span>Rated Excellent</span><br>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="commentsitem3">
                           <div class="row rowstyle2">
                              <div class="col-lg-12 colstyle5">
                                 <div class="col-lg-10 fmgp781 colstyle5">
                                    <div itemprop="name" class="author">H.Nguyen<span class="spanstyle4">   (United States of America)</span></div>
                                    <div class="row fmgp782">
                                       <span itemprop="commentText"><i class="fa fa-quote-left icolor1"></i>   Very easy to use  <i class="fa fa-quote-right icolor1"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-lg-2 text-center colstyle5">
                                    <span itemprop="commentTime">13-Apr-2018</span><br>
                                    <span>Rated Excellent</span><br>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                    <i class="fa fa-star fmgp23"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="fmgp40 text-center fmgp73">
                        <i class="fa fa-spinner fa-pulse fmgp23 fa-3x fa-fw comments_loading_animation"></i>
                     </div>
                     <div class="comment_page_result"></div>
                     <div class="text-center margin-bottom-0 fmgp780">
                        <a type="button" class="btn btn-success btn-block load_comment_click" comment_page=0><strong>Load More Testimonials</strong></a>
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