<?php
/*
Template Name: Our Story Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$title = get_field( 'title' );
$body = get_field( 'body' );
$top_pic = get_field( 'top_pic' );
$bottom_pic = get_field( 'bottom_pic' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid Main">
      <div class="container">
        <div class="Main__OurStory row justify-content-between">
          <div class="col-12 col-sm-8 Main__OurStory__info">
            <h1 class="title"><?php echo $title ?></h1>
            <?php echo $body ?>
            <div class="row Main__OurStory__Timeline">
            <?php if( have_rows('timeline') ): ?>
					<?php $count=1; while( have_rows('timeline') ): the_row(); 
						// vars
						$tl_title = get_sub_field('tl_title');
						$tl_description = get_sub_field('tl_description');
						?>
            <div class="col-sm-2 col-12 blue<?php echo $count ?>">
              <h4><?php echo $tl_title ?></h4>
              <?php echo $tl_description ?>
            </div>
					<?php $count++; endwhile; ?>
				<?php endif; ?>
            </div>
          </div>
          <div class="col-12 col-sm-2 Main__OurStory__blocks">
            <div class="block blue" style="background: url(<?php echo $top_pic['url'] ?>) no-repeat center center/cover;"></div>
            <div class="block dark" style="background: url(<?php echo $bottom_pic['url'] ?>) no-repeat center center/cover;"></div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>