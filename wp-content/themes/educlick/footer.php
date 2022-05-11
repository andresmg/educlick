<?php
$phone = get_field('phone', 54);
$email = get_field( 'email', 54 );
?>

<footer class="Footer container-fluid">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-sm-5 col-12 nav">
          <ul>
            <li><a href="<?php echo get_home_url(); ?>/our-story-page">Our Story</a></li>
            <li><a href="<?php echo get_home_url(); ?>/terms-conditions-page">T's and C's</a></li>
            <li><a href="<?php echo get_home_url(); ?>/contact-us-page">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-sm-2 col-12 links text-center">
          <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
          <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </div>
        <div class="col-sm-5 col-12 copy">
          <small>Copyright &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>. All Rights Reserved</small>
        </div>
      </div>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init()
      </script>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
