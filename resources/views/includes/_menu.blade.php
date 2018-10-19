<body >
<nav class="fmgp38">
   <div class="row">
      <div class="col-lg-12">
         <div class="col-lg-1"></div>
         <div class="col-lg-10 fmgp774">
            <div class="row">
               <div class="pull-left fmgp39">
                  <div class="logo_item">
                     <a class="logo1" title="" href="{{route('home.index')}}">
                     <img src="{{URL::asset('uploads/'.$options->logo)}}" alt="Republic of Azerbaijan Electronic Visa Application System"> 
                     </a>
                     <br>
                     <!--<small class="fmgp81">In Partnership with <strong>Turizm.Az™</strong></small>-->
                  </div>
                  <div class="fmgp80 little_font2">
                     <span>{{__('head_and_menus.republic-of-az')}} <br/>{{__('head_and_menus.elc-visa-app-sys')}}</span>
                  </div>
               </div>
               <div class="pull-right fmgp41">
                 

                  <select name="lang" class="form-control fmgp42" onchange="javascript:handleSelect(this)">
                     
                     <option @if(session('locale')=='en') selected="{{Config::get('app.locale')}}" @endif value="{{route('lang.switch',['lang'=>'en'])}}"> English</option>

                     <option @if(session('locale')=='az') selected="selected" @endif value="{{route('lang.switch',['lang'=>'az'])}}" >Azerbaijan</option>

                     <option @if(session('locale')=='tr') selected="selected" @endif value="{{route('lang.switch',['lang'=>'tr'])}}" >Turkish</option>

                     <option @if(session('locale')=='ar') selected="selected" @endif value="{{route('lang.switch',['lang'=>'ar'])}}" >Arabic</option>

                     <option @if(session('locale')=='ru') selected="selected" @endif value="{{route('lang.switch',['lang'=>'ru'])}}" >Russian</option>
                  </select>
                  <script type="text/javascript">
                  function handleSelect(elm)
                  {
                  window.location = elm.value;
                  }
                  </script>


               </div>
            </div>
         </div>
         <div class="col-lg-1"></div>
      </div>
   </div>
</nav>