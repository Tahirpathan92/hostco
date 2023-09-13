
                <!-- footer begin -->
                <footer class="footer-light">
                    <div class="container">
                        <div class="row g-custom-x">
                            <div class="col-lg-4">
                                <img src="images/gexhost_icon.png" class="mx_width" alt="">
                                <div class="spacer-20"></div>
                                <p>We provide best hosting solutions for your hosting needs.
                                    choose shared hosting, vps hosting or Local hosting. You can also be hosting</p>
                                <div class="spacer-10"></div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="widget">
                                            <h5>Hosting</h5>
                                            <ul>
                                                <li><a href="hosting-shared.php">Share Hosting</a></li>
                                                <li><a href="hosting-vps.php">VPS Hosting</a></li>
                                                <li><a href="hosting-local.php">Local Hosting</a></li>
                                                <li><a href="hosting-wordpress.php">WordPress Hosting</a></li>
                                                <li><a href="website-builder.php">Website Builder</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="widget">
                                            <h5>Domain</h5>
                                            <ul>
                                                <li><a href="domain.php">Domain</a></li>
                                                <li><a href="domain.php">Domain Transfer</a></li>
                                                <li><a href="domain.php">Domain Top Level</a></li>
                                                <li><a href="domain.php">Domain Pricing</a></li>
                                                <li><a href="https://gexton.com/careers">Careers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                    <div class="widget">
                                    <h5>We Accepted</h5>
                                    <img class="img-card-sm" src="images/payments-logo/visa.png" alt="">
                                    <img class="img-card-sm" src="images/payments-logo/master-card.png" alt="">
                                    <img class="img-card-sm" src="images/payments-logo/jcb.png" alt="">
                                    <img class="img-card-sm" src="images/payments-logo/paypal.png" alt="">
                                
                                <div class="spacer-30"></div>
                                        <h5>Follow Us on</h5>
                                        <div class="social-icons">
                                            <a href="https://www.facebook.com/ggexton/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                            <a href="https://twitter.com/gexton" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                            <a href="https://www.linkedin.com/company/gexton" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                            <a href="https://www.pinterest.com/gexton_/" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
                                            <a href="#" target="_blank"><i class="fa fa-rss fa-lg"></i></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subfooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="de-flex">
                                        <div class="de-flex-col">
                                            <a href="">
                                                Copyright 2023 - by Gexton
                                            </a>
                                        </div>
                                        <ul class="menu-simple">
                                            <li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
                                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer close -->
            </div>
            <!-- Javascript Files
    ================================================== -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->

    
    
    <script src="js/plugins.js"></script>
    <script src="jquary/slick.min.js"></script>
            <script src="js/designesia.js"></script>
    <script src="form.js"></script>
    

            <!-- COOKIES PLUGIN  -->
            <script>
                $(document).ready(function () {
                    $.cookit({
                        messageColor: '#fff',
                        linkColor: '#38b1ed',
                        buttonColor: '#38b1ed',
                        messageText: "This website uses <b>cookies</b> to ensure you get the best experience on our website.",
                        linkText: "Learn more",
                        linkUrl: "index.php",
                        buttonText: "I accept",
                    });
                    
                    $('.fading').slick({
                          dots: false,
                          infinite: true,
                          speed: 500,
                          autoplay: true,
                          autoplaySpeed: 2000,
                          fade: true,
                          cssEase: 'linear'
                        });
                        // jQuery
                        // $("#phone").intlTelInput({
                        // });
                        // Map your choices to your option value
var lookup = {
   'Share Hosting': [`Ecomony Plan`,`Deluxe Plan`,`Ultimate Plan`,`Premium Plan`,`Unlimited Plan`],
   'Localised Hosting': [`Ecomony Plan`,`Deluxe Plan`,`Ultimate Plan`,`Premium Plan`,`Unlimited Plan`],
   'WordPress Hosting': [`Ecomony Plan`,`Deluxe Plan`,`Ultimate Plan`,`Premium Plan`,`Unlimited Plan`],
   'Vps Hosting': [`GexHost 16`,`GexHost 32`, `GexHost 64`, `GexHost 128`, `GexHost 256`,`GexHost 512`,`GexHost 1024`],
};

// When an option is changed, search the above for matching choices
$('#options').on('change', function() {
   // Set selected option as variable
   var selectValue = $(this).val();

   // Empty the target field
   $('#choices').empty();
   
   // For each chocie in the selected option
   for (i = 0; i < lookup[selectValue].length; i++) {
      // Output choice in the target field
      $('#choices').append("<option value='" + lookup[selectValue][i] + "'>" + lookup[selectValue][i] + "</option>");
   }
});

                });
                
                
            </script>
        </body>



</html>