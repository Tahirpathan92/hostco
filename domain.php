<?php include 'header.php'?>

        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <!-- section begin -->
        <section data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8 offset-md-2 text-center">
                                <p class="mb0">Reserve your domain today before someone take it.</p>
                                <h2>Search for your perfect <span class="id-color">domain</span> name</h2>
                                <form action='#' class="row" data-wow-delay="1.25s" id='form_sb' method="get" name="form_sb">
                                    <div class="col">
                                        <div class="spacer-10"></div>
                                        <!-- <input class="form-control" id='domain_name' name='domain_name' placeholder="enter domain name" type='text'> <a id="btn-submit" href="javascript:;" onclick="document.getElementById('form_sb').submit();"><i class="arrow_right"></i></a> -->


                                        <input id="searchBar" class="searchbar form-control" type="text" name="domain" placeholder="Search domain name..." value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>"><a id="btn-submit"
                                                href="javascript:;"
                                                onclick="document.getElementById('form_sb').submit();"><i
                                                    class="arrow_right"></i></a>

                                        <div class="clearfix"></div>
                                        <div class="spacer-10"></div>
                                    </div>
                                </form>
                                    
                            <?php error_reporting(0);
                            if(isset($_GET['domain'])){
                                $domain = $_GET['domain'];
                                if ( gethostbyname($domain) != $domain ) {
                                    ?>
                                    <script>
                                        $(document).ready(function() {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Sorry..',
                                            text: 'Domain Already Registered!',
                                        })
                                    })
                                    </script>
                                    <?php
                                }
                                else {?>
                                <script>
                                        $(document).ready(function() {
                                    Swal.fire(
                                        'Hurry..!',
                                        'Your Domain Is Available Register It Now.!',
                                        'success'
                                        )
                                    })
                                </script>
                                    <?php
                                }
                                }
                                ?>
                                <div class="spacer-single"></div>
                                <div class="row">
                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.com</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$9.33/yr</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.net</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$9.33/yr</p>
                                        </div>
                                    </div>       

                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.org</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$9.33/yr</p>
                                        </div>
                                    </div>    

                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.info</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$9.33/yr</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.pk</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$25.00/ 2yr</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-4 mb-sm-30">
                                        <div class="box-url text-center">
                                            <span class="tld-domain">.biz</span>
                                            <p class="tld-subtitle">Special offer</p>
                                            <p class="tld-price id-color">$9.33/yr</p>
                                        </div>
                                    </div>                              
                                </div>
                                <div class="spacer-20"></div>
                                <p class="d-small">*Prices exclude tax of 10% of the total price.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <section id="section-features" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h5 class="s2">Domain Features</h5>
                        <h2>Unleash maximum potential of your <span class="id-color">domain</span></h2>
                        <div class="spacer-20"></div>
                    </div>
                </div>
                <div class="row gx-">
                        <div class="col-md-4">
                            <ul class="ul-style-2 s2">                
                                <li><h4>EASY TO USE CONTROL PANEL</h4>Manage your domain name, renew your domain name, buy more services or domain names using our intuitive control panel.</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 s2">  
                                <li><h4>DOMAIN FORWARDING</h4>Automatically forward people to whatever website you want, when they type your domain name into a browser (with / without domain masking & SEO)</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="ul-style-2 s2">  
                                <li><h4>24/7 Customer Support</h4>Our skilled and expert team support is available always for you to solve your technical issues or any kind of problem you face in services we are active 24/7</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row gx-">
                            <div class="col-md-4">
                                <ul class="ul-style-2 s2">
                                    <li><h4>PRIVACY PROTECT</h4>Protect your personal information being displayed at WHOIS to safeguard you from spammers, data harvesters etc.</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="ul-style-2 s2">
                                    <li><h4>DOMAIN FORWARDING</h4>Lock your domain name, so that your domain is not transferred out accidentally or without your permission.</li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="ul-style-2 s2">
                                    <li><h4>30-day Money Back Guarantee</h4>In that case, we can't completely fulfill our requirements or satisfy you, you will cancel the plan. We give this 30 days for your satisfaction.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row gx-">
                                <div class="col-md-4">
                                    <ul class="ul-style-2 s2">
                                        <li><h4>DNS MANAGEMENT</h4>Manage your DNS records, website location, email, sub-domains, aliases, FTP and more.</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="ul-style-2 s2">
                                        <li><h4>BULK TOOLS</h4>Register, Renew, Transfer and make other changes to multiple Domain Names in a single step</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="ul-style-2 s2">
                                        <li><h4>Instant Activation</h4>Just pickup you doamin name, upload you data</li>
                                    </ul>
                                </div>
                            </div>
            </div>
        </section>
        <section id="section-steps" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h5 class="s2">Easy Steps</h5>
                        <h2>How to transfer domain</h2>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="col-md-12 wow fadeInUp">
                        <div class="container-timeline">
                            <ul>
                                <li>
                                    <h4>Add Domain Transfer Request</h4>
                                    <p>To transfer your domain, you need an authorization code This code protects your domain from being transferred by an unauthorized party.</p>
                                </li>
                                <li>
                                    <h4>Authorize the Transfer</h4>
                                    <p>Once you've entered the authorization code, provided by your old registrar, both service providers will get in touch with you. With everything verified, you can officially approve the transfer</p>
                                </li>
                                <li>
                                    <h4>Accept Transfer</h4>
                                    <p>To accept it, first log in to the account you have with the domain name registrar. Next, go to the part of the user interface that displays your messages. Accept the request.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'qna.php'?>
        <?php include 'money_back.php'?>
</div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->                
        <?php include 'footer.php'?>
