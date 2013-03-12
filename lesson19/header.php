<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Домашнее задание №18" />
	<title><<?php bloginfo('name'); ?> <?php wp_title(); ?></title> 
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body>
<div id="wrapper" <?php if(is_page()): ?> class="page" <?php elseif (is_single()): ?> class="post" <?php endif; ?>>
	<div id="header">
		<a href="/" ><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="на главную" id="logo" width="190" height="58" alt="на главную"/></a>
		<!-- 
		<ul class="nav">
			<li><a href="#">About Us</a></li>
			<li><a href="#">How it works</a></li>
			<li class="none-border"><a href="#">Blog</a></li>
		</ul> -->
		<?php wp_nav_menu(array(
		'theme_location'=>'nav_menu_dvo',
	)); ?>
		<div class="phone">303.501.1801</div>
	</div>
	
<div id="conteiner">
		<?php if(is_front_page()): ?>
		<div class="images">
			<a href="#" id="buy" ><img src="<?php bloginfo ('template_url');?>/images/buy-only.png" width="684" height="390" alt="buy only"/></a>
			<a href="#" id="video"><img src="<?php bloginfo ('template_url');?>/images/video.png"  width="360" height="189" alt="video"/></a>
			<a href="#" id="map"><img src="<?php bloginfo ('template_url');?>/images/map.png"  width="360" height="189" alt="video"/></a>	
		</div>
		<?php else: ?>
			<div><a href="#"><img src="<?php bloginfo ('template_url');?>/images/img-post.png" id="img-post" width="1018" height="191" alt="images post"/></a></div>
		<?php endif; ?>
</div>
