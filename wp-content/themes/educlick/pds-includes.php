<?php
/*
Template Name: PDS Includes Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$title = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
$body = get_field( 'body' );
$aside_info = get_field( 'aside_info' );
$aside_background = get_field( 'aside_background' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid">
      <div class="Main__Includes">
        <div class="row">
          <div class="col-12 col-sm-6 Main__Includes__left">
            <h3
              class="mb-5"
              data-aos="fade-right"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="300"
            >
            <?php echo $title ?>
            </h3>
            <h2
              class="light"
              data-aos="fade"
              data-aos-once="true"
              data-aos-duration="1000"
            >
            <?php echo $subtitle ?>
            </h2>
            <p
              data-aos="fade-up"
              data-aos-once="true"
              data-aos-duration="800"
              data-aos-delay="450"
            >
            <?php echo $body ?>
            </p>
          </div>
          <div class="col-12 col-sm-4 Main__Includes__right">
            <div class="row justify-content-around">
            <?php if( have_rows('icons') ): ?>
                  <?php $delay = 0; while( have_rows('icons') ): the_row(); 
                    // vars
                    $icon = get_sub_field('icon');
                    $icon_text = get_sub_field('icon_text');
                    $icon_file = get_sub_field('icon_file');
?>
                    <a
                      href="<?php echo $icon_file['url'] ?>"
                      class="col-4 icon light"
                      data-aos="fade-up"
                      data-aos-once="true"
                      data-aos-duration="800"
                      data-aos-delay="<?php echo $delay ?>"
                      target="_blank"
                    >
                      <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon_text ?>" />
                      <h6 class="light"><?php echo $icon_text ?></h6>
                    </a>	
                  <?php $delay = $delay + 300; endwhile; ?>
                 <?php endif; ?>
              <div
                class="col-12 p-0"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="900"
              >
                <div class="order">
                <?php echo $aside_info ?>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-sm-2 col-12 Main__Includes__background"
            style="background: url(<?php echo $aside_background['url'] ?>) no-repeat right center / cover;"
          ></div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>