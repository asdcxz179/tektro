@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_connect_contact.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.contact_form')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.contact')}}</li>
                    <li class="text-white text-truncate">{{__('front.contact_form')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="container mb-15">
    <div class="row">
        <div class="col-10 offset-1 col-lg-6 offset-lg-3">
            <form action="{{route('front.contact.store',['lang'=>$lang])}}" method="POST" id="contact">
                @csrf
                <div class="mb-4">
                    <label class="form-label fw-bold me-1">{{__('front.contact.question')}}<span class="text-danger">*</span></label>
                    <select class="form-select js-select2" aria-label="Default select" data-live-search="true" name="question" required id="question">
                        <option value="{{__('front.installation technical issues')}}">{{__('front.installation technical issues')}}</option>
                        <option value="{{__('front.product problem')}}">{{__('front.product problem')}}</option>
                        <option value="{{__('front.customer service')}}">{{__('front.customer service')}}</option>
                        <option value="{{__('front.maintenance')}}">{{__('front.maintenance')}}</option>
                        <option value="{{__('front.other problems')}}">{{__('front.other problems')}}</option>
                    </select>
                    @error('question')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold me-1">{{__('front.contact.area')}}<span class="text-danger">*</span></label>
                    <select class="form-select js-select2" aria-label="Default select" data-live-search="true" name="area_id" required id="area_id">
                        <option value="">{{__('front.Please select a continent')}}</option>
                        @foreach($areas as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                    </select>
                    @error('area')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <select class="d-none" aria-label="Default select" data-live-search="true" id="country_template">
                        
                        <optgroup label="Africa" id="area_3">
                            <option value="Algeria" label="Algeria">Algeria</option>
                            <option value="Angola" label="Angola">Angola</option>
                            <option value="Benin" label="Benin">Benin</option>
                            <option value="Botswana" label="Botswana">Botswana</option>
                            <option value="Burkina Faso" label="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi" label="Burundi">Burundi</option>
                            <option value="Cameroon" label="Cameroon">Cameroon</option>
                            <option value="Cape Verde" label="Cape Verde">Cape Verde</option>
                            <option value="Central African Republic" label="Central African Republic">Central African Republic</option>
                            <option value="Chad" label="Chad">Chad</option>
                            <option value="Comoros" label="Comoros">Comoros</option>
                            <option value="Congo - Brazzaville" label="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option value="Congo - Kinshasa" label="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option value="Côte d’Ivoire" label="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option value="Djibouti" label="Djibouti">Djibouti</option>
                            <option value="Egypt" label="Egypt">Egypt</option>
                            <option value="Equatorial Guinea" label="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea" label="Eritrea">Eritrea</option>
                            <option value="Ethiopia" label="Ethiopia">Ethiopia</option>
                            <option value="Gabon" label="Gabon">Gabon</option>
                            <option value="Gambia" label="Gambia">Gambia</option>
                            <option value="Ghana" label="Ghana">Ghana</option>
                            <option value="Guinea" label="Guinea">Guinea</option>
                            <option value="Guinea-Bissau" label="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Kenya" label="Kenya">Kenya</option>
                            <option value="Lesotho" label="Lesotho">Lesotho</option>
                            <option value="Liberia" label="Liberia">Liberia</option>
                            <option value="Libya" label="Libya">Libya</option>
                            <option value="Madagascar" label="Madagascar">Madagascar</option>
                            <option value="Malawi" label="Malawi">Malawi</option>
                            <option value="Mali" label="Mali">Mali</option>
                            <option value="Mauritania" label="Mauritania">Mauritania</option>
                            <option value="Mauritius" label="Mauritius">Mauritius</option>
                            <option value="Mayotte" label="Mayotte">Mayotte</option>
                            <option value="Morocco" label="Morocco">Morocco</option>
                            <option value="Mozambique" label="Mozambique">Mozambique</option>
                            <option value="Namibia" label="Namibia">Namibia</option>
                            <option value="Niger" label="Niger">Niger</option>
                            <option value="Nigeria" label="Nigeria">Nigeria</option>
                            <option value="Rwanda" label="Rwanda">Rwanda</option>
                            <option value="Réunion" label="Réunion">Réunion</option>
                            <option value="Saint Helena" label="Saint Helena">Saint Helena</option>
                            <option value="Senegal" label="Senegal">Senegal</option>
                            <option value="Seychelles" label="Seychelles">Seychelles</option>
                            <option value="Sierra Leone" label="Sierra Leone">Sierra Leone</option>
                            <option value="Somalia" label="Somalia">Somalia</option>
                            <option value="South Africa" label="South Africa">South Africa</option>
                            <option value="Sudan" label="Sudan">Sudan</option>
                            <option value="Swaziland" label="Swaziland">Swaziland</option>
                            <option value="São Tomé and Príncipe" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                            <option value="Tanzania" label="Tanzania">Tanzania</option>
                            <option value="Togo" label="Togo">Togo</option>
                            <option value="Tunisia" label="Tunisia">Tunisia</option>
                            <option value="Uganda" label="Uganda">Uganda</option>
                            <option value="Western Sahara" label="Western Sahara">Western Sahara</option>
                            <option value="Zambia" label="Zambia">Zambia</option>
                            <option value="Zimbabwe" label="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                        <optgroup label="Americas" id="area_4">
                        <option value="Anguilla" label="Anguilla">Anguilla</option>
                            <option value="Antigua and Barbuda" label="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina" label="Argentina">Argentina</option>
                            <option value="Aruba" label="Aruba">Aruba</option>
                            <option value="Bahamas" label="Bahamas">Bahamas</option>
                            <option value="Barbados" label="Barbados">Barbados</option>
                            <option value="Belize" label="Belize">Belize</option>
                            <option value="Bermuda" label="Bermuda">Bermuda</option>
                            <option value="Bolivia" label="Bolivia">Bolivia</option>
                            <option value="Brazil" label="Brazil">Brazil</option>
                            <option value="British Virgin Islands" label="British Virgin Islands">British Virgin Islands</option>
                            <option value="Canada" label="Canada">Canada</option>
                            <option value="Cayman Islands" label="Cayman Islands">Cayman Islands</option>
                            <option value="Chile" label="Chile">Chile</option>
                            <option value="Colombia" label="Colombia">Colombia</option>
                            <option value="Costa Rica" label="Costa Rica">Costa Rica</option>
                            <option value="Cuba" label="Cuba">Cuba</option>
                            <option value="Dominica" label="Dominica">Dominica</option>
                            <option value="Dominican Republic" label="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador" label="Ecuador">Ecuador</option>
                            <option value="El Salvador" label="El Salvador">El Salvador</option>
                            <option value="Falkland Islands" label="Falkland Islands">Falkland Islands</option>
                            <option value="French Guiana" label="French Guiana">French Guiana</option>
                            <option value="Greenland" label="Greenland">Greenland</option>
                            <option value="Grenada" label="Grenada">Grenada</option>
                            <option value="Guadeloupe" label="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala" label="Guatemala">Guatemala</option>
                            <option value="Guyana" label="Guyana">Guyana</option>
                            <option value="Haiti" label="Haiti">Haiti</option>
                            <option value="Honduras" label="Honduras">Honduras</option>
                            <option value="Jamaica" label="Jamaica">Jamaica</option>
                            <option value="Martinique" label="Martinique">Martinique</option>
                            <option value="Mexico" label="Mexico">Mexico</option>
                            <option value="Montserrat" label="Montserrat">Montserrat</option>
                            <option value="Netherlands Antilles" label="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="Nicaragua" label="Nicaragua">Nicaragua</option>
                            <option value="Panama" label="Panama">Panama</option>
                            <option value="Paraguay" label="Paraguay">Paraguay</option>
                            <option value="Peru" label="Peru">Peru</option>
                            <option value="Puerto Rico" label="Puerto Rico">Puerto Rico</option>
                            <option value="Saint Barthélemy" label="Saint Barthélemy">Saint Barthélemy</option>
                            <option value="Saint Kitts and Nevis" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia" label="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin" label="Saint Martin">Saint Martin</option>
                            <option value="Saint Pierre and Miquelon" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and the Grenadines" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Suriname" label="Suriname">Suriname</option>
                            <option value="Trinidad and Tobago" label="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Turks and Caicos Islands" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="U.S. Virgin Islands" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                            <option value="United States" label="United States">United States</option>
                            <option value="Uruguay" label="Uruguay">Uruguay</option>
                            <option value="Venezuela" label="Venezuela">Venezuela</option>
                        </optgroup>
                        <optgroup label="Asia" id="area_1">
                        <option value="Afghanistan" label="Afghanistan">Afghanistan</option>
                            <option value="Armenia" label="Armenia">Armenia</option>
                            <option value="Azerbaijan" label="Azerbaijan">Azerbaijan</option>
                            <option value="Bahrain" label="Bahrain">Bahrain</option>
                            <option value="Bangladesh" label="Bangladesh">Bangladesh</option>
                            <option value="Bhutan" label="Bhutan">Bhutan</option>
                            <option value="Brunei" label="Brunei">Brunei</option>
                            <option value="Cambodia" label="Cambodia">Cambodia</option>
                            <option value="China" label="China">China</option>
                            <option value="Georgia" label="Georgia">Georgia</option>
                            <option value="Hong Kong SAR China" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option value="India" label="India">India</option>
                            <option value="Indonesia" label="Indonesia">Indonesia</option>
                            <option value="Iran" label="Iran">Iran</option>
                            <option value="Iraq" label="Iraq">Iraq</option>
                            <option value="Israel" label="Israel">Israel</option>
                            <option value="Japan" label="Japan">Japan</option>
                            <option value="Jordan" label="Jordan">Jordan</option>
                            <option value="Kazakhstan" label="Kazakhstan">Kazakhstan</option>
                            <option value="Kuwait" label="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos" label="Laos">Laos</option>
                            <option value="Lebanon" label="Lebanon">Lebanon</option>
                            <option value="Macau SAR China" label="Macau SAR China">Macau SAR China</option>
                            <option value="Malaysia" label="Malaysia">Malaysia</option>
                            <option value="Maldives" label="Maldives">Maldives</option>
                            <option value="Mongolia" label="Mongolia">Mongolia</option>
                            <option value="Myanmar [Burma]" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option value="Nepal" label="Nepal">Nepal</option>
                            <option value="Neutral Zone" label="Neutral Zone">Neutral Zone</option>
                            <option value="North Korea" label="North Korea">North Korea</option>
                            <option value="Oman" label="Oman">Oman</option>
                            <option value="Pakistan" label="Pakistan">Pakistan</option>
                            <option value="Palestinian Territories" label="Palestinian Territories">Palestinian Territories</option>
                            <option value="People's Democratic Republic of Yemen" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option value="Philippines" label="Philippines">Philippines</option>
                            <option value="Qatar" label="Qatar">Qatar</option>
                            <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                            <option value="Singapore" label="Singapore">Singapore</option>
                            <option value="South Korea" label="South Korea">South Korea</option>
                            <option value="Sri Lanka" label="Sri Lanka">Sri Lanka</option>
                            <option value="Syria" label="Syria">Syria</option>
                            <option value="Taiwan" label="Taiwan">Taiwan</option>
                            <option value="Tajikistan" label="Tajikistan">Tajikistan</option>
                            <option value="Thailand" label="Thailand">Thailand</option>
                            <option value="Timor-Leste" label="Timor-Leste">Timor-Leste</option>
                            <option value="Turkey" label="Turkey">Turkey</option>
                            <option value="Turkmenistan" label="Turkmenistan">Turkmenistan</option>
                            <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                            <option value="Uzbekistan" label="Uzbekistan">Uzbekistan</option>
                            <option value="Vietnam" label="Vietnam">Vietnam</option>
                            <option value="Yemen" label="Yemen">Yemen</option>
                        </optgroup>
                        <optgroup label="Europe" id="area_2">
                            <option value="Albania" label="Albania">Albania</option>
                            <option value="Andorra" label="Andorra">Andorra</option>
                            <option value="Austria" label="Austria">Austria</option>
                            <option value="Belarus" label="Belarus">Belarus</option>
                            <option value="Belgium" label="Belgium">Belgium</option>
                            <option value="Bosnia and Herzegovina" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Bulgaria" label="Bulgaria">Bulgaria</option>
                            <option value="Croatia" label="Croatia">Croatia</option>
                            <option value="Cyprus" label="Cyprus">Cyprus</option>
                            <option value="Czech Republic" label="Czech Republic">Czech Republic</option>
                            <option value="Denmark" label="Denmark">Denmark</option>
                            <option value="East Germany" label="East Germany">East Germany</option>
                            <option value="Estonia" label="Estonia">Estonia</option>
                            <option value="Faroe Islands" label="Faroe Islands">Faroe Islands</option>
                            <option value="Finland" label="Finland">Finland</option>
                            <option value="France" label="France">France</option>
                            <option value="Germany" label="Germany">Germany</option>
                            <option value="Gibraltar" label="Gibraltar">Gibraltar</option>
                            <option value="Greece" label="Greece">Greece</option>
                            <option value="Guernsey" label="Guernsey">Guernsey</option>
                            <option value="Hungary" label="Hungary">Hungary</option>
                            <option value="Iceland" label="Iceland">Iceland</option>
                            <option value="Ireland" label="Ireland">Ireland</option>
                            <option value="Isle of Man" label="Isle of Man">Isle of Man</option>
                            <option value="Italy" label="Italy">Italy</option>
                            <option value="Jersey" label="Jersey">Jersey</option>
                            <option value="Latvia" label="Latvia">Latvia</option>
                            <option value="Liechtenstein" label="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania" label="Lithuania">Lithuania</option>
                            <option value="Luxembourg" label="Luxembourg">Luxembourg</option>
                            <option value="Macedonia" label="Macedonia">Macedonia</option>
                            <option value="Malta" label="Malta">Malta</option>
                            <option value="Metropolitan France" label="Metropolitan France">Metropolitan France</option>
                            <option value="Moldova" label="Moldova">Moldova</option>
                            <option value="Monaco" label="Monaco">Monaco</option>
                            <option value="Montenegro" label="Montenegro">Montenegro</option>
                            <option value="Netherlands" label="Netherlands">Netherlands</option>
                            <option value="Norway" label="Norway">Norway</option>
                            <option value="Poland" label="Poland">Poland</option>
                            <option value="Portugal" label="Portugal">Portugal</option>
                            <option value="Romania" label="Romania">Romania</option>
                            <option value="Russia" label="Russia">Russia</option>
                            <option value="San Marino" label="San Marino">San Marino</option>
                            <option value="Serbia" label="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro" label="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Slovakia" label="Slovakia">Slovakia</option>
                            <option value="Slovenia" label="Slovenia">Slovenia</option>
                            <option value="Spain" label="Spain">Spain</option>
                            <option value="Svalbard and Jan Mayen" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Sweden" label="Sweden">Sweden</option>
                            <option value="Switzerland" label="Switzerland">Switzerland</option>
                            <option value="Ukraine" label="Ukraine">Ukraine</option>
                            <option value="Union of Soviet Socialist Republics" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                            <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
                            <option value="Vatican City" label="Vatican City">Vatican City</option>
                            <option value="Åland Islands" label="Åland Islands">Åland Islands</option>
                        </optgroup>
                        <optgroup label="Oceania" id="area_5">
                            <option value="American Samoa" label="American Samoa">American Samoa</option>
                            <option value="Antarctica" label="Antarctica">Antarctica</option>
                            <option value="Australia" label="Australia">Australia</option>
                            <option value="Bouvet Island" label="Bouvet Island">Bouvet Island</option>
                            <option value="British Indian Ocean Territory" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Christmas Island" label="Christmas Island">Christmas Island</option>
                            <option value="Cocos [Keeling] Islands" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                            <option value="Cook Islands" label="Cook Islands">Cook Islands</option>
                            <option value="Fiji" label="Fiji">Fiji</option>
                            <option value="French Polynesia" label="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories" label="French Southern Territories">French Southern Territories</option>
                            <option value="Guam" label="Guam">Guam</option>
                            <option value="Heard Island and McDonald Islands" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option value="Kiribati" label="Kiribati">Kiribati</option>
                            <option value="Marshall Islands" label="Marshall Islands">Marshall Islands</option>
                            <option value="Micronesia" label="Micronesia">Micronesia</option>
                            <option value="Nauru" label="Nauru">Nauru</option>
                            <option value="New Caledonia" label="New Caledonia">New Caledonia</option>
                            <option value="New Zealand" label="New Zealand">New Zealand</option>
                            <option value="Niue" label="Niue">Niue</option>
                            <option value="Norfolk Island" label="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands" label="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Palau" label="Palau">Palau</option>
                            <option value="Papua New Guinea" label="Papua New Guinea">Papua New Guinea</option>
                            <option value="Pitcairn Islands" label="Pitcairn Islands">Pitcairn Islands</option>
                            <option value="Samoa" label="Samoa">Samoa</option>
                            <option value="Solomon Islands" label="Solomon Islands">Solomon Islands</option>
                            <option value="South Georgia and the South Sandwich Islands" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option value="Tokelau" label="Tokelau">Tokelau</option>
                            <option value="Tonga" label="Tonga">Tonga</option>
                            <option value="Tuvalu" label="Tuvalu">Tuvalu</option>
                            <option value="U.S. Minor Outlying Islands" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                            <option value="Vanuatu" label="Vanuatu">Vanuatu</option>
                            <option value="Wallis and Futuna" label="Wallis and Futuna">Wallis and Futuna</option>
                        </optgroup>
                    </select>
                    <label class="form-label fw-bold  me-1">{{__('front.contact.country')}}<span class="text-danger">*</span></label>
                    <select class="form-select js-select2" aria-label="Default select" data-live-search="true" name="country" required id="country">
                        <option value="" label="{{__('front.Please select a country')}}">{{__('front.Please select a country')}}</option>
                        <optgroup id="country-optgroup-Africa" label="Africa" >
                            <option value="Algeria" label="Algeria">Algeria</option>
                            <option value="Angola" label="Angola">Angola</option>
                            <option value="Benin" label="Benin">Benin</option>
                            <option value="Botswana" label="Botswana">Botswana</option>
                            <option value="Burkina Faso" label="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi" label="Burundi">Burundi</option>
                            <option value="Cameroon" label="Cameroon">Cameroon</option>
                            <option value="Cape Verde" label="Cape Verde">Cape Verde</option>
                            <option value="Central African Republic" label="Central African Republic">Central African Republic</option>
                            <option value="Chad" label="Chad">Chad</option>
                            <option value="Comoros" label="Comoros">Comoros</option>
                            <option value="Congo - Brazzaville" label="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option value="Congo - Kinshasa" label="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option value="Côte d’Ivoire" label="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option value="Djibouti" label="Djibouti">Djibouti</option>
                            <option value="Egypt" label="Egypt">Egypt</option>
                            <option value="Equatorial Guinea" label="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea" label="Eritrea">Eritrea</option>
                            <option value="Ethiopia" label="Ethiopia">Ethiopia</option>
                            <option value="Gabon" label="Gabon">Gabon</option>
                            <option value="Gambia" label="Gambia">Gambia</option>
                            <option value="Ghana" label="Ghana">Ghana</option>
                            <option value="Guinea" label="Guinea">Guinea</option>
                            <option value="Guinea-Bissau" label="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Kenya" label="Kenya">Kenya</option>
                            <option value="Lesotho" label="Lesotho">Lesotho</option>
                            <option value="Liberia" label="Liberia">Liberia</option>
                            <option value="Libya" label="Libya">Libya</option>
                            <option value="Madagascar" label="Madagascar">Madagascar</option>
                            <option value="Malawi" label="Malawi">Malawi</option>
                            <option value="Mali" label="Mali">Mali</option>
                            <option value="Mauritania" label="Mauritania">Mauritania</option>
                            <option value="Mauritius" label="Mauritius">Mauritius</option>
                            <option value="Mayotte" label="Mayotte">Mayotte</option>
                            <option value="Morocco" label="Morocco">Morocco</option>
                            <option value="Mozambique" label="Mozambique">Mozambique</option>
                            <option value="Namibia" label="Namibia">Namibia</option>
                            <option value="Niger" label="Niger">Niger</option>
                            <option value="Nigeria" label="Nigeria">Nigeria</option>
                            <option value="Rwanda" label="Rwanda">Rwanda</option>
                            <option value="Réunion" label="Réunion">Réunion</option>
                            <option value="Saint Helena" label="Saint Helena">Saint Helena</option>
                            <option value="Senegal" label="Senegal">Senegal</option>
                            <option value="Seychelles" label="Seychelles">Seychelles</option>
                            <option value="Sierra Leone" label="Sierra Leone">Sierra Leone</option>
                            <option value="Somalia" label="Somalia">Somalia</option>
                            <option value="South Africa" label="South Africa">South Africa</option>
                            <option value="Sudan" label="Sudan">Sudan</option>
                            <option value="Swaziland" label="Swaziland">Swaziland</option>
                            <option value="São Tomé and Príncipe" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                            <option value="Tanzania" label="Tanzania">Tanzania</option>
                            <option value="Togo" label="Togo">Togo</option>
                            <option value="Tunisia" label="Tunisia">Tunisia</option>
                            <option value="Uganda" label="Uganda">Uganda</option>
                            <option value="Western Sahara" label="Western Sahara">Western Sahara</option>
                            <option value="Zambia" label="Zambia">Zambia</option>
                            <option value="Zimbabwe" label="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Americas" label="Americas" >
                        <option value="Anguilla" label="Anguilla">Anguilla</option>
                            <option value="Antigua and Barbuda" label="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina" label="Argentina">Argentina</option>
                            <option value="Aruba" label="Aruba">Aruba</option>
                            <option value="Bahamas" label="Bahamas">Bahamas</option>
                            <option value="Barbados" label="Barbados">Barbados</option>
                            <option value="Belize" label="Belize">Belize</option>
                            <option value="Bermuda" label="Bermuda">Bermuda</option>
                            <option value="Bolivia" label="Bolivia">Bolivia</option>
                            <option value="Brazil" label="Brazil">Brazil</option>
                            <option value="British Virgin Islands" label="British Virgin Islands">British Virgin Islands</option>
                            <option value="Canada" label="Canada">Canada</option>
                            <option value="Cayman Islands" label="Cayman Islands">Cayman Islands</option>
                            <option value="Chile" label="Chile">Chile</option>
                            <option value="Colombia" label="Colombia">Colombia</option>
                            <option value="Costa Rica" label="Costa Rica">Costa Rica</option>
                            <option value="Cuba" label="Cuba">Cuba</option>
                            <option value="Dominica" label="Dominica">Dominica</option>
                            <option value="Dominican Republic" label="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador" label="Ecuador">Ecuador</option>
                            <option value="El Salvador" label="El Salvador">El Salvador</option>
                            <option value="Falkland Islands" label="Falkland Islands">Falkland Islands</option>
                            <option value="French Guiana" label="French Guiana">French Guiana</option>
                            <option value="Greenland" label="Greenland">Greenland</option>
                            <option value="Grenada" label="Grenada">Grenada</option>
                            <option value="Guadeloupe" label="Guadeloupe">Guadeloupe</option>
                            <option value="Guatemala" label="Guatemala">Guatemala</option>
                            <option value="Guyana" label="Guyana">Guyana</option>
                            <option value="Haiti" label="Haiti">Haiti</option>
                            <option value="Honduras" label="Honduras">Honduras</option>
                            <option value="Jamaica" label="Jamaica">Jamaica</option>
                            <option value="Martinique" label="Martinique">Martinique</option>
                            <option value="Mexico" label="Mexico">Mexico</option>
                            <option value="Montserrat" label="Montserrat">Montserrat</option>
                            <option value="Netherlands Antilles" label="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="Nicaragua" label="Nicaragua">Nicaragua</option>
                            <option value="Panama" label="Panama">Panama</option>
                            <option value="Paraguay" label="Paraguay">Paraguay</option>
                            <option value="Peru" label="Peru">Peru</option>
                            <option value="Puerto Rico" label="Puerto Rico">Puerto Rico</option>
                            <option value="Saint Barthélemy" label="Saint Barthélemy">Saint Barthélemy</option>
                            <option value="Saint Kitts and Nevis" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia" label="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Martin" label="Saint Martin">Saint Martin</option>
                            <option value="Saint Pierre and Miquelon" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and the Grenadines" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Suriname" label="Suriname">Suriname</option>
                            <option value="Trinidad and Tobago" label="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Turks and Caicos Islands" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="U.S. Virgin Islands" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                            <option value="United States" label="United States">United States</option>
                            <option value="Uruguay" label="Uruguay">Uruguay</option>
                            <option value="Venezuela" label="Venezuela">Venezuela</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Asia" label="Asia" >
                        <option value="Afghanistan" label="Afghanistan">Afghanistan</option>
                            <option value="Armenia" label="Armenia">Armenia</option>
                            <option value="Azerbaijan" label="Azerbaijan">Azerbaijan</option>
                            <option value="Bahrain" label="Bahrain">Bahrain</option>
                            <option value="Bangladesh" label="Bangladesh">Bangladesh</option>
                            <option value="Bhutan" label="Bhutan">Bhutan</option>
                            <option value="Brunei" label="Brunei">Brunei</option>
                            <option value="Cambodia" label="Cambodia">Cambodia</option>
                            <option value="China" label="China">China</option>
                            <option value="Georgia" label="Georgia">Georgia</option>
                            <option value="Hong Kong SAR China" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option value="India" label="India">India</option>
                            <option value="Indonesia" label="Indonesia">Indonesia</option>
                            <option value="Iran" label="Iran">Iran</option>
                            <option value="Iraq" label="Iraq">Iraq</option>
                            <option value="Israel" label="Israel">Israel</option>
                            <option value="Japan" label="Japan">Japan</option>
                            <option value="Jordan" label="Jordan">Jordan</option>
                            <option value="Kazakhstan" label="Kazakhstan">Kazakhstan</option>
                            <option value="Kuwait" label="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos" label="Laos">Laos</option>
                            <option value="Lebanon" label="Lebanon">Lebanon</option>
                            <option value="Macau SAR China" label="Macau SAR China">Macau SAR China</option>
                            <option value="Malaysia" label="Malaysia">Malaysia</option>
                            <option value="Maldives" label="Maldives">Maldives</option>
                            <option value="Mongolia" label="Mongolia">Mongolia</option>
                            <option value="Myanmar [Burma]" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option value="Nepal" label="Nepal">Nepal</option>
                            <option value="Neutral Zone" label="Neutral Zone">Neutral Zone</option>
                            <option value="North Korea" label="North Korea">North Korea</option>
                            <option value="Oman" label="Oman">Oman</option>
                            <option value="Pakistan" label="Pakistan">Pakistan</option>
                            <option value="Palestinian Territories" label="Palestinian Territories">Palestinian Territories</option>
                            <option value="People's Democratic Republic of Yemen" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option value="Philippines" label="Philippines">Philippines</option>
                            <option value="Qatar" label="Qatar">Qatar</option>
                            <option value="Saudi Arabia" label="Saudi Arabia">Saudi Arabia</option>
                            <option value="Singapore" label="Singapore">Singapore</option>
                            <option value="South Korea" label="South Korea">South Korea</option>
                            <option value="Sri Lanka" label="Sri Lanka">Sri Lanka</option>
                            <option value="Syria" label="Syria">Syria</option>
                            <option value="Taiwan" label="Taiwan">Taiwan</option>
                            <option value="Tajikistan" label="Tajikistan">Tajikistan</option>
                            <option value="Thailand" label="Thailand">Thailand</option>
                            <option value="Timor-Leste" label="Timor-Leste">Timor-Leste</option>
                            <option value="Turkey" label="Turkey">Turkey</option>
                            <option value="Turkmenistan" label="Turkmenistan">Turkmenistan</option>
                            <option value="United Arab Emirates" label="United Arab Emirates">United Arab Emirates</option>
                            <option value="Uzbekistan" label="Uzbekistan">Uzbekistan</option>
                            <option value="Vietnam" label="Vietnam">Vietnam</option>
                            <option value="Yemen" label="Yemen">Yemen</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Europe" label="Europe">
                            <option value="Albania" label="Albania">Albania</option>
                            <option value="Andorra" label="Andorra">Andorra</option>
                            <option value="Austria" label="Austria">Austria</option>
                            <option value="Belarus" label="Belarus">Belarus</option>
                            <option value="Belgium" label="Belgium">Belgium</option>
                            <option value="Bosnia and Herzegovina" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Bulgaria" label="Bulgaria">Bulgaria</option>
                            <option value="Croatia" label="Croatia">Croatia</option>
                            <option value="Cyprus" label="Cyprus">Cyprus</option>
                            <option value="Czech Republic" label="Czech Republic">Czech Republic</option>
                            <option value="Denmark" label="Denmark">Denmark</option>
                            <option value="East Germany" label="East Germany">East Germany</option>
                            <option value="Estonia" label="Estonia">Estonia</option>
                            <option value="Faroe Islands" label="Faroe Islands">Faroe Islands</option>
                            <option value="Finland" label="Finland">Finland</option>
                            <option value="France" label="France">France</option>
                            <option value="Germany" label="Germany">Germany</option>
                            <option value="Gibraltar" label="Gibraltar">Gibraltar</option>
                            <option value="Greece" label="Greece">Greece</option>
                            <option value="Guernsey" label="Guernsey">Guernsey</option>
                            <option value="Hungary" label="Hungary">Hungary</option>
                            <option value="Iceland" label="Iceland">Iceland</option>
                            <option value="Ireland" label="Ireland">Ireland</option>
                            <option value="Isle of Man" label="Isle of Man">Isle of Man</option>
                            <option value="Italy" label="Italy">Italy</option>
                            <option value="Jersey" label="Jersey">Jersey</option>
                            <option value="Latvia" label="Latvia">Latvia</option>
                            <option value="Liechtenstein" label="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania" label="Lithuania">Lithuania</option>
                            <option value="Luxembourg" label="Luxembourg">Luxembourg</option>
                            <option value="Macedonia" label="Macedonia">Macedonia</option>
                            <option value="Malta" label="Malta">Malta</option>
                            <option value="Metropolitan France" label="Metropolitan France">Metropolitan France</option>
                            <option value="Moldova" label="Moldova">Moldova</option>
                            <option value="Monaco" label="Monaco">Monaco</option>
                            <option value="Montenegro" label="Montenegro">Montenegro</option>
                            <option value="Netherlands" label="Netherlands">Netherlands</option>
                            <option value="Norway" label="Norway">Norway</option>
                            <option value="Poland" label="Poland">Poland</option>
                            <option value="Portugal" label="Portugal">Portugal</option>
                            <option value="Romania" label="Romania">Romania</option>
                            <option value="Russia" label="Russia">Russia</option>
                            <option value="San Marino" label="San Marino">San Marino</option>
                            <option value="Serbia" label="Serbia">Serbia</option>
                            <option value="Serbia and Montenegro" label="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Slovakia" label="Slovakia">Slovakia</option>
                            <option value="Slovenia" label="Slovenia">Slovenia</option>
                            <option value="Spain" label="Spain">Spain</option>
                            <option value="Svalbard and Jan Mayen" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Sweden" label="Sweden">Sweden</option>
                            <option value="Switzerland" label="Switzerland">Switzerland</option>
                            <option value="Ukraine" label="Ukraine">Ukraine</option>
                            <option value="Union of Soviet Socialist Republics" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                            <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
                            <option value="Vatican City" label="Vatican City">Vatican City</option>
                            <option value="Åland Islands" label="Åland Islands">Åland Islands</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Oceania" label="Oceania">
                            <option value="American Samoa" label="American Samoa">American Samoa</option>
                            <option value="Antarctica" label="Antarctica">Antarctica</option>
                            <option value="Australia" label="Australia">Australia</option>
                            <option value="Bouvet Island" label="Bouvet Island">Bouvet Island</option>
                            <option value="British Indian Ocean Territory" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Christmas Island" label="Christmas Island">Christmas Island</option>
                            <option value="Cocos [Keeling] Islands" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                            <option value="Cook Islands" label="Cook Islands">Cook Islands</option>
                            <option value="Fiji" label="Fiji">Fiji</option>
                            <option value="French Polynesia" label="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories" label="French Southern Territories">French Southern Territories</option>
                            <option value="Guam" label="Guam">Guam</option>
                            <option value="Heard Island and McDonald Islands" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option value="Kiribati" label="Kiribati">Kiribati</option>
                            <option value="Marshall Islands" label="Marshall Islands">Marshall Islands</option>
                            <option value="Micronesia" label="Micronesia">Micronesia</option>
                            <option value="Nauru" label="Nauru">Nauru</option>
                            <option value="New Caledonia" label="New Caledonia">New Caledonia</option>
                            <option value="New Zealand" label="New Zealand">New Zealand</option>
                            <option value="Niue" label="Niue">Niue</option>
                            <option value="Norfolk Island" label="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands" label="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Palau" label="Palau">Palau</option>
                            <option value="Papua New Guinea" label="Papua New Guinea">Papua New Guinea</option>
                            <option value="Pitcairn Islands" label="Pitcairn Islands">Pitcairn Islands</option>
                            <option value="Samoa" label="Samoa">Samoa</option>
                            <option value="Solomon Islands" label="Solomon Islands">Solomon Islands</option>
                            <option value="South Georgia and the South Sandwich Islands" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option value="Tokelau" label="Tokelau">Tokelau</option>
                            <option value="Tonga" label="Tonga">Tonga</option>
                            <option value="Tuvalu" label="Tuvalu">Tuvalu</option>
                            <option value="U.S. Minor Outlying Islands" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                            <option value="Vanuatu" label="Vanuatu">Vanuatu</option>
                            <option value="Wallis and Futuna" label="Wallis and Futuna">Wallis and Futuna</option>
                        </optgroup>
                    </select>
                    @error('country')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                    <!-- select with search start -->
                    <!-- <select class="form-select selectpicker" data-live-search="true">
                        <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        </select> -->
                        
                    <!-- select with search end -->
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold me-1">{{__('front.contact.name')}}<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="contactsFormName" placeholder="" aria-label="" value="{{old('name')}}" required>
                    @error('name')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold me-1" for="contactsFormEmail">{{__('front.contact.email')}}<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="contactsFormEmail" placeholder="example@mail.com" aria-label="" value="{{old('email')}}" required>
                    @error('email')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold me-1" for="contactsFormTel">{{__('front.contact.phone')}}</label>
                    <input type="tel" class="form-control" name="phone" id="contactsFormTel" placeholder="" aria-label="" value="{{old('phone')}}">
                    @error('phone')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold me-1" for="contactsFormDetails">{{__('front.contact.content')}}<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="content" id="contactsFormDetails" placeholder="{{__('front.please input text')}}" aria-label="" rows="5" required>{{old('content')}}</textarea>
                    @error('content')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-4">
                    <label class="form-label fw-bold me-1" for="contactsFormCaptcha">{{__('front.contact.captcha')}}<span class="text-danger">*</span></label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="captcha" id="contactsFormCaptcha" placeholder="" aria-label="" required>
                            @error('captcha')
                                <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <img src="{{captcha_src('flat')}}" alt="" style="cursor:pointer;" onclick="this.src='{{captcha_src()}}'+Math.random()">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <input type="hidden" name="google_recaptcha" id="ctl-recaptcha-token">
                    @error('google_recaptcha')
                        <span class="text-danger" style="font-size:14px;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="{{__('front.confirm send')}}" class="c_btn btn_dark">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="modal" tabindex="-1" id="message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <p></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="c_btn btn_dark" data-bs-dismiss="modal" aria-label="Close">{{__('front.confirm')}}</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<link rel="stylesheet" href="{{asset('js/plugins/select2/css/select2.min.css')}}">
<style>
    .grecaptcha-badge { 
        visibility: hidden;
    }
    .error {
        color: red;
        margin-top: 5px;
    }
</style>
@endpush
@push('javascript')
<script src="{{asset('js/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
@if(__('front.jquery.validation'))
<script src="{{asset('js/plugins/jquery-validation/localization/'.__('front.jquery.validation').'.min.js')}}"></script>
@endif
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.RECAPTCHA_SITE_KEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config("services.recaptcha.RECAPTCHA_SITE_KEY") }}').then(function(token) {
            document.getElementById('ctl-recaptcha-token').value = token;
        });
    });
