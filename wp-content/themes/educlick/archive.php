<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archivo de la categor&iacute;a: <?php single_cat_title(); ?></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Entradas con Etiqueta: <?php single_tag_title(); ?></h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archivo del d&iacute;a: <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archivo del mes: <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archivo del a&ntilde;o: <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Archivo del Autor: </h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Archivo: </h2>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div <?php post_class() ?>>
				
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="meta">
						<em>Fecha:</em> <?php the_time('F jS, Y') ?>
                		<em>Por</em> <?php the_author() ?>
					</div>
					<div class="entry">
				<!-- Imagen Destacada de la entrada --> 
                <?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				?>
                <div id="destacada">
				<?php
						the_post_thumbnail('thumbnail');
				?>
                </div>
                <?php
					} 
				?>
                <!-- fin Imagen Destacada -->
				
				<?php if(!empty($post->post_excerpt)) {
     					//Si la entrada tiene sumario lo muestra
     					the_excerpt();
 				} else {
						//Si la entrada no tiene sumario, muestra el contenido
						the_content();
 				} ?>                




					</div>

				</div>

			<?php endwhile; ?>
			<div id="navigation_abajo">
				<div class="alignleft"><?php posts_nav_link(' ','&larr; Recientes',' ') ?></div>
				<div class="alignright"><?php posts_nav_link(' ',' ','Anteriores &rarr;') ?></div>
            </div>
			
            
	<?php else : ?>

		<h2>No se encontr&oacute; ninguna entrada</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>