<?php get_header(); ?>
<div id="content">
	<?php if(have_posts()):?>
	<?php while ( have_posts() ):the_post(); ?>
	<div class="block">
		<?php the_post_thumbnail();?>
			<div class="text">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
				<div class="post-meta"><span>Автор: <?php the_author_posts_link();?></span></div>
				<?php comments_template();?>
			</div>
				<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
	</div>

<?php get_sidebar();?>
<?php get_footer(); ?>	