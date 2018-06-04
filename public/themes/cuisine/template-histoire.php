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
      <li>
        <img src="<?php the_field("image_picto_1") ?>" alt="">
        <h4><?php the_field("titre_picto_1") ?></h4>
        <p><?php the_field("description_picto_1") ?></p>
      </li>
      <li>
        <img src="<?php the_field("image_picto_2") ?>" alt="">
        <h4><?php the_field("titre_picto_2") ?></h4>
        <p><?php the_field("description_picto_2") ?></p>
      </li>
      <li>
        <img src="<?php the_field("image_picto_3") ?>" alt="">
        <h4><?php the_field("titre_picto_3") ?></h4>
        <p><?php the_field("description_picto_3") ?></p>
      </li>
    </ul>
  </section>

</main>

<?php get_footer();
