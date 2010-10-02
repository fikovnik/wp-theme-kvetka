<?php
   /*
   Template Name: Recent posts
   */
   ?>

<?php get_header(); ?>

<div id="content">
  <h1>Recent Posts</h1>

  <?php global $more; ?>
  <?php $more = 0; ?>
  <?php query_posts('showposts=10'); ?>
  <?php if (have_posts()) : ?>
  <ul class="listing">
      <?php while (have_posts()) : the_post(); ?>
      <li>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a> 
	<div class="meta">
          <?php the_time('j M Y') ?>
	  <!-- <?php edit_post_link('| edit','',''); ?>    -->
	</div>
      </li>
      <?php endwhile;?>
  </ul>
  <?php else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
