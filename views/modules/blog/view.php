<article class="single_post">
  <h3><?php echo $post->title; ?> <a class="btn btn-mini" href="{{ base:url }}blog" title="Back to the blog">&laquo; Back</a></h3>
  <div class="post_date"> <small>About
    <?php $now = time(); $posted = date($post->created_on); echo timespan($posted, $now); ?>
    ago.</small> </div>
  <hr />
  <div class="post_body"> <?php echo $post->body; ?> </div>
  <div class="post_meta"> <i class="icon-tags"></i>
    <?php if($post->keywords) : ?>
    <span class="tags"> <?php echo $post->keywords; ?> </span>
    <?php endif; ?>
  </div>
  <?php if ($post->comments_enabled): ?>
  <?php echo display_comments($post->id); ?>
  <?php endif; ?>
</article>
