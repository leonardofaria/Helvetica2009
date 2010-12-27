<?php get_header(); ?>

<div id="content"> 
   	<div class="post">				
		  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="post">
				<div class="meta">
					<!--<small><b><?php echo time_since_br(abs(strtotime($post->post_date_gmt . " GMT")), time()); ?> atrás </b><br/>-->
					<small><?php the_time('j \d\e F \d\e Y') ?><br/>
					<?php comments_popup_link(__('Comente!'), __('1 comentário'), __('% comentários')); ?></small>
					<div class="tags"><?php the_tags( '', '', ''); ?></div>
				</div>
				
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Link para <?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link(' <small>(editar)</small>'); ?></h1>

				<div class="body">

				<?php the_content('Continue lendo &#8594;'); ?>
				
			<br/>
			<h3 id="comments"><?php comments_number('Sem comentários ainda', '1 Comentário', '% comentários' );?></h3> 
			<p>
			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Both Comments and Pings are open ?>
				Você pode  <a href="#respond">deixar uma resposta</a>, ou dar um <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> para seu site. <br/><br/>
			<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Only Pings are Open ?>
				Comentários não estão permitidos para esse post, mas você pode dar um <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> para seu site. <br/><br/>
			<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Neither Comments, nor Pings are open ?>
				Comentários e trackbacks fechados. <br/><br/>
			<?php }  ?>
			</p>
			


	<?php comments_template(); ?>
	
	<br style="clear: both"/><center><script type="text/javascript"><!--
google_ad_client = "pub-6265317430549220";
/* 728x90, criado 23/05/09 */
google_ad_slot = "9894970661";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></center>
					
				</div>

	<?php endwhile; else: ?>
		<h1>Erro</h1>
		<p>Nada encontrado.</p>
<?php endif; ?>
</div>	
</div>
</div>
<?php get_footer(); ?>