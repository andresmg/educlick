<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$video = get_field( 'video' );
$brochure_icon = get_field( 'brochure_icon' );
$brochure_title = get_field( 'brochure_title' );
$brochure_subtitle = get_field( 'brochure_subtitle' );
$brochure_pdf = get_field( 'brochure_pdf' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid splash">
      <div class="Main__Home row">
        <div class="col-12 col-sm-10">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="row Rws">
			  <?php if( have_rows('links') ): ?>
					<?php $delay=0; while( have_rows('links') ): the_row(); 
						// vars
						$name = get_sub_field('name');
						$title = get_sub_field('title');
						$subtitle = get_sub_field('subtitle');
						$link = get_sub_field('link');
						?>
						<a
						href="<?php echo $link ?>"
						class="col-sm-6 col-5 Main__Home__card <?php echo $name ?>"
						data-aos="fade-down"
						data-aos-once="true"
						data-aos-duration="1000"
						data-aos-delay="<?php echo $delay ?>"
						>
						<span>
							<h4><?php echo $title ?></h4>
							<?php echo $subtitle ?>
						</span>
						</a>	
					<?php $delay = $delay + 300; endwhile; ?>
				<?php endif; ?>
                <div
                  class="col-12 Brochure d-flex justify-content-center align-items-center"
                  data-aos="fade-up"
                  data-aos-once="true"
                  data-aos-delay="900"
                  data-aos-duration="1000"
                >
                  <img src="<?php echo $brochure_icon['url'] ?>" alt="download brochure" />
                  <a href="<?php echo $brochure_pdf['url'] ?>">
                    <h1><?php echo $brochure_title ?></h1>
                    <p><?php echo $brochure_subtitle ?></p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-5 Video">
              <div
                class="background"
                data-aos="fade"
                data-aos-once="true"
                data-aos-delay="1400"
                data-aos-duration="1000"
              ></div>
              <div
                class="Video__player"
                data-aos="fade-left"
                data-aos-once="true"
                data-aos-delay="900"
                data-aos-duration="1000"
              >
                <video
                  loop
                  muted
                  autoplay
                  playsinline
                  class="Video__player__video"
                >
                  <source 	
					src="
					<?php if ($video) : ?>
					<?php echo $video['url']; ?>
					<?php else : ?>
					<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/educlick.mp4; ?>
					<?php endif;  ?>
					"
					type="video/mp4" />
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>