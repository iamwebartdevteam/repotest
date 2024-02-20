<?php /* Template Name: Contact */

get_header();

 ?>

<section class="banner">
    <div class="container">
        <h1 class="cmn-title-banner">CONTACT</h1>
        <h6><a href="index.php">HOME &nbsp &nbsp &nbsp /</a> &nbsp &nbsp &nbsp CONTACT</h6>
    </div>
</section>

<section class="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5132540.910439698!2d85.26771242846915!3d20.02438735148953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e1!3m2!1sen!2sin!4v1702881336388!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>

<section class="contct-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>CONTACT FORM</h2>
    <form>
    <div class="contact-form d-flex">
            <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Full Name" required>
            <input type="email" class="form-control" id="email-address" name="email-address" placeholder="Email Address" required>
    </div>
          <div class="contact-form d-flex">
            <input type="tel" class="form-control" id="phone-number" name="phone-number" placeholder="Phone Number">
            <input type="email" class="form-control" id="your-subject" name="your-subject" placeholder="Your Subject" required>
          </div>
            <textarea class="form-control-msg" id="your-message" name="your-message" rows="5" placeholder="Your Message" required></textarea>    
            <button class="form-button">SEND NOW</button>
    </div>
      </form>
            <div class="col-md-6">
                <h2>CONTACT INFO</h2>
                <ul>
<div class="form-sec1 d-flex">
<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
<div class="head">
<h6><span>Head Office<br></span>
116 15th st </h6>
</div>
</div>
<div class="form-sec2 d-flex">
<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
<div class="mail">
<h6><span>Email Us<br></span>
Wariox@example.com</h6>
</div>
</div>
<div class="form-sec3 d-flex">
<a href="#"><i class="fa fa-mobile" aria-hidden="true"></i></a>
<div class="call">
<h6><span>Call Us<br></span>
0800 123 4567 </h6>
</div>
</div>
</ul>
    </div>
        </div>
    </div>
</section>

 <?php get_footer(); ?>