<section class="section section-action">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="title-action"><?php the_field('action_title'); ?></div>
				<div class="subtitle-action"><?php the_field('action_subtitle'); ?></div>
        <button type="button" class="btn-accent" data-toggle="modal" data-target="#contactModal">
	        <?php the_field('action_button_text'); ?>
        </button>
			</div>
		</div>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="ion-close-round"></i>
        </button>
	      <?php gravity_form( 4, true, false, false, '', false ); ?>
      </div>
    </div>
  </div>
</div>