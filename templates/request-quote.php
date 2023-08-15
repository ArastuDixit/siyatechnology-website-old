
<?php /* Template Name: Request Quote */ ?>

<?php   

   get_header();

?>
<section class="container-fluid about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form-wrap">
                    <div class="section-title text-black">
                        <h2 class="title">Request Quote</h2>
                            </div>
                                <div class="contact-form p-0">
                                    <form class="theme-form" id="send_contact_form" method="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group inputControl">
                                                    <input type="text" id="name" name="name" class="form-control" required="">
                                                        <div class="label">Frist name<span class="required">*</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group inputControl">
                                                        <input type="email" id="email" name="email" class="form-control" required="">
                                                        <div class="label">Your e-mail<span class="required">*</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group inputControl">
                                                        <input type="text" id="contactNumber" name="contactNumber" class="form-control" required="">
                                                        <div class="label">Your phone number <span class="required">*</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group inputControl">
                                                        <select class="form-control" name="solutionneed">
                                                            <option>Mobile App Development</option>
                                                            <option>iPhone app Development</option>
                                                            <option>Android App Development</option>
                                                            <option>Cross Platform App Development</option>
                                                            <option>Mobile Game Development</option>
                                                            <option>Mobile App Development Resources</option>
                                                            <option>Other</option>
                                                        </select>
                                                        <div class="label">What Solutions do You need ? <span class="required">*</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group inputControl textarea-field">
                                                <textarea class="form-control" id="comment" name="comment" required="" maxlength="200"></textarea>
                                                <div class="label">Your question<span class="required">*</span></div>
                                            </div>
                                             <!-- Google reCAPTCHA box -->
                                             <div class="g-recaptcha" data-sitekey="6LdDPdseAAAAAJwv8EManHKZAswtr8e0ilUt-9XN"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdDPdseAAAAAJwv8EManHKZAswtr8e0ilUt-9XN&amp;co=aHR0cHM6Ly93d3cuY2RubW9iaWxlc29sdXRpb25zLmNvbTo0NDM.&amp;hl=en&amp;v=vpEprwpCoBMgy-fvZET0Mz6L&amp;size=normal&amp;cb=n77qw5sw9boz" width="304" height="78" role="presentation" name="a-l01qxkxl02tn" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                             
                                            <div class="cdn-contact-check">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="privacyPolicy" required="">
                                                    <label class="form-check-label" for="privacyPolicy">I have read and accept the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sendNDA">
                                                    <label class="form-check-label" for="sendNDA">Send me NDA</label>
                                                </div>
                                            </div>
                                            <div class="btn-wrap">
                                            <input type="hidden" name="action" value="requestforquote">
                                            <input type="submit" class="btn btn-primary btn-md" name="submit" value="Submit Request"> 
                                            <span class="output_message" style="color:white;"></span>
                                            <span class="mail-status" style="color:white;"></span>

                                            </div>
                                        </form>
                                        <div class="contact-adrees d-flex justify-content-between px-0 py-5 border-0">
                                            <div>
                                                <h3 class="title mt-0">MOBILITY SOLUTIONS OF SIYATECHNOLOGY SOLUTIONS GROUP</h3>
                                                <p>xxx,Safari House<br>Sneh Nagar, Indore, India</p>
                                            </div>
                                            <div class="domestic-contactus">
                                            <h3 class="title mt-0">Siyatechnology Software Solutions Pvt. Ltd</h3>
                                                <!-- <p><a href="mailto:contact@cdnsol.com">contact@cdnsol.com</a></p> -->
                                                <!-- <h3 class="title my-3">Suruche Tech (India) Pvt. Ltd</h3> -->
                                                <!-- <p><a href="mailto:contact@cdnmobilesolutions.com">contact@suruchetech.com</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-adrees">
                                    <h2 class="title">Explore your ideas with us!</h2>
                                    <h5 class="sub-title">CALL US:</h5>
                                    <ul class="phon-list">
                                        <li><a href="tel:+917310000000">+91-731-0000000</a></li>
                                        <li><a href="tel:+610000000000">+61-000-000-000</a></li>
                                        <li><a href="tel:+16000000000">+1-000-000-0000</a></li>
                                    </ul>
                                    <h3 class="sub-title">EMAIL US:</h3>
                                    <p><a href="mailto:contact@cdnmobilesolutions.com">contact@gmail.com</a></p>
                                    <h3 class="title">ADDRESS</h3>
                                    <h5 class="sub-title">INDIA</h5>
                                    <p>Business Skypark,<br>Indore, M.P.</p>
                                    <h5 class="sub-title">USA</h5>
                                    <p>77 East Thomas Rd<br>Suite 221 Phoenix, Arizona</p>
                                    <h5 class="sub-title">MAURITIUS</h5>
                                    <p>P.O. Box 888, Port-Louis<br>Ph: <a href="tel:+2300000000">+230-000-0000</a></p>
                                </div>
                            </div>
                        </div>
                                             </div>
                                        </section>

                        <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14722.73573723353!2d75.871596!3d22.702807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcf129c55555%3A0xf972ad5c5b881813!2sTechnorizen%20Software%20Solution%20%7C%20Software%20Development%20Company%20%7C%20Custom%20Blockchain%20%7C%20NFT%20%7C%20DEFI%20%7C%20Cryptocurrency%20%7C%20Mobile%20Apps!5e0!3m2!1shi!2sin!4v1679727446587!5m2!1shi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <img src="images/section-shape2.png" alt="image" class="cdn-secton-bottom">

<?php

get_footer();

?>