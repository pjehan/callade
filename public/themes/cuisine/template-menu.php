<?php
/* Template Name: Liste des menus */

get_header(); ?>

<main id='cuisine-theme-menu'>

  <section id='header-page' style='background-image:url(<?php the_field("image_principale_page") ?>)'>
    <h1>Notre menu</h1>
  </section>

  <section class='container'>
    <div class='title-h2'>
      <h2><?php the_field('titre') ?></h2>
      <strong><?php the_field('sous_titre') ?></strong>
    </div>
    <p class='mb-4'><?php the_field('description') ?></p>
  </section>

  <section>
    <div class='title-h3' style='background-image:url("<?php the_field("image-menu") ?>")'>
      <h3>Start at 11:00 am</h3>
      <strong>Breakfast Manu</strong>
    </div>
    <div class='container'>
      <?php $the_query = new WP_Query(array('post_type' => 'recette'));

      if ( $the_query->have_posts() ) {

        echo '<ul class="list-recipe">';
        while ( $the_query->have_posts() ) {
          $the_query->the_post();?>
          <li>
            <article>
              <a class='menu-recipe' href="<?php the_permalink(); ?>">
                <div class='menu-recipe-content'>
                  <p><?php echo the_title() ?></p>
                  <?php echo get_the_term_list_without_link(get_the_ID(),'ingredient'); ?>

                </div>
                <div class='menu-recipe-price'>
                  <?php the_field('prix'); ?>€
                </div>

              </a>
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
    </div>
  </section>

  <?php if (get_field('activer_le_contenu_complementaire') && get_field('image_contenu_complementaire')){ ?>
    <section class='more-content-container'>
      <?php if (get_field('image_contenu_complementaire')): ?>
        <div class='title-h3' style='background-image:url("<?php the_field("image_contenu_complementaire") ?>")'></div>
      <?php endif; ?>
      <ul>
        <?php while(the_repeater_field('champs_complementaires')): ?>
          <li>
            <img src='<?php the_sub_field('image'); ?>'>
            <h3><?php the_sub_field('titre'); ?></h3>
            <p><?php the_sub_field('description'); ?></p>
          </li>
        <?php endwhile; ?>
      </ul>
    </section>
  <?php } ?>
</main>

<?php get_footer();
