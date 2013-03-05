<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
		
		<ul class="nav2">
			<li class="mail"><a href="#"><h3>Mail</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
			<li class="phone2"><a href="#"><h3>Phone Service</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
			<li class="office"><a href="#"><h3>Office</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
			<li class="conference"><a href="#"><h3>Conference Room</h3>Rostrud tionsequet. Met lan et, vullumny num</a></li>
		</ul>
		
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
			<?php the_post_thumbnail();?>
		<div class="text">
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<?php the_excerpt();?>
			<a href="<?php the_permalink();?>">Подробнее</a>
		</div>
		
	</div>
	
		<?php endwhile;?>
		<?php endif;?>
	
<?php get_footer(); ?>