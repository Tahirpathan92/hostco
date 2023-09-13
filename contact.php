
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
									<h1>Contact Us</h1>
                                    <h3 class="contact_info_h2">NEED TO GET IN TOUCH? JUST FILL OUT THE FORM BELOW</h3>
                                    <p class="contact_info_p" >Our sales team are happy to assist you with any queries you may have. We also provide Telephone and Email to assistance.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            <section aria-label="section">
                <div class="container">
						<div class="row g-custom-x align-items-center">
							
							<div class="col-lg-8 mb-sm-30">
                            <div class="de-map-wrapper">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14419.541767368702!2d68.3505958!3d25.3751556!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c71bd9be08c7f%3A0xc2cf7d3d58a7b411!2sGexHost!5e0!3m2!1sen!2s!4v1693483053856!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                                    </div>
						<div class="col-lg-4">

                        <div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
                            <h4>Pakistan Office</h4>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>A21, 3rd Floor, Opp: Mehmood Garden Auto Bahn                         Road, Hyderabad.</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+92 22 3812300</span>
                                <span><i class="id-color fa fa-mobile fa-lg"></i>+92 301 8222720</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@example.                        com">contact@gexhost.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                            </address>
                        </div>
                                    </div>
                        <div class="col-lg-12 mb-sm-30">

                            <div class="spacer-30"></div>


							<h3>Do you have any question?</h3>
							
						<form name="contactForm" id="contact_form" class="form-border" method="post" action="send_email.php">
                                <div class="row">
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb10">
                                        <div class="field-set">
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="field-set mb20">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main" onclick="msgSubmit()">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>
						</div>

						</div>
							
						</div>
					</div>

            </section>
<script>
    
function msgSubmit(){
    Swal.fire(
  'Thank You!',
  'Your message has been sent successfully',
  'success'
)
}
</script>
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <?php include 'footer.php'?>