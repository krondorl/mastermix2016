<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
         ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <header class="entry-header">
                  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header><!-- .entry-header -->

              <?php twentysixteen_excerpt(); ?>

              <?php twentysixteen_post_thumbnail(); ?>

              <div class="">
                  <?php
                      the_content();

                      wp_link_pages( array(
                          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
                          'after'       => '</div>',
                          'link_before' => '<span>',
                          'link_after'  => '</span>',
                          'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
                          'separator'   => '<span class="screen-reader-text">, </span>',
                      ) );

                      if ( '' !== get_the_author_meta( 'description' ) ) {
                          get_template_part( 'template-parts/biography' );
                      }
                  ?>
              </div><!-- .entry-content -->

          </article><!-- #post-## -->
       <?php
			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php echo do_shortcode('[ssba]'); ?>
<?php include_once 'meg-tobbet.php'; ?>
<?php get_footer(); ?>
