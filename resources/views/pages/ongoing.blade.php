@extends('master')
@section('title','Ongoing Application')
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
</style>

@endsection
@section('content')
<div class="container fullwidth1">
  <div class="newpage">
    <div class="newpageheader">
      <h1 class="fmgp53">{{__('ongoing.ong')}}</h1>
    </div>
    <div class="row fmgp60">
      <div class="col-lg-12">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-8">
                <ul itemscope itemtype="" class="breadcrumb fmgp765 animated bounceIn">
                  <li itemprop="itemListElement" itemscope itemtype="">
                    <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                    <span itemprop="name">{{__('head_and_menus.homepage')}}</span>
                    </a>
                    <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{route('pages.ongoing')}}" class="fmgp764">
                    <span itemprop="name">{{__('ongoing.ong')}}</span>
                    </a>
                    <meta itemprop="position" content="2" />
                  </li>
                </ul>
                @include('myadmin.lib.message')
                <form class="form-horizontal animated bounceInUp" method="POST" action="{{route('apply.ongoingstatus')}}">

                  {{csrf_field()}}
                
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{__('ongoing.refno')}}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="reference_no" name="reference_no" placeholder="Enter Reference No">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{__('ongoing.securityVerification')}}</label>
                    <div class="col-sm-9">
                     <div class="g-recaptcha fmgpr12" data-sitekey="6Lfl6DAUAAAAAGNYX7QGFWGvZap328jv-WN_XDoo"></div>
                         <div id="recaptcha_widget" class="form-recaptcha">
                         </div>
                    </div>
                  </div>
                  <div class="form-group fmgp61">
                    <div class="col-lg-12">
                      <button type="submit" name="ongoing_submit" class="btn btn-success btn-block"><strong>{{__('ongoing.sandc')}}</strong></button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-4 animated bounceInRight">
                <div class="commentsitem">
                  <div class="text-center"><span class="fmgp55">{{__('ongoing.infoNote')}}</span></div>
                  <div class="fmgp82">
                    <span>
                    {!!__('ongoing.information')!!}</span>
                  </div>
                </div>
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