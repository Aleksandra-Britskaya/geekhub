<?php get_header(); ?>

		<div id="content">
			<div class="block">
				<?php if(have_posts()):?>
				<?php while ( have_posts() ):the_post(); ?>
				<div class="text">
					<h1><?php the_title();?></h1>
					<?php the_content();?>
				</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
		
<?php get_sidebar();?>
<?php get_footer(); ?>

