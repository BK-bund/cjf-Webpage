<?php get_header( 'without-logo' ); ?>

<div class="container page-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- <h2 class="seitentitel"><?php the_title(); ?></h2> -->
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div><!-- body -->

<?php get_footer(); ?>
