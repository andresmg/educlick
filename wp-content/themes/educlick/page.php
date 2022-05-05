<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

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

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'P&aacute;ginas: ', 'next_or_number' => 'number')); ?>

			</div>

		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>