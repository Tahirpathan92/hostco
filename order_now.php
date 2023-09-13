<?php include 'header.php'?>

            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Order Now</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            
<section class="order_now">
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg_order_form bg_order_padding borderline">
                <h3>Please Enter Details</h3>
                <p>Submit this form with your domain / hosting details you are interested in and we will contact you shortly for specialized discounted price</p>
                <form action="send_registeration.php" method="post" class="form-border" onSubmit="return formValidation();" name="order_now_form" id="order_form">
                     <div class="d_flex">
                       <input type="text" name="f_name" id="f_name" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="First name">
                       <input type="text" name="l_name" id="l_name" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="Last name">
                     </div>
                     <div class="d_flex form-underline">
                       <input type="email" name="e_id" id="e_id" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="Email ID">
                       <input type="number" name="m_num" id="m_num" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="Mobile Number">
                     </div>
                     <div class="d_flex form-underline">
                       <input type="number" name="t_num" id="t_num" class="form-control order_input" placeholder="Telephone">
                       <input type="text" name="c_name" id="c_name" class="form-control order_input imp_require" onkeyup="enableSubmit()" placeholder="Company Name">
                     </div>
                     <div class="d_flex">
                        <select id="your_country" class="form-control order_input imp_require" onkeyup="enableSubmit()" required aria-required="true" aria-invalid="false" name="your_country" >
                        <option value="" selected disabled>Select Country</option>
                        <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas, The">Bahamas, The</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cabo Verde">Cabo Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curacao">Curacao</option><option value="Cyprus">Cyprus</option><option value="Czechia">Czechia</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor (see Timor-Leste)">East Timor (see Timor-Leste)</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Eswatini">Eswatini</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See">Holy See</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="North Korea">North Korea</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territories">Palestinian Territories</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten">Sint Maarten</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland (See Eswatini)">Swaziland (See Eswatini)</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                       <input type="text" name="province" id="province" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="Province">
                     </div>
                     <div class="d_flex form-underline">
                       <input type="text" name="city" id="city" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="City">
                       <input type="number" name="zip" id="zip" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="Zip Code">
                     </div>
                     <div class="d_flex">
                       <select name="hosting" id="options" class="form-control order_input imp_require"onkeyup="enableSubmit()" required>
                        <option value="" disabled selected>Choose Hosting</option>
                        <option value="Share Hosting">Share Hosting</option>
                        <option value="Vps Hosting">Vps Hosting</option>
                        <option value="Localised Hosting">Localised Hosting</option>
                        <option value="WordPress Hosting">WordPress Hosting</option>
                       </select>
                       <select name="pakage" id="choices" class="form-control order_input imp_require pakage_plan opt_other"onkeyup="enableSubmit()" required>
                        <option value="" disabled selected>Choose Plan</option>
                       </select>
                       <input type="text" name="domain" id="domain" class="form-control order_input imp_require"onkeyup="enableSubmit()" required placeholder="example.com">
                     </div>
                     <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6" style="background-size: 100%; background-repeat: no-repeat;"></div>
                     <div id="submit" class="mt20" style="background-size: 100%; background-repeat: no-repeat;">
                     <input type="submit" value="Submit" class="btn-main" disabled onclick="submitform()" >
                    </div>
                </form>

            </div>
            <div class="col-md-4 bg_order_padding borderline">
                <h3>Payment Method</h3>
                <div class="btn_div">
                <div class="inner_border_top">
                    <ul class="main_ul">
                        <li class="main_li">
                            <img src="images/btn_logo/askari.png" alt="">

                        </li>
                        <li>
                            <ul class="sub_ul">
                                <li class="sub_li"><h6>Askari bank Ltd</h6></li>
                                <li class="sub_li"><h6>Account title:</h6> <span>Gexhost</span></li>
                                <li class="sub_li"><h6>Account#</h6> <span>7170200005360</span></li>
                                <li class="sub_li"><h6>IBAN:</h6> <span>PK24 ASCM 0007 1702 0000 5360</span></li>
                                <li class="sub_li"><h6>Branch Info:</h6> <span> IBB Latifabad Branch Block D Unit 7 Latifabad Hyderabad</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="inner_border_top  inner_border_bottom">
                <ul class="main_ul">
                        <li class="main_li">
                            <img src="images/btn_logo/easypaisa.png" alt="">
                        </li>
                        <li>
                            <ul class="sub_ul">
                                <li class="sub_li"><h6>Easy Paisa Account# : 0301 8222720</h6>
                            </li>
                        </ul>
            </div>

            </div>
        </div>
    </div>
</section>
        </div>
        
        <script>
function enableSubmit(){
let inputs = document.getElementsByClassName('imp_require'); // Enter your class name for a required field, this should also be reflected within your form fields.
let btn = document.querySelector('input[type="submit"]');
let isValid = true;
for (var i = 0; i < inputs.length; i++){
let changedInput = inputs[i];
if (changedInput.value.trim() === "" || changedInput.value === null){
isValid = false;
break;
}
}
btn.disabled = !isValid;
}
function submitform(){
    Swal.fire(
  'Thank You!',
  'Your request has been sent successfully',
  'success'
)
}
</script>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <?php include 'footer.php'?>
