<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content">
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
					<div class="text">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<?php the_post_thumbnail();?>
					
				<?php the_excerpt();?>
				<a href="<?php the_permalink();?>" class="more">Подробнее</a>
				</div>
		<?php endwhile;?>
		<?php endif;?>
	
	
	</div>


<?php get_footer(); ?>	