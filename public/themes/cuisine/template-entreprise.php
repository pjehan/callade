<?php
/* Template Name: Informations entreprise */

get_header(); ?>

<?php
  $query = new WP_Query(array('post_type' => 'entreprise'));
  if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
    the_post_thumbnail();
    the_field('adresse');
    the_field('numero_de_telephone');
    the_field('premier_jour_ouvert_de_la_semaine');
    the_field('dernier_jour_ouvert_de_la_semaine_');
    the_field('heure_douverture');
    the_field('heure_de_fermeture');
    the_field('jours_fermes_');
  endwhile; else:
?>
  <p><?php _e('sorry, no posts matched your criteria'); ?></p>
<?php endif;  ?>

<?php get_footer(); ?>
