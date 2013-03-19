<div id="comments">
	<h3><?php comments_number('Нет комментариев', '1 Комментарий', '% Комментариев' );?></h3>
	<?php if ( comments_open() ) : ?>
		<div id="respond">
			<h3>Оставить комментарий</h3>
				<form action="<?php echo get_option('siteurl'); ?>">
					<fieldset>
						<label for="author">Имя: </label>
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
						
						<label for="email">Email: </label>
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
						
						<label for="comment">Сообщение: </label>
						<textarea name="comment" id="comment" rows="" cols=""></textarea>
						
						<input type="submit" class="commentsubmit" value="Добавить комментарий" />
			
						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
				
					</fieldset>
				</form>
		</div>
		
	<?php endif; ?>