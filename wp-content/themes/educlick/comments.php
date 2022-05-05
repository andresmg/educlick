<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Por favor no carge esta p&aacute;gina directamente. Gracias!');

	if ( post_password_required() ) { ?>
		Esta entrad&aacute; est&aacute; protegida con contrase&ntilde;a. Coloque su contrase&ntilde;a para ver los comentarios.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h2 id="comments"><?php comments_number('0 Respuestas', '1 Respuesta', '% Respuestas' );?></h2>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Los comentarios est&aacute;n cerrados.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2><?php comment_form_title( 'Responder', 'Responder a %s' ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>Debe estar <a href="<?php echo wp_login_url( get_permalink() ); ?>">ingresado</a> para colocar un comentario.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Ingresado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Salir">Salir &raquo;</a></p>

		<?php else : ?>

			<div>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="author">Nombre <?php if ($req) echo "(required)"; ?></label>
			</div>

			<div>
				<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email">Correo Electr&oacute;nico (no ser&aacute; publicado) <?php if ($req) echo "(required)"; ?></label>
			</div>

		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="Enviar" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
