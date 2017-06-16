<div class="overlay primary-overlay">
  <div class="hero" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1><?php the_field('home_title'); ?></h1>
          <h4><?php the_field('home_subtitle'); ?></h4>
          <div class="row home-buttons">
            <div class="col-sm-6">
              <a href="<?php the_field('clients_button_link'); ?>" class="btn-accent btn-block">
	              <?php the_field('clients_button_text'); ?>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="<?php the_field('candidates_button_link'); ?>" class="btn-white btn-block">
	              <?php the_field('candidates_button_text'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

// check if the repeater field has rows of data
if( have_rows('body_section') ):

  // loop through the rows of data
  while ( have_rows('body_section') ) : the_row();
    $section_right = get_sub_field('section_right')
    ?>
      <section class="section section-light <?php if ( $section_right ) : ?>no-padding<?php endif; ?>">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-1 <?php if ( $section_right ) : ?>col-md-push-4<?php endif; ?>">
              <img class="img-responsive" src="<?php the_sub_field('body_section_image'); ?>">
            </div>
            <div class="col-md-4 <?php if ( $section_right ) : ?>col-md-pull-6<?php endif; ?>">
              <h2 class="title-section"><?php the_sub_field('body_section_title'); ?></h2>
              <p><?php the_sub_field('body_section_text'); ?></p>
              <a href="<?php the_sub_field('body_section_link'); ?>">
	              <?php the_sub_field('body_section_link_text'); ?>
              </a>
            </div>
          </div>
        </div>
      </section>
    <?php

  endwhile;

else :

  // no rows found

endif;

?>

<section class="overlay primary-overlay">
  <div class="section-md section-bg" style="background-image: url(<?php the_field('promise_section_image'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="title-section"><?php the_field('promise_section_title'); ?></h2>
          <p><?php the_field('promise_section_text'); ?></p>
          <a href="<?php the_field('promise_section_link'); ?>" class="btn-accent">
            <?php the_field('promise_section_link_text'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('templates/call-to-action'); ?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>