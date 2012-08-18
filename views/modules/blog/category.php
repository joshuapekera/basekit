<?php if ( ! empty($blog) ): ?>
<?php foreach ($blog as $post) : ?>
<article class="post">
  <h5><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h5>
  <div class="post_date"> <span class="date"> About
    <?php $now = time(); $posted = date($post->created_on); echo timespan($posted, $now); ?>
    ago. </span> </div>
  <hr/>
  <div class="post_intro"> <?php echo $post->intro; ?> </div>
  <hr/>
  <div class="post_meta">
    <?php if($post->keywords) : ?>
    <i class="icon-tags"></i> <span class="tags"> <?php echo $post->keywords; ?> </span>
    <?php endif; ?>
  </div>
</article>
<?php endforeach; ?>
<?php echo $pagination['links']; ?>
<?php else: ?>
<p><?php echo lang('blog_currently_no_posts');?></p>
<?php endif; ?>
