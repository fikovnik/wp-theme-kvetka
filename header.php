<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="background"></div>
    <div id="main">
      <div id="menu">
        <div id="menu-background"></div>
        <div id="title">
          <h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
          <div id="description"><?php bloginfo('description'); ?></div>
        </div>

        <ul>
          <?php wp_list_pages('title_li=&exclude=183'); ?>
        </ul>

        <ul class="children">
          <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
        </ul>

        <h2><a href="<a href="<?echo get_settings('home'); ?>/search">search</a></h2>

        <h2><a href="<?php bloginfo('rss2_url'); ?>">rss</a></h2>

      </div>
