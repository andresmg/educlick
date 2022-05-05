<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Resultados de la b&uacute;squeda</h2>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

                <div class="meta">
                    <!-- fecha de la entrada -->
                    <em>Fecha:</em> <?php the_time('F jS, Y') ?><br>
                    <!-- autor de la entrada -->
                    <em>Por</em> <?php the_author() ?><br>
                    <!-- comentarios -->
                    <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios', 'comments-link', ''); ?>
                </div>

				<div class="entry">
					<?php the_excerpt(); ?>
				</div>

			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2>No se encontr&oacute;</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>