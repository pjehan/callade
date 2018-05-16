<?php
/* Template Name: Liste des menus */

get_header();
?>

<?php $query = new WP_Query(array('post_type' => 'recette')); ?>
<?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
  <a href="<?php the_permalink(); ?>">
  <h2><?php the_title(); ?></h2>
  <p><?php echo get_the_term_list(get_the_ID(),'ingredient','Ingrédients :',',',''); ?> </p>
  <?php the_content(); ?></a>

<?php endwhile; else: ?>
  <p><?php _e('sorry, no posts matched your criteria'); ?></p>
<?php endif;  ?>

<?php get_footer(); ?>