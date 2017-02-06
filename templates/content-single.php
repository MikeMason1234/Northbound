<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="post-title"><?php the_title(); ?></h1>
    </header>
  <?php if ( has_post_thumbnail() ) { ?>
  <figure>
     <img class="img-fluid aligncenter" src='<?php the_post_thumbnail_url(); ?>' />
  </figure>
  <?php } ?>
    <div class="blog-content">
      <?php the_content(); ?>
    </div>
<hr>
  <footer class="paginate">
    <nav class="navigation posts-navigation">
    <div class="row">
      <div class="nav-previous col-sm-5">
          <span><?php previous_post_link( '<i class="fa fa-chevron-left"></i> %link' ); ?></span>
      </div>
      <div class="nav-next col-sm-3 push-xs-4">
          <span><?php next_post_link( '%link <i class="fa fa-chevron-right"></i>' ); ?></span>
      </div>
    </div>
      <?php wp_link_pages(['before' => '<nav class="page-nav navbar-right"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </nav>
  </footer>
  </article>
<?php endwhile; ?>