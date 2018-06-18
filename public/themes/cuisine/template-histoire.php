<?php
/* Template Name: Liste des dates historiques */

get_header(); ?>

<main id='cuisine-theme-history'>

  <section id='header-page' style='background-image:url(<?php the_field("image_principale_page") ?>)'>
    <h1>Notre histoire</h1>
  </section>

  <section class='container'>
    <div class='title-h2'>
      <h2><?php the_field("titre") ?></h2>
      <strong><?php the_field("sous_titre") ?></strong>
    </div>
    <p class='mb-4'><?php the_field("description") ?></p>
  </section>

  <section class='container'>

  </section>
  <section class='container'>
    <ul class='list-secondary-content'>
      <?php while ( have_rows('champs_complementaires') ) : the_row(); ?>
      <li>
        <div><?php the_sub_field("titre") ?></div>
      </li>
    <?php endwhile; ?>
    </ul>
  </section>

</main>

<?php get_footer();
