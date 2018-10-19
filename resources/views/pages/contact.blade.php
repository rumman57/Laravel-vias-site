@extends('master')
@section('title','Contact')
@section('stylesheets')
<style type="text/css">

   .newpageheader{
    {{--background: url('{{URL::asset('uploads/'.$option->contact_bg_img)}}') !important;--}}
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
         <h1 class="fmgp53">Contact Us</h1>
      </div>
      <div class="row fmgp52">
         <div class="col-lg-12">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
               <ul itemscope itemtype="" class="breadcrumb fmgp765 animated bounceIn">
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('home.index')}}" class="fmgp764">
                     <span itemprop="name">Home</span>
                     </a>
                     <meta itemprop="position" content="1" />
                  </li>
                  <li itemprop="itemListElement" itemscope itemtype="">
                     <a itemscope itemtype="" itemprop="item" href="{{route('pages.contact')}}" class="fmgp764">
                     <span itemprop="name">Contact Us</span>
                     </a>
                     <meta itemprop="position" content="2" />
                  </li>
               </ul>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="col-lg-8 colstyle5">
                        <table class="width_100 fmgp786 support_content animated bounceInLeft">
                           <tbody>
                              <tr class="fmgp784 fmgp787">
                                 <td colspan="2" align="center">
                                    <h4><strong>Customer Support</strong></h4>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="fmgp785"><strong>Phone:</strong></td>
                                 <td class="fmgp785">(+994 12) 596 11 96 (extension number: 205)</td>
                              </tr>
                              <tr class="fmgp784">
                                 <td class="fmgp785"><strong>Mobile Number:</strong></td>
                                 <td class="fmgp785">(+994 55) 255 14 16</td>
                              </tr>
                              <tr class="fmgp784">
                                 <td class="fmgp785"><strong>Telegram:</strong></td>
                                 <td class="fmgp785"><a href="#" target="_blank">@eVisa_Azerbaijan</a></td>
                              </tr>
                              <tr class="fmgp784">
                                 <td class="fmgp785"><strong>Facebook Messenger:</strong></td>
                                 <td class="fmgp785"><a href="#" target="_blank">@evisaaz.org</a></td>
                              </tr>
                              <tr class="fmgp784">
                                 <td class="fmgp785"><strong><strong>Address:</strong></strong></td>
                                 <td class="fmgp785">44 Jafar Jabbarli str., Caspian Plaza 3/16,<br />Baku city, Azerbaijan</td>
                              </tr>
                           </tbody>
                        </table>
                        <p>&nbsp;</p>
                        @include('myadmin.lib.message')
                        <form class="form-horizontal" id="contact_form" action="{{route('pages.contact')}}" method="POST">
                         {{csrf_field()}}
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Select Message Type</label>
                              <div class="col-sm-9">
                                 <select class="form-control" name="message_type">
                                    <option value="">Select Message Type</option>
                                    <option value="Enquiry"  >Enquiry</option>
                                    <option value="2" >Assistance</option>
                                    <option value="Comment" >Comment</option>
                                    <option value="Hotel Reservation Request" >Hotel Reservation Request</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">First Name(s)</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <input type="text"  class="form-control" data-toggle="tooltip" data-placement="right" data-original-title="Type your name in the box as shown in your passport. If you have a middle/second name, type all the names right after your first name with a space in between. Only dash (-), dot (.), apostrophe (`) and comma (,) special characters are allowed."  name="firstname" placeholder="First name(s)" value="{{Request::old('firstname')}}" required="">
                                    <span class="input-group-addon" data-toggle="modal" data-target="#firstname_modal"><i class="fa fa-question-circle"></i></span>
                                 </div>
                              </div>
                           </div>
                           <div id="firstname_modal" class="modal fade" role="dialog">
                              <div class="modal-dialog fmgp27">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">×</button>
                                       <h4 class="modal-title">First Name(s)</h4>
                                    </div>
                                    <div class="modal-body">
                                       <p>Type your name in the box as shown in your passport. If you have a middle/second name, type all the names right after your first name with a space in between. Only dash (-), dot (.), apostrophe (`) and comma (,) special characters are allowed.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Surname(s)</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <input type="text" class="form-control" name="lastname" data-toggle="tooltip" data-placement="right" data-original-title="Please enter your last name as in your passport. Only dash (-), dot (.), apostrophe (`) and comma (,) special characters are allowed. If your surname is not specified on your travel document, you can leave it blank." placeholder="Surname(s)" value="{{Request::old('lastname')}}" >
                                    <span class="input-group-addon" data-toggle="modal" data-target="#surname_modal"><i class="fa fa-question-circle"></i></span>
                                 </div>
                              </div>
                           </div>
                           <div id="surname_modal" class="modal fade" role="dialog">
                              <div class="modal-dialog fmgp27">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">×</button>
                                       <h4 class="modal-title">Surname(s)</h4>
                                    </div>
                                    <div class="modal-body">
                                       <p>Please enter your last name as in your passport. Only dash (-), dot (.), apostrophe (`) and comma (,) special characters are allowed. If your surname is not specified on your travel document, you can leave it blank.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">E-mail address</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <input type="email" class="form-control" name="email"  data-toggle="tooltip" data-placement="right" data-original-title="Please type your email address."  placeholder="E-mail address"  value="{{Request::old('email')}}"  required="1">
                                    <span class="input-group-addon" data-toggle="modal" data-target="#email_modal"><i class="fa fa-question-circle"></i></span>
                                 </div>
                              </div>
                           </div>
                           <div id="email_modal" class="modal fade" role="dialog">
                              <div class="modal-dialog fmgp27">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal">×</button>
                                       <h4 class="modal-title">E-mail address</h4>
                                    </div>
                                    <div class="modal-body">
                                       <p>Please type your email address.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Your Country</label>
                              <div class="col-sm-9">
                                 <select class="form-control selectpicker" name="country" data-live-search="true">
                                    <option value="">Select Country of Your Travel Document</option>
                                    <option value="Afghanistan"   >Afghanistan</option>
                                    <option value="Aland Islands"   >Aland Islands</option>
                                    <option value="Albania"   >Albania</option>
                                    <option value="Algeria"   >Algeria</option>
                                    <option value="American Samoa"   >American Samoa</option>
                                    <option value="Andorra"   >Andorra</option>
                                    <option value="Angola"   >Angola</option>
                                    <option value="Anguilla"   >Anguilla</option>
                                    <option value="Antarctica"   >Antarctica</option>
                                    <option value="Antigua And Barbuda"   >Antigua And Barbuda</option>
                                    <option value="Argentina"   >Argentina</option>
                                    <option value="Armenia"   >Armenia</option>
                                    <option value="Aruba"   >Aruba</option>
                                    <option value="Australia"   >Australia</option>
                                    <option value="Austria"   >Austria</option>
                                    <option value="Azerbaijan"   >Azerbaijan</option>
                                    <option value="Bahamas"   >Bahamas</option>
                                    <option value="Bahrain"   >Bahrain</option>
                                    <option value="Bangladesh"   >Bangladesh</option>
                                    <option value="Barbados"   >Barbados</option>
                                    <option value="Belarus"   >Belarus</option>
                                    <option value="Belgium"   >Belgium</option>
                                    <option value="Belize"   >Belize</option>
                                    <option value="Benin"   >Benin</option>
                                    <option value="Bermuda"   >Bermuda</option>
                                    <option value="Bhutan"   >Bhutan</option>
                                    <option value="Bolivia"   >Bolivia</option>
                                    <option value="Bosnia And Herzegovina"   >Bosnia And Herzegovina</option>
                                    <option value="Botswana"   >Botswana</option>
                                    <option value="Bouvet Island"   >Bouvet Island</option>
                                    <option value="Brazil"   >Brazil</option>
                                    <option value="British Indian Ocean Territory"   >British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam"   >Brunei Darussalam</option>
                                    <option value="Bulgaria"   >Bulgaria</option>
                                    <option value="Burkina Faso"   >Burkina Faso</option>
                                    <option value="Burundi"   >Burundi</option>
                                    <option value="Cambodia"   >Cambodia</option>
                                    <option value="Cameroon"   >Cameroon</option>
                                    <option value="Canada"   >Canada</option>
                                    <option value="Cape Verde"   >Cape Verde</option>
                                    <option value="Cayman Islands"   >Cayman Islands</option>
                                    <option value="Central African Republic"   >Central African Republic</option>
                                    <option value="Chad"   >Chad</option>
                                    <option value="Chile"   >Chile</option>
                                    <option value="China"   >China</option>
                                    <option value="Christmas Island"   >Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands"   >Cocos (Keeling) Islands</option>
                                    <option value="Colombia"   >Colombia</option>
                                    <option value="Comoros"   >Comoros</option>
                                    <option value="Congo"   >Congo</option>
                                    <option value="Congo, Democratic Republic"   >Congo, Democratic Republic</option>
                                    <option value="Cook Islands"   >Cook Islands</option>
                                    <option value="Costa Rica"   >Costa Rica</option>
                                    <option value="Cote D'Ivoire"   >Cote D'Ivoire</option>
                                    <option value="Croatia"   >Croatia</option>
                                    <option value="Cuba"   >Cuba</option>
                                    <option value="Cyprus"   >Cyprus</option>
                                    <option value="Czech Republic"   >Czech Republic</option>
                                    <option value="Denmark"   >Denmark</option>
                                    <option value="Djibouti"   >Djibouti</option>
                                    <option value="Dominica"   >Dominica</option>
                                    <option value="Dominican Republic"   >Dominican Republic</option>
                                    <option value="Ecuador"   >Ecuador</option>
                                    <option value="Egypt"   >Egypt</option>
                                    <option value="El Salvador"   >El Salvador</option>
                                    <option value="Equatorial Guinea"   >Equatorial Guinea</option>
                                    <option value="Eritrea"   >Eritrea</option>
                                    <option value="Estonia"   >Estonia</option>
                                    <option value="Ethiopia"   >Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)"   >Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands"   >Faroe Islands</option>
                                    <option value="Fiji"   >Fiji</option>
                                    <option value="Finland"   >Finland</option>
                                    <option value="France"   >France</option>
                                    <option value="French Guiana"   >French Guiana</option>
                                    <option value="French Polynesia"   >French Polynesia</option>
                                    <option value="French Southern Territories"   >French Southern Territories</option>
                                    <option value="Gabon"   >Gabon</option>
                                    <option value="Gambia"   >Gambia</option>
                                    <option value="Georgia"   >Georgia</option>
                                    <option value="Germany"   >Germany</option>
                                    <option value="Ghana"   >Ghana</option>
                                    <option value="Gibraltar"   >Gibraltar</option>
                                    <option value="Greece"   >Greece</option>
                                    <option value="Greenland"   >Greenland</option>
                                    <option value="Grenada"   >Grenada</option>
                                    <option value="Guadeloupe"   >Guadeloupe</option>
                                    <option value="Guam"   >Guam</option>
                                    <option value="Guatemala"   >Guatemala</option>
                                    <option value="Guernsey"   >Guernsey</option>
                                    <option value="Guinea"   >Guinea</option>
                                    <option value="Guinea-Bissau"   >Guinea-Bissau</option>
                                    <option value="Guyana"   >Guyana</option>
                                    <option value="Haiti"   >Haiti</option>
                                    <option value="Heard Island & Mcdonald Islands"   >Heard Island & Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)"   >Holy See (Vatican City State)</option>
                                    <option value="Honduras"   >Honduras</option>
                                    <option value="Hungary"   >Hungary</option>
                                    <option value="Iceland"   >Iceland</option>
                                    <option value="India"   >India</option>
                                    <option value="Indonesia"   >Indonesia</option>
                                    <option value="Iran, Islamic Republic Of"   >Iran, Islamic Republic Of</option>
                                    <option value="Iraq"   >Iraq</option>
                                    <option value="Ireland"   >Ireland</option>
                                    <option value="Isle Of Man"   >Isle Of Man</option>
                                    <option value="Israel"   >Israel</option>
                                    <option value="Italy"   >Italy</option>
                                    <option value="Jamaica"   >Jamaica</option>
                                    <option value="Japan"   >Japan</option>
                                    <option value="Jersey"   >Jersey</option>
                                    <option value="Jordan"   >Jordan</option>
                                    <option value="Kazakhstan"   >Kazakhstan</option>
                                    <option value="Kenya"   >Kenya</option>
                                    <option value="Kiribati"   >Kiribati</option>
                                    <option value="Korea"   >Korea</option>
                                    <option value="Kuwait"   >Kuwait</option>
                                    <option value="Kyrgyzstan"   >Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic"   >Lao People's Democratic Republic</option>
                                    <option value="Latvia"   >Latvia</option>
                                    <option value="Lebanon"   >Lebanon</option>
                                    <option value="Lesotho"   >Lesotho</option>
                                    <option value="Liberia"   >Liberia</option>
                                    <option value="Libyan Arab Jamahiriya"   >Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein"   >Liechtenstein</option>
                                    <option value="Lithuania"   >Lithuania</option>
                                    <option value="Luxembourg"   >Luxembourg</option>
                                    <option value="Macao"   >Macao</option>
                                    <option value="Macedonia"   >Macedonia</option>
                                    <option value="Madagascar"   >Madagascar</option>
                                    <option value="Malawi"   >Malawi</option>
                                    <option value="Malaysia"   >Malaysia</option>
                                    <option value="Maldives"   >Maldives</option>
                                    <option value="Mali"   >Mali</option>
                                    <option value="Malta"   >Malta</option>
                                    <option value="Marshall Islands"   >Marshall Islands</option>
                                    <option value="Martinique"   >Martinique</option>
                                    <option value="Mauritania"   >Mauritania</option>
                                    <option value="Mauritius"   >Mauritius</option>
                                    <option value="Mayotte"   >Mayotte</option>
                                    <option value="Mexico"   >Mexico</option>
                                    <option value="Micronesia, Federated States Of"   >Micronesia, Federated States Of</option>
                                    <option value="Moldova"   >Moldova</option>
                                    <option value="Monaco"   >Monaco</option>
                                    <option value="Mongolia"   >Mongolia</option>
                                    <option value="Montenegro"   >Montenegro</option>
                                    <option value="Montserrat"   >Montserrat</option>
                                    <option value="Morocco"   >Morocco</option>
                                    <option value="Mozambique"   >Mozambique</option>
                                    <option value="Myanmar"   >Myanmar</option>
                                    <option value="Namibia"   >Namibia</option>
                                    <option value="Nauru"   >Nauru</option>
                                    <option value="Nepal"   >Nepal</option>
                                    <option value="Netherlands"   >Netherlands</option>
                                    <option value="Netherlands Antilles"   >Netherlands Antilles</option>
                                    <option value="New Caledonia"   >New Caledonia</option>
                                    <option value="New Zealand"   >New Zealand</option>
                                    <option value="Nicaragua"   >Nicaragua</option>
                                    <option value="Niger"   >Niger</option>
                                    <option value="Nigeria"   >Nigeria</option>
                                    <option value="Niue"   >Niue</option>
                                    <option value="Norfolk Island"   >Norfolk Island</option>
                                    <option value="Northern Mariana Islands"   >Northern Mariana Islands</option>
                                    <option value="Norway"   >Norway</option>
                                    <option value="Oman"   >Oman</option>
                                    <option value="Pakistan"   >Pakistan</option>
                                    <option value="Palau"   >Palau</option>
                                    <option value="Panama"   >Panama</option>
                                    <option value="Papua New Guinea"   >Papua New Guinea</option>
                                    <option value="Paraguay"   >Paraguay</option>
                                    <option value="Peru"   >Peru</option>
                                    <option value="Philippines"   >Philippines</option>
                                    <option value="Pitcairn"   >Pitcairn</option>
                                    <option value="Poland"   >Poland</option>
                                    <option value="Portugal"   >Portugal</option>
                                    <option value="Puerto Rico"   >Puerto Rico</option>
                                    <option value="Qatar"   >Qatar</option>
                                    <option value="Reunion"   >Reunion</option>
                                    <option value="Romania"   >Romania</option>
                                    <option value="Russian Federation"   >Russian Federation</option>
                                    <option value="Rwanda"   >Rwanda</option>
                                    <option value="Saint Barthelemy"   >Saint Barthelemy</option>
                                    <option value="Saint Helena"   >Saint Helena</option>
                                    <option value="Saint Kitts And Nevis"   >Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia"   >Saint Lucia</option>
                                    <option value="Saint Martin"   >Saint Martin</option>
                                    <option value="Saint Pierre And Miquelon"   >Saint Pierre And Miquelon</option>
                                    <option value="Saint Vincent And Grenadines"   >Saint Vincent And Grenadines</option>
                                    <option value="Samoa"   >Samoa</option>
                                    <option value="San Marino"   >San Marino</option>
                                    <option value="Sao Tome And Principe"   >Sao Tome And Principe</option>
                                    <option value="Saudi Arabia"   >Saudi Arabia</option>
                                    <option value="Senegal"   >Senegal</option>
                                    <option value="Serbia"   >Serbia</option>
                                    <option value="Seychelles"   >Seychelles</option>
                                    <option value="Sierra Leone"   >Sierra Leone</option>
                                    <option value="Singapore"   >Singapore</option>
                                    <option value="Slovakia"   >Slovakia</option>
                                    <option value="Slovenia"   >Slovenia</option>
                                    <option value="Solomon Islands"   >Solomon Islands</option>
                                    <option value="Somalia"   >Somalia</option>
                                    <option value="South Africa"   >South Africa</option>
                                    <option value="South Georgia And Sandwich Isl."   >South Georgia And Sandwich Isl.</option>
                                    <option value="Spain"   >Spain</option>
                                    <option value="Sri Lanka"   >Sri Lanka</option>
                                    <option value="State of Palestine"   >State of Palestine</option>
                                    <option value="Sudan"   >Sudan</option>
                                    <option value="Suriname"   >Suriname</option>
                                    <option value="Svalbard And Jan Mayen"   >Svalbard And Jan Mayen</option>
                                    <option value="Swaziland"   >Swaziland</option>
                                    <option value="Sweden"   >Sweden</option>
                                    <option value="Switzerland"   >Switzerland</option>
                                    <option value="Syrian Arab Republic"   >Syrian Arab Republic</option>
                                    <option value="Taiwan"   >Taiwan</option>
                                    <option value="Tajikistan"   >Tajikistan</option>
                                    <option value="Tanzania"   >Tanzania</option>
                                    <option value="Thailand"   >Thailand</option>
                                    <option value="Timor-Leste"   >Timor-Leste</option>
                                    <option value="Togo"   >Togo</option>
                                    <option value="Tokelau"   >Tokelau</option>
                                    <option value="Tonga"   >Tonga</option>
                                    <option value="Trinidad And Tobago"   >Trinidad And Tobago</option>
                                    <option value="Tunisia"   >Tunisia</option>
                                    <option value="Turkey"   >Turkey</option>
                                    <option value="Turkmenistan"   >Turkmenistan</option>
                                    <option value="Turks And Caicos Islands"   >Turks And Caicos Islands</option>
                                    <option value="Tuvalu"   >Tuvalu</option>
                                    <option value="Uganda"   >Uganda</option>
                                    <option value="Ukraine"   >Ukraine</option>
                                    <option value="United Arab Emirates"   >United Arab Emirates</option>
                                    <option value="United Kingdom"   >United Kingdom</option>
                                    <option value="United States"   >United States</option>
                                    <option value="United States Outlying Islands"   >United States Outlying Islands</option>
                                    <option value="Uruguay"   >Uruguay</option>
                                    <option value="Uzbekistan"   >Uzbekistan</option>
                                    <option value="Vanuatu"   >Vanuatu</option>
                                    <option value="Venezuela"   >Venezuela</option>
                                    <option value="Viet Nam"   >Viet Nam</option>
                                    <option value="Virgin Islands, British"   >Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S."   >Virgin Islands, U.S.</option>
                                    <option value="Wallis And Futuna"   >Wallis And Futuna</option>
                                    <option value="Western Sahara"   >Western Sahara</option>
                                    <option value="Yemen"   >Yemen</option>
                                    <option value="Zambia"   >Zambia</option>
                                    <option value="Zimbabwe"   >Zimbabwe</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group trave_doc_number">
                              <label class="control-label col-sm-3" for="email">Trave Document Number</label>
                              <div class="col-sm-9">
                                 <input type="text" class="form-control" name="doc_number" value="" placeholder="Trave Document Number" value="{{Request::old('doc_number')}}">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Message</label>
                              <div class="col-sm-9">
                                 <textarea class="form-control contact_message formcontrol1" name="message" min="0" max="600" data-toggle="tooltip" data-placement="right" data-original-title="You can use up to 600 characters. If you are sending a message about an application, please indicate application reference number and the travel document number in your message." placeholder="Enter Your Message" rows="3" value=""  required="1">{{Request::old('message')}}</textarea>
                                 <p class='charNum'>600 character</p>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-label col-sm-3" for="email">Security Verification</label>
                              <div class="col-sm-9">
                                <div class="g-recaptcha fmgpr12" data-sitekey="6Lfl6DAUAAAAAGNYX7QGFWGvZap328jv-WN_XDoo"></div>
                               <div id="recaptcha_widget" class="form-recaptcha">
                         </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-lg-12 fmgp783">
                                    <button type="submit" name="contact_submit" class="btn btn-success btn-block"><strong>Send</strong></button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="col-lg-4 padding_right_0 animated bounceInRight">
                        <div class="commentsitem11">
                           <div class="text-center">
                              <span class="fmgp55">INFORMATION NOTE</span>
                           </div>
                           <div class="fmgp82">
                              <span>
                                 <p>In some cases, e-mail messages might be categorized as &ldquo;junk&rdquo; or &ldquo;spam&rdquo; messages and sent to these folders automatically.</p>
                                 <p>If you did not receive the e-mail message that you have requested, please check your spam folder.</p>
                              </span>
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