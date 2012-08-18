<hr>

<div id="comments">		
	<h6><?php echo lang('comments.title'); ?></h6>
	
	<hr>

	<?php if ($comments): ?>
		<table class="table table-striped">
		<?php foreach ($comments as $item): ?>
        <tr>
			
				<td><div class="avatar">
					<?php echo gravatar($item->email, 50); ?>
				</div>
			
				
					<div class="name">
						<p>
							<?php if ($item->user_id): ?>
								<?php echo anchor($item->website ? $item->website : 'user/'.$item->user_id, $this->ion_auth->get_user($item->user_id)->display_name); ?>
							<?php else: ?>
								<?php echo $item->website ? anchor($item->website, $item->name) : $item->name; ?>
							<?php endif; ?>
						</p>
					</div>
				
					<div class="date">
						<p><small><?php echo format_date($item->created_on); ?></small></p>
					</div>
				</td>
					<td><div class="content">
						<?php if (Settings::get('comment_markdown') AND $item->parsed > ''): ?>
							<?php echo $item->parsed; ?>
						<?php else: ?>
							<p><?php echo nl2br($item->comment); ?></p>
						<?php endif; ?>
					</div>
				</td>
			
            </tr>
		<?php endforeach; ?>
			</table>
		<?php else: ?>
			<p><?php echo lang('comments.no_comments'); ?></p>
			<hr>
		<?php endif; ?>
		
		<?php echo form_open('comments/create/' . $module . '/' . $id, 'id="create-comment" class="well"'); ?>
			<h6><?php echo lang('comments.your_comment'); ?></h6>

			<?php echo form_hidden('redirect_to', uri_string()); ?>
				<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"'); ?></noscript>

				<?php if ( ! $current_user): ?>
					<div class="form_name">
						<input type="text" name="name" id="name" maxlength="80" value="<?php echo $comment['name'] ?>" placeholder="Your name..." />
					</div>

					<div class="form_email">
						<input type="text" name="email" maxlength="80" value="<?php echo $comment['email'] ?>" placeholder="Email address..." />
					</div>

					<div class="form_url">
						<input type="text" name="website" maxlength="80" value="<?php echo $comment['website'] ?>" placeholder="Website..."/>
					</div>
				<?php endif; ?>

				<div class="form_textarea">
					<textarea name="comment" id="message" rows="5" cols="30" class="width-full"><?php echo $comment['comment'] ?></textarea>
				</div>

				<div class="form_submit">
					<?php echo form_submit('submit', lang('comments.send_label'),'class="btn"'); ?>
				</div>
		<?php echo form_close(); ?>
</div>