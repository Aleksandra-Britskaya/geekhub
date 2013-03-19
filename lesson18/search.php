<?php get_header(); ?>
<?php get_sidebar();?>

<div id="content">
	
	<?php if(have_posts()):?>
	<?php while ( have_posts() ):the_post(); ?>
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<?php the_excerpt();?>
	<?php endwhile;?>
	<?php else:?>
		<h1>По вашему запросу ничего не найдено</h1>
	<?php endif;?>
	
</div>

<?php get_footer(); ?>