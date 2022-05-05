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

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<h1><a href="<?php echo home_url() ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
            <!-- si tienes una imagen como logo -->
            
            <a href="<?php echo home_url() ?>/">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/logo.png" width="154" height="54" alt="___"/>
            </a>
            <!-- fin de la imagen como logo -->
            
		</div>
        <div id="access">
        	<nav>
        		<?php wp_nav_menu( array( 'container' => '', 'container_class' => false,'menu_class' => 'nav superfish', 'theme_location' => 'primary' ) ); ?>
			</nav>
        </div><!-- close access -->