</script> 
<script>
    $('.js-select2').select2();
    // $('.js-select2').on('select2:select', function (e) {
    //     $(e.target).change();
    //     var data = e.params.data;
    //     console.log(data);
    // });
    $('select[name="area_id"]').change(function(){
        // console.log($(`#country_template #area_${$(this).val()}`)[0].outerHTML);
        $('select[name="country"]').html(`<option value="" label="{{__('front.Please select a country')}}">{{__('front.Please select a country')}}</option>`+$(`#country_template #area_${$(this).val()}`)[0].outerHTML);
        $('select[name="country"]').select2();
    });
	$(document).ready(function(){
		@if(Session::get('result') && Session::get('result')[0])
            $('#message').modal('show');
            $('#message p').text('{{__('front.submit success')}}');
		@elseif(Session::get('result') && !Session::get('result')[0])
            $('#message p').text('{{__('front.submit error')}}');
		@endif
	});
	@php
		Session::pull('result');
	@endphp
    $.extend( $.validator.messages, {
        required: "{{__('front.Please complete')}}",
    } );
        $("#contact").validate({
            rules: {
				area_id: "required",
                country: "required",
                contactsFormName: "required",
                contactsFormEmail: "required",
                contactsFormTel: "required",
                contactsFormDetails: "required",
                contactsFormCaptcha: "required",
			},
			messages: {
				area_id: "{{__('front.Please select a continent')}}",
                country: "{{__('front.Please select a country')}}",
                contactsFormName: "{{__('front.Please complete')}}",
                contactsFormEmail: "{{__('front.Please complete')}}",
                contactsFormTel: "{{__('front.Please complete')}}",
                contactsFormDetails: "{{__('front.Please complete')}}",
                contactsFormCaptcha: "{{__('front.Please complete')}}",
			},
            errorPlacement: function(error, element) {
                element.parents('.mb-4').find('.form-label').after(error);
            }
        });
</script>
@endpush