<?php
/**
 * Template Name: Clean Template
 */
?>

<section class="section no-padding m-t-100 m-b-negative-60">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2><?php wp_title(''); ?></h2>
      </div>
    </div>
  </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
