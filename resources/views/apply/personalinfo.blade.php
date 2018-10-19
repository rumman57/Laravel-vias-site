@extends('master')
@section('title','PersonalInfo')
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

   .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
    border: 1px solid crimson !important;
    background: crimson !important;
    color: #fff;
    
}

.commentsitem {
    border: 1px solid #00C0A6 !important;;
}
.fmgp765 {
    background-color: #00C0A6 !important;;
}
.country_passport_info {
    border: 1px solid #00C0A6 !important;;
}
</style>

@endsection
@section('content')
<div class="container fullwidth1">
<div class="newpage">
<div class="newpageheader">
   <h1 class="fmgp53">{{__('personalinfo.information')}}</h1>
</div>
<div class="row fmgp60">
   <div class="col-lg-12">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">

         <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-8">
                  <ul id="bread" class="breadcrumb fmgp765 animated bounceIn">
                    <li><a href="{{route('home.index')}}" class="fmgp764">{{__('personalinfo.homepage')}}</a></li>
                     <li><a href="#" class="fmgp764">{{__('personalinfo.information')}}</a></li>
                  </ul>
                   
                   @if(!$applies->isEmpty())
                    @foreach($applies as $apply)
                    <div class="person_session_items">
                     <div class="item">
                        <div class="row">
                           <div class="col-xs-12">
                              <div class="pull-left fmgpr42">
                                 <span>{{$apply->person_surname}}</span> <span>{{$apply->person_other_name}}</span><br>
                                 <span>{{$apply->Email}}</span>
                              </div>
                              <div class="pull-right fmgpr43">
                                 <span><strong></strong></span>
                              </div>
                           </div>
                        </div>
                      </div>
                     <div class="fmgpr44"></div>
                   </div>
                   
                   @endforeach 
                   @endif

                   @include('myadmin.lib.message')
               <form novalidate action="{{route('apply.personalinfo')}}" method="POST" enctype="multipart/form-data">
                  {{csrf_field() }}
                  <div class="five_check_result"></div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.surname')}}(s)</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="text" name="person_surname"  class="form-control" placeholder="Surname(s)" value="{{Request::old('person_surname')}}" required="1">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#surname_modal"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="surname_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Surname(s)</h4>
                           </div>
                           <div class="modal-body">
                              <p>Type your surname as shown in your travel document. If more than one surname is shown, please type all of them using spaces in between.</p>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.othername')}}(s)</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="text" name="person_other_name" data-toggle="tooltip" data-placement="left" data-original-title="Type your name as shown in your travel document. If your name hasn't been shown in your travel document, this part may be left blank." class="form-control" placeholder="Other Name(s)" value="{{Request::old('person_other_name')}}">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#firstname_modal"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="firstname_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Other names/Given name(s)</h4>
                           </div>
                           <div class="modal-body">
                              <p>Type your name as shown in your travel document. If your name hasn't been shown in your travel document, this part may be left blank.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.country_of_birth')}}</label>
                     <div class="col-sm-8">
                        <select class="form-control selectstyle" name="person_country_birth">
                           <option value="">Select Country of birth</option>
                           <!-- <option value="Afghanistan">Afghanistan</option> -->
                           <option value="Afghanistan">Afghanistan</option>
                           <!-- <option value="Aland Islands">Aland Islands</option> -->
                           <option value="Aland Islands">Aland Islands</option>
                           <!-- <option value="Albania">Albania</option> -->
                           <option value="Albania">Albania</option>
                           <!-- <option value="Algeria">Algeria</option> -->
                           <option value="Algeria">Algeria</option>
                           <!-- <option value="American Samoa">American Samoa</option> -->
                           <option value="American Samoa">American Samoa</option>
                           <!-- <option value="Andorra">Andorra</option> -->
                           <option value="Andorra">Andorra</option>
                           <!-- <option value="Angola">Angola</option> -->
                           <option value="Angola">Angola</option>
                           <!-- <option value="Anguilla">Anguilla</option> -->
                           <option value="Anguilla">Anguilla</option>
                           <!-- <option value="Antarctica">Antarctica</option> -->
                           <option value="AQ">Antarctica</option>
                           <!-- <option value="Antigua And Barbuda">Antigua And Barbuda</option> -->
                           <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                           <!-- <option value="Argentina">Argentina</option> -->
                           <option value="Argentina">Argentina</option>
                           <!-- <option value="Armenia">Armenia</option> -->
                           <option value="Armenia">Armenia</option>
                           <!-- <option value="Aruba">Aruba</option> -->
                           <option value="Aruba">Aruba</option>
                           <!-- <option value="Australia">Australia</option> -->
                           <option value="Australia">Australia</option>
                           <!-- <option value="Austria">Austria</option> -->
                           <option value="Austria">Austria</option>
                           <!-- <option value="Azerbaijan">Azerbaijan</option> -->
                           <option value="Azerbaijan">Azerbaijan</option>
                           <!-- <option value="Bahamas">Bahamas</option> -->
                           <option value="Bahamas">Bahamas</option>
                           <!-- <option value="Bahrain">Bahrain</option> -->
                           <option value="Bahrain">Bahrain</option>
                           <!-- <option value="Bangladesh">Bangladesh</option> -->
                           <option value="Bangladesh">Bangladesh</option>
                           <!-- <option value="Barbados">Barbados</option> -->
                           <option value="Barbados">Barbados</option>
                           <!-- <option value="Belarus">Belarus</option> -->
                           <option value="Belarus">Belarus</option>
                           <!-- <option value="Belgium">Belgium</option> -->
                           <option value="Belgium">Belgium</option>
                           <!-- <option value="Belize">Belize</option> -->
                           <option value="Belize">Belize</option>
                           <!-- <option value="Benin">Benin</option> -->
                           <option value="Benin">Benin</option>
                           <!-- <option value="Bermuda">Bermuda</option> -->
                           <option value="Bermuda">Bermuda</option>
                           <!-- <option value="Bhutan">Bhutan</option> -->
                           <option value="Bhutan">Bhutan</option>
                           <!-- <option value="Bolivia">Bolivia</option> -->
                           <option value="Bolivia">Bolivia</option>
                           <!-- <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option> -->
                           <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                           <!-- <option value="Botswana">Botswana</option> -->
                           <option value="Botswana">Botswana</option>
                           <!-- <option value="Bouvet Island">Bouvet Island</option> -->
                           <option value="Bouvet Island">Bouvet Island</option>
                           <!-- <option value="Brazil">Brazil</option> -->
                           <option value="Brazil">Brazil</option>
                           <!-- <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> -->
                           <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                           <!-- <option value="Brunei Darussalam">Brunei Darussalam</option> -->
                           <option value="Brunei Darussalam">Brunei Darussalam</option>
                           <!-- <option value="Bulgaria">Bulgaria</option> -->
                           <option value="Bulgaria">Bulgaria</option>
                           <!-- <option value="Burkina Faso">Burkina Faso</option> -->
                           <option value="Burkina Faso">Burkina Faso</option>
                           <!-- <option value="Burundi">Burundi</option> -->
                           <option value="Burundi">Burundi</option>
                           <!-- <option value="Cambodia">Cambodia</option> -->
                           <option value="Cambodia">Cambodia</option>
                           <!-- <option value="Cameroon">Cameroon</option> -->
                           <option value="Cameroon">Cameroon</option>
                           <!-- <option value="Canada">Canada</option> -->
                           <option value="Canada">Canada</option>
                           <!-- <option value="Cape Verde">Cape Verde</option> -->
                           <option value="Cape Verde">Cape Verde</option>
                           <!-- <option value="Cayman Islands">Cayman Islands</option> -->
                           <option value="Cayman Islands">Cayman Islands</option>
                           <!-- <option value="Central African Republic">Central African Republic</option> -->
                           <option value="Central African Republic">Central African Republic</option>
                           <!-- <option value="Chad">Chad</option> -->
                           <option value="Chad">Chad</option>
                           <!-- <option value="Chile">Chile</option> -->
                           <option value="Chile">Chile</option>
                           <!-- <option value="China">China</option> -->
                           <option value="China">China</option>
                           <!-- <option value="Christmas Island">Christmas Island</option> -->
                           <option value="Christmas Island">Christmas Island</option>
                           <!-- <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> -->
                           <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                           <!-- <option value="Colombia">Colombia</option> -->
                           <option value="Colombia">Colombia</option>
                           <!-- <option value="Comoros">Comoros</option> -->
                           <option value="Comoros">Comoros</option>
                           <!-- <option value="Congo">Congo</option> -->
                           <option value="Congo">Congo</option>
                           <!-- <option value="Congo, Democratic Republic">Congo, Democratic Republic</option> -->
                           <option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
                           <!-- <option value="Cook Islands">Cook Islands</option> -->
                           <option value="Cook Islands">Cook Islands</option>
                           <!-- <option value="Costa Rica">Costa Rica</option> -->
                           <option value="Costa Rica">Costa Rica</option>
                           <!-- <option value="Cote D'Ivoire">Cote D'Ivoire</option> -->
                           <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                           <!-- <option value="Croatia">Croatia</option> -->
                           <option value="Croatia">Croatia</option>
                           <!-- <option value="Cuba">Cuba</option> -->
                           <option value="Cuba">Cuba</option>
                           <!-- <option value="Cyprus">Cyprus</option> -->
                           <option value="Cyprus">Cyprus</option>
                           <!-- <option value="Czech Republic">Czech Republic</option> -->
                           <option value="Czech Republic">Czech Republic</option>
                           <!-- <option value="Denmark">Denmark</option> -->
                           <option value="Denmark">Denmark</option>
                           <!-- <option value="Djibouti">Djibouti</option> -->
                           <option value="Djibouti">Djibouti</option>
                           <!-- <option value="Dominica">Dominica</option> -->
                           <option value="Dominica">Dominica</option>
                           <!-- <option value="Dominican Republic">Dominican Republic</option> -->
                           <option value="Dominican Republic">Dominican Republic</option>
                           <!-- <option value="Ecuador">Ecuador</option> -->
                           <option value="Ecuador">Ecuador</option>
                           <!-- <option value="Egypt">Egypt</option> -->
                           <option value="Egypt">Egypt</option>
                           <!-- <option value="El Salvador">El Salvador</option> -->
                           <option value="El Salvador">El Salvador</option>
                           <!-- <option value="Equatorial Guinea">Equatorial Guinea</option> -->
                           <option value="Equatorial Guinea">Equatorial Guinea</option>
                           <!-- <option value="Eritrea">Eritrea</option> -->
                           <option value="Eritrea">Eritrea</option>
                           <!-- <option value="Estonia">Estonia</option> -->
                           <option value="Estonia">Estonia</option>
                           <!-- <option value="Ethiopia">Ethiopia</option> -->
                           <option value="Ethiopia">Ethiopia</option>
                           <!-- <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> -->
                           <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                           <!-- <option value="Faroe Islands">Faroe Islands</option> -->
                           <option value="Faroe Islands">Faroe Islands</option>
                           <!-- <option value="Fiji">Fiji</option> -->
                           <option value="Fiji">Fiji</option>
                           <!-- <option value="Finland">Finland</option> -->
                           <option value="Finland">Finland</option>
                           <!-- <option value="France">France</option> -->
                           <option value="France">France</option>
                           <!-- <option value="French Guiana">French Guiana</option> -->
                           <option value="French Guiana">French Guiana</option>
                           <!-- <option value="French Polynesia">French Polynesia</option> -->
                           <option value="French Polynesia">French Polynesia</option>
                           <!-- <option value="French Southern Territories">French Southern Territories</option> -->
                           <option value="French Southern Territories">French Southern Territories</option>
                           <!-- <option value="Gabon">Gabon</option> -->
                           <option value="Gabon">Gabon</option>
                           <!-- <option value="Gambia">Gambia</option> -->
                           <option value="Gambia">Gambia</option>
                           <!-- <option value="Georgia">Georgia</option> -->
                           <option value="Georgia">Georgia</option>
                           <!-- <option value="Germany">Germany</option> -->
                           <option value="Germany">Germany</option>
                           <!-- <option value="Ghana">Ghana</option> -->
                           <option value="Ghana">Ghana</option>
                           <!-- <option value="Gibraltar">Gibraltar</option> -->
                           <option value="Gibraltar">Gibraltar</option>
                           <!-- <option value="Greece">Greece</option> -->
                           <option value="Greece">Greece</option>
                           <!-- <option value="Greenland">Greenland</option> -->
                           <option value="Greenland">Greenland</option>
                           <!-- <option value="Grenada">Grenada</option> -->
                           <option value="Grenada">Grenada</option>
                           <!-- <option value="Guadeloupe">Guadeloupe</option> -->
                           <option value="Guadeloupe">Guadeloupe</option>
                           <!-- <option value="Guam">Guam</option> -->
                           <option value="Guam">Guam</option>
                           <!-- <option value="Guatemala">Guatemala</option> -->
                           <option value="Guatemala">Guatemala</option>
                           <!-- <option value="Guernsey">Guernsey</option> -->
                           <option value="Guernsey">Guernsey</option>
                           <!-- <option value="Guinea">Guinea</option> -->
                           <option value="Guinea">Guinea</option>
                           <!-- <option value="Guinea-Bissau">Guinea-Bissau</option> -->
                           <option value="Guinea-Bissau">Guinea-Bissau</option>
                           <!-- <option value="Guyana">Guyana</option> -->
                           <option value="Guyana">Guyana</option>
                           <!-- <option value="Haiti">Haiti</option> -->
                           <option value="Haiti">Haiti</option>
                           <!-- <option value="Heard Island & Mcdonald Islands">Heard Island & Mcdonald Islands</option> -->
                           <option value="Heard Island & Mcdonald Islands">Heard Island & Mcdonald Islands</option>
                           <!-- <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> -->
                           <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                           <!-- <option value="Honduras">Honduras</option> -->
                           <option value="Honduras">Honduras</option>
                           <!-- <option value="Hungary">Hungary</option> -->
                           <option value="Hungary">Hungary</option>
                           <!-- <option value="Iceland">Iceland</option> -->
                           <option value="Iceland">Iceland</option>
                           <!-- <option value="India">India</option> -->
                           <option value="India">India</option>
                           <!-- <option value="Indonesia">Indonesia</option> -->
                           <option value="Indonesia">Indonesia</option>
                           <!-- <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option> -->
                           <option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option>
                           <!-- <option value="Iraq">Iraq</option> -->
                           <option value="Iraq">Iraq</option>
                           <!-- <option value="Ireland">Ireland</option> -->
                           <option value="Ireland">Ireland</option>
                           <!-- <option value="Isle Of Man">Isle Of Man</option> -->
                           <option value="Isle Of Man">Isle Of Man</option>
                           <!-- <option value="Israel">Israel</option> -->
                           <option value="Israel">Israel</option>
                           <!-- <option value="Italy">Italy</option> -->
                           <option value="Italy">Italy</option>
                           <!-- <option value="Jamaica">Jamaica</option> -->
                           <option value="Jamaica">Jamaica</option>
                           <!-- <option value="Japan">Japan</option> -->
                           <option value="Japan">Japan</option>
                           <!-- <option value="Jersey">Jersey</option> -->
                           <option value="Jersey">Jersey</option>
                           <!-- <option value="Jordan">Jordan</option> -->
                           <option value="Jordan">Jordan</option>
                           <!-- <option value="Kazakhstan">Kazakhstan</option> -->
                           <option value="Kazakhstan">Kazakhstan</option>
                           <!-- <option value="Kenya">Kenya</option> -->
                           <option value="Kenya">Kenya</option>
                           <!-- <option value="Kiribati">Kiribati</option> -->
                           <option value="Kiribati">Kiribati</option>
                           <!-- <option value="Korea">Korea</option> -->
                           <option value="Korea">Korea</option>
                           <!-- <option value="Kuwait">Kuwait</option> -->
                           <option value="Kuwait">Kuwait</option>
                           <!-- <option value="Kyrgyzstan">Kyrgyzstan</option> -->
                           <option value="Kyrgyzstan">Kyrgyzstan</option>
                           <!-- <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> -->
                           <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                           <!-- <option value="Latvia">Latvia</option> -->
                           <option value="Latvia">Latvia</option>
                           <!-- <option value="Lebanon">Lebanon</option> -->
                           <option value="Lebanon">Lebanon</option>
                           <!-- <option value="Lesotho">Lesotho</option> -->
                           <option value="Lesotho">Lesotho</option>
                           <!-- <option value="Liberia">Liberia</option> -->
                           <option value="Liberia">Liberia</option>
                           <!-- <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> -->
                           <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                           <!-- <option value="Liechtenstein">Liechtenstein</option> -->
                           <option value="Liechtenstein">Liechtenstein</option>
                           <!-- <option value="Lithuania">Lithuania</option> -->
                           <option value="Lithuania">Lithuania</option>
                           <!-- <option value="Luxembourg">Luxembourg</option> -->
                           <option value="Luxembourg">Luxembourg</option>
                           <!-- <option value="Macao">Macao</option> -->
                           <option value="Macao">Macao</option>
                           <!-- <option value="Macedonia">Macedonia</option> -->
                           <option value="Macedonia">Macedonia</option>
                           <!-- <option value="Madagascar">Madagascar</option> -->
                           <option value="Madagascar">Madagascar</option>
                           <!-- <option value="Malawi">Malawi</option> -->
                           <option value="Malawi">Malawi</option>
                           <!-- <option value="Malaysia">Malaysia</option> -->
                           <option value="Malaysia">Malaysia</option>
                           <!-- <option value="Maldives">Maldives</option> -->
                           <option value="Maldives">Maldives</option>
                           <!-- <option value="Mali">Mali</option> -->
                           <option value="Mali">Mali</option>
                           <!-- <option value="Malta">Malta</option> -->
                           <option value="Malta">Malta</option>
                           <!-- <option value="Marshall Islands">Marshall Islands</option> -->
                           <option value="Marshall Islands">Marshall Islands</option>
                           <!-- <option value="Martinique">Martinique</option> -->
                           <option value="Martinique">Martinique</option>
                           <!-- <option value="Mauritania">Mauritania</option> -->
                           <option value="Mauritania">Mauritania</option>
                           <!-- <option value="Mauritius">Mauritius</option> -->
                           <option value="Mauritius">Mauritius</option>
                           <!-- <option value="Mayotte">Mayotte</option> -->
                           <option value="Mayotte">Mayotte</option>
                           <!-- <option value="Mexico">Mexico</option> -->
                           <option value="Mexico">Mexico</option>
                           <!-- <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option> -->
                           <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
                           <!-- <option value="Moldova">Moldova</option> -->
                           <option value="Moldova">Moldova</option>
                           <!-- <option value="Monaco">Monaco</option> -->
                           <option value="Monaco">Monaco</option>
                           <!-- <option value="Mongolia">Mongolia</option> -->
                           <option value="Mongolia">Mongolia</option>
                           <!-- <option value="Montenegro">Montenegro</option> -->
                           <option value="Montenegro">Montenegro</option>
                           <!-- <option value="Montserrat">Montserrat</option> -->
                           <option value="Montserrat">Montserrat</option>
                           <!-- <option value="Morocco">Morocco</option> -->
                           <option value="Morocco">Morocco</option>
                           <!-- <option value="Mozambique">Mozambique</option> -->
                           <option value="Mozambique">Mozambique</option>
                           <!-- <option value="Myanmar">Myanmar</option> -->
                           <option value="Myanmar">Myanmar</option>
                           <!-- <option value="Namibia">Namibia</option> -->
                           <option value="Namibia">Namibia</option>
                           <!-- <option value="Nauru">Nauru</option> -->
                           <option value="Nauru">Nauru</option>
                           <!-- <option value="Nepal">Nepal</option> -->
                           <option value="Nepal">Nepal</option>
                           <!-- <option value="Netherlands">Netherlands</option> -->
                           <option value="Netherlands">Netherlands</option>
                           <!-- <option value="Netherlands Antilles">Netherlands Antilles</option> -->
                           <option value="Netherlands Antilles">Netherlands Antilles</option>
                           <!-- <option value="New Caledonia">New Caledonia</option> -->
                           <option value="New Caledonia">New Caledonia</option>
                           <!-- <option value="New Zealand">New Zealand</option> -->
                           <option value="New Zealand">New Zealand</option>
                           <!-- <option value="Nicaragua">Nicaragua</option> -->
                           <option value="Nicaragua">Nicaragua</option>
                           <!-- <option value="Niger">Niger</option> -->
                           <option value="Niger">Niger</option>
                           <!-- <option value="Nigeria">Nigeria</option> -->
                           <option value="Nigeria">Nigeria</option>
                           <!-- <option value="Niue">Niue</option> -->
                           <option value="Niue">Niue</option>
                           <!-- <option value="Norfolk Island">Norfolk Island</option> -->
                           <option value="Norfolk Island">Norfolk Island</option>
                           <!-- <option value="Northern Mariana Islands">Northern Mariana Islands</option> -->
                           <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                           <!-- <option value="Norway">Norway</option> -->
                           <option value="Norway">Norway</option>
                           <!-- <option value="Oman">Oman</option> -->
                           <option value="Oman">Oman</option>
                           <!-- <option value="Pakistan">Pakistan</option> -->
                           <option value="Pakistan">Pakistan</option>
                           <!-- <option value="Palau">Palau</option> -->
                           <option value="Palau">Palau</option>
                           <!-- <option value="Panama">Panama</option> -->
                           <option value="Panama">Panama</option>
                           <!-- <option value="Papua New Guinea">Papua New Guinea</option> -->
                           <option value="Papua New Guinea">Papua New Guinea</option>
                           <!-- <option value="Paraguay">Paraguay</option> -->
                           <option value="Paraguay">Paraguay</option>
                           <!-- <option value="Peru">Peru</option> -->
                           <option value="Peru">Peru</option>
                           <!-- <option value="Philippines">Philippines</option> -->
                           <option value="Philippines">Philippines</option>
                           <!-- <option value="Pitcairn">Pitcairn</option> -->
                           <option value="Pitcairn">Pitcairn</option>
                           <!-- <option value="Poland">Poland</option> -->
                           <option value="Poland">Poland</option>
                           <!-- <option value="Portugal">Portugal</option> -->
                           <option value="Portugal">Portugal</option>
                           <!-- <option value="Puerto Rico">Puerto Rico</option> -->
                           <option value="PR">Puerto Rico</option>
                           <!-- <option value="Qatar">Qatar</option> -->
                           <option value="Puerto Rico">Qatar</option>
                           <!-- <option value="Reunion">Reunion</option> -->
                           <option value="Reunion">Reunion</option>
                           <!-- <option value="Romania">Romania</option> -->
                           <option value="Romania">Romania</option>
                           <!-- <option value="Russian Federation">Russian Federation</option> -->
                           <option value="Russian Federation">Russian Federation</option>
                           <!-- <option value="Rwanda">Rwanda</option> -->
                           <option value="Rwanda">Rwanda</option>
                           <!-- <option value="Saint Barthelemy">Saint Barthelemy</option> -->
                           <option value="Saint Barthelemy">Saint Barthelemy</option>
                           <!-- <option value="Saint Helena">Saint Helena</option> -->
                           <option value="Saint Helena">Saint Helena</option>
                           <!-- <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option> -->
                           <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                           <!-- <option value="Saint Lucia">Saint Lucia</option> -->
                           <option value="Saint Lucia">Saint Lucia</option>
                           <!-- <option value="Saint Martin">Saint Martin</option> -->
                           <option value="Saint Martin">Saint Martin</option>
                           <!-- <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option> -->
                           <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                           <!-- <option value="Saint Vincent And Grenadines">Saint Vincent And Grenadines</option> -->
                           <option value="Saint Vincent And Grenadines">Saint Vincent And Grenadines</option>
                           <!-- <option value="Samoa">Samoa</option> -->
                           <option value="Samoa">Samoa</option>
                           <!-- <option value="San Marino">San Marino</option> -->
                           <option value="San Marino">San Marino</option>
                           <!-- <option value="Sao Tome And Principe">Sao Tome And Principe</option> -->
                           <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                           <!-- <option value="Saudi Arabia">Saudi Arabia</option> -->
                           <option value="Saudi Arabia">Saudi Arabia</option>
                           <!-- <option value="Senegal">Senegal</option> -->
                           <option value="Senegal">Senegal</option>
                           <!-- <option value="Serbia">Serbia</option> -->
                           <option value="Serbia">Serbia</option>
                           <!-- <option value="Seychelles">Seychelles</option> -->
                           <option value="Seychelles">Seychelles</option>
                           <!-- <option value="Sierra Leone">Sierra Leone</option> -->
                           <option value="Sierra Leone">Sierra Leone</option>
                           <!-- <option value="Singapore">Singapore</option> -->
                           <option value="Singapore">Singapore</option>
                           <!-- <option value="Slovakia">Slovakia</option> -->
                           <option value="Slovakia">Slovakia</option>
                           <!-- <option value="Slovenia">Slovenia</option> -->
                           <option value="Slovenia">Slovenia</option>
                           <!-- <option value="Solomon Islands">Solomon Islands</option> -->
                           <option value="Solomon Islands">Solomon Islands</option>
                           <!-- <option value="Somalia">Somalia</option> -->
                           <option value="Somalia">Somalia</option>
                           <!-- <option value="South Africa">South Africa</option> -->
                           <option value="South Africa">South Africa</option>
                           <!-- <option value="South Georgia And Sandwich Isl.">South Georgia And Sandwich Isl.</option> -->
                           <option value="South Georgia And Sandwich Isl.">South Georgia And Sandwich Isl.</option>
                           <!-- <option value="Spain">Spain</option> -->
                           <option value="Spain">Spain</option>
                           <!-- <option value="Sri Lanka">Sri Lanka</option> -->
                           <option value="Sri Lanka">Sri Lanka</option>
                           <!-- <option value="State of Palestine">State of Palestine</option> -->
                           <option value="State of Palestine">State of Palestine</option>
                           <!-- <option value="Sudan">Sudan</option> -->
                           <option value="Sudan">Sudan</option>
                           <!-- <option value="Suriname">Suriname</option> -->
                           <option value="Suriname">Suriname</option>
                           <!-- <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option> -->
                           <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                           <!-- <option value="Swaziland">Swaziland</option> -->
                           <option value="Swaziland">Swaziland</option>
                           <!-- <option value="Sweden">Sweden</option> -->
                           <option value="Sweden">Sweden</option>
                           <!-- <option value="Switzerland">Switzerland</option> -->
                           <option value="Switzerland">Switzerland</option>
                           <!-- <option value="Syrian Arab Republic">Syrian Arab Republic</option> -->
                           <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                           <!-- <option value="Tajikistan">Tajikistan</option> -->
                           <option value="Tajikistan">Tajikistan</option>
                           <!-- <option value="Tanzania">Tanzania</option> -->
                           <option value="Tanzania">Tanzania</option>
                           <!-- <option value="Thailand">Thailand</option> -->
                           <option value="Thailand">Thailand</option>
                           <!-- <option value="Timor-Leste">Timor-Leste</option> -->
                           <option value="Timor-Leste">Timor-Leste</option>
                           <!-- <option value="Togo">Togo</option> -->
                           <option value="Togo">Togo</option>
                           <!-- <option value="Tokelau">Tokelau</option> -->
                           <option value="Tokelau">Tokelau</option>
                           <!-- <option value="Tonga">Tonga</option> -->
                           <option value="Tonga">Tonga</option>
                           <!-- <option value="Trinidad And Tobago">Trinidad And Tobago</option> -->
                           <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                           <!-- <option value="Tunisia">Tunisia</option> -->
                           <option value="Tunisia">Tunisia</option>
                           <!-- <option value="Turkey">Turkey</option> -->
                           <option value="Turkey">Turkey</option>
                           <!-- <option value="Turkmenistan">Turkmenistan</option> -->
                           <option value="Turkmenistan">Turkmenistan</option>
                           <!-- <option value="Turks And Caicos Islands">Turks And Caicos Islands</option> -->
                           <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                           <!-- <option value="Tuvalu">Tuvalu</option> -->
                           <option value="Tuvalu">Tuvalu</option>
                           <!-- <option value="Uganda">Uganda</option> -->
                           <option value="Uganda">Uganda</option>
                           <!-- <option value="Ukraine">Ukraine</option> -->
                           <option value="Ukraine">Ukraine</option>
                           <!-- <option value="United Arab Emirates">United Arab Emirates</option> -->
                           <option value="United Arab Emirates">United Arab Emirates</option>
                           <!-- <option value="United Kingdom">United Kingdom</option> -->
                           <option value="United Kingdom">United Kingdom</option>
                           <!-- <option value="United States">United States</option> -->
                           <option value="United States">United States</option>
                           <!-- <option value="United States Outlying Islands">United States Outlying Islands</option> -->
                           <option value="United States Outlying Islands">United States Outlying Islands</option>
                           <!-- <option value="Uruguay">Uruguay</option> -->
                           <option value="Uruguay">Uruguay</option>
                           <!-- <option value="Uzbekistan">Uzbekistan</option> -->
                           <option value="Uzbekistan">Uzbekistan</option>
                           <!-- <option value="Vanuatu">Vanuatu</option> -->
                           <option value="Vanuatu">Vanuatu</option>
                           <!-- <option value="Venezuela">Venezuela</option> -->
                           <option value="Venezuela">Venezuela</option>
                           <!-- <option value="Viet Nam">Viet Nam</option> -->
                           <option value="Viet Nam">Viet Nam</option>
                           <!-- <option value="Virgin Islands, British">Virgin Islands, British</option> -->
                           <option value="Virgin Islands, British">Virgin Islands, British</option>
                           <!-- <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> -->
                           <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                           <!-- <option value="Wallis And Futuna">Wallis And Futuna</option> -->
                           <option value="Wallis And Futuna">Wallis And Futuna</option>
                           <!-- <option value="Western Sahara">Western Sahara</option> -->
                           <option value="Western Sahara">Western Sahara</option>
                           <!-- <option value="Yemen">Yemen</option> -->
                           <option value="Yemen">Yemen</option>
                           <!-- <option value="Zambia">Zambia</option> -->
                           <option value="Zambia">Zambia</option>
                           <!-- <option value="Zimbabwe">Zimbabwe</option> -->
                           <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                     </div>
                  </div>
                 
                  <input type="hidden" name="person_place_birth" value=".">
                  <div id="place_of_birth_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Place of birth</h4>
                           </div>
                           <div class="modal-body">
                              <p>Type your place of birth as shown in your travel document. If your name hasn't been shown in your travel document, this part may be left blank.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.occupatoin')}}</label>
                     <div class="col-sm-8">
                              <select class="form-control selectstyle" name="person_occupation">
                           <option value="">Select occupation</option>
                           <option value="Agriculture">Agriculture</option>
                           <option value="Artist">Artist</option>
                           <option value="Communications">Communications</option>
                           <option value="Computer science">Computer science</option>
                           <option value="Culinary/Food Services">Culinary/Food Services</option>
                           <option value="Driver">Driver</option>
                           <option value="Education">Education</option>
                           <option value="Engineering">Engineering</option>
                           <option value="Finance/Banking">Finance/Banking</option>
                           <option value="Government">Government</option>
                           <option value="Healthcare">Healthcare</option>
                           <option value="Law-enforcement agencies">Law-enforcement agencies</option>
                           <option value="Media representative">Media representative</option>
                           <option value="Military">Military</option>
                           <option value="Mining">Mining</option>
                           <option value=">Natural sciences">Natural sciences</option>
                           <option value="Non-governmental organizations">Non-governmental organizations</option>
                           <option value="Pensioner">Pensioner</option>
                           <option value="Physics">Physics</option>
                           <option value="Private sector">Private sector</option>
                           <option value="Religious figure">Religious figure</option>
                           <option value="Researcher">Researcher</option>
                           <option value="Schooler/Student">Schooler/Student</option>
                           <option value="Social sciences">Social sciences</option>
                           <option value="Sports">Sports</option>
                           <option value="Translator/ Interpreter">Translator/ Interpreter</option>
                           <option value="Unemployed">Unemployed</option>
                           <option value="Other">Other</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.mobile_phone_number')}}</label>
                     <div class="col-sm-3">
                        <select name="country_phone_code" class="form-control">
                           <option value="">Country code</option>
                           <option value='93'>Afghanistan (+93)</option>
                           <option value='355'>Albania (+355)</option>
                           <option value='213'>Algeria (+213)</option>
                           <option value='1'>American Samoa (+1)</option>
                           <option value='376'>Andorra (+376)</option>
                           <option value='244'>Angola (+244)</option>
                           <option value='1'>Anguilla (+1)</option>
                           <option value='1'>Antigua (+1)</option>
                           <option value='54'>Argentina (+54)</option>
                           <option value='297'>Aruba (+297)</option>
                           <option value='61'>Australia (+61)</option>
                           <option value='43'>Austria (+43)</option>
                           <option value='994'>Azerbaijan (+994)</option>
                           <option value='973'>Bahrain (+973)</option>
                           <option value='880'>Bangladesh (+880)</option>
                           <option value='1'>Barbados (+1)</option>
                           <option value='375'>Belarus (+375)</option>
                           <option value='32'>Belgium (+32)</option>
                           <option value='501'>Belize (+501)</option>
                           <option value='229'>Benin (+229)</option>
                           <option value='1'>Bermuda (+1)</option>
                           <option value='975'>Bhutan (+975)</option>
                           <option value='591'>Bolivia (+591)</option>
                           <option value='387'>Bosnia and Herzegovina (+387)</option>
                           <option value='267'>Botswana (+267)</option>
                           <option value='55'>Brazil (+55)</option>
                           <option value='246'>British Indian Ocean Territory (+246)</option>
                           <option value='1'>British Virgin Islands (+1)</option>
                           <option value='673'>Brunei (+673)</option>
                           <option value='359'>Bulgaria (+359)</option>
                           <option value='226'>Burkina Faso (+226)</option>
                           <option value='95'>Burma Myanmar (+95)</option>
                           <option value='257'>Burundi (+257)</option>
                           <option value='855'>Cambodia (+855)</option>
                           <option value='237'>Cameroon (+237)</option>
                           <option value='1'>Canada (+1)</option>
                           <option value='238'>Cape Verde (+238)</option>
                           <option value='1'>Cayman Islands (+1)</option>
                           <option value='236'>Central African Republic (+236)</option>
                           <option value='235'>Chad (+235)</option>
                           <option value='56'>Chile (+56)</option>
                           <option value='86'>China (+86)</option>
                           <option value='57'>Colombia (+57)</option>
                           <option value='269'>Comoros (+269)</option>
                           <option value='682'>Cook Islands (+682)</option>
                           <option value='506'>Costa Rica (+506)</option>
                           <option value='225'>Côte d'Ivoire (+225)</option>
                           <option value='385'>Croatia (+385)</option>
                           <option value='53'>Cuba (+53)</option>
                           <option value='357'>Cyprus (+357)</option>
                           <option value='420'>Czech Republic (+420)</option>
                           <option value='243'>Democratic Republic of Congo (+243)</option>
                           <option value='45'>Denmark (+45)</option>
                           <option value='253'>Djibouti (+253)</option>
                           <option value='1'>Dominica (+1)</option>
                           <option value='1'>Dominican Republic (+1)</option>
                           <option value='593'>Ecuador (+593)</option>
                           <option value='20'>Egypt (+20)</option>
                           <option value='503'>El Salvador (+503)</option>
                           <option value='240'>Equatorial Guinea (+240)</option>
                           <option value='291'>Eritrea (+291)</option>
                           <option value='372'>Estonia (+372)</option>
                           <option value='251'>Ethiopia (+251)</option>
                           <option value='500'>Falkland Islands (+500)</option>
                           <option value='298'>Faroe Islands (+298)</option>
                           <option value='691'>Federated States of Micronesia (+691)</option>
                           <option value='679'>Fiji (+679)</option>
                           <option value='358'>Finland (+358)</option>
                           <option value='33'>France (+33)</option>
                           <option value='594'>French Guiana (+594)</option>
                           <option value='689'>French Polynesia (+689)</option>
                           <option value='241'>Gabon (+241)</option>
                           <option value='995'>Georgia (+995)</option>
                           <option value='49'>Germany (+49)</option>
                           <option value='233'>Ghana (+233)</option>
                           <option value='350'>Gibraltar (+350)</option>
                           <option value='30'>Greece (+30)</option>
                           <option value='299'>Greenland (+299)</option>
                           <option value='1'>Grenada (+1)</option>
                           <option value='590'>Guadeloupe (+590)</option>
                           <option value='1'>Guam (+1)</option>
                           <option value='502'>Guatemala (+502)</option>
                           <option value='224'>Guinea (+224)</option>
                           <option value='245'>Guinea-Bissau (+245)</option>
                           <option value='592'>Guyana (+592)</option>
                           <option value='509'>Haiti (+509)</option>
                           <option value='504'>Honduras (+504)</option>
                           <option value='852'>Hong Kong (+852)</option>
                           <option value='36'>Hungary (+36)</option>
                           <option value='354'>Iceland (+354)</option>
                           <option value='91'>India (+91)</option>
                           <option value='62'>Indonesia (+62)</option>
                           <option value='98'>Iran (+98)</option>
                           <option value='964'>Iraq (+964)</option>
                           <option value='353'>Ireland (+353)</option>
                           <option value='972'>Israel (+972)</option>
                           <option value='39'>Italy (+39)</option>
                           <option value='1'>Jamaica (+1)</option>
                           <option value='81'>Japan (+81)</option>
                           <option value='962'>Jordan (+962)</option>
                           <option value='7'>Kazakhstan (+7)</option>
                           <option value='254'>Kenya (+254)</option>
                           <option value='686'>Kiribati (+686)</option>
                           <option value='381'>Kosovo (+381)</option>
                           <option value='965'>Kuwait (+965)</option>
                           <option value='996'>Kyrgyzstan (+996)</option>
                           <option value='856'>Laos (+856)</option>
                           <option value='371'>Latvia (+371)</option>
                           <option value='961'>Lebanon (+961)</option>
                           <option value='266'>Lesotho (+266)</option>
                           <option value='231'>Liberia (+231)</option>
                           <option value='218'>Libya (+218)</option>
                           <option value='423'>Liechtenstein (+423)</option>
                           <option value='370'>Lithuania (+370)</option>
                           <option value='352'>Luxembourg (+352)</option>
                           <option value='853'>Macau (+853)</option>
                           <option value='389'>Macedonia (+389)</option>
                           <option value='261'>Madagascar (+261)</option>
                           <option value='265'>Malawi (+265)</option>
                           <option value='60'>Malaysia (+60)</option>
                           <option value='960'>Maldives (+960)</option>
                           <option value='223'>Mali (+223)</option>
                           <option value='356'>Malta (+356)</option>
                           <option value='692'>Marshall Islands (+692)</option>
                           <option value='596'>Martinique (+596)</option>
                           <option value='222'>Mauritania (+222)</option>
                           <option value='230'>Mauritius (+230)</option>
                           <option value='262'>Mayotte (+262)</option>
                           <option value='52'>Mexico (+52)</option>
                           <option value='373'>Moldova (+373)</option>
                           <option value='377'>Monaco (+377)</option>
                           <option value='976'>Mongolia (+976)</option>
                           <option value='382'>Montenegro (+382)</option>
                           <option value='1'>Montserrat (+1)</option>
                           <option value='212'>Morocco (+212)</option>
                           <option value='258'>Mozambique (+258)</option>
                           <option value='264'>Namibia (+264)</option>
                           <option value='674'>Nauru (+674)</option>
                           <option value='977'>Nepal (+977)</option>
                           <option value='31'>Netherlands (+31)</option>
                           <option value='599'>Netherlands Antilles (+599)</option>
                           <option value='687'>New Caledonia (+687)</option>
                           <option value='64'>New Zealand (+64)</option>
                           <option value='505'>Nicaragua (+505)</option>
                           <option value='227'>Niger (+227)</option>
                           <option value='234'>Nigeria (+234)</option>
                           <option value='683'>Niue (+683)</option>
                           <option value='672'>Norfolk Island (+672)</option>
                           <option value='850'>North Korea (+850)</option>
                           <option value='1'>Northern Mariana Islands (+1)</option>
                           <option value='47'>Norway (+47)</option>
                           <option value='968'>Oman (+968)</option>
                           <option value='92'>Pakistan (+92)</option>
                           <option value='680'>Palau (+680)</option>
                           <option value='970'>Palestine (+970)</option>
                           <option value='507'>Panama (+507)</option>
                           <option value='675'>Papua New Guinea (+675)</option>
                           <option value='595'>Paraguay (+595)</option>
                           <option value='51'>Peru (+51)</option>
                           <option value='63'>Philippines (+63)</option>
                           <option value='48'>Poland (+48)</option>
                           <option value='351'>Portugal (+351)</option>
                           <option value='1'>Puerto Rico (+1)</option>
                           <option value='974'>Qatar (+974)</option>
                           <option value='242'>Republic of the Congo (+242)</option>
                           <option value='262'>Réunion (+262)</option>
                           <option value='40'>Romania (+40)</option>
                           <option value='7'>Russia (+7)</option>
                           <option value='250'>Rwanda (+250)</option>
                           <option value='590'>Saint Barthélemy (+590)</option>
                           <option value='290'>Saint Helena (+290)</option>
                           <option value='1'>Saint Kitts and Nevis (+1)</option>
                           <option value='590'>Saint Martin (+590)</option>
                           <option value='508'>Saint Pierre and Miquelon (+508)</option>
                           <option value='1'>Saint Vincent and the Grenadines (+1)</option>
                           <option value='685'>Samoa (+685)</option>
                           <option value='378'>San Marino (+378)</option>
                           <option value='239'>São Tomé and Príncipe (+239)</option>
                           <option value='966'>Saudi Arabia (+966)</option>
                           <option value='221'>Senegal (+221)</option>
                           <option value='381'>Serbia (+381)</option>
                           <option value='248'>Seychelles (+248)</option>
                           <option value='232'>Sierra Leone (+232)</option>
                           <option value='65'>Singapore (+65)</option>
                           <option value='421'>Slovakia (+421)</option>
                           <option value='386'>Slovenia (+386)</option>
                           <option value='677'>Solomon Islands (+677)</option>
                           <option value='252'>Somalia (+252)</option>
                           <option value='27'>South Africa (+27)</option>
                           <option value='82'>South Korea (+82)</option>
                           <option value='34'>Spain (+34)</option>
                           <option value='94'>Sri Lanka (+94)</option>
                           <option value='1'>St. Lucia (+1)</option>
                           <option value='249'>Sudan (+249)</option>
                           <option value='597'>Suriname (+597)</option>
                           <option value='268'>Swaziland (+268)</option>
                           <option value='46'>Sweden (+46)</option>
                           <option value='41'>Switzerland (+41)</option>
                           <option value='963'>Syria (+963)</option>
                           <option value='886'>Taiwan (+886)</option>
                           <option value='992'>Tajikistan (+992)</option>
                           <option value='255'>Tanzania (+255)</option>
                           <option value='66'>Thailand (+66)</option>
                           <option value='1'>The Bahamas (+1)</option>
                           <option value='220'>The Gambia (+220)</option>
                           <option value='670'>Timor-Leste (+670)</option>
                           <option value='228'>Togo (+228)</option>
                           <option value='690'>Tokelau (+690)</option>
                           <option value='676'>Tonga (+676)</option>
                           <option value='1'>Trinidad and Tobago (+1)</option>
                           <option value='216'>Tunisia (+216)</option>
                           <option value='90'>Turkey (+90)</option>
                           <option value='993'>Turkmenistan (+993)</option>
                           <option value='1'>Turks and Caicos Islands (+1)</option>
                           <option value='688'>Tuvalu (+688)</option>
                           <option value='256'>Uganda (+256)</option>
                           <option value='380'>Ukraine (+380)</option>
                           <option value='971'>United Arab Emirates (+971)</option>
                           <option value='44'>United Kingdom (+44)</option>
                           <option value='1'>United States (+1)</option>
                           <option value='598'>Uruguay (+598)</option>
                           <option value='1'>US Virgin Islands (+1)</option>
                           <option value='998'>Uzbekistan (+998)</option>
                           <option value='678'>Vanuatu (+678)</option>
                           <option value='39'>Vatican City (+39)</option>
                           <option value='58'>Venezuela (+58)</option>
                           <option value='84'>Vietnam (+84)</option>
                           <option value='681'>Wallis and Futuna (+681)</option>
                           <option value='967'>Yemen (+967)</option>
                           <option value='260'>Zambia (+260)</option>
                           <option value='263'>Zimbabwe (+263)</option>
                        </select>
                     </div>
                     <div class="col-sm-5">
                        <div class="input-group">
                           <input type="text" name="person_mobile_number" class="form-control" placeholder="Mobile phone number" data-toggle="tooltip" data-placement="left" data-original-title="Enter your (mobile) phone number. Only numbers allowed." required="1" value="{{Request::old('person_mobile_number')}}">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#mobile_number"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="mobile_number" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Mobile Number</h4>
                           </div>
                           <div class="modal-body">
                              <p>Enter your (mobile) phone number. Only numbers allowed.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.permanent_residence_address')}}</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="text" name="pemanent_residence_address" class="form-control" placeholder="Enter your permanent residence address." data-toggle="tooltip" data-placement="left" data-original-title="Enter your permanent residence address." required="1" value="{{Request::old('pemanent_residence_address')}}">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#address"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="address" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Permanent residence address</h4>
                           </div>
                           <div class="modal-body">
                              <p>Enter your permanent residence address.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.email')}}</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="email" name="Email" class="form-control" placeholder="Please, write your email address correctly." data-toggle="tooltip" data-placement="left" data-original-title="Enter your email address." required="1" value="{{Request::old('Email')}}">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#email_address"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="email_address" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Email Address</h4>
                           </div>
                           <div class="modal-body">
                              <p>Please, write your email address correctly. We will send your e-Visa to this email address.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.passport_expiry_date')}}</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="text" class="form-control person_document_expiry_date1" value="{{Request::old('passport_expiry_date')}}" name="passport_expiry_date" placeholder="Passport expiry date" data-toggle="tooltip" data-placement="left" data-original-title="Enter the date of expiry of your travel document in the dd.mm.yyyy format.Your passport has to be valid for, at least, 6 (six) months after your visa expires." required="1">
                           
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#document_expiry_date_modal"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="document_expiry_date_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Passport expiry date</h4>
                           </div>
                           <div class="modal-body">
                              <p>Enter the date of expiry of your travel document in the dd.mm.yyyy format.Your passport has to be valid for, at least, 6 (six) months after your visa expires.</p>
                           </div>
                        </div>
                     </div>
                  </div>




                  <div class="form-group col-sm-12 fmgp26">
                     <div class="col-lg-4 fmgp65">
                        <label class="control-label" for="email">{{__('personalinfo.attach_passport_copy')}}</label>
                     </div>
                     <div class="col-lg-8 fmgp65">
                        <div class="input-group">
                           <button type="button" id="img_upload_trigger" class="btn btn-primary btn-block fmgpr53" data-toggle="modal" data-target="#passport_form_modal_with_ok">Choose passport copy</button>
                           <span class="input-group-addon fmgpr52" data-toggle="modal" data-target="#passport_form_modal"><i class="fa fa-question-circle fa-lg" data-toggle="tooltip" data-placement="left" data-original-title="Please attach main page coloured-copy of your travel document. The file has to be in JPEG, JPG, PNG format. Your passport must be valid at least 3 months after your departure date in Azerbaijan."></i></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                           <input type="file" name="passport_form" accept="image/*" id="upload_passport_form" style="display:none;" required="1">
                           <div class="passport_image_load">
                              
                               <img id="blah" src="#" alt="" height="170" width="250" />
                           </div>
                           <div class="upload_passport_form_result" style="display:none;"></div>
                           <div class="image_passport_form_result"></div>
                           <div class="remove_passport_image_result"></div>
                        </div>
                     </div>
                     <script type="text/javascript">
                        function readURL(input) {

                             if (input.files && input.files[0]) {
                               var reader = new FileReader();

                               reader.onload = function(e) {
                                 $('#blah').attr('src', e.target.result);
                               }

                               reader.readAsDataURL(input.files[0]);
                             }
                           }

                           $("#upload_passport_form").change(function() {
                             readURL(this);
                           })
                     </script>
                  </div>
                  <div id="passport_not_upload_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Error</h4>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-lg-6">
                                       <!--<p></p>-->
                                       <p>Please attach main page coloured-copy of your travel document. The file has to be in JPEG, JPG, PNG format and the size must not exceed 5 MB.</p>
                                       <p>Your passport must be valid at least 6 (six) months after the date from which your visa is valid.</p>
                                       <p><span style="color:red !important;">Attention!</span> Dear applicant, please make sure that all the barcode symbols at the bottom of your travel document seem clearly on the copy you attach.</p>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                        <img src="{{URL::asset('assets/img/example_passport.jpg')}}" class="img-responsive" width="500">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="passport_form_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Passport Copy</h4>
                           </div>
                           <div class="modal-body">
                              <p>Please attach main page coloured-copy of your travel document. The file has to be in JPEG, JPG, PNG format. Your passport must be valid at least 3 months after your departure date in Azerbaijan.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="passport_form_modal_with_ok" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Passport Copy</h4>
                           </div>
                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="col-lg-6">
                                       <!--<p></p>-->
                                       <p>Please attach main page coloured-copy of your travel document. The file has to be in JPEG, JPG, PNG format and the size must not exceed 5 MB.</p>
                                       <p>Your passport must be valid at least 6 (six) months after your departure date in Azerbaijan.</p>
                                       <p><span style="color:red !important;">Attention!</span> Dear applicant, please make sure that all the barcode symbols at the bottom of your travel document seem clearly on the copy you attach.</p>
                                    </div>
                                    <div class="col-lg-6">
                                      
                                        <img src="{{URL::asset('assets/img/example_passport.jpg')}}" class="img-responsive" width="500">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <a class="btn btn-danger passport_click_ok1">Attach</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="passport_full_size_image_modal" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Full Size Image</h4>
                           </div>
                           <div class="modal-body">
                              <img class="img-responsive" src="" >
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4" for="email">{{__('personalinfo.plc_of_stay_in_az')}}</label>
                     <div class="col-sm-8">
                        <div class="input-group">
                           <input type="text" name="person_residence_address" class="form-control" placeholder="Enter the address of your place of stay in Azerbaijan." data-toggle="tooltip" data-placement="left" data-original-title="Enter the address of your place of stay in Azerbaijan." required="1" value="{{Request::old('person_residence_address')}}">
                           <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#residence_address"><i class="fa fa-question-circle fa-lg"></i></span>
                        </div>
                     </div>
                  </div>
                  <div id="residence_address" class="modal fade" role="dialog">
                     <div class="modal-dialog fmgp27">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Residence address</h4>
                           </div>
                           <div class="modal-body">
                              <p>Enter the address of your place of stay in Azerbaijan.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group col-sm-12 fmgp26">
                     <label class="control-label col-sm-4" for="email"></label>
                     <div class="col-sm-8">
                        {!!__('personalinfo.have_u_ever_visited_az')!!}
                       

                        <div class="radio1 pull-left margin_left_20">
                           <label style="font-size: 1em">
                           <input type="radio" name="person_visits_check" value="1">
                           <span class="cr margin_right_5 visit_check_span"><i class="cr-icon fa fa-circle"></i></span>
                           Yes
                           </label>
                        </div>
                        <div class="radio1 pull-right margin_right_20">
                           <label style="font-size: 1em">
                           <input type="radio" name="person_visits_check" value="0">
                           <span class="cr margin_right_5 visit_check_span"><i class="cr-icon fa fa-circle"></i></span>
                           No
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="reaon_area">
                     <div class="form-group col-sm-12 fmgp26">
                        <label class="control-label col-sm-4 fmgp771" for="email">{{__('personalinfo.reason')}}</label>
                        <div class="col-sm-8">
                           <div class="input-group">
                              <input type="text" name="person_reason" class="form-control" placeholder="Reason" data-toggle="tooltip" data-placement="left" data-original-title="Visit to the Nagorno-Karabakh and other regions of the Republic of Azerbaijan occupied by the Republic of Armenia (after 1991)">
                              <span class="input-group-addon fmgp52" data-toggle="modal" data-target="#reason"><i class="fa fa-question-circle fa-lg"></i></span>
                           </div>
                        </div>
                     </div>
                     <div id="reason" class="modal fade" role="dialog">
                        <div class="modal-dialog fmgp27">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <h4 class="modal-title">Reason</h4>
                              </div>
                              <div class="modal-body">
                                 <p>Visit to the Nagorno-Karabakh and other regions of the Republic of Azerbaijan occupied by the Republic of Armenia (after 1991)</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               
                  <div class="form-group">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="col-lg-4"></div>
                           <div class="col-lg-8 colstyle12">

                              @if(Session::get('applicant')>1)
                                 <button class="btn btn-success btn-block">{{__('personalinfo.newApplication')}}</button>
                              @else
                                 <button class="btn btn-success btn-block">{!!__('personalinfo.save_and_continue')!!}</button>
                              @endif
                             
                           </div>
                        </div>
                     </div>
                  </div>
                  </form>
               </div>
               <div class="col-lg-4">
                  <div class="commentsitem text-center">
                     <span class="fmgp55">{!!__('personalinfo.info_note')!!}</span><br><br>
                     <span>
                     {!!__('personalinfo.info_note_info')!!}
                        
                     </span>
                  </div>
                  <div class="country_passport_info">
                     <span class="fmgp13">{{session('select_country')}}</span><br>
                     <span class="fmgp14">{{session('document_type')}} Passport</span>
                  </div>
                  <div class="country_passport_info">
                     <span class="fmgp14">
                     {{session('arrival_date')}} 
                     - 
                     {{session('end_date')}}</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-1"></div>
   </div>
</div>

@endsection