<?php
   /*
   Template Name: Search
    */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ($s) : ?>
  <?php if (have_posts()) : ?>

  <h1>Search Results for &ldquo;<?php echo wp_specialchars($s, 1); ?>&rdquo;</h1>

  <ul class="listing">
    <?php while (have_posts()) : the_post(); ?>
    <li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
      <div class="meta">
        <?php the_time('j M Y') ?>
        <!-- <?php edit_post_link('| edit','',''); ?>    -->
      </div>
    </li>
    <?php $results++; ?>
    <?php endwhile; ?>
  </ul>

  <?php else : ?>

  <h1>Nothing found. Try a different search?</h1>

  <?php endif; ?>

  <?php else : ?>

  <h1>Search</h1>

  <?php endif; ?>

  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <input type="text" id="q" value="<?php echo wp_specialchars($s, 1); ?>" name="s" size="25" />
    <input type="submit" value="search" />
 </form>

</div>

<?php get_footer(); ?>
