<?php
/*
Template Name: Terms & Conditions Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
// var para todos los custom fields 
$background = get_field( 'background' );
$title = get_field( 'title' );
$body = get_field( 'body' );
$button_text = get_field( 'button_text' );
$button_url = get_field( 'button_url' );
?>

<?php endwhile; ?>
<?php endif; ?>


<main class="container-fluid terms" style="background: url(<?php echo $background['url'] ?>) no-repeat center / cover">
      <div class="container">
        <div class="Main__Terms row">
          <div class="col-12 Main__Terms__info">
            <h1><?php echo $title ?></h1>
            <?php echo $body ?>
          </div>
          <a href="<?php echo $button_url ?>" class="btn"><?php echo $button_text ?></a>
        </div>
      </div>
    </main>

<?php get_footer(); ?>