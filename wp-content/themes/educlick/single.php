<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . '&larr;', 'Previous post link' . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . '&rarr;', 'Next post link' . '</span>' ); ?></div>
				</div><!-- #nav-above -->
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<div class="meta">
            	<!-- Categoria de la entrada con link -->
				<h3>Categor&iacute;a: 
				<?php $cats = get_the_category();
						foreach( $cats as $cat ) { ?>
 							<a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>
						<?php } ?>
                </h3>
                <!-- fecha de la entrada -->
                <em>Fecha:</em> <?php the_time('F jS, Y') ?><br>
                <!-- autor de la entrada -->
                <em>Por</em> <?php the_author() ?><br>
                <!-- comentarios -->
                <?php comments_popup_link('0 Comentarios', '1 Comentario', '% Comentarios', 'comments-link', ''); ?>
            </div>

			<div class="entry">
				<!-- Imagen Destacada de la entrada --> 
                <?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				?>
                <div id="destacada">
				<?php
						the_post_thumbnail();
				?>
                </div>
                <?php
					} 
				?>
                <!-- fin Imagen Destacada -->
                
                
				<?php the_content(); ?>
				<!-- si la entrada esta paginada -->
				<?php wp_link_pages(array('before' => 'P&aacute;ginas: ', 'next_or_number' => 'number')); ?>
				<!-- para mostrar las etiquetas del post -->
				<?php the_tags( 'Etiquetas: ', ', ', ''); ?>

			</div>
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>