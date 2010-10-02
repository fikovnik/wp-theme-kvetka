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

  <br />

  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
