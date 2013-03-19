<?php get_header(); ?>
<?php get_sidebar(); ?>
	 
	 <div id="content">
		<?php if(have_posts()):?>
		<?php while ( have_posts() ):the_post(); ?>
			<h1><?php the_title();?></h1>
		<?php the_content();?>
			<span>Автор: <?php the_author_posts_link();?></span>
		<?php comments_template();?>
		<?php endwhile;?>
		<?php endif;?>
		
<?php get_footer(); ?>