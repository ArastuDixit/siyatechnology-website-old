<?php /* Template Name: Politechnic-Training Internship */ ?>

<?php   

   get_header();

?>

<div class="page-banner banner-bg">
                <div class="container">
                    <div class="page-banner-inner">
                        <div class="page-banner-content">
                            <div class="page-title">
                                <h1 class="title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Polytechnic Students Training</h1>
                                <p class="subtitle wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Siyatechnology provide best Internship by the qualified developers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="cdn-inner-ocean">
                    <div class="cdn-inner-wave"></div>
                </div>
            </div>

            <main class="main" id="main">
                <section class="Section">
                    <div class="">
                        <div class="container">
                            <div class="content-wrap">
                                <div class="row align-items-center">
                                    <div class="col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="img-wrap">
                                            <img src="<?php echo home_url(); ?>/wp-assets/images/polytechnic_first.png" class="img-fluid mx-auto lazy">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="section-title-wrap left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                            <h2 class="section-title">Polytechnic Students Training</h2>
                                            <h6> Duration: 2 Months</h6>
                                        </div>
<p>Siyatechnology offers industry specific and career oriented
courses of PHP, iPhone, Android, SEO, CakePHP, WordPress and Java
</p>
<p>We also provide you with a Certificate after the successful completion of 24 days of training along with Live Project.
</p>
<p>Our Industry Expert Trainer covers both theory and practical and guides the students efficiently, along with the successful completion of your real-world project.

</p>
                                 <p>Our team of professional training staff focuses on providing real-life training to the students and makes 
                                 an optimum use of their experienced years in teaching the students. The teaching staff gives equal importance
                                 to both the advanced and basic concepts of the course and even highlights the details of 
                                 the ‘Programming Languages.'

</p>       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="Section ecosystem-section pt-100 pb-100">
                    <img src="<?php echo home_url(); ?>/wp-assets/images/section-shape.png" alt="image" class="cdn-secton-top">
                    <div class="container">
                        <div class="content-wrap">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-7 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                    <div class="section-title-wrap left wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                        <h2 class="section-title">Who all can apply for this?</h2>
                                    </div>
                                   
                                    <ul class="custom-list">
                                        <li>All the students who are appearing for Politechnic and those who have passed out</li>
                                        <li>The students who are appearing for B.E. and the pass out students</li>
                                        <li>The students who are appearing for the B.E./B.Tech. (CS/IT) and those who have passed out of the course</li>
                                        
                                    </ul>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-5 ml-auto wow fadeInUp" style="visibility: hidden; animation-name: none;">
                                    <div class="content-right wow fadeInUp consultation-form" style="visibility: hidden; animation-name: none;">
                                        <div class="talk-form-wrap">
                                            <form class="theme-form" method="POST">
                                                <h2 class="text-center mb-0">Free Consultation</h2>
                                                <p class="text-center">Get your free quote</p>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group inputControl">
                                                            <input type="text" id="name" name="name" class="form-control" required="">
                                                            <div class="label">Name </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group inputControl">
                                                            <input type="text" id="email" name="email" class="form-control" required="">
                                                            <div class="label">Email</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group inputControl">
                                                            <input type="text" id="phone" name="contactNumber" class="form-control" required="">
                                                            <div class="label">Phone</div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="col-md-12">
                                                        <div class="form-group inputControl textarea-field">
                                                            <textarea class="form-control" id="message_text" name="comment" rows="3" required=""></textarea>
                                                            <label for="message_text" class="label">Message</label>
                                                            <div id="message_text-err" class="error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-4">
                                                        <!-- Google reCAPTCHA box -->
                                                    <div class="g-recaptcha" data-sitekey="6LdDPdseAAAAAJwv8EManHKZAswtr8e0ilUt-9XN"></div></div>

                                                    <div class="btn-wrap col-md-12 mb-4">
                                                        <div class="btn btn-primary w-100">
                                                        <input type="hidden" name="action" value="technology">
                                                            <input type="submit" class="lats-talk-btn" value="Get Your Free Consultation">
                                                        </div>
                                                        <span class="output_message" style="color:black;"></span>
                                                         <span class="mail-status" style="color:black;"></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo home_url(); ?>/wp-assets/images/section-shape.png" alt="image" class="cdn-secton-bottom">
                </section>

<?php 

include(__DIR__ . '/includes/training-courses-common.php'); 

?>
                
            </main>

<?php

   get_footer();

   

   ?>