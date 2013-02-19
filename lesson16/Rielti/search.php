<?php get_header(); ?>
<div id="content">
	<?php if(have_posts()):?>
	<?php while ( have_posts() ):the_post(); ?>
		<div class="block">
			<div class="text">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php the_excerpt();?>
			</div>
		</div>
<?php endwhile;?>
<?php else:?>
	<div class="block">
			<div class="text">
				<h1>По вашему запросу ничего не найдено</h1>
			</div>
<?php endif;?>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>