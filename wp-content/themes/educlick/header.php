<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<link rel="shortcut icon" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/favicon.ico">

    <meta name="description" content="descripcion del site" />
    <meta name="keywords" content=" palabras claves, separadas por comas">
	
    <!-- para facebook -->
	<meta property="og:image" content="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/facebook.jpg"/><!-- 250x250 -->
    <meta property="og:site_name" content=" "/>
    <meta property="og:url" content=" "/>
    <meta property="og:title" content=" "/>
    <meta property="og:description" content=" "/>
	<!-- fin del facebook -->
    
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- CSS only -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

	<link href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/stylesheets/custom_styles.css" rel="stylesheet" type="text/css">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$tagline = get_field('tagline', 52);
$button = get_field( 'button', 52 );
$button_url = get_field( 'button_url', 52 );
?>
	<header class="Header container-fluid">
      <div class="row d-flex justify-content-between align-items-center">
        <a href="<?php echo get_home_url(); ?>" class="col-sm-1 col-6 Logo"></a>
        <div class="col-sm-9 d-none d-sm-block Tagline">
          <h1>
		  <?php echo $tagline; ?>
          </h1>
        </div>
        <a href="<?php echo $button_url; ?>" class="col-sm-1 col-6 Button" target="_blank"><?php echo $button; ?></a>
        <div class="col-12 d-block d-sm-none Tagline">
          <h1>
		  <?php echo $tagline; ?>
          </h1>
        </div>
      </div>
    </header>