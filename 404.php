<?php get_template_part('templates/page', 'header'); ?>

<section class="section not-found-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="title">
          <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
        </h1>
        <a class="btn-accent" href="<?= esc_url(home_url('/')); ?>">Home</a>
      </div>
    </div>
  </div>
</section>