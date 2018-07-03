<?php
  $theme = '';
  if (is_home()) {
    $theme = get_field('page_theme', get_option('page_for_posts'));
  } else if (is_category()) {
    $term = get_queried_object();
    $theme = get_field('page_theme', $term);
  } else {
    $theme = get_field('page_theme');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(' &ndash; ', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>
  <body class="page-<?php echo $theme; ?> brandon lh-copy">
    <?php get_template_part('includes/header'); ?>
