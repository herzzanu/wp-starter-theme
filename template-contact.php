<?php
/**
 * Template Name: Contact Template
 */
?>

<section class="section section-border">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-offset-2 contact-details">
        <div class="title">Get in touch</div>
        <div class="info">
          <a href="tel:001<?php the_field('phone_number'); ?>">+1 <?php the_field('phone_number'); ?></a>
        </div>
        <div class="info info-last">
          <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
        </div>
        <div class="title"><?php the_field('address_title'); ?></div>
        <div class="info"><?php the_field('address_details'); ?></div>
      </div>
      <div class="col-md-5">
        <div class="contact-form-title">Send a message</div>
        <?php gravity_form( 4, false, false, false, '', false ); ?>
      </div>
    </div>
  </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
