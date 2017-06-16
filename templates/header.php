<header class="banner">
  <nav class="navbar navbar-default navbar-fixed-top <?php if ( get_field('is_white_header') ) : ?>navbar-white-header<?php endif; ?>">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle">
          <span class="top"></span>
          <span class="middle"></span>
          <span class="bottom"></span>
        </button>
        <div class="menu-overlay">
          <nav>
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'walker' => new wp_bootstrap_navwalker(),
                    'menu_class' => 'nav navbar-nav navbar-right'
                ]);
              endif;
            ?>
          </nav>
        </div>

        <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
          <img class="logo-light" src="<?php bloginfo('template_directory'); ?>/dist/images/logo-light.png" alt="<?php bloginfo('name'); ?>" />
          <img class="logo-dark" src="<?php bloginfo('template_directory'); ?>/dist/images/logo-dark.png" alt="<?php bloginfo('name'); ?>" />
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
	      <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'walker' => new wp_bootstrap_navwalker(),
              'menu_class' => 'nav navbar-nav navbar-right'
            ]);
          endif;
	      ?>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>
