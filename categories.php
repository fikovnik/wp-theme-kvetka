<?php
   /*
   Template Name: List All Categories
   */
   ?>

<?php get_header(); ?>

<div id="content">
  <h1>Categories</h1>

  <ul class="listing">
    <?php wp_list_categories("title_li="); ?>
  </ul>
</div>

<?php get_footer(); ?>
