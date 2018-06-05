<?php
/* Template Name: Liste des menus */

get_header(); ?>

<main id='cuisine-theme-menu'>

  <section id='header-page' style='background-image:url(<?php the_field("image_principale_page") ?>)'>
    <h1>Notre menu</h1>
  </section>

  <section class='container'>
    <div class='title-h2'>
      <h2>Hello Dear</h2>
      <strong>Welcome to Callade</strong>
    </div>
    <p class='mb-4'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae urna vestibulum, feugiat nibh at, sagittis leo. Vestibulum id odio sodales mi fermentum ornare. Vivamus felis libero, pellentesque sed tristique molestie, rutrum sit amet justo. Nullam interdum ultrices feugiat. Nullam non elit non metus fringilla finibus. In eu blandit quam, sed iaculis nisl. Curabitur volutpat semper purus ultrices consectetur.</p>
  </section>

  <section>
    <div class='title-h3'>
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
</main>

<?php get_footer();
