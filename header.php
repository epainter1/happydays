<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Sacramento|Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Sacramento|Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <div class="header">

    <?php

    $onePageQuery = new WP_Query(
      array(
        'posts_per_page' => -1,
        'post_type' => 'couple',
        'order' => 'ASC'
        )
    ); ?>

    <?php if ( $onePageQuery->have_posts() ) : ?>

      <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
          <h1><a href="<?php echo home_url(); ?>" id="logo"><?php the_field('spouseone'); ?> &amp; <?php the_field('spousetwo'); ?></a></h1>
          <h3><?php the_field('weddingdate'); ?></h3>
      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

    <?php else:  ?>
      [stuff that happens if there aren't any posts]
    <?php endif; ?>
    
  </div>

  <header>
    <div class="header-container">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>
    </div> <!-- /.container -->
  </header><!--/.header-->


