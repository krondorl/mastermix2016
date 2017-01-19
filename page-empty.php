<?php
/**
 * Template Name: Empty
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="og:image" content="/wp-content/themes/mastermix2016/img/mastermix-fb-opengraph-image-v2.jpg" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
    <!--FAVICONS-->
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/mastermix2016/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/wp-content/themes/mastermix2016/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/wp-content/themes/mastermix2016/img/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/wp-content/themes/mastermix2016/img/manifest.json">
    <link rel="mask-icon" href="/wp-content/themes/mastermix2016/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/wp-content/themes/mastermix2016/img/favicon.ico">
    <meta name="msapplication-config" content="/wp-content/themes/mastermix2016/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" href="/wp-content/themes/mastermix2016/img/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="/wp-content/themes/mastermix2016/css/default.css?v<?php echo rand(111,9999); ?>">
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
