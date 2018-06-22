  <?php wp_footer(); ?>
  <footer>
    <div class='container'>
      <div class='d-flex justify-content-center'>
        <?php
          if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href=""><span class="no-logo">' . get_bloginfo('name') . '</span></a>';
          }
        ?>
      </div>

      <?php $query = new WP_Query(array('post_type' => 'entreprise'));
      if ($query->have_posts()) { ?>
        <div class='enterprise-content'>
          <?php while ($query->have_posts()){
            $query->the_post();
            the_post_thumbnail();?>
            <div>
              <a href="#"><?php the_field('adresse') ?></a>
              <a href="<?php the_field('numero_de_telephone') ?>"><?php the_field('numero_de_telephone') ?></a>
            </div>
            <div>
              <p>Du <?php the_field('premier_jour_ouvert_de_la_semaine') ?> au <?php the_field('dernier_jour_ouvert_de_la_semaine') ?></p>
              <p><?php the_field('heure_douverture')?>h - <?php the_field('heure_de_fermeture') ?>h</p>
              <p><?php the_field('jours_fermes_')?></p>
              <p>Fermé</p>
            </div>
          <?php } ?>
        </div>
      <?php }?>
    </div>
  </footer>
</body>
</html>
