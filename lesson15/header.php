<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Домашнее задание №12" />
	<title>Домашнее задание №12</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(document).ready(function() {
 
			$(function(){
                $("#slides").slides({
					preload: true,
					play: 3000,			
				});
				
            });
 
		});
            
        </script>
</head>

<body>
<div id="wrapper">

	<!-- HEADER -->
	<div id="header">
		<a href="#" id="logo"><img src="<?php bloginfo ('template_directory'); ?>/images/logo.png" alt="на главную" /></a>
		<ul class="lang">
			<li><a href="#" class="eng">eng</a></li>
			<li><a href="#" class="ru">ru</a></li>
			<li><a href="#" class="ukr">ukr</a></li>
		</ul>
		<div class="grey-block">
			<div id="slides">
				<ul class="slides_container">
					<li>
						<img src="images/ship.png" alt="корабль">
					</li>
					<li>
						<img src="images/foto2.jpg" alt="море">
					</li>
					<li>
						<img src="images/foto3.jpg" alt="Черногория">
					</li>
					<li>
						<img src="images/foto4.jpg" alt="остров">
					</li>
				</ul>
				<a href="#" class="prev"><</a><a href="#" class="next">></a>
			</div>
			<div class="rt-block">
					<img src="images/rielti.png" class="rielti" width="234" height="140" alt="rielti-insight"/>
					<a href="#" class="read">Читать подробнее &raquo</a>
					<img src="images/discount.png" class="discount" width="122" height="171" alt="скидка"/>
					<form>
					<button type="submit" class="submit">Поиск</button>
						<select><option>Тип недвижимости</option>
								<option>1</option>
								<option>2</option>
						</select>		
						<select><option>Местоположение</option>
								<option>1</option>
								<option>2</option>
						</select>
						<select><option>Стоимость</option>
								<option>1</option>
								<option>2</option>
						</select>
						<select><option>Площадь</option>
								<option>1</option>
								<option>2</option>
						</select>
						<select><option>Класс</option>
								<option>1</option>
								<option>2</option>
						</select>	
					</form>
			</div>
		</div>
	 </div>
	 
	 <!-- NAVBAR -->
	<div id="navbar">
	 <ul>
		<li class="red"><a href="#">Главная</a></li>
		<li class="orange"><a href="#">Недвижимость</a></li>
		<li class="green"><a href="#">О нас</a></li>
		<li class="blue"><a href="#">О Черногории</a></li>
		<li class="sea"><a href="#">Контакты</a></li>
		<li class="white"><a href="#">Преобретение</a></li>
	 </ul>
	</div>
	
	<!-- CONTEINER -->
	<div id="conteiner">