<footer class="little_font">
   <div class="row fmgp45">
      <div class="col-lg-12">
         <div class="col-lg-1"></div>
         <div class="col-lg-10">
            <div class="row">
               <div class="col-lg-12">
                  <div class="col-lg-2 fmgp774 animated fadeInUp">
                     <div class="footer_item">
                        <div class="fmgp46">
                           <a href="{{route('pages.generalconditions')}}" class="fmgp47">{{__('head_and_menus.generel-condition')}}</a>
                           <div class="hrstyle1">
                              <a href="{{route('pages.apply.now')}}" class="fmgp48 display_block1">{{__('head_and_menus.new-application')}}</a>
                              <a href="{{route('pages.ongoing')}}" class="fmgp48 display_block1">{{__('head_and_menus.ongoing-application')}}</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 fmgp774 animated fadeInUp">
                     <div class="footer_item">
                        <div class="fmgp46">
                           <a href="{{route('pages.about')}}" class="fmgp47">{{__('head_and_menus.about-us')}}</a>
                           <div class="hrstyle1">
                              <a href="{{route('pages.faq')}}" class="fmgp48 display_block1">{{__('head_and_menus.faq')}}</a>
                              <a href="{{route('pages.testimonials')}}" class="fmgp48 display_block1">{{__('head_and_menus.testimonials')}}</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 fmgp774 animated fadeInUp">
                     <div class="footer_item">
                        <div class="fmgp46">
                           <a href="{{route('pages.contact')}}" class="fmgp47">{{__('head_and_menus.contact-us')}}</a>
                           <div class="hrstyle2">
                              <a href="#" target="_blank" class="fmgp772 "><i class="fa fa-facebook fa-lg fmgp773"></i></a>
                              <a href="#" target="_blank" class="fmgp772 "><i class="fa fa-twitter fa-lg fmgp773"></i></a>
                              <a href="#" target="_blank" class="fmgp772 "><i class="fa fa-instagram fa-lg fmgp773"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 fmgp774 animated fadeInUp">
                     <div class="footer_item">
                        <div class="fmgp46">
                           <span class="fmgp47">{{__('head_and_menus.total-applicants')}}</span>
                           <div >
                              <a href="{{route('pages.testimonials')}}" class="fmgp47 fmgp50 display_block1">{{$options->total_aplctns}}</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 animated fadeInUp">
                     <div class="partners">
                        <div class="partner_logo">
                           <a href="#" target="_blank"> <img src="{{URL::asset('assets/img/turizm.az.png')}}" alt=""></a>
                        </div>
                        <div class="partner_logo">
                           <img src="{{URL::asset('assets/img/netty2015winner.jpg')}}" alt="Netty 2015 Winner">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-1"></div>
      </div>
   </div>
   <div class="fullwidth1 fmgp43">
      <div class="row">
         <div class="col-lg-1"></div>
         <div class="col-lg-10">
            <div class="pull-left">
               <span class="fmgp44">
               @if(session('locale')=='en')
                {{$options->copyright_left}}

               @elseif(session('locale')=='az')
                {{$options->copyright_left_az}}

                @elseif(session('locale')=='tr')
                {{$options->copyright_left_tr}}

                @elseif(session('locale')=='ar')
                {{$options->copyright_left_ar}}

                @elseif(session('locale')=='ru')
                {{$options->copyright_left_ru}}
               @endif
            </div>
            <div class="pull-right">
               <span class="fmgp44">
                 
               @if(session('locale')=='en')
                {{$options->copyright_right}}

                @elseif(session('locale')=='az')
                {{$options->copyright_right_az}}

                @elseif(session('locale')=='tr')
                {{$options->copyright_right_tr}}

                @elseif(session('locale')=='ar')
                {{$options->copyright_right_ar}}

                @elseif(session('locale')=='ru')
                {{$options->copyright_right_ru}}
               @endif

               </span>
            </div>
         </div>
         <div class="col-lg-1"></div>
      </div>
   </div>
</footer>

   <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
   <script src="{{URL::asset('assets/js/script-newcbce.js')}}"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.0/js/bootstrap-select.min.js"></script>
   <script src="{{URL::asset('assets/js/list.min.js')}}"></script>

<noscript>
   <div><img src="$" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae9cd525f7cdf4f0533cbd1/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>