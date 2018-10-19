@extends('master')
@section('title','Urgent Application')
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

  .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
    border: 1px solid crimson !important;
    background: crimson !important;
    
}

.fmgpr58 {
    border: 1px solid #00C0A6 !important;
    
}

.fmgp16 {
    border: 1px solid #00C0A6 !important;
}

.fmgpr101 {
    border: 1px solid #00C0A6 !important;;
}

.commentsitem {
    border: 1px solid #00C0A6 !important;;
}
.fmgp765 {
    background-color: #00C0A6 !important;;
}

</style>

  <script type="text/javascript">

   function changeFunc() {
    var selectBox = document.getElementById("con");
   var sv = selectBox.options[selectBox.selectedIndex].value;
      if(sv==2){
         document.getElementById("display_ok").style.display = 'none';
         document.getElementById("display_exempt").style.display = 'none';
         document.getElementById("display_error").style.display = 'block';
         document.getElementById("con1").disabled = true;
      }
      else if(sv==3){
         document.getElementById("display_ok").style.display = 'none';
         document.getElementById("display_error").style.display = 'none';
         document.getElementById("display_exempt").style.display = 'block';
         document.getElementById("con1").disabled = true;
      }else{
         document.getElementById("display_error").style.display = 'none';
         document.getElementById("display_exempt").style.display = 'none';
         document.getElementById("display_ok").style.display = 'block';
         document.getElementById("con1").disabled = false;
      }
    //alert(sv);
   }

