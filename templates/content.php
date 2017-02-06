<div class="row blog-roll-item">
<article <?php post_class('col-sm-12'); ?>>
	<figure class="blog-item">
		<a class="blog-anchor" href="<?php the_permalink()?>">
			<div class="blog-img" style="background: url('<?php the_post_thumbnail_url(); ?>') center center no-repeat;">
				<figcaption>
					<h5 class="blog-title"><span><?php the_title();?></span></h5>
					<p class="blog-meta"><em><?php the_time('F jS, Y') ?></em></p>
					<div class="blog-summary">
						<?php edit_post_link(); ?>
						<p class="excerpt"><?php echo(get_the_excerpt()); ?></p>
					</div>
				</figcaption>
			</div>
		</a>
	</figure> 
</article>
</div>
