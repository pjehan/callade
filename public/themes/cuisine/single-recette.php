<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <main id='cuisine-theme-menu'>

    <section id='header-page' style='backgroud-image:URL DE IMAGE'>
      <h1><?php the_title(); ?></h1>
    </section>

    <section class='container'>
      <?php the_post_thumbnail('large'); ?>
      <p><?php echo get_the_term_list(get_the_ID(),'type-repas','Type de repas :',''); ?> </p>
      <p><?php echo get_the_term_list(get_the_ID(),'ingredient','Ingrédients :',',',''); ?> </p>
      <?php the_field('prix'); ?>
      <?php the_content(); ?>

      <?php endwhile; else: ?>
        <p><?php _e('sorry, no posts matched your criteria'); ?></p>
      <?php endif;  ?>
    </section>

  </main>

<?php get_footer(); ?>
