<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
		
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
		<?php the_post_thumbnail();?>
			<div class="text">
			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			</div>
		<?php the_excerpt();?>
			<a href="<?php the_permalink();?>" class="more">���������</a>

		<?php endwhile;?>
		<?php endif;?>
	
</div>
	
<?php get_footer(); ?>