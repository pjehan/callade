<?php
/* Template Name: Liste des équipiers */

get_header(); ?>

<main id='cuisine-theme-team'>
  <section id='header-page'>
    <h1>Notre équipe</h1>
  </section>
</main>

<?php
  $query = new WP_Query(array('post_type' => 'equipe'));
  if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
    the_post_thumbnail();
    the_field('nom');
    the_field('prenom');
    the_field('poste');
  endwhile; else:
?>
  <p><?php _e('sorry, no posts matched your criteria'); ?></p>
<?php endif;  ?>

<?php get_footer(); ?>
