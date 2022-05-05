<aside>

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archivos</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
        <h2>Categor&iacute;as</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Gestionado por WordPress">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribirse</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entradas (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comentarios (RSS)</a></li>
    	</ul>
	
	<?php endif; ?>

</aside>