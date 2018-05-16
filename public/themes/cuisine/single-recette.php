<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_post_thumbnail('large'); ?>
  <p><?php echo get_the_term_list(get_the_ID(),'type-repas','Type de repas :',''); ?> </p>
  <p><?php echo get_the_term_list(get_the_ID(),'ingredient','Ingrédients :',',',''); ?> </p>
  <?php the_content(); ?>

<?php endwhile; else: ?>
  <p><?php _e('sorry, no posts matched your criteria'); ?></p>
<?php endif;  ?>

<?php get_footer(); ?>
