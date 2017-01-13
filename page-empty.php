<?php
/**
 * Template Name: Empty
 */
?>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div id="page" class="site">
  <div class="site-inner">
    <header id="masthead" class="site-header" role="banner">
      <div class="site-header-main">
          <div class="site-branding">
              <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php endif; ?>
              <p></p>
          </div><!-- .site-branding -->
      </div><!-- .site-header-main -->
    </header>
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        ?>
      </main>
    </div>
  </div>
</div>
</body>
</html>
