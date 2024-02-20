<footer>
      <div class="footer-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-content">
                <h3><?php echo get_field('footer_heading') ?></h3>
                <p><?php echo get_field('footer_subscribe') ?></p>
                <form>
                  <?php echo do_shortcode('[contact-form-7 id="b216a78" title="Subscribe form"]'); ?>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-middle">
                <div class="footer-cont">
                  <div class="footer-logo">
                  <a href=""><h1><?php echo get_field('footer_logo') ?></h1></a>
                  </div>
                  <div class="footer-cont">
                    <p><?php echo get_field('footer_content') ?></p>
                    <div class="footer-icon">
                      <ul>
              <li><a href="<?php echo get_field('footer_icn1_link') ?>"><?php echo get_field('footer_icn1') ?></a></li>
              <li><a href="<?php echo get_field('footer_icn2_link') ?>"><?php echo get_field('footer_icn2') ?></a></li>
              <li><a href="<?php echo get_field('footer_icn3_link') ?>"><?php echo get_field('footer_icn3') ?></a></li>
              <li><a href="<?php echo get_field('footer_icn4_link') ?>"><?php echo get_field('footer_icn4') ?></a></li>
            </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-content">
                <h3><?php echo get_field('footer_event_heading') ?></h3>
<?php  
 $fields = CFS()->get( 'footerevent_loop' );
 if(is_array($fields) || is_object($fields)){
foreach ( $fields as $field ) {

?>
                <div class="footer-last-top">
                <span><?php echo $field['footerevent_subhead']; ?></span>

                <div class="add-wrap">
                  <div class="add-inner">
                    <?php echo $field['footerevent_icn']; ?>
                    
                    <span><?php echo $field['footerevent_subtitle']; ?></span>
                  </div>
                  <div class="add-inner">
                    <?php echo $field['footerevent_icn2']; ?>
                    
                    <span><?php echo $field['footerevent_subtitle2']; ?></span>
                  </div>
                  <div class="add-inner">
                    <?php echo $field['footerevent_icn3']; ?>
                    
                    <span><?php echo $field['footerevent_subtitle3']; ?></span>
                  </div>
                </div>
                </div>
                <?php }  } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="copyright">
    <span><?php echo get_field('footer_copyright') ?></span>
  </div>
      </div>
    </footer>















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/carousel.js"></script>
  </body>
</html>