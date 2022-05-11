<?php
/*
Template Name: WRS Resources Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$column_background = get_field( 'column_background' );
$content_subtitle = get_field( 'content_subtitle' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid splash__custom">
      <div class="Main__Resources">
        <div class="row">
        <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-sm-6 col-12 Main__Resources__column wrs" style="
            background: url(<?php echo $column_background['url']?>) no-repeat center / cover;"></div>
              <div class="col-sm-4 col-12">
                <div class="row align-items-center Main__Resources__buttons">
                <?php if( have_rows('buttons') ): ?>
                  <?php $count = 1; while( have_rows('buttons') ): the_row(); 
                    // vars
                    $button_icon = get_sub_field('button_icon');
                    $button_text = get_sub_field('button_text');
                    ?>
                    <div
                      class="col-sm-12 col-6 button <?php if ($count == 1) { echo "active topbtn"; } ?><?php if ($count > 1) { echo "bttmbtn"; } ?>"
                      onclick="<?php if ($count == 1) { echo "showTop()"; } ?><?php if ($count > 1) { echo "showBottom()"; } ?>"
                    >
                      <p><?php echo $button_text ?></p>
                    </div>	
                  <?php $count++; endwhile; ?>
                 <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 Main__Resources__info">
              <?php if( have_rows('content') ): ?>
                  <?php $count = 1; while( have_rows('content') ): the_row(); 
                    // vars
                    $content_body = get_sub_field('content_body');
                    $content_title = get_sub_field('content_title');
                    ?>

            <div id="<?php if ($count == 1) { echo "top"; } ?><?php if ($count > 1) { echo "bottom"; } ?>" class="<?php if ($count == 1) { echo "d-block"; } ?> <?php if ($count > 1) { echo "d-none"; } ?>">  
              <div
                data-aos="fade-up"
                data-aos-once="true"
                data-aos-duration="800"
              >
                <h3><?php echo $content_subtitle ?></h3>
                <h1 class="title <?php if ($count == 1) { echo "student"; } ?> <?php if ($count > 1) { echo "teacher"; } ?>"><?php echo $content_title ?></h1>
                <?php echo $content_body ?>
              </div>
              <div class="row Main__Resources__icons">
              <?php if( have_rows('content_icons') ): ?>
                  <?php $delay = 300; while( have_rows('content_icons') ): the_row(); 
                    // vars
                    $icon = get_sub_field('icon');
                    $icon_text = get_sub_field('icon_text');
                    $icon_file = get_sub_field('icon_file');
                    ?>
                    <a
                      href="<?php echo $icon_file['url'] ?>"
                      class="col-sm-3 col-6 icon"
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
                    
                  <?php $count++; endwhile; ?>
                 <?php endif; ?>
            
          </div>
        </div>
      </div>
    </main>

    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/js/resources.js"></script>

<?php get_footer(); ?>