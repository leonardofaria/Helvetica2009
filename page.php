<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post clearfix">
			
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link para <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(' <small>(editar)</small>'); ?></h1>

				<div class="body"><?php the_content('Continue lendo &#8594;'); ?></div>
			</div>
			
		<?php endwhile; ?>
	
	</div>

	<?php endif; ?>

</div>