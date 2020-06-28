<?php get_header(); ?>


<div class="container mt-5">
  <div class="row">
    <h2>Archive Page</h2>

    <!-- Template for Displaying Posts -->
    <?php get_template_part('template-parts/content', 'posts') ?>


  </div>
</div>

<?php get_footer(); ?>