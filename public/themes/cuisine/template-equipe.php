<?php
/* Template Name: Liste des équipiers */

get_header(); ?>

<main id='cuisine-theme-team'>
  <section id='header-page' style='background-image:url(<?php the_field("image_principale_page") ?>)'>
    <h1>Notre équipe</h1>
  </section>
  <section class='container'>
    <?php $the_query = new WP_Query(array('post_type' => 'equipe'));

    if ( $the_query->have_posts() ) {

      echo '<ul class="list-teammate">';
      while ( $the_query->have_posts() ) {
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

        <?php }
      echo '</ul>';

    } else { ?>

      <div class='container d-flex flex-wrap justify-content-center align-items-center'>
        <span class='m-2'>Il n'y a aucun utilisateur dans l'équipe pour le moment</span>
        <?php if (user_can( wp_get_current_user(), 'administrator' )) {?>
          <a href='<?php echo admin_url('post-new.php?post_type=equipe'); ?>' class='btn btn-dark m-2'><i class="fas fa-pencil-alt mr-2"></i>Ajouter un coéquipier</a>
        <?php } ?>
      </div>

    <?php } ?>
  </section>
  <?php wp_reset_postdata(); ?>

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
