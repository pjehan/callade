<?php
/* Template Name: Liste des équipiers */

get_header();
?>

<?php $query = new WP_Query(array('post_type' => 'equipe')); ?>
<?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <p><?php the_content(); ?></p>

<?php endwhile; else: ?>
  <p><?php _e('sorry, no posts matched your criteria'); ?></p>
<?php endif;  ?>

<?php get_footer(); ?>
