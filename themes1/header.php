<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Урок 6. Верстка макета" />
	<title>Урок 6. Верстка макета</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<a href="#" id="logo"><img src="<?php bloginfo ('template_directory'); ?>/images/logo.png" alt="на главную" /></a>
		<?php wp_nav_menu(); ?>
   </div>
   
   <div id="container">