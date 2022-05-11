<?php
/*
Template Name: PD Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$title = get_field( 'title' );
$body = get_field( 'body' );
$aside_background = get_field( 'aside_background' );
$cta_title = get_field( 'cta_title' );
$cta_button_text = get_field( 'cta_button_text' );
$cta_button_url = get_field( 'cta_button_url' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid">
      <div class="Main__Pd row justify-content-end align-items-center">
        <div
          class="col-12 col-sm-4 Main__Pd__info"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
        >
          <h1 class="title"><?php echo $title ?></h1>
          <?php echo $body ?>
        </div>
        <div
          class="col-12 col-sm-4 Form"
          data-aos="fade-up"
          data-aos-once="true"
          data-aos-duration="800"
          data-aos-delay="300"
        >
          <h1><?php echo $cta_title ?></h1>
          <a href="<?php echo $cta_button_url ?>" class="Button btn"><?php echo $cta_button_text ?></a>
        </div>
        <div class="col-sm-3 col-12 Back" style="background: url(<?php echo $aside_background['url'] ?>) no-repeat center / cover;"></div>
      </div>
    </main>

<?php get_footer(); ?>