function changeFunc1() {

   var selectBox = document.getElementById("con");
  
   var selectBox = document.getElementById("con1");
   var passvalue = selectBox.options[selectBox.selectedIndex].value;
   
   var orpass = $("#con").find(':selected').attr('orpass');
   var dippass = $("#con").find(':selected').attr('dippass');
   var serpass = $("#con").find(':selected').attr('serpass');
   var spepass = $("#con").find(':selected').attr('spepass');
   var statepass = $("#con").find(':selected').attr('statepass');
   var offpass = $("#con").find(':selected').attr('offpass');
   var days = $("#con").find(':selected').attr('days');
   var isPartiaExemptCounry = $("#con").find(':selected').attr('counceck');

  
    if(passvalue=='ordinary'){
       
        if(isPartiaExemptCounry==4 && orpass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');

           
        }else{

           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }

    else if(passvalue=='diplomatic'){

        if(isPartiaExemptCounry==4 && dippass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');

        }else{
          
           $('.fmgp769').removeAttr('id');
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }

    else if(passvalue=='service'){

        if(isPartiaExemptCounry==4 && serpass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');

        }else{
           $('.fmgp769').removeAttr('id');
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }

    else if(passvalue=='special'){

        if(isPartiaExemptCounry==4 && spepass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');


        }else{
           $('.fmgp769').removeAttr('id');
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }

    else if(passvalue=='stateless'){

        if(isPartiaExemptCounry==4 && statepass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');


        }else{
           $('.fmgp769').removeAttr('id');
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }

    else if(passvalue=='official'){

        if(isPartiaExemptCounry==4 && offpass==2){
           document.getElementById("display_ok").style.display = 'none';
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'block';

           $('#exemptvisaerror').html('<span class="fmgp768">You are exempt from visa.</span><br><span>You are exempt from visa for tourism purposes within '+days+' days starting from the first entry date.</span><br><span>Requirements for visa exemption:</span><br><span><i class="fa fa-check-square-o fmgp23"></i>  Valid for touristic purposes not exceeding '+days+' days per entry.</span><br>');


        }else{
           $('.fmgp769').removeAttr('id');
           document.getElementById("display_error").style.display = 'none';
           document.getElementById("display_exempt").style.display = 'none';
           document.getElementById("display_ok").style.display = 'block';
        }
    }else{
          $('.fmgp769').removeAttr('id');
          document.getElementById("display_error").style.display = 'none';
          document.getElementById("display_exempt").style.display = 'none';
          document.getElementById("display_ok").style.display = 'block';

    }



      
     
   }

  </script>

@endsection
@section('content')
<div class="container fullwidth1">
   <div class="newpage">
      <div class="newpageheader">
         <h1 class="fmgp53">{{__('applynow.newApplication')}}</h1>
      </div>
      <div class="row fmgp60">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">

               <form action="{{route('apply.stepone')}}" method="POST">
               {{ csrf_field() }}
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-lg-8">
                           <ul itemscope itemtype="" class="breadcrumb fmgp765 animated bounceIn">
                              <li>
                                 <a  itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                                 <span itemprop="name">{{__('applynow.homepage')}}</span>
                                 </a>
                                 <meta itemprop="position" content="1" />
                              </li>
                              <li itemprop="itemListElement" >
                                 <a  href="{{route('pages.apply.now')}}" class="fmgp764">
                                 <span itemprop="name">{{__('applynow.yrContry')}}</span>
                                 </a>
                                 <meta itemprop="position" content="2" />
                              </li>
                           </ul>
                           <div class="form-group formgroup5 row">
                           @include('myadmin.lib.message')
                              <label class="control-label col-sm-4 fmgp771 colstyle5" for="email">{{__('applynow.yrContry')}}</label>
                              <div class="col-sm-8 colstyle5">
                                 <select class="form-control selectpicker" data-live-search="true" name="select_country" id="con" onchange="changeFunc();">
                                    <option value="">Select Country of Your Travel Document</option>
                                   {{-- <option value="2" risk="1" risk_price="1000" risk_price_usd="0"  >Afghanistan</option>
                                    <option value="3" risk="0" risk_price="0" risk_price_usd="0"  >Albania</option>
                                    <option value="Algeria" risk="0" risk_price="0" risk_price_usd="0"  >Algeria</option>--}}
                                 @foreach($countries as $country)
                                     <option @if($country->visa_exempt==3) value="3" @elseif($country->visa_block==2) value="2" @else value="{{$country->name}}" @endif risk="0" risk_price="0" risk_price_usd="0"  orpass={{$country->ordinary}} dippass={{$country->diplomatic}} serpass={{$country->service}} spepass={{$country->special}} statepass={{$country->stateless}} offpass={{$country->official}} days= {{$country->days}} counceck={{$country->is_partial_exempt}} >{{$country->name}}</option>
                                    @endforeach 
                                 </select>
                              </div>
                           </div>
                          
                           <div class="form-group formgroup5 row">
                              <label class="control-label col-sm-4 colstyle5 fmgp771" for="email">{{__('applynow.travelDoc')}}</label>
                              <div class="col-sm-8 colstyle5">
                                 <select class="form-control" name="document_type" id="con1" onchange="changeFunc1();">
                                    <option value="">Select {{__('applynow.travelDoc')}}</option>

                                    <option value="ordinary">Ordinary Passport</option>

                                    <option value="diplomatic">Diplomatic Passport</option>

                                    <option value="service">Service Passport</option>

                                    <option value="special">Special Passport</option>

                                    <option  value="stateless">Stateless Passport</option>

                                    <option  value="official">Official Passport</option>
                                    <!-- <option value="other"></option> -->
                                 </select>
                              </div>
                           </div>
                             
                          
                           <!--country_type_visa_error2-->
                           <div class="row formgroup9 country_type_visa_error2" id="display_error" style="display: none;">
                              <div class="col-xs-12 fmgpr61">
                                 <table class="width_100">
                                    <tbody>
                                       <tr>
                                          <td class="width_25" align="center"><i class="fa fa-times-circle fa-5x fmgp770 fmgp23"></i></td>
                                          <td class="fmgp769">

                                           {!!__('applynow.block_error')!!}
                                             
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!--country_type_not_visa_error-->

                           <!--country_type_visa_error-->
                           <div class="row formgroup9 country_type_visa_error" id="display_exempt" style="display: none;">
                              <div class="col-xs-12 fmgpr61">
                                 <table class="width_100">
                                    <tbody>
                                       <tr>
                                          <td class="width_25" align="center"><i class="fa fa-times-circle fa-5x fmgp770 fmgp23"></i></td>
                                          <td class="fmgp769" id="exemptvisaerror">
                                          {!!__('applynow.exempt_error')!!}
                                                                         
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!--country_type_visa_error-->
                          
                           <div class="step_arrival_date" id="display_ok">
                              <div class="form-group formgroup5 row">
                                 <label class="control-label col-sm-4 colstyle5 fmgp771" for="processing_type">{{__('applynow.procTime')}}</label>
                                 <div class="col-sm-8 colstyle5">
                                    <select class="form-control" name="processing_type" id="processing_type">
                                       <option value="" selected="selected">Select processing type</option>
                                       <option  value="1" visa-fee="45" service-fee="70" visa-fee-usd="25" service-fee-usd='40'>Standard ( 1-3 business days )</option>
                                       <option value="2" visa-fee="25" service-fee="110" visa-fee-usd="50" service-fee-usd="65">Urgent ( within 3-5 hours )</option>
                                    </select>
                                    <span class="purpose_error_ptype">Please select processing type</span>
                                 </div>
                              </div>
                              <div class="row formgroup8">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4 colstyle5 fmgp771" for="email">{{__('applynow.purpostOfVisit')}}</label>
                                    <div class="col-sm-8 colstyle5">
                                       <select class="form-control selectstyle" name="purpose_type">
                                          <option value="">Select purpose of your visit</option>
                                          <option value="Tourism">Tourism</option>
                                          <option value="Business trip">Business trip</option>
                                          <option value="Science">Science</option>
                                          <option value="Education">Education</option>
                                          <!--<option value="5"></option>-->
                                          <option value="Culture">Culture</option>
                                          <option value="Sports">Sports</option>
                                          <option value="Humanitarian">Humanitarian</option>
                                          <option value="Medical Treatment">Medical Treatment</option>
                                          <option value="Personal trip">Personal trip</option>
                                          <option value="Official trip">Official trip</option>
                                       </select>
                                       <span class="fmgp31 purpose_error purpose_error4564"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="row formgroup8">
                                 <div class="form-group">
                                    <label class="control-label col-sm-4 colstyle5 fmgp771" for="email">{{__('applynow.arrivalDateInAj')}}</label>
                                    <div class="col-sm-8 colstyle5">
                                       <input type="text" class="form-control arrival_date1" value="28/04/2018" placeholder="Arrival Date">
                                       <input type="hidden" name="arrival_date" value="">
                                       <input type="hidden" name="arrival_date2" value="">
                                       <input type="hidden" name="end_date" value="">
                                    </div>
                                 </div>
                              </div>
                              <div class="row formgroup21">
                                 <div class="col-lg-12 fmgp16">
                                      {!!__('applynow.arrival_date_text')!!}                         
                                 </div>
                              </div>
                              <div class="duration">
                                 <div class="duration_in_left">
                                    <div class="begining_date">
                                       <span class="duration_day" id="today"></span><br>
                                       <span class="duration_mounth" id="monthyear"></span><br/>
                                       <span class="duration_mounth" id="year1"></span>
                                    </div>
                                 </div>
                                 <div class="exceed_date">
                                    <p style="font-size:15px">30 days of stay</p>
                                 </div>
                                 <div class="full_date">
                                    <p style="font-size:14px">90 days validity period</p>
                                 </div>
                                 <div class="duration_in_right">
                                    <div class="ending_date">
                                       <span class="duration_day" id="afterday"></span><br>
                                       <span class="duration_mounth" id="aftermonthyear"></span><br>
                                       <span class="duration_mounth" id="year2"></span>
                                    </div>
                                 </div>
                              </div>
                              <br/>
                              <div class="row formgroup8 cart display_none">
                                 <div class="col-lg-12 fmgp18" style="border:0px !important">
                                    <div class="row formgroup9" >
                                       <table class="width_100 table table-responsive margin-bottom-0">
                                          <tbody>
                                             <tr>
                                                <td class="fmgpr58 width_45 text-center"><strong>Service name</strong></td>
                                                <td class="fmgpr58 width_15 text-center"><strong>Applicant (s)</strong></td>
                                                <td class="fmgpr58 width_20 text-center"><strong>Price</strong></td>
                                             </tr>
                                             <tr>
                                                <td class="fmgpr58 width_45">
                                                   <ul class="margin-bottom-0">
                                                      <li>eVisa Govemment fee</li>
                                                      <li>Service Fee + Taxes + Bank Commission</li>
                                                   </ul>
                                                </td>
                                                <td class="fmgpr58 width_15 text-center">
                                                   <select name="applicant" class="form-control width_50" id="applicant">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="3">3</option>
                                                      <option value="4">4</option>
                                                      <option value="5">5</option>
                                                      <option value="6">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                      <option value="10">10</option>
                                                      <option value="11">11</option>
                                                      <option value="12">12</option>
                                                      <option value="13">13</option>
                                                      <option value="14">14</option>
                                                      <option value="15">15</option>
                                                      <option value="16">16</option>
                                                      <option value="17">17</option>
                                                      <option value="18">18</option>
                                                      <option value="19">19</option>
                                                      <option value="20">20</option>
                                                   </select>
                                                </td>
                                                <td class="fmgpr58 width_20 text-center">
                                                   <span id="total_fee_usd"></span> USD
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="fmgpr58 width_25 text-right" colspan="4"><strong>Total price:</strong> <span id="total_fees_usd"></span>  USD</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <div class="row formgroup9" >
                                       <div class="col-lg-12  fmgp20">
                                          <div class="col-lg-8  fmgp21">
                                             <span class="line-height-29">To be paid only by MasterCard/Visa credit or debit card.</span>
                                          </div>
                                          <div class="col-lg-4 fmgp21 text-right">
                                             <i class="fa fa-cc-visa size-2em"></i>
                                             <i class="fa fa-cc-mastercard size-2em"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row formgroup9" >
                                 <div class="col-lg-12 col-xs-12 col-md-12 stylecol3">
                                    <table class="width_100">
                                       <tbody>
                                          <tr>
                                             <td class="fmgpr58 width_10 text-center">
                                                <div class="checkbox1">
                                                   <label class="fmgpr100 checkCheckbox" >
                                                   <input type="checkbox" name="diseases_check" value="1">
                                                   <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                   </label>
                                                </div>
                                                <span class="purpose_error_ptick"> Please tick </span>
                                             </td>
                                             <td class="fmgpr58 fmgpr35">
                                                <span>Confirm that you aren't a carrier of any of the diseases listed below:</span><br>
                                                <span>1. HIV infection</span><br>
                                                <span>2. Hepatitis B and C</span>                                       
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="fmgpr58 width_10 text-center">
                                                <div class="checkbox1" style="margin-top: 8px;">
                                                   <label class="fmgpr100 checkCheckbox">
                                                   <input type="checkbox" name="eVisa_requirements" value="1">
                                                   <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                   </label>
                                                </div>
                                                <span class="purpose_error_ptick"> Please tick </span>
                                             </td>
                                             <td class="fmgpr58 fmgpr35">
                                                I confirm that I meet each and every one of the <a href="#" data-toggle="modal" data-target="#evisa_requirements">eVisa requirements</a>.                                       
                                             </td>
                                          </tr>
                                          <tr>
                                             <td class="fmgpr58 width_10 text-center">
                                                <div class="checkbox1" style="margin-top: 8px;">
                                                   <label class="fmgpr100 checkCheckbox">
                                                   <input type="checkbox" name="agreement_check" value="1">
                                                   <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                   </label>
                                                </div>
                                                <span class="purpose_error_ptick"> Please tick </span>
                                             </td>
                                             <td class="fmgpr58 fmgpr35">
                                                I have read and understood the <a href="#" data-toggle="modal" data-target="#terms-and-conditions">Terms and Conditions</a>, <a href="#" data-toggle="modal" data-target="#privacy_policy">Privacy Policy</a> and <a href="#" data-toggle="modal" data-target="#refund_policy">Refund Policy</a>                                       
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div id="evisa_requirements" class="modal fade" role="dialog">
                                 <div class="modal-dialog fmgp27">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">e-Visa requirements</h4>
                                       </div>
                                       <div class="modal-body">
                                          <ul class="list-group margin-bottom-0">
                                             <li class="list-group-item fmgpr101">1. My passport is valid at least 6 (six) months after my departure date from Azerbaijan.</li>
                                             <li class="list-group-item fmgpr101">2. I am applying for single entry visa.</li>
                                             <li class="list-group-item fmgpr101">3. I am aware that, in order to issue the electronic visa, it is required at least 3 business days and this visa allows the holder to stay in the country for 30 days.</li>
                                             <li class="list-group-item fmgpr101">4. I am aware that, persons with dual citizenship have to choose the country in accordance with their passport or other travel document they are going to use for their travel. If the passport or other travel document used to apply for an electronic visa is different from the passport or other travel document used for travel, the electronic visa is considered invalid.</li>
                                             <li class="list-group-item fmgpr101">5. I am informed that, the period of temporary stay of foreigners and stateless persons in the country should not exceed the period specified in the e-Visa. Foreigners and stateless persons have to leave the territory of the Republic of Azerbaijan if duration of their temporary stay has not been extended, or if they have not been granted a temporary residence permit, or if their application for extension of the temporary residence period or their application for temporary residence permit has not been accepted.</li>
                                             <li class="list-group-item fmgpr101">6. I am aware that, foreigners and stateless persons staying temporarily in the Republic of Azerbaijan for more than 10 days (also in cases when they change their place of residence within the country) should apply to the State Migration Service of the Republic of Azerbaijan for registration without payment of any fee.</li>
                                             <li class="list-group-item fmgpr101">7. I am aware that, pursuant to the law, foreigners and stateless persons are held liable for staying in the country after the expiry of the time specified in the electronic visa and without being registered (when their stay exceeds 10 days).</li>
                                             <li class="list-group-item fmgpr101">8. I am informed that, foreigners and stateless persons may apply for a new electronic visa only after leaving the territory of the Republic of Azerbaijan.</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="terms-and-conditions" class="modal fade" role="dialog">
                                 <div class="modal-dialog fmgp27">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Terms and Conditions</h4>
                                       </div>
                                       <div class="modal-body modal-new">
                                          <p>The general rules and policies of www.evisa.com.az are described in the following Terms and Conditions. A user must respect these terms when accessing this website and contracting its services. The user fully recognizes the conditions explained below, hereinafter referred to as &ldquo;our terms&rdquo; which govern the applicant&rsquo;s use of www.evisa.com.az. The user must also agree to respect any relevant and applicable regulations and legislation. Users who contract the services offered by www.evisa.com.az and complete the Azerbaijan e-Visa application form will be referred to throughout as &ldquo;the applicant;&rdquo; the use of &ldquo;us,&rdquo; &ldquo;our,&rdquo; or &ldquo;we&rdquo; refers to www.evisa.com.az.</p>
                                          <p>&nbsp;</p>
                                          <p><span class="s3">Use of Website</span></p>
                                          <p>www.evisa.com.az is a private, non-governmental agency that is owned by an independent enterprise offering electronic visa assistance and support. By using this website, applicants acknowledge that they are not permitted to reuse, download, modify, copy or redistribute any part of the information included on www.evisa.com.az and also concedes to use the services provided by www.evisa.com.az strictly for their personal use.</p>
                                          <p>&nbsp;</p>
                                          <p><span class="s3">Personal Data</span></p>
                                          <p>User information may be collected by www.evisa.com.az when visiting the site and may then be stored in our secure databases. This information could include:</p>
                                          <p>Contact details: Email address and phone number</p>
                                          <p>Personal information including full name, address, date and place of birth</p>
                                          <p>Passport information (issuance and expiration date, document number)</p>
                                          <p>Connection log and information regarding the IP connection</p>
                                          <p>Cookies</p>
                                          <p>Payment record</p>
                                          <p>All the data that is registered by www.evisa.com.az will be stored in encrypted databases belonging to www.evisa.com.az. For more information on our confidentiality regulations, see our Privacy Policy.</p>
                                          <p><br /><span class="s3">Liability Exemptions</span></p>
                                          <p>www.evisa.com.az is responsible only for submitting the Azerbaijan e-Visa application on behalf of the applicant and cannot be held responsible for the result of said application, as approval is subject to the Azerbaijani government&rsquo;s authorization. www.evisa.com.az cannot be held responsible for e-Visa applications results that are produced from providing erroneous information or from a mistake made by the applicant.</p>
                                          <p>www.evisa.com.az is not liable should the applicant receive a visa denial due to circumstances beyond our reasonable control. Additionally, in the case that the applicant&rsquo;s e-Visa is denied by the Government of the Republic of Azerbaijan, he/she accepts that nor the Azerbaijani Government, nor www.evisa.com.az is required to provide a reason.</p>
                                          <p>www.evisa.com.az reserves the right to cancel the registration of any applicant and to delete their personal information and application if he or she: disregards, changes or omits any part of the required procedure for registration; does not meet eligibility requirements and is therefore considered unsuitable to complete the online application; gives fraudulent or erroneous personal information or participates in any unlawful activity.</p>
                                          <p><br /><span class="s3">Prohibition</span></p>
                                          <p>The following is a list of the restrictions and prohibited activities for users of www.evisa.com.az:</p>
                                          <div class="s5"><span class="s4">&bull; </span>Commit any illegal acts;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Copy or share any content or services provided on www.evisa.com.az;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Violate the website&rsquo;s copyright or intellectual property;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Participate in any activity that may harm www.evisa.com.az or its employees, shareholders or third parties;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Insult this website, its members, or third parties;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Use or spread malicious software programs or computer viruses;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Conduct data collection activities on or related to our website without express written consent granted by www.evisa.com.az</div>
                                          <p class="s6">&nbsp;</p>
                                          <p><span class="s3">Service Contents</span></p>
                                          <p>www.evisa.com.az reserves the right to modify or remove content regarding the services offered, management methods and conditions, at any time, without being required to provide advanced notice. Website users agree to be bound by the conditions detailed herein and understand that any infringements of these rights may result in legal proceedings towards them.<br /><br /><span class="s3">Suspension of Services</span></p>
                                          <p>www.evisa.com.az reserves the right to temporarily suspend its services in case of any of the following situations: for system maintenance, whether urgent or necessary; natural disasters (floods, earthquakes, tidal waves, etc.) or public disturbances (strikes, riots, war, etc.); unanticipated failure in electricity supplies; fires; updates, technical difficulties or changes to the system, or other reasons.</p>
                                          <p>Both this website and the user agree that <a href="http://www.evisa.com.az/"><span class="s7">www.evisa.com.az</span></a> will not be liable for any damages suffered by a user or third party in the event that our services are suspended for any reasons, including those listed above and thus indemnify us against any act which can affect the service provided that is beyond our reasonable control.</p>
                                          <p>&nbsp;</p>
                                          <p><span class="s3">Modifications</span></p>
                                          <p>www.evisa.com.az also reserves the right to amend the contents of the website as well as the terms and conditions detailed herein. These changes may take effect immediately without prior notice. It is the responsibility of each user to ensure they are aware of the terms and conditions which apply whenever they decide to contract the services offered by <a href="http://www.evisa.com.az/"><span class="s7">www.evisa.com.az</span></a>.</p>
                                          <p>&nbsp;</p>
                                          <p><span class="s3">Customer Service</span></p>
                                          <p>For any questions regarding the Azerbaijan e-Visa application, users can contact our friendly Customer Support Team at <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcdddbd9d2c8fcd9cad5cfdd92dfd3d192ddc6">[email&#160;protected]</a> or +994552551416.</p>
                                          <p>&nbsp;</p>
                                          <p><span class="s3">Company Information</span></p>
                                          <p>www.evisa.com.az is a part of &ldquo;TURIZM.AZ&rdquo; LLC, based in Ziverbey Ahmedbeyov st 69, 1065, Baku, Azerbaijan with registration number 1301763761. If you need to contact us for any reason you can do so at +994552551416 or via e-mail at <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bfded8dad1cbffdac9d6ccde91dcd0d291dec5">[email&#160;protected]</a> to s<a name="_GoBack"></a>peak to our professional customer service team at any time.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="privacy_policy" class="modal fade" role="dialog">
                                 <div class="modal-dialog fmgp27">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Privacy Policy</h4>
                                       </div>
                                       <div class="modal-body">
                                          <p><a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> is committed to offering excellent service while maintaining the security of any confidential information processed via our website. The user agrees to the following privacy policy upon contracting services from <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a>.</p>
                                          <p>As a private company, <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> collects different information through various methods and uses it for diverse means which are detailed here for the user&rsquo;s information.</p>
                                          <p>Collection of Personal Information: <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> may store or use information relating to user habits, preferences or computer data such as IP address, operating system, page visits etc. as well as purchase details such as customer name and e-mail and also communications between <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> and client.</p>
                                          <p>This information may be used in the following ways:</p>
                                          <div class="s5"><span class="s4">&bull; </span>Administer, improve and maintain services offered;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Collect payments and send invoices or other correspondence;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Personalize the web for user satisfaction;</div>
                                          <div class="s5"><span class="s4">&bull; </span>Counteract fraud or other security breaches and maintain general Terms and Conditions.</div>
                                          <p><a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> will not share, send, sell or publish any information provided by the user to third parties without express consent unless required by law or to defend or pursue legal action.</p>
                                          <p><a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> guarantees that all safety measures will go above and beyond legal obligations in order to ensure the strictest security of user information using encryption firewalls, password-protected servers and physical security in all areas where information is stored.</p>
                                          <p>Amendments to this Privacy Policy can be made by <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a> at any time without prior notification. It is the responsibility of the user to ensure he/she is aware of the Privacy Policy in effect at the time of contracting any service offered by <a href="http://www.evisa.com.az/"><span class="s3">www.evisa.com.az</span></a>.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="refund_policy" class="modal fade" role="dialog">
                                 <div class="modal-dialog fmgp27">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Refund Policy</h4>
                                       </div>
                                       <div class="modal-body">
                                          <p>www.evisa.com.az will offer a full refund (except e-Visa Government fee) to all users who have submitted their application through this website in the event that their online e-Visa application is denied by the Government of Azerbaijan.</p>
                                          <p>If a user requests a refund after an e-Visa application has been submitted and approved, www.evisa.com.az will no longer be able to offer a full refund. However, a refund request for the fee charged by the agency can be made and will be considered.</p>
                                          <p>Please note the following conditions for requesting a refund:</p>
                                          <div class="s4"><span class="s3">&bull; </span>Users have up to 30 days from the payment date to claim a refund.</div>
                                          <div class="s4"><span class="s3">&bull; </span>By contracting the services offered by www.evisa.com.az and thus agreeing to comply with the terms and conditions, users understand that www.evisa.com.az will begin processing the submitted application immediately and within 3-72 hours the applicant will receive their approved e-Visa, at which point a refund will no longer be available.</div>
                                          <div class="s4"><span class="s3">&bull; </span>By visiting this website and contracting its services, the applicant waives his/her right to pursue legal actions against www.evisa.com.az and agrees not to hold us or our employees, shareholders or other agents accountable.</div>
                                          <p class="s5">&nbsp;</p>
                                          <p><span class="s6">Requesting a Refund</span></p>
                                          <p>Users wishing to solicit a refund must send an email to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="117076747f655174677862703f727e7c3f706b3f">[email&#160;protected]</a> Users must include the following in their refund request: full name (as it appears on passport), email address used to complete the application, reference number and reason for the request.<a name="_GoBack"></a></p>
                                          <p>From the moment the refund request is received, it will be processed within 72 hours (3 business days).</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <!--applicant_count_error-->
                                 <div class="modal fade" id="applicant_count_error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             <h4 class="modal-title">Error:</h4>
                                          </div>
                                          <div class="modal-body">
                                             <p>Total number of eVisa applicants CANNOT be more than total number of tourists who will stay in the hotel.</p>
                                          </div>
                                          <!-- <div class="modal-footer">
                                             </div> -->
                                       </div>
                                    </div>
                                 </div>
                                 <!--applicant_count_error-->
                              </div>
                              <div class="form-group"></div>
                              <div id="first_submit_load" class="modal fade" role="dialog">
                                 <div class="modal-dialog padding_top_15 modal-sm">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                       <div class="modal-body">
                                          <div class="first_submit_load">
                                             <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="right_all_submit">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="g-recaptcha fmgpr12" data-sitekey="6Lfl6DAUAAAAAGNYX7QGFWGvZap328jv-WN_XDoo"></div>
                                       <div id="recaptcha_widget" class="form-recaptcha">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <a href="{{route('pages.ongoing')}}" type="button" class="btn btn-default btn-block fmgp8">{{__('applynow.I_have_an_ongoing_application')}}</a>
                                       <button class="btn btn-success btn-block">{{__('applynow.save_and_continue')}}</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="first_submit_result display_none"></div>
               
               </form>
               </div>
               <div class="col-lg-4">
               <div class="commentsitem">
               <div class="text-center">
               <span class="fmgp55">{{__('applynow.info_note')}}</span>
               </div>
               <div class="fmgp82">
                    {!!__('applynow.infoInfo')!!}     
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
{{--<div id="modal_urgent" class="modal fade" role="dialog">
   <div class="modal-dialog fmgp27">

      <div class="modal-content">

         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ATTENTION!</h4>
         </div>

         <div class="modal-body">
            <p>Please, be aware that your urgent visa will be ready within 3-5 hours after you complete your application. Your eVisa process will be started during our  working hours. </p>
            <!-- <p>However, if you complete your application out of working hours, your e-Visa will be ready NOT earlier 14:00 of next working day.</p> -->
            <p>
               <strong>Our working hours ( Baku time. GMT+4 ):</strong><br/>
               Monday - Friday ( 10:00 - 18:00 )</br>
               Saturday ( 10:00 - 13:00 )
            </p>
            <a class="btn btn-success btn-block save_continue">Accept and Continue</a>
         </div>


      </div>


   </div>
</div>--}}
@endsection