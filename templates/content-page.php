<?php if (trim(get_the_content()) != "") : ?>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
