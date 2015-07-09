</section>

<a class="exit-off-canvas"></a>
<div class="association-awards-container">
  <div class="row">
    <h3 class="small-12 medium-4 small-centered columns">Associations &amp; Awards</h3>
    <hr>
  </div>
  <div class="row">
    <div class="small-6 large-3 text-center columns ">
      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/American-Dental-Association.png" alt="">
    </div>
        <div class="small-6 large-3 text-center columns ">
      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/Academy-Of-General-Dentistry.png" alt="">
    </div>

    <div class="small-6 large-3 text-center columns ">
      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/American-Academy-Of-Cosmetic-Surgery.png" alt="">
    </div>
    <div class="small-6 large-3 text-center columns ">
      <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/American-Academy-Of-Implant-Dentistry.png" alt="">
    </div>
  </div>
</div><!--  END associatio-awards-container -->
<div class="footer-container">
  <footer class="row">
    <div class="small-12 medium-6 large-4 columns map">
<!--       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.816753052379!2d-117.22758500000003!3d32.82362000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc01ecf132fa1f%3A0x4016fc6787be9967!2sCeatus+Media+Group!5e0!3m2!1sen!2sus!4v1423511454541" width="100%" height="126" frameborder="0" style="border:0"></iframe> -->
    <a href="https://www.google.com/maps?ll=32.82362,-117.227585&z=14&t=m&hl=en-US&gl=US&mapclient=embed&cid=4618155989504268647" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/themes/demo1/img/footer-map.jpg" alt="footer-map" width="100%" height="123" />
      <div class="small-12 columns address">
        <h3>Our Location</h3>
        <address>
          <p>Sample Dental &amp; Associates</p>
          <p>4141 Jutland Drive, Suite 215</p>
          <p>San Diego, California</p>
        </address>
      </div>
    </div>
    </a>
    <div class="small-12 medium-6 large-4 columns ">
      <ul class="small-block-grid-3 text-center">
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_01.jpg" alt=""></li>
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_02.jpg" alt=""></li>
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_03.jpg" alt=""></li>
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_04.jpg" alt=""></li>
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_05.jpg" alt=""></li>
        <li><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/footer-gallery_06.jpg" alt=""></li>
      </ul><!--  END block-grid -->
    </div>
    <div class="small-12 large-4 columns contact">
      <div class="small-12 medium-6 large-12 columns">
        <h4>Contact Information</h4>
        <p><span class="contact-first">Phone:</span>&#160;<span class="contact-second"><a href="tel:8584545505"> (858) 454-5505</a></span></p>
      </div>
      <div class="small-12 medium-6 large-12 columns">
        <h4>Office Hours</h4>
        <p><span class="contact-first">Mon-Fri</span>&#160;<span class="contact-second"> 8:00am - 5:30pm</span></p>
        <p><span class="contact-first">Phone:</span>&#160;<span class="contact-second"> 8:00am - 2:00pm</span></p>
      </div>
    </div>
  </footer>
</div><!--  END footer-container -->
<div class="colophon-container">
  <div class="row colophon">
    <div class="small-12 medium-6 columns copyright">
      <p>&copy; Copyright <?php echo date('Y') ?> <?php echo get_bloginfo('name' );?>, rights reserved</p>
    </div><!--  END copyright -->
    <div class="small-12 medium-6 columns social">
      <div class="row">
      <h5 class="small-12 large-5 columns">Get social with us!</h5>
        <ul class="small-12 large-6 columns end">
          <li><a href="https://www.facebook.com/Ceatus" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/facebook.png" alt=""></a></li>
          <li><a href="https://twitter.com/ceatus" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/twitter.png" alt=""></a></li>
          <li><a href="https://plus.google.com/102871652786478328055/posts" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/google.png" alt=""></a></li>
          <li><a href="http://www.ceatus.com/dentistry/blogs-why/" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/blog.png" alt=""></a></li>
          <li><a href="https://www.youtube.com/user/Ceatus" target="_blank"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/02/youtube.png" alt=""></a></li>
        </ul>
        </div>
    </div><!--  END social -->
  </div><!--  END colophon -->
</div><!--  END -->
</div><!--  END footer-container -->


<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>


	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
<div style="opacity:0.75;font-size:22px;text-align:center;display:block;padding:20px;
background:#F00;color:#fff;position:fixed;width:100%;z-index:9999;margin-top:30px;bottom: 0;"><b>NOTE:</b> This site is currently in under production and has not passed quality control.</div>