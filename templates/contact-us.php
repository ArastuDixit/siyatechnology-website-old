<?php /* Template Name: Contact Us */ ?>

<?php   

   get_header();

?>
<section class="container-fluid about_bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <h1>Contact Us</h1>
      </div>
      <div class="col-md-6 text-right padding_zero add_extra_padding">
        <p><a href="index" title="Home">Home </a> / <span>Contact Us</span></p>
      </div>
    </div>
  </div>
</section>
<!-- first section part end -->
<!-- second section part first -->
<section class="container-fluid contact_page_content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="contact_us_border">
          <h2>Let's get together and talk</h2>
          <p>Please fill up the form given below to connect with us. It will be routed to<br> person best able to
            provide you assistant. Siyatechnology PVT LTD representative will<br> contact you shortly.</p>
          <form method="post" action="#" id="contact" role="form">  <div class="form-group first-form boootm-sapce">
              <input type="text" name="name" id="name" value="" required="" placeholder="Name">
            </div>
            <div class="form-group first-form boootm-sapce">
              <input type="email" name="email" id="email" placeholder="Email" required=""
                data-error="Valid email is required.">
            </div>
            <div class="form-group first-form boootm-sapce">
              <input type="tel" name="phone" placeholder="Phone" id="phone" required="" class="numeric">
            </div>
            <div class="form-group first-form boootm-sapce">
              <input type="text" name="website" id="website" placeholder="Website Name" required=""
                data-error="Website Name is required.">
            </div>
            <div class="form-group first-form boootm-sapce">
              <textarea id="message" name="message" placeholder="Message" required=""
                data-error="Please,leave us a message."></textarea>
            </div>
            <!-- <div class="contact_capcha" >
						    <div class="g-recaptcha" data-sitekey="6LfcBlwUAAAAAI20p2MuYCEBFyhF7Chn785jhTH1" id="six_letters_code" name="six_letters_code"></div>
						</div> -->
            <!-- <div class="g-recaptcha register-cap" data-sitekey="6LdyFUAUAAAAABFMMZZrVgBefvQ7vB-vYagfRehF" id="six_letters_code" name="six_letters_code"></div> -->
            <div class="submit_bt">
              <input type="submit" name="save" value="Submit" class="submit_bt">
              <!--  <input type="submit" name="save" value="Submit Your Message" class="submit_bt" > -->
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="contact_us_right">
          <h2>Contact Information</h2>
          <h4>Siyatechnology PVT LTD</h4>
          <p>xxx,xxxxxxx,xxxxxxx, Indore
                Madhya Pradesh - India (4520xx)</p>
          <h4>Mobile</h4>
          <p>+91 0000000000 , 18000000000</p>
          <h4>Email</h4>
          <p><a href="mailto:info@siyatechnology.co.in" title="info@siyatechnology.co.in">info@siyatechnology.co.in </a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
</section>
<!-- second section part end -->
<!-- third section part first -->
<section class="container-fluid contact_us_pa">
  <div class="container padding_right1 padddd_add">
    <div class="row">
      <div class="col-md-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14722.73573723353!2d75.871596!3d22.702807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcf129c55555%3A0xf972ad5c5b881813!2sTechnorizen%20Software%20Solution%20%7C%20Software%20Development%20Company%20%7C%20Custom%20Blockchain%20%7C%20NFT%20%7C%20DEFI%20%7C%20Cryptocurrency%20%7C%20Mobile%20Apps!5e0!3m2!1shi!2sin!4v1679725927698!5m2!1shi!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>


<?php

   get_footer();

?>