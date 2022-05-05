<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="meta">
            	<!-- fecha de la entrada -->
                <em>Fecha:</em> <?php the_time('F jS, Y') ?><br>
                <!-- autor de la entrada -->
                <em>Por</em> <?php the_author() ?><br>
                <!-- comentarios -->
                <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios', 'comments-link', ''); ?>
            </div>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Entrada en: <?php the_category(', ') ?> | 
				<?php comments_popup_link('0 Comentarios &#187;', '1 Comentario &#187;', '% Comentarios &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

			<div id="navigation_abajo">
				<div class="alignleft"><?php posts_nav_link(' ','&larr; Recientes',' ') ?></div>
				<div class="alignright"><?php posts_nav_link(' ',' ','Anteriores &rarr;') ?></div>
            </div>

	<?php else : ?>

		<h2>No se encontr&oacute;</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>