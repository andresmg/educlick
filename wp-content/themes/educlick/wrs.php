<?php
/*
Template Name: WRS Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$banner_title = get_field( 'banner_title' );
$banner_subtitle = get_field( 'banner_subtitle' );
$banner_description = get_field( 'banner_description' );
$pdf_icon = get_field( 'pdf_icon' );
$pdf_text = get_field( 'pdf_text' );
$pdf_url = get_field( 'pdf_url' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid splash__custom">
      <div class="Banner row">
        <div class="col-12 text-center">
          <h1 class="blue"><?php echo $banner_title; ?></h1>
          <h3 class="blue"><?php echo $banner_subtitle; ?></h3>
          <p><?php echo $banner_description; ?></p>
        </div>
      </div>
      <div class="Main__Pds container d-flex justify-content-center">
        <div class="row d-flex justify-content-between">
        <?php if( have_rows('buttons') ): ?>
					<?php $delay=0; while( have_rows('buttons') ): the_row(); 
						// vars
						$button_icon = get_sub_field('button_icon');
						$button_text = get_sub_field('button_text');
						$button_page = get_sub_field('button_page');
						?>
						
            <div class="col-12 col-sm-5">
              <a
                href="<?php echo $button_page; ?>"
                class="Main__Pds__cards blue <?php if ($delay == 0) { echo "mt-5"; } ?>"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="<?php echo $delay ?>"
              >
                <div class="icons icons__book blue" style="background: #2BAAE1 url(<?php echo $button_icon['url'] ?>) no-repeat center / 12rem;"></div>
                <?php echo $button_text ?>
              </a>
          </div>
					<?php $delay = $delay + 300; endwhile; ?>
				<?php endif; ?>
          <div
            class="col-12"
            data-aos="fade"
            data-aos-once="true"
            data-aos-delay="500"
            data-aos-duration="800"
          >
            <a href="<?php echo $pdf_url['url']; ?>" class="Cta"> <?php echo $pdf_text; ?></a>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>