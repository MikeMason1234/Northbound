<header id="navigation">
<!--<div class="nav-top-section hidden-md-down" style="display: block;">
<div class="row">
<div class="col-xs-12 text-lg-right">
&nbsp;<a href="#">Admissions</a>&nbsp;|
&nbsp;<a href="#">Blog</a>&nbsp;  |
&nbsp;<a href="#">Insurance</a>&nbsp;  |
&nbsp;<a href="#">Resources</a>&nbsp;  |
&nbsp;<a href="#">FAQ</a>&nbsp;  |
&nbsp;<a href="#">Videos</a>
</div>
</div>
</div>-->
  <nav class="navbar">
    <div class="container hidden-md-down">
      <div class="navbar-header">
        <div class="row align-items-end">
          <div class="col-md-3">
            <a class="navbar-brand" href="http://bootbites.com">
            <img src="/wp-content/uploads/2017/01/logo_big2-e1484762995874.png" alt="Brand" class="img-fluid nts-logo">
            </a>
          </div>
          <div class="col-md-9 text-xs-right hidden-md-down">
            <?php
            wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav navbar-nav',
            'menu_id' => 'navigation-primary',
            'depth' => 0,
            'container' => 'ul'
            ]);
            ?>
          </div>
          <!--<div class="col-md-2">
              <button class="btn contact-number"><span class="ins-accept">Insurance Accepted</span><span class="check-now">Verify Insurance Now!</span> <i class="fa fa-arrow-right"></i></button>
          </div>-->
        </div>
      </div>
    </div>
      <div class="container-fluid hidden-lg-up">
      <div class="navbar-header">
        <div class="row align-items-end">
          <div class="col-md-3">
            <a class="navbar-brand" href="http://bootbites.com">
            <img src="/wp-content/uploads/2017/01/logo_big2-e1484762995874.png" alt="Brand" class="img-fluid nts-logo">
            </a>
          </div>
          <div class="col-md-9 text-xs-right hidden-md-down">
            <?php
            wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav navbar-nav',
            'menu_id' => 'navigation-primary',
            'depth' => 0,
            'container' => 'ul'
            ]);
            ?>
          </div>
          <!--<div class="col-md-2">
              <button class="btn contact-number"><span class="ins-accept">Insurance Accepted</span><span class="check-now">Verify Insurance Now!</span> <i class="fa fa-arrow-right"></i></button>
          </div>-->
        </div>
      </div>
    </div>
    <!--<div class="hidden-lg-down">
              <button class="btn contact-number"><span class="ins-accept">Insurance Accepted</span><span class="check-now">Verify Insurance Now!</span> <i class="fa fa-arrow-right"></i></button>
    </div>-->
  </nav>
</header>
