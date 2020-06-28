<?php wp_footer(); ?>
</div> <!-- End of Main -->

<footer>
  <div class="container">
    <div class="row mt-2">
      <?php
        wp_nav_menu([
          'theme_location' => 'bottom-menu',
          'menu_class' => 'bottom-menu'
        ]);
      ?>
    </div>
  </div>
</footer>
</div> <!-- End of Wrapper -->

</body>

</html>