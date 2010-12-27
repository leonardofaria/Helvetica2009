<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">	
	<title><?php bloginfo('name'); ?> <?php wp_title('&#8594;'); ?></title>	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.js"></script>
	<?php 
		if (is_single()) { /* carrega efeito de comentários em browser diferentes do ie */ ?> 
	<script type="text/javascript">
		$(document).ready(function(){
			$(".message_list .message_body:gt(3000)").hide();
			
			$(".message_list li:gt(4)").hide();
		
			$(".show_all_message").click(function(){
				$(this).hide()
				$(".show_recent_only").show()
				$(".message_list li:gt(4)").slideDown()
				return false;
			});
		
			$(".show_recent_only").click(function(){
				$(this).hide()
				$(".show_all_message").show()
				$(".message_list li:gt(4)").slideUp()
				return false;
			});
		
			if($('.trackback').length > 0) {
				$('#comments').after('<a href="#" id="toggleTrackbacks">(ocultar trackbacks)</a>');
				$('#toggleTrackbacks').click(function() {
					$('.trackback').slideToggle('slow');
					if($('#toggleTrackbacks').text() == '(mostrar trackbacks)') {
						$('#toggleTrackbacks').text('(ocultar trackbacks)');
					} else {
						$('#toggleTrackbacks').text('(mostrar trackbacks)');
					}
					return false;
				});
			}
		});
	</script>
<?php } ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/effects.core.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.newsticker.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/jquery.twitter.js"></script>
</head>
<body>
<div id="header">
	<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /></a>
	
	<div id="projects">
		<span class="title"><a href="/portfolio">Projetos</a></span>
		<ul id="news">
			<li><a href="http://autosimulado.com.br">autosimulado</a> é um aplicativo web com testes de legislação grátis</li>
			<li style="display:none"><a href="http://codestacker.com">codestacker</a> é uma comunidade para compartilhar códigos fácil</li>
			<li style="display:none">a revista <a href="http://www.devmedia.com.br/canais/default.asp?site=38">webmobile</a> traz toda edição artigos sobre rails</li>
			<li style="display:none"><a href="/portfolio">veja todos os trabalhos</a></li>
		</ul><br/>
		<span class="title"><a href="http://www.twitter.com/leozera">Twitter</a></span>
		<div id="twitter"></div>
	</div>
</div>

<div id="menu">
	<ul>
		<li><a href="/portfolio" class="link">portfolio</a></li>
		<li><a href="/arquivos" class="link">arquivos</a></li>
		<li><a href="/live" class="link">live stream</a></li>
		<li><a href="http://leozera.tumblr.com/" class="link">tumblelog</a></li>
		<li><a href="http://www.leonardofaria.net/feed" class="link">rss</a></li>
		<li><a href="mailto:leonardofaria@gmail.com" class="link">contato</a></li>
	</ul>
	
	<form id="search" action="/" method="get">
		<input name="s" id="search_box" placeholder="Busca" onclick="this.value == 'Busca' ? this.value = '' : true" size="30" style="font-size: 8pt;" type="search" value="<?php if(isset($s)) { echo $s; } else { echo "Busca"; } ?>" results="5" />
	</form>
</div>
<script type="text/javascript">
	$(document).ready( function() {			
		$("#news").newsticker();
		
		$("#twitter").getTwitter({
			userName: "leozera",
			numTweets: 1,
			loaderText: "carregando...",
			slideIn: true,
			showHeading: false,
			showProfileLink: false
		});
		
		$(".link").mouseover(function() {
			$(this).animate({ color: "#022d3f" }, 500);
		}).mouseout(function() {
			$(this).animate({ color: "#ccc" }, 1000);
		}) 
	});
</script>