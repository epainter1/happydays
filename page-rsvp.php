<?php

/*
	Template Name: RSVP Page
*/

get_header('home');  ?>

<div class="main">
  <div class="container">
	<h2>this is the rsvp page it is working</h2>
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>