<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

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
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php include_once 'meg-tobbet.php'; ?>
<?php get_footer(); ?>
