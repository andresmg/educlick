<?php
/*
Template Name: VCEVM Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$aside_background = get_field( 'aside_background' );
$title = get_field( 'title' );
$body = get_field( 'body' );
$table_header = get_field( 'table_header' );
$table_body = get_field( 'table_body' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid">
      <div class="Main__Vce row">
        <div class="col-12 col-sm-4 Main__Vce__Video" alt="Video">
          <div class="background" style="background: url(<?php echo $aside_background['url'] ?>) no-repeat center/cover;"></div>
        </div>
        <div class="col-12 col-sm-6 Main__Vce__info">
          <div data-aos="fade-up" data-aos-once="true" data-aos-duration="800">
            <h1 class="title dark"><?php echo $title ?></h1>
            <?php echo $body ?>
          </div>
          <div
            class="Main__Vce__Table"
            data-aos="fade-up"
            data-aos-once="true"
            data-aos-duration="800"
            data-aos-delay="300"
          >
            <div class="Main__Vce__Table__Head">
            <?php echo $table_header ?>
            </div>
            <div class="Main__Vce__Table__Body">
            <?php echo $table_body ?>
            </div>
          </div>
        </div>
        <div class="col-12 Main__Vce__icons">
          <div class="row justify-content-around">
          <?php if( have_rows('icons') ): ?>
            <?php $delay=0; while( have_rows('icons') ): the_row(); 
              // vars
              $icon = get_sub_field('icon');
              $icon_text = get_sub_field('icon_text');
              $icon_file = get_sub_field('icon_file');
              ?>
              <a
                href="<?php echo $icon_file['url'] ?>"
                class="col-sm-1 col-3 Main__Vce__icon icon dark"
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
                data-aos-delay="<?php echo $delay ?>"
              >
                <img
                  src="<?php echo $icon['url'] ?>"
                  alt="<?php echo $icon_text ?>"
                />
                <h6><?php echo $icon_text ?></h6>
              </a>
            <?php $delay = $delay + 300; endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>