<!-- Some style was there stored in frontend.blade.php -->

@extends('layouts.frontend')

@section('content')

    <div class="form-wrap">
            <div class="tabs" id="tabMenu">
                <h3 class="signup-tab same-style"><a href="#signup-tab-content" data-toggle="tab">Sign Up</a></h3>
                <h3 class="login-tab same-style"><a href="#login-tab-content" data-toggle="tab">Login</a></h3>
            </div><!--.tabs-->

            <div class="tabs-content">
                <div class="social-sign-in">
                    {{-- <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Continue with Facebook</a> --}}
                    <a href="{{ url('/auth/redirect/github') }}" class="facebook-sign-in"><i class="fa fa-github"></i> Continue with Github</a>
                    <a href="{{ url('/auth/redirect/google') }}" class="twitter-sign-in"><i class="fa fa-google"></i> Continue with Google</a>
                </div>
                <div id="signup-tab-content" class="active">
                    <form class="signup-form" id="signup-form" action="{{ route('register') }}" method="post">
                        @csrf

                        <span id="divregadd">
                        </span>

                        <input type="hidden" name="tab" value="signup-tab-content">

                        <input type="text" class="input" id="user_name" name="user_name" autocomplete="off" placeholder="Name">

            <input type="email" class="input" name="user_email" id="user_email" autocomplete="off" placeholder="Email">
            <!-- onkeyup="buttonEnableForRegistration()" -->

            <input type="password" class="input" name="user_pass" id="user_pass" autocomplete="off" placeholder="Password">

            <input type="password" name="user_pass_confirmation" id="password-confirm" class="input" autocomplete="off" placeholder="Confirm Password">

            <select class="input" id="user_country" name="user_country">
              <!-- onchange="buttonEnableForRegistration()" -->
                <option selected disabled="">Country</option>
                   <option value="Afganistan">Afghanistan</option>
                   <option value="Albania">Albania</option>
                   <option value="Algeria">Algeria</option>
                   <option value="American Samoa">American Samoa</option>
                   <option value="Andorra">Andorra</option>
                   <option value="Angola">Angola</option>
                   <option value="Anguilla">Anguilla</option>
                   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                   <option value="Argentina">Argentina</option>
                   <option value="Armenia">Armenia</option>
                   <option value="Aruba">Aruba</option>
                   <option value="Australia">Australia</option>
                   <option value="Austria">Austria</option>
                   <option value="Azerbaijan">Azerbaijan</option>
                   <option value="Bahamas">Bahamas</option>
                   <option value="Bahrain">Bahrain</option>
                   <option value="Bangladesh">Bangladesh</option>
                   <option value="Barbados">Barbados</option>
                   <option value="Belarus">Belarus</option>
                   <option value="Belgium">Belgium</option>
                   <option value="Belize">Belize</option>
                   <option value="Benin">Benin</option>
                   <option value="Bermuda">Bermuda</option>
                   <option value="Bhutan">Bhutan</option>
                   <option value="Bolivia">Bolivia</option>
                   <option value="Bonaire">Bonaire</option>
                   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                   <option value="Botswana">Botswana</option>
                   <option value="Brazil">Brazil</option>
                   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                   <option value="Brunei">Brunei</option>
                   <option value="Bulgaria">Bulgaria</option>
                   <option value="Burkina Faso">Burkina Faso</option>
                   <option value="Burundi">Burundi</option>
                   <option value="Cambodia">Cambodia</option>
                   <option value="Cameroon">Cameroon</option>
                   <option value="Canada">Canada</option>
                   <option value="Canary Islands">Canary Islands</option>
                   <option value="Cape Verde">Cape Verde</option>
                   <option value="Cayman Islands">Cayman Islands</option>
                   <option value="Central African Republic">Central African Republic</option>
                   <option value="Chad">Chad</option>
                   <option value="Channel Islands">Channel Islands</option>
                   <option value="Chile">Chile</option>
                   <option value="China">China</option>
                   <option value="Christmas Island">Christmas Island</option>
                   <option value="Cocos Island">Cocos Island</option>
                   <option value="Colombia">Colombia</option>
                   <option value="Comoros">Comoros</option>
                   <option value="Congo">Congo</option>
                   <option value="Cook Islands">Cook Islands</option>
                   <option value="Costa Rica">Costa Rica</option>
                   <option value="Cote DIvoire">Cote DIvoire</option>
                   <option value="Croatia">Croatia</option>
                   <option value="Cuba">Cuba</option>
                   <option value="Curaco">Curacao</option>
                   <option value="Cyprus">Cyprus</option>
                   <option value="Czech Republic">Czech Republic</option>
                   <option value="Denmark">Denmark</option>
                   <option value="Djibouti">Djibouti</option>
                   <option value="Dominica">Dominica</option>
                   <option value="Dominican Republic">Dominican Republic</option>
                   <option value="East Timor">East Timor</option>
                   <option value="Ecuador">Ecuador</option>
                   <option value="Egypt">Egypt</option>
                   <option value="El Salvador">El Salvador</option>
                   <option value="Equatorial Guinea">Equatorial Guinea</option>
                   <option value="Eritrea">Eritrea</option>
                   <option value="Estonia">Estonia</option>
                   <option value="Ethiopia">Ethiopia</option>
                   <option value="Falkland Islands">Falkland Islands</option>
                   <option value="Faroe Islands">Faroe Islands</option>
                   <option value="Fiji">Fiji</option>
                   <option value="Finland">Finland</option>
                   <option value="France">France</option>
                   <option value="French Guiana">French Guiana</option>
                   <option value="French Polynesia">French Polynesia</option>
                   <option value="French Southern Ter">French Southern Ter</option>
                   <option value="Gabon">Gabon</option>
                   <option value="Gambia">Gambia</option>
                   <option value="Georgia">Georgia</option>
                   <option value="Germany">Germany</option>
                   <option value="Ghana">Ghana</option>
                   <option value="Gibraltar">Gibraltar</option>
                   <option value="Great Britain">Great Britain</option>
                   <option value="Greece">Greece</option>
                   <option value="Greenland">Greenland</option>
                   <option value="Grenada">Grenada</option>
                   <option value="Guadeloupe">Guadeloupe</option>
                   <option value="Guam">Guam</option>
                   <option value="Guatemala">Guatemala</option>
                   <option value="Guinea">Guinea</option>
                   <option value="Guyana">Guyana</option>
                   <option value="Haiti">Haiti</option>
                   <option value="Hawaii">Hawaii</option>
                   <option value="Honduras">Honduras</option>
                   <option value="Hong Kong">Hong Kong</option>
                   <option value="Hungary">Hungary</option>
                   <option value="Iceland">Iceland</option>
                   <option value="Indonesia">Indonesia</option>
                   <option value="India">India</option>
                   <option value="Iran">Iran</option>
                   <option value="Iraq">Iraq</option>
                   <option value="Ireland">Ireland</option>
                   <option value="Isle of Man">Isle of Man</option>
                   <option value="Israel">Israel</option>
                   <option value="Italy">Italy</option>
                   <option value="Jamaica">Jamaica</option>
                   <option value="Japan">Japan</option>
                   <option value="Jordan">Jordan</option>
                   <option value="Kazakhstan">Kazakhstan</option>
                   <option value="Kenya">Kenya</option>
                   <option value="Kiribati">Kiribati</option>
                   <option value="Korea North">Korea North</option>
                   <option value="Korea Sout">Korea South</option>
                   <option value="Kuwait">Kuwait</option>
                   <option value="Kyrgyzstan">Kyrgyzstan</option>
                   <option value="Laos">Laos</option>
                   <option value="Latvia">Latvia</option>
                   <option value="Lebanon">Lebanon</option>
                   <option value="Lesotho">Lesotho</option>
                   <option value="Liberia">Liberia</option>
                   <option value="Libya">Libya</option>
                   <option value="Liechtenstein">Liechtenstein</option>
                   <option value="Lithuania">Lithuania</option>
                   <option value="Luxembourg">Luxembourg</option>
                   <option value="Macau">Macau</option>
                   <option value="Macedonia">Macedonia</option>
                   <option value="Madagascar">Madagascar</option>
                   <option value="Malaysia">Malaysia</option>
                   <option value="Malawi">Malawi</option>
                   <option value="Maldives">Maldives</option>
                   <option value="Mali">Mali</option>
                   <option value="Malta">Malta</option>
                   <option value="Marshall Islands">Marshall Islands</option>
                   <option value="Martinique">Martinique</option>
                   <option value="Mauritania">Mauritania</option>
                   <option value="Mauritius">Mauritius</option>
                   <option value="Mayotte">Mayotte</option>
                   <option value="Mexico">Mexico</option>
                   <option value="Midway Islands">Midway Islands</option>
                   <option value="Moldova">Moldova</option>
                   <option value="Monaco">Monaco</option>
                   <option value="Mongolia">Mongolia</option>
                   <option value="Montserrat">Montserrat</option>
                   <option value="Morocco">Morocco</option>
                   <option value="Mozambique">Mozambique</option>
                   <option value="Myanmar">Myanmar</option>
                   <option value="Nambia">Nambia</option>
                   <option value="Nauru">Nauru</option>
                   <option value="Nepal">Nepal</option>
                   <option value="Netherland Antilles">Netherland Antilles</option>
                   <option value="Netherlands">Netherlands (Holland, Europe)</option>
                   <option value="Nevis">Nevis</option>
                   <option value="New Caledonia">New Caledonia</option>
                   <option value="New Zealand">New Zealand</option>
                   <option value="Nicaragua">Nicaragua</option>
                   <option value="Niger">Niger</option>
                   <option value="Nigeria">Nigeria</option>
                   <option value="Niue">Niue</option>
                   <option value="Norfolk Island">Norfolk Island</option>
                   <option value="Norway">Norway</option>
                   <option value="Oman">Oman</option>
                   <option value="Pakistan">Pakistan</option>
                   <option value="Palau Island">Palau Island</option>
                   <option value="Palestine">Palestine</option>
                   <option value="Panama">Panama</option>
                   <option value="Papua New Guinea">Papua New Guinea</option>
                   <option value="Paraguay">Paraguay</option>
                   <option value="Peru">Peru</option>
                   <option value="Phillipines">Philippines</option>
                   <option value="Pitcairn Island">Pitcairn Island</option>
                   <option value="Poland">Poland</option>
                   <option value="Portugal">Portugal</option>
                   <option value="Puerto Rico">Puerto Rico</option>
                   <option value="Qatar">Qatar</option>
                   <option value="Republic of Montenegro">Republic of Montenegro</option>
                   <option value="Republic of Serbia">Republic of Serbia</option>
                   <option value="Reunion">Reunion</option>
                   <option value="Romania">Romania</option>
                   <option value="Russia">Russia</option>
                   <option value="Rwanda">Rwanda</option>
                   <option value="St Barthelemy">St Barthelemy</option>
                   <option value="St Eustatius">St Eustatius</option>
                   <option value="St Helena">St Helena</option>
                   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                   <option value="St Lucia">St Lucia</option>
                   <option value="St Maarten">St Maarten</option>
                   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                   <option value="Saipan">Saipan</option>
                   <option value="Samoa">Samoa</option>
                   <option value="Samoa American">Samoa American</option>
                   <option value="San Marino">San Marino</option>
                   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                   <option value="Saudi Arabia">Saudi Arabia</option>
                   <option value="Senegal">Senegal</option>
                   <option value="Seychelles">Seychelles</option>
                   <option value="Sierra Leone">Sierra Leone</option>
                   <option value="Singapore">Singapore</option>
                   <option value="Slovakia">Slovakia</option>
                   <option value="Slovenia">Slovenia</option>
                   <option value="Solomon Islands">Solomon Islands</option>
                   <option value="Somalia">Somalia</option>
                   <option value="South Africa">South Africa</option>
                   <option value="Spain">Spain</option>
                   <option value="Sri Lanka">Sri Lanka</option>
                   <option value="Sudan">Sudan</option>
                   <option value="Suriname">Suriname</option>
                   <option value="Swaziland">Swaziland</option>
                   <option value="Sweden">Sweden</option>
                   <option value="Switzerland">Switzerland</option>
                   <option value="Syria">Syria</option>
                   <option value="Tahiti">Tahiti</option>
                   <option value="Taiwan">Taiwan</option>
                   <option value="Tajikistan">Tajikistan</option>
                   <option value="Tanzania">Tanzania</option>
                   <option value="Thailand">Thailand</option>
                   <option value="Togo">Togo</option>
                   <option value="Tokelau">Tokelau</option>
                   <option value="Tonga">Tonga</option>
                   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                   <option value="Tunisia">Tunisia</option>
                   <option value="Turkey">Turkey</option>
                   <option value="Turkmenistan">Turkmenistan</option>
                   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                   <option value="Tuvalu">Tuvalu</option>
                   <option value="Uganda">Uganda</option>
                   <option value="United Kingdom">United Kingdom</option>
                   <option value="Ukraine">Ukraine</option>
                   <option value="United Arab Erimates">United Arab Emirates</option>
                   <option value="United States of America">United States of America</option>
                   <option value="Uraguay">Uruguay</option>
                   <option value="Uzbekistan">Uzbekistan</option>
                   <option value="Vanuatu">Vanuatu</option>
                   <option value="Vatican City State">Vatican City State</option>
                   <option value="Venezuela">Venezuela</option>
                   <option value="Vietnam">Vietnam</option>
                   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                   <option value="Wake Island">Wake Island</option>
                   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                   <option value="Yemen">Yemen</option>
                   <option value="Zaire">Zaire</option>
                   <option value="Zambia">Zambia</option>
                   <option value="Zimbabwe">Zimbabwe</option>
            </select>

            <input type="checkbox" id="terms" name="terms" style="margin-bottom: 22px;">
            <!-- onchange="buttonEnableForRegistration()" -->
            <label><div class="help-text" style="font-weight: 550;"><p style="margin-left: 25px; position: relative; top: -41px; font-size: 11px;"> By signing up, you agree to our <a href="#">Terms of service</a></p></div></label>
            
                        <input type="submit" id="registration_button" class="button" style="margin-top: -25px;" value="Sign Up" >
                    </form><!--.login-form-->
                    <div class="help-text">
                        
                    </div><!--.help-text-->
                </div><!--.signup-tab-content-->

                <div id="login-tab-content">
                    <form class="login-form" id="login-form" action="{{ route('login') }}" method="post">
                        @csrf

                        <!-- @if(session('credentialserror'))
                            <div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{ session('credentialserror') }}</strong>
                            </div>
                        @endif
                         -->
                        <span id="divadd">
                        </span>

                        <span id="divmessageadd">
                        </span>

                        <input type="hidden" name="tab" value="login-tab-content">

                        <input type="email" name="email" class="input" id="email" autocomplete="off" placeholder="Email">
                    
                        <input type="password" name="password" class="input" id="password" autocomplete="off" placeholder="Password">

                         <!-- onkeyup="buttonEnableForLogin()" -->

                        <input type="checkbox" id="remember {{ old('remember') ? 'checked' : '' }}" style="margin-bottom: 22px;">
                        <label><div class="help-text" style="font-weight: 550;"><p style="margin-left: 12px; position: relative; top: 2.5px;"> Remember</p></div></label>

                        <input type="submit" class="button" id="login_button" value="Login" >
                         <!-- disabled="" -->
                    </form>
                    <div class="help-text">
                        <p><a href="{{ route('password.request') }}">Forget your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    
