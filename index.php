<?php include 'header.php'?>
                <!-- header close -->
                <!-- content begin -->
                <div class="no-bottom no-top mt-5" id="content">
                    <div id="top"></div>
                    <section id="section-hero" class="search_sec" aria-label="section" data-bgimage='url(images/background/1.jpg) bottom'>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h1>Premium hosting
                                        for everyone, <span class="color-gradient">small</span> or <span
                                            class="color-gradient">large</span></h1>
                                    <p class="lead">High performance secured hosting for your website. Don't lose
                                        anymore clients for the slowest speed of your hosting service.</p>
                                    <form action="#" method="get" class="row" data-wow-delay="1.25s" id='form_sb' name="form_sb">
                                        <div class="col">
                                            <div class="spacer-10"></div>

                                                    <input id="searchBar" class="searchbar form-control" type="text" name="domain" placeholder="Search domain name..." value="<?php if(isset($_GET['domain'])){ echo $_GET['domain']; } ?>"><a id="btn-submit"
                                                href="javascript:;"
                                                onclick="document.getElementById('form_sb').submit();"><i
                                                    class="arrow_right"></i></a>
                                            <div class="clearfix"></div>
                                            <div class="spacer-10"></div>
                                            <p class="d-small">*Reserve your domain today before someone take it.</p>
                                            <div class="domain-ext pos-left">
                                                <div class="ext">
                                                    <h4 class="id-color">.com</h4>
                                                    $4.99/year
                                                </div>
                                                <div class="ext">
                                                    <h4 class="id-color">.net</h4>
                                                    $3.99/year
                                                </div>
                                                <div class="ext">
                                                    <h4 class="id-color">.co</h4>
                                                    $2.99/year
                                                </div>
                                                <div class="ext">
                                                    <h4 class="id-color">.info</h4>
                                                    $3.90/year
                                                </div>
                                                <div class="ext">
                                                    <h4 class="id-color">.biz</h4>
                                                    $5.99/year
                                                </div>
                                            </div>
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
                                    <div class="spacer-double"></div>
                                </div>
                                <div class="col-md-6 xs-hide">
                                    <div class="fading">
                                        <div><img src="images/slider/server-1.png" class="img-fluid" alt=""></div>
                                        <div><img src="images/slider/server-5.png" class="img-fluid" alt=""></div>
                                        <div><img src="images/slider/server-1.jpg" class="img-fluid" alt=""></div>
                                    </div>
                                    <!-- <img src="images/misc/server-2.png" class="lazy img-fluid anim-up-down" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="no-top">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 wow fadeInUp">
                                    <img class="img-fluid anim-up-down" src="images/misc/hosting2.png" alt="">
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="p-sm-30 pb-sm-0 mb-sm-0">
                                        <h2> Discover Lightning Fast 
                                            <span class="color-gradient">Hosting</span>
                                            And No Downtime Drama Here! </h2>
                                        <p>GEXHOST is the top web hosting company in Pakistan. We provide the best web hosting services all over Pakistan. Our awesome bandwidth, disk-space with free domain registration are best for your business. We also provide your amazing hosting features with 24/7 support and 30 day's money back guarantee.
                                        </p>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <ul class="ul-style-2">
                                                    <li>
                                                        <h4>Instant Activation</h4>
                                                    </li>
                                                    <li>
                                                        <h4>99.9% Uptime</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="ul-style-2">
                                                    <li>
                                                        <h4>Reliable Hardware</h4>
                                                    </li>
                                                    <li>
                                                        <h4>24 / 7 Support</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="spacer-half"></div>
                                        <a class="btn-main" href="help.php">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="no-top">
                        <div class="container">
                            <div class="row g-custom-x force-text-center">
                                <div class="col-md-3 col-sm-6 mb-sm-30">
                                    <div class="de_count wow fadeInUp">
                                        <h3 class="timer" data-to="2425" data-speed="3000">0</h3>
                                        Website Powered
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-sm-30">
                                    <div class="de_count wow fadeInUp">
                                        <h3 class="timer" data-to="445" data-speed="3000">0</h3>
                                        Clients Supported
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-sm-30">
                                    <div class="de_count wow fadeInUp">
                                        <h3 class="timer" data-to="35" data-speed="3000">0</h3><span>+</span>
                                        Globel Service
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 mb-sm-30">
                                    <div class="de_count wow fadeInUp">
                                        <h3 class="timer" data-to="20" data-speed="3000">0</h3><span>+</span>
                                        Years Experience
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-pricing" class="no-top" data-bgimage='url(images/background/1.jpg) top'>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="text-center">
                                        <h5 class="s2">Hosting Plan</h5>
                                        <h2>Choose Perfect <span class="id-color">Web Hosting</span> Package For You
                                        </h2>
                                        <div class="spacer-20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <div class="switch-set">
                                        <div>Monthly Plan</div>
                                        <div><input id="sw-1" class="switch" type="checkbox"></div>
                                        <div>Yearly Plan</div>
                                        <div class="spacer-20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row de_pricing-tables shadow-soft g-0">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="de_pricing-table type-2">
                                <div class="d-recommend">Best Seller</div>

                                <div class="d-head">
                                    <h3>ECOMONY</h3>
                                    <p>Ideal solution for beginners & students</p>
                                </div>
                                <div class="d-price">
                                    <h4 class="opt-1">$2.2<span>/mo</span></h4>
                                    <h4 class="opt-2">$25.00<span>/yr</span></h4>
                                    <br>
                                    <p class="opt-1">Normally <s>$2.99</s></p>
                                    <p class="opt-2">Normally <s>$30.00</s></p>
                                </div>
                                <div class="d-action">
                                    <a href="order_now.php" class="btn-main opt-1 w-100">Get Monthly Plan</a>
                                    <a href="order_now.php" class="btn-main opt-2 w-100">Get Yearly Plan</a>
                                    <p>Auto re-news at regular rate</p>
                                </div>
                                <div class="d-group">
                                    <h4>Top Features</h4>
                                    <ul class="d-list">
                                        <li>One Website</li>
                                        <li>Web Space 1 GB</li>
                                        <li>Web Traffic 10 GB</li>
                                        <li>Unlimited Email Accounts</li>
                                        <li>Unlimited FTP Accounts</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                                <div class="d-group">
                                    <h4>Also Includes</h4>
                                    <ul class="d-list">
                                        <li>MS SQL Database</li>
                                        <li>99.9% Server Uptime</li>
                                        <li>No Setup Charges</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="de_pricing-table type-2">
                                <div class="d-head">
                                    <h3>DELUXE</h3>
                                    <p>For Professionals those need to running multiple sites.
                                </div>
                                <div class="d-price">
                                    <h4 class="opt-1">$4.6<span>/mo</span></h4>
                                    <h4 class="opt-2">$50.00<span>/yr</span></h4>
                                    <br>
                                    <p class="opt-1">Normally <s>$5.98</s></p>
                                    <p class="opt-2">Normally <s>55.69</s></p>
                                </div>
                                <div class="d-action">
                                    <a href="order_now.php" class="btn-main opt-1 w-100">Get Monthly Plan</a>
                                    <a href="order_now.php" class="btn-main opt-2 w-100">Get Yearly Plan</a>
                                    <p>Auto re-news at regular rate</p>
                                </div>
                                <div class="d-group">
                                    <h4>Top Features</h4>
                                    <ul class="d-list">
                                        <li>Two Websites</li>
                                        <li>Web Space 2 MB</li>
                                        <li>Web Traffic 20 GB</li>
                                        <li>Unlimited Email Accounts</li>
                                        <li>Unlimited FTP Accounts</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                                <div class="d-group">
                                    <h4>Also Includes</h4>
                                    <ul class="d-list">
                                        <li>MS SQL Database</li>
                                        <li>99.9% Server Uptime</li>
                                        <li>No Setup Charges</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6">
                            <div class="de_pricing-table type-2">
                                <div class="d-recommend">Recommended</div>

                                <div class="d-head">
                                    <h3>ULTIMATE</h3>
                                    <p>Best performance with optimized CPU resources.</p>
                                </div>
                                <div class="d-price">
                                    <h4 class="opt-1">$7.30<span>/mo</span></h4>
                                    <h4 class="opt-2">$75.00<span>/yr</span></h4>
                                    <br>
                                    <p class="opt-1">Normally <s>$8.50</s></p>
                                    <p class="opt-2">Normally <s>$80.89</s></p>
                                </div>
                                <div class="d-action">
                                    <a href="order_now.php" class="btn-main opt-1 w-100">Get Monthly Plan</a>
                                    <a href="order_now.php" class="btn-main opt-2 w-100">Get Yearly Plan</a>
                                    <p>Auto re-news at regular rate</p>
                                </div>
                                <div class="d-group">
                                    <h4>Top Features</h4>
                                    <ul class="d-list">
                                        <li>Three Websites</li>
                                        <li>Web Space 3 GB</li>
                                        <li>Web Traffic 30 GB</li>
                                        <li>Unlimited Email Accounts</li>
                                        <li>Unlimited FTP Accounts</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                                <div class="d-group">
                                    <h4>Also Includes</h4>
                                    <ul class="d-list">
                                        <li>MS SQL Database</li>
                                        <li>99.9% Server Uptime</li>
                                        <li>No Setup Charges</li>
                                    </ul>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-steps" class="no-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3 text-center">
                                    <h5 class="s2">Easy Steps</h5>
                                    <h2>How It Works</h2>
                                    <p class="lead">Our download and upload speeds are some of the fastest you will find at any host. With speeds ranging from 20Gbps Download & 500Mbps Upload</p>
                                    <div class="spacer-20"></div>
                                </div>
                                <div class="col-md-12 wow fadeInUp">
                                    <div class="container-timeline">
                                        <ul>
                                            <li>
                                                <h4>Select Plan</h4>
                                                <p>Selecting the right hosting plan for the success of your website.
                                                    Tailored to meet your specific needs.</p>
                                            </li>
                                            <li>
                                                <h4>Search Domain</h4>
                                                <p>Take the first step towards creating your website and reaching a
                                                    wider audience by registering today.</p>
                                            </li>
                                            <li>
                                                <h4>Choose Domain</h4>
                                                <p>Choose a domain name that reflects your website's purpose, content,
                                                    or the nature of your business.</p>
                                            </li>
                                            <li>
                                                <h4>Order Now</h4>
                                                <p>We offer a variety of secure payment methods to make your payment
                                                    process convenient and hassle-free.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-locations" class="no-top no-bottom"
                        data-bgimage='url(images/background/1.jpg) top'>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="col text-center">
                                        <h5 class="s2">Discover</h5>
                                        <h2>Server Locations</h2>
                                        <p class="lead">Global reach, local performance: accelerate your website's speed
                                            and user experience with strategic server locations worldwide.</p>
                                        <div class="spacer-20"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="p-sm-30 pb-sm-0 mb-sm-0">
                                        <div class="de-map-hotspot">
                                            <div class="de-spot wow fadeIn" style="top:39%; left:20%">
                                                <span>United&nbsp;States</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:76%; left:87%">
                                                <span>Australia</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:68%; left:80%">
                                                <span>Indonesia</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:23%; left:18%">
                                                <span>Canada</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:68%; left:33%">
                                                <span>Brazil</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:45%; left:75%">
                                                <span>China</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:36%; left:48%">
                                                <span>France</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:23%; left:51%">
                                                <span>Sweden</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <div class="de-spot wow fadeIn" style="top:78%; left:53%">
                                                <span>South&nbsp;Africa</span>
                                                <div class="de-circle-1"></div>
                                                <div class="de-circle-2"></div>
                                            </div>
                                            <img src="images/misc/map.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="spacer-double"></div>
                        </div>
                    </section>
                    
        <?php include 'client_reviews.php'?>
        <?php include 'money_back.php'?>
        <?php include 'qna.php'?>
                    <section class="no-top" aria-label="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="owl-logo" class="logo-carousel owl-carousel owl-theme" >
                                        <img src="images/logo/bbsydp-logo.png" class="img-fluid img_s mx-auto" style="max-width: 8rem;" alt="">
                                        <img src="images/logo/durrani-logo.png" class="img-fluid mx-auto img_s" style="max-width: 5rem;" alt="">
                                        <img src="images/logo/hitechpip-logo.png" class="img-fluid img_s" alt="">
                                        <img src="images/logo/indushotel_logo.png" class="img-fluid img_s" alt="">
                                        <img src="images/logo/spsc_logo.png" class="img-fluid img_s mx-auto" style="max-width: 5rem;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- content close -->
                <a href="order_now.php" id="back-to-top"></a>
                <?php include 'footer.php'?>