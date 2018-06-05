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
            if (defined(the_field("image_equipier"))){
              ?> <div class="img-cover"><img src="<?php the_field("image_equipier"); ?>"></div>
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
</main>

<?php get_footer();
