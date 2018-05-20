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
      <div class='enterprise-content'>
        <a href="#">6 rue de la Chalotais 35000 RENNES</a>
        <a href="tel:02 99 34 56 43">02 99 34 56 43</a>
        <p>Du lundi au samedi</p>
        <p>09:00 - 21:00</p>
        <p>Dimanche</p>
        <p>FERMÉ</p>
      </div>
    </div>
  </footer>
</body>
</html>
