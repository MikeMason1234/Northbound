<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_navigation');
      get_template_part('templates/navigation');
      do_action('get_header');
      get_template_part('templates/header');
    ?>
  <main class="main" style="background-color:<?php the_field('main_bg_color'); ?>;">
    <div class="container" role="document">
      <div class="content">
        <div class="row">
          <div class="col-xs-12">
            <?php include Wrapper\template_path(); ?> 
          </div>
        </div>   
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </main><!-- /.main -->
              <?php
                do_action('get_builder');
                get_template_part('includes/builder');
                do_action('get_sidebar');
                get_template_part('templates/sidebar');                
              ?>  
              <!--<?php if (Setup\display_sidebar()) : ?>
                <aside class="sidebar">
                  <?php include Wrapper\sidebar_path(); ?>
                </aside><!-- /.sidebar -->
              <?php endif; ?>-->
    <?php
      do_action('get_secondbar');
      get_template_part('templates/secondbar');
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
