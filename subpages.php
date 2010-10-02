<?php
   /*
   Template Name: List All Subpages
   */
   ?>

<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <div class="entry">
      <?php the_content('[...]'); ?>
    </div>
  </div>
  
  <ul class="listing">
    <?php $myposts = get_posts('post_type=page&post_parent='.$post->ID); ?>
    <?php foreach($myposts as $post) : ?>
    <?php setup_postdata($post); ?>
    <li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
      <div class="meta">
        <?php the_time('j M Y') ?>
        <!-- <?php edit_post_link('| edit','',''); ?>    -->
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
  
  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
