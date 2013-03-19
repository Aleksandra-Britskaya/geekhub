<?php get_header(); ?>
<?php get_sidebar(); ?>

	<div id="content" <?php if(is_page()): ?> class="page" <?php elseif (is_single()): ?> class="post" <?php endif; ?>>
		
	<?php if(is_front_page()): ?>
		<?php if(have_posts()):?>
		<?php while ( have_posts() ):the_post(); ?>
			<div class="text">
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php the_content();?>
			</div>
		<?php endwhile;?>
		<?php endif;?>
		
		
	<?php  elseif(is_home()): ?>
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
				<h1><?php the_title();?></h1>
		<?php the_content();?>
		<?php the_post_thumbnail();?>
		<?php the_excerpt();?>
				<a href="<?php the_permalink();?>" class="more">Подробнее</a>
				</div>
		<?php endwhile;?>
		<?php endif;?>
		
		
	<?php else: ?>
		<?php if(have_posts()):?>
		<?php while ( have_posts() ):the_post(); ?>
			<h1><?php the_title();?></h1>
		<?php the_content();?>
		<?php endwhile;?>
		<?php endif;?>
		
		
	<?php /* if(is_front_page()): ?>
		<?php if(have_posts()):?>
		<?php while ( have_posts() ):the_post(); ?>
			<h1><?php the_title();?></h1>
		<?php the_content();?>
		<?php endwhile;?>
		<?php endif;?>
	 	
		
	<?php  elseif(is_home()): ?>
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
		
				
	<?php else: ?>
		<?php if(have_posts()):?>
		<?php while ( have_posts() ):the_post(); ?>
			<h1><?php the_title();?></h1>
		<?php the_content();?>
		<?php endwhile;?>
		<?php endif;*/?>
		
	<?php endif;?>
	</div>

<?php get_footer(); ?>