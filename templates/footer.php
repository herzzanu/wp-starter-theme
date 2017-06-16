<footer class="footer">
  <div class="container">
    <a class="brand-footer" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/dist/images/logo-light.png" alt="<?php bloginfo('name'); ?>" />
    </a>
    <div class="footer-tagline"><?php bloginfo('description'); ?></div>
    <div class="footer-bottom">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-copyright">
            &copy;<?php echo date('Y')." "; bloginfo('name'); ?>. All Rights Reserved.
          </div>
          <div class="footer-terms">
            <a href="/terms-of-use">Terms of use</a>
            <a href="/privacy-policy">Privacy policy</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer-signature">Website by <a href="https://impossibletalent.com" target="_blank">Impossible Talent</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>
