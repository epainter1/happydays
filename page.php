<div class="main">
  <div class="container">
	<div class="header">
		<h1>
		    <?php the_field('spouseone') ?> &amp; <?php the_field('spousetwo') ?>
		</h1>
		<h3>
		    <?php the_field('weddingdate') ?>
		</h3>
		<?php get_header();  ?>
	</div>
    <div class="content">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>