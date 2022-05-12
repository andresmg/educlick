<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$title = get_field( 'title' );

?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid contact">
      <div class="row justify-content-between">
        <div class="Main__Contact__back col-sm-8 col-12"></div>
        <div class="Main__Contact col-sm-4 col-12 Form">
          <h1><?php echo $title ?></h1>
          <?php echo do_shortcode('[contact-form-7 id="217" title="Contact us"]'); ?>
          <div class="row Main__Contact__rrss">
          <?php if( have_rows('emails') ): ?>
            <?php while( have_rows('emails') ): the_row(); 
              // vars
              $email_icon = get_sub_field('email_icon');
              $email = get_sub_field('email');
              ?>
              <div class="col-sm-6 col-12 iconic" style="background: url(<?php echo $email_icon['url'] ?>) no-repeat left center / contain;">
                <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php if( have_rows('contacts') ): ?>
            <?php while( have_rows('contacts') ): the_row(); 
              // vars
              $icon = get_sub_field('icon');
              $info = get_sub_field('info');
              $link = get_sub_field('link');
              ?>
              <div class="col-sm-6 col-12 iconic" style="background: url(<?php echo $icon['url'] ?>) no-repeat left center / contain;">
                <a href="<?php echo $link ?>" target="_blank"><?php echo $info ?></a>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>