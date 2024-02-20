<?php /* Template Name: Home */

get_header();

 ?>


<section class="home-banner">
    <div class="owl-carousel owl-theme home-slider">
      <?php  
 $fields = CFS()->get( 'banner_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
    <div class="slider-item">
      <div class="slider-image">
        <img src="<?php echo $field['banner_image']; ?>">
      </div>
      <div class="slider-content">
        <div class="container">
        <span><?php echo $field['banner_subheading']; ?></span>
        <h1><?php echo $field['banner_title']; ?></h1>
        <p><?php echo $field['banner_content']; ?></p>
        <div class="slider-button">
          <a href="<?php echo $field['banner_button_link']; ?>"><?php echo $field['banner_button_text']; ?></a>
        </div>
        </div>
      </div>
    </div>
<?php }  } ?>


</div>
</section>

<section class="activity-section">
  <div class="container">
    <div class="activity-upper-content">
      <span class="cmn-subtitle">find support</span>
      <h1 class="cmn-title">our activities</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="box-inner">
          <div class="box">
            <i class="fa-solid fa-briefcase-medical"></i>
            <h3>rehabitation</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="box-button">
              <a href="#">read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="box-inner">
          <div class="box">
            <i class="fa-solid fa-hand-holding-heart"></i>
            <h3>charity</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="box-button">
              <a href="#">read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="box-inner">
          <div class="box">
            <i class="fa-solid fa-school"></i>
            <h3>education</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            <div class="box-button">
              <a href="#">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <span class="cmn-subtitle-do">what we do</span>
          <h1 class="cmn-title-do">our gallery</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

          <div class="owl-carousel owl-theme gallery-slider">
    <div class="slider-item">
      <div class="slider-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
      </div>
    </div>
    <div class="slider-item">
      <div class="slider-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg">
      </div>
    </div>
    <div class="slider-item">
      <div class="slider-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner3.jpg">
      </div>
    </div>
</div>

<div class="gallery-button">
  <a href="">see all</a>
</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gal1.jpg"></div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials">
  <div class="container">
    <div class="owl-carousel owl-theme testimonial-slider">
    <div class="slider-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
      <div class="slider-content">
        <h4>john leslie</h4>
        <span>veteran</span>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
    </div>
    <div class="slider-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
      <div class="slider-content">
        <h4>john leslie</h4>
        <span>veteran</span>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
    </div>
    <div class="slider-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
      <div class="slider-content">
        <h4>john leslie</h4>
        <span>veteran</span>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
      </div>
    </div>
    </div>
    
    </div>
</div>
  </div>
</section>

<section class="blog-section">
  <div class="container">
    <div class="blog-heading">
      <span class="cmn-subtitle2">news & events</span>
          <h1 class="cmn-title2">our blog</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
    </div>

    <div class="row">


      <div class="col-lg-4 col-md-6">
        <div class="blog-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="blog-content">
            <div class="blog-top">
              <span>jan 02, 2018</span>
              <span>charity</span>
            </div>
            <h3>Lorem Ipsum is simply dummy text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 col-md-6">
        <div class="blog-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="blog-content">
            <div class="blog-top">
              <span>jan 02, 2018</span>
              <span>charity</span>
            </div>
            <h3>Lorem Ipsum is simply dummy text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="blog-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="blog-content">
            <div class="blog-top">
              <span>jan 02, 2018</span>
              <span>charity</span>
            </div>
            <h3>Lorem Ipsum is simply dummy text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-section">
  <div class="about-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">

    <div class="abt-content">
      <div class="container">
        <div class="abt-inner">
          <span class="cmn-subtitle1">about us</span>
          <h1 class="cmn-title1">who we are</h1>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          <ul>
            <li><span>01.</span>higher education opportunities</li>
            <li><span>02.</span>employment services</li>
            <li><span>03.</span>discount programs</li>
            <li><span>04.</span>veteran benefits</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="management-section">
  <div class="container">
    <div class="management-head">
      <span class="cmn-subtitle3">our</span>
      <h1 class="cmn-title3">management</h1>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="management-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="management-content">
              <span>lori lewis</span>
            <h3>Lorem Ipsum</h3>

            <div class="social-icons">
              <ul>
              <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="management-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="management-content">
              <span>lori lewis</span>
            <h3>Lorem Ipsum</h3>

            <div class="social-icons">
              <ul>
              <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="management-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="management-content">
              <span>lori lewis</span>
            <h3>Lorem Ipsum</h3>

            <div class="social-icons">
              <ul>
              <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="management-innr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg">
          <div class="management-content">
              <span>lori lewis</span>
            <h3>Lorem Ipsum</h3>

            <div class="social-icons">
              <ul>
              <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-google-plus-g"></i></a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="addres-section">
  <div class="container">
  <div class="adress">
    <div class="row">
      <div class="col-md-4">
        <div class="address-sec">
          <div class="address-bg">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <span>head office</span>
          <h3>1116 15th St, Sacramento</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="address-sec">
          <div class="address-bg">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <span>email us</span>
          <h3>wriox@example.com</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="address-sec">
          <div class="address-bg">
            <i class="fa-solid fa-mobile"></i>
          </div>
          <span>call us</span>
          <h3>0080 123 4567</h3>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="home-form-section">
  <div class="home-bg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.jpg">
  </div>
  <div class="contact-inner">
  <div class="container">
    <div class="contact-head">
      <span class="cmn-subtitle4">write us</span>
      <h1 class="cmn-title4">contact form</h1>
    </div>
    <div class="contact-form">
  <div class="contact-form-wrapper d-flex justify-content-center">
    <form>
        <?php echo do_shortcode('[contact-form-7 id="289545a" title="Contact Form"]'); ?>
      </form>
  </div>
</div>
  </div>
</div>
</section>

 <?php get_footer(); ?>

    