@endsection


@section('join-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var act = $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show');
            act.addClass('active');

            if ('scrollRestoration' in history) {
                history.scrollRestoration = 'manual';
            }
        });

        //document.getElementById('signup-form').action = {{ route('register') }};

        jQuery(document).ready(function($) {
            tab = $('.tabs h3 a');

            tab.on('click', function(event) {
                    event.preventDefault();
                    tab.removeClass('active');
                    $(this).addClass('active');

                    tab_content = $(this).attr('href');
                    $('div[id$="tab-content"]').removeClass('active');
                    $(tab_content).addClass('active');
            });
        });

    // SET UP URL LOCATION
    var url = document.location.toString();
    if (url.match('#')) {
        $('.tabs a[href="#' + url.split('#')[1] + '"]').tab('show').addClass('active');
    }

    // Change hash for page-reload
    $('.tabs a').on('shown.bs.tab', function (e) {
        if(history.pushState) {
            history.pushState(null, null, e.target.hash); 
        } else {
            window.location.hash = e.target.hash; //Polyfill for old browsers
        }
    })
    </script>

    <script type="text/javascript">

        /*function buttonEnableForLogin() {
            if (document.getElementById("email").value === "" || !document.getElementById("email").value.trim() || document.getElementById("password").value === "" || !document.getElementById("password").value.trim())
            { 
                document.getElementById('login_button').disabled = true; 
            } else { 
                document.getElementById('login_button').disabled = false;
            }
        }

        function buttonEnableForRegistration() {
            if (document.getElementById("user_name") === "" || document.getElementById("user_email") === "" || document.getElementById("user_password") === "" || document.getElementById("password-confirm") === "" || document.getElementById("user_country") === "" || document.getElementById("terms").checked === false)
            { 
                document.getElementById('registration_button').disabled = true; 
            } else { 
                document.getElementById('registration_button').disabled = false;
            }
        }*/

    </script>

    <script type="text/javascript">
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });

        $(document).on('submit', '#login-form', function(e){

            e.preventDefault();
            $.ajax({
                url: $('#login-form').attr( 'action' ),
                type: 'POST',
                data: $('#login-form').serialize(),
                success: function(data){
                    // window.location.reload();
                    window.location.href = '/';
                },
                error: function(data){
                    // Log in the console
                    
                      var errors = data.responseJSON.errors;
                      if(errors){
                          var errs = Object.values(errors);
                          var errslength = Object.keys(errors);
                          // const errmsg = errors[errs];

                          var domItem = document.getElementById('divadd');
                          domItem.scrollIntoView({behavior: "smooth"});

                          const clrerrMsg = document.querySelectorAll('#divadd');
                          clrerrMsg.forEach((element) => element.textContent = '');

                          $('#divadd').append(`<div class="alert alert-danger alert-dismissible fade in login-add" id="login-add">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          
                                <ul class="cuslogul">
                                    <li><span style="font-weight: bold;">${errslength.length} ${errslength.length > 1 ? 'errors' : 'error'} &#129191;</span></li>
                                </ul>
                          
                          </div>`);

                          for(var key in errs) {
                              var avalue = errs[key][0];
                              $('.login-add').find('.cuslogul').append(`<li><b style='font-size: 15px;'>&#9758;</b> ${avalue} </li>`);
                          }

                          /*$('.alert-danger').find('ul').empty();
                          $('.alert-danger').css('display', 'block');
                          $('.alert-danger').find('ul').append(`<span><b> ${errslength.length} errors </span> </b>`);

                          for(var key in errs) {
                              var avalue = errs[key][0];
                              $('.alert-danger').find('ul').append(`<li> ${avalue} </li>`);
                          }*/
                          

                          // or, what you are trying to achieve
                          // render the response via js, pushing the error in your 
                          // blade page

                              
                    } else {
                        var newloge = data.responseJSON.message;

                        var domTItem = document.getElementById('divadd');
                        domTItem.scrollIntoView({behavior: "smooth"});

                        const clrerrTMsg = document.querySelectorAll('#divadd');
                        clrerrTMsg.forEach((element) => element.textContent = '');
                    
                        $('#divadd').append(`<div class="alert alert-danger alert-dismissible fade in">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    
                              <ul>
                                  <li><span style="font-weight: bold;">&#129191; ${newloge} </span></li>
                              </ul>
                        
                        </div>`);

                        setInterval(function(){
                            window.location.href = '/email/verify';
                        }, 1200);
                      
                    }
                } 
            });
        }); 
    </script>


    <script type="text/javascript">
        $(document).on('submit', '#signup-form', function(ev){
            ev.preventDefault();
            $.ajax({
                url: $('#signup-form').attr( 'action' ),
                type: 'POST',
                data: $('#signup-form').serialize(),
                success: function(data){
                    window.location.href = '/';
                },
                error: function(data){

                    // Log in the console
                    var regerrors = data.responseJSON.errors;
                    if(regerrors){
                        var regerrs = Object.values(regerrors);
                        var errslength = Object.keys(regerrors);
                        //const regerrors = errors[regerrs];

                        var domItemReg = document.getElementById('divregadd');
                        domItemReg.scrollIntoView({behavior: "smooth"});

                        const clrerrMsgReg = document.querySelectorAll('#divregadd');
                        clrerrMsgReg.forEach((regelement) => regelement.textContent = '');

                        $('#divregadd').append(`<div class="alert alert-danger alert-dismissible fade in reg-error" id="reg-error">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        
                              <ul class="cusul">
                                  <li><span style="font-weight: bold;">${errslength.length} ${errslength.length > 1 ? 'errors' : 'error'} &#129191;</span></li>
                              </ul>
                        
                        </div>`);

                        for(var regkey in regerrs) {
                            var regvalue = regerrs[regkey][0];
                            /*$('.alert-danger ul').css('list-style-type', 'circle');*/
                            $('#reg-error').find('.cusul').append(`<li><b style='font-size: 15px;'>&#9758;</b> ${regvalue} </li>`);
                        }

                    } else {
                        var newregerr = data.responseJSON.message;

                        var domregTItem = document.getElementById('divregadd');
                        domregTItem.scrollIntoView({behavior: "smooth"});

                        const clrerrTMsgreg = document.querySelectorAll('#divregadd');
                        clrerrTMsgreg.forEach((element) => element.textContent = '');
                    
                        $('#divregadd').append(`<div class="alert alert-danger alert-dismissible fade in">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    
                              <ul>
                                  <li><span style="font-weight: bold;">&#129191; ${newregerr} </span></li>
                              </ul>
                        
                        </div>`);

                        setInterval(function(){
                            window.location.href = '/email/verify';
                        }, 1200);
                    
                    }
                }
            })/*.done(function(){
                window.location.reload();
              })*/; 
        }); 
    </script>
@endsection
