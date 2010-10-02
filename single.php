<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <div class="meta">
      <?php edit_post_link('edit','',''); ?>
    </div>
    <div class="entry">
      <?php the_content('[...]'); ?>
    </div>
  </div>


  <div id="comment-head">
    <?php if ('open' == $post-> comment_status) : ?>
    <h1><?php comments_number('No comments','1 comment','% comments'); ?></h1>
    <span class="details">
      <a href="#comment-form">jump to comment form</a> | <?php comments_rss_link('comments rss'); ?>
      <?php if ('open' == $post->ping_status): ?>
      | <a href="<?php trackback_url(true); ?>">trackback uri</a>
      <?php endif; ?>
    </span>
    <?php else :
          // Neither Comments, nor Pings are open ?>
    <div id="comment-head">
      <span class="details">Comments are currently closed on this entry.</span>
      <?php endif; ?>
    </div>
    <?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>

  <?php get_footer(); ?>
