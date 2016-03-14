<?php get_header(); ?>

			<div class="main-section">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <?php the_title( sprintf( '<h2 class="page-title screen-reader-text"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 post_content'); ?> role="article">
							<?php the_excerpt(); ?>
					</article>
        </div>

      <?php endwhile; endif; ?>

      </div>

<?php get_footer(); ?>