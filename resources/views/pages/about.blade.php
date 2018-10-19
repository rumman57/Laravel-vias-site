@extends('master')
@section('title','About')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->about_bg_img)}}') !important;--}}
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
         <h1 class="fmgp53">{{__('about.ab')}}</h1>
      </div>
      <div class="row fmgp52">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb fmgp765 animated bounceIn">
                  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                     <span itemprop="name">Home Page</span>
                     </a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{route('pages.about')}}" class="fmgp764">
                     <span itemprop="name">About</span>
                     </a>
                     <meta itemprop="position" content="2" />
                  </li>
               </ul>
               <div class="about_content animated bounceInUp">
                 {!!__('about.about')!!}
               </div>
            </div>
            <div class="col-lg-1"></div>
         </div>
      </div>
   </div>
</div>
@endsection