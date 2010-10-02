<?php
   /*
   Template Name: Gallery
   */
   ?>
<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <?php the_content('[...]'); ?>
  </div>

  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>

