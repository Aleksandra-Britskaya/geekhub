<?php get_header(); ?>
	<div id="content">
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
			<div class="block">
			<?php the_post_thumbnail();?>
				<div class="text">
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php the_excerpt();?>
				<a href="<?php the_permalink();?>" class="more">Подробнее</a>
				</div>
			</div>
		<?php endwhile;?>
		<?php endif;?>
	
	
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>	