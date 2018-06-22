<?php
/* Template Name: Page d'accueil */

get_header(); ?>

<main id='cuisine-theme'>

  <section id='header-page' style='background-image:url(<?php the_field("image_principale_page") ?>)'>
    <h1>Notre restaurant</h1>
  </section>

  <section class='container'>
    <div class='title-h2'>
      <h2><?php the_field("titre") ?></h2>
      <strong><?php the_field("sous_titre") ?></strong>
    </div>
    <p class='mb-4'><?php the_field("description") ?></p>
  </section>

  <div class='title-h3' style='background-image:url("<?php the_field("image_principale_page") ?>")'></div>

  <section class='container'>
    <div class='preview-recipe'>
      <img src='<?php the_field("image_principale_page") ?>'>
      <div class='preview-list-recipe'>
        <?php $the_query = new WP_Query(array('post_type' => 'recette'));
        $counter = 0;

        if ( $the_query->have_posts() ) {

          echo '<ul class="list-recipe">';
          while ( $the_query->have_posts() && $counter < 3) {
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

            <?php $counter++;
          }
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
    </div>
    <?php wp_reset_postdata(); ?>

  </section>

  <div class='title-h3' style='background-image:url("<?php the_field("image_principale_page") ?>")'></div>

  <section class='container'>
    <?php $the_query = new WP_Query(array('post_type' => 'equipe'));
    $counter = 0;
    if ( $the_query->have_posts() ) {

      echo '<ul class="list-teammate">';
      while ( $the_query->have_posts() && $counter < 3) {
        $the_query->the_post();?>
        <li>
          <article class='teammate'>
            <?php
            if (get_field('image_equipier')){
              ?> <div class="img-cover"><img src="<?php the_field('image_equipier') ?>"></div>
            <?php } else { ?>
              <div class='no-thumbnail'>
                <i class="fas fa-user"></i>
              </div>
            <?php } ?>
            <div class='teammate-content'>
              <h2><span><?php the_field('nom') ?></span> <span><?php the_field('prenom') ?></span></h2>
              <p><?php the_field('poste') ?></p>
            </div>
          </article>

        </li>

        <?php $counter++;
        }
      echo '</ul>';

    } else { ?>

      <div class='container d-flex flex-wrap justify-content-center align-items-center'>
        <span class='m-2'>Il n'y a aucun utilisateur dans l'équipe pour le moment</span>
        <?php if (user_can( wp_get_current_user(), 'administrator' )) {?>
          <a href='<?php echo admin_url('post-new.php?post_type=equipe'); ?>' class='btn btn-dark m-2'><i class="fas fa-pencil-alt mr-2"></i>Ajouter un coéquipier</a>
        <?php } ?>
      </div>

    <?php } ?>
    <?php wp_reset_postdata(); ?>
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
