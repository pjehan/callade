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
    <ul>
      <?php $the_query = new WP_Query(array('post_type' => 'histoire'));

      if ( $the_query->have_posts() ) {

        echo '<ul class="list-history">';
        while ( $the_query->have_posts() ) {
          $the_query->the_post();?>
          <li>
            <article>
              <div class='title-history'>
                <span><?php the_field('date'); ?></span>
                <span><?php the_field('titre'); ?></span>
              </div>
              <span><?php the_field('description'); ?></span>
            </article>
          </li>

          <?php }
        echo '</ul>';

      } else { ?>

        <div class='container d-flex flex-wrap justify-content-center'>
          <span class='m-2'>Il n'y a aucune recette pour le moment</span>
          <?php if (user_can( wp_get_current_user(), 'administrator' )) {?>
            <a href='<?php echo admin_url('post-new.php?post_type=recette'); ?>' class='btn btn-dark m-2'><i class="fas fa-pencil-alt mr-2"></i>Ajouter une recette</a>
          <?php } ?>
        </div>

      <?php } ?>
    </ul>
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
