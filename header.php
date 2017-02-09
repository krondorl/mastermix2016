<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="og:image" content="/wp-content/themes/mastermix2016/img/mastermix-fb-opengraph-image-v2.jpg" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<body <?php body_class(); ?> id="top">
<?php include_once("analytics.php") ?>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
						<p class="site-title"><a href="/" rel="home">
						  <svg width="290" height="96" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 386 128" style="enable-background:new 0 0 386 128;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#FFFFFF;}
                            .st1{fill:none;stroke:#FFFFFF;stroke-width:10;stroke-miterlimit:10;}
                            .st2{fill:#FFFFFF;stroke:#FFFFFF;stroke-miterlimit:10;}
                        </style>
                        <g id="Layer_2">
                        </g>
                        <g id="Layer_3">
                            <g id="bg-rect">
                                <path id="XMLID_14_" class="st0" d="M124,4v120H4V4H124 M128,0H0v128h128V0L128,0z"/>
                            </g>
                            <circle id="cone" class="st1" cx="64" cy="64" r="52"/>
                            <g id="XMLID_4_">
                                <path id="XMLID_59_" class="st0" d="M54.4,43.5L64,73.2l9.5-29.7H87v42.7H76.7v-10l1-20.4L67.4,86.1h-6.8L50.2,55.8l1,20.4v10
                                    H40.9V43.5H54.4z"/>
                            </g>
                            <circle id="dot" class="st2" cx="17" cy="113.5" r="6.5"/>
                            <g id="brandname">
                                <path id="XMLID_20_" class="st0" d="M150.7,17.5h9.2l5.3,14l1.9,5.5h0.2l1.9-5.5l5.1-14h9.2v33.7h-8.3v-10c0-0.9,0-1.8,0.1-2.9
                                    c0.1-1,0.2-2.1,0.3-3.2c0.1-1.1,0.2-2.2,0.4-3.2c0.1-1,0.3-2,0.4-2.8h-0.2l-2.8,7.9l-4.7,11.4h-3.3l-4.7-11.4l-2.7-7.9h-0.2
                                    c0.1,0.8,0.2,1.8,0.4,2.8c0.1,1,0.3,2.1,0.4,3.2c0.1,1.1,0.2,2.2,0.3,3.2c0.1,1,0.1,2,0.1,2.9v10h-8.2V17.5z"/>
                                <path id="XMLID_22_" class="st0" d="M189.4,43.9c0-2.7,1.1-4.8,3.3-6.4c2.2-1.5,5.8-2.6,10.8-3.1c-0.2-1.8-1.4-2.7-3.6-2.7
                                    c-0.9,0-1.9,0.2-3,0.5s-2.2,0.9-3.6,1.6l-3.1-5.8c1.8-1.1,3.7-2,5.6-2.5c1.9-0.6,3.8-0.9,5.9-0.9c3.4,0,6,1,7.9,2.9
                                    c1.9,1.9,2.9,5,2.9,9.3v14.4h-7.3l-0.6-2.5h-0.2c-1,0.9-2.1,1.7-3.3,2.3c-1.2,0.6-2.4,0.9-3.9,0.9c-1.2,0-2.3-0.2-3.3-0.6
                                    c-1-0.4-1.8-1-2.5-1.7c-0.7-0.7-1.2-1.6-1.5-2.5C189.6,46,189.4,45,189.4,43.9z M198,43.2c0,1.2,0.8,1.9,2.4,1.9
                                    c0.7,0,1.3-0.2,1.8-0.5c0.5-0.3,0.9-0.8,1.4-1.3v-3.5c-2.1,0.3-3.6,0.8-4.4,1.4C198.3,41.8,198,42.4,198,43.2z"/>
                                <path id="XMLID_25_" class="st0" d="M220.3,42.8c2.4,1.7,4.5,2.6,6.3,2.6c0.9,0,1.6-0.1,2-0.4c0.4-0.3,0.6-0.6,0.6-1.2
                                    c0-0.3-0.1-0.6-0.4-0.9c-0.3-0.3-0.6-0.5-1.1-0.7c-0.5-0.2-1-0.4-1.6-0.6c-0.6-0.2-1.2-0.4-1.9-0.7c-0.8-0.3-1.5-0.7-2.3-1.1
                                    c-0.8-0.4-1.5-1-2.1-1.6c-0.6-0.6-1.1-1.3-1.5-2.2c-0.4-0.8-0.6-1.8-0.6-2.8c0-1.3,0.3-2.4,0.8-3.5c0.5-1,1.2-1.9,2.1-2.6
                                    c0.9-0.7,2-1.3,3.2-1.7c1.3-0.4,2.7-0.6,4.2-0.6c2.1,0,4,0.4,5.5,1.1c1.5,0.7,2.9,1.5,4,2.4l-3.9,5.3c-0.9-0.7-1.9-1.2-2.8-1.6
                                    c-0.9-0.4-1.7-0.6-2.5-0.6c-1.5,0-2.3,0.5-2.3,1.5c0,0.3,0.1,0.6,0.4,0.9c0.3,0.2,0.6,0.5,1.1,0.7c0.4,0.2,1,0.4,1.6,0.6
                                    c0.6,0.2,1.2,0.4,1.9,0.6c0.8,0.3,1.5,0.6,2.3,1c0.8,0.4,1.5,0.9,2.2,1.5c0.6,0.6,1.2,1.3,1.6,2.2c0.4,0.8,0.6,1.9,0.6,3
                                    c0,1.2-0.2,2.3-0.7,3.4c-0.5,1.1-1.2,2-2.1,2.8c-0.9,0.8-2.1,1.4-3.5,1.8c-1.4,0.4-3,0.6-4.8,0.6c-1.7,0-3.4-0.3-5.3-1
                                    c-1.9-0.7-3.5-1.5-4.8-2.6L220.3,42.8z"/>
                                <path id="XMLID_27_" class="st0" d="M243,32.3h-3.4v-6.6l3.9-0.3l1-6.7h7.4v6.7h5.9v7h-5.9v8.9c0,1.5,0.3,2.4,0.9,3
                                    c0.6,0.5,1.3,0.8,2.2,0.8c0.4,0,0.8,0,1.2-0.1c0.4-0.1,0.8-0.2,1.1-0.3l1.3,6.4c-0.7,0.2-1.5,0.4-2.5,0.6c-1,0.2-2.2,0.3-3.6,0.3
                                    c-1.7,0-3.1-0.3-4.3-0.8s-2.2-1.2-3-2.2c-0.8-0.9-1.3-2-1.7-3.3c-0.4-1.3-0.5-2.7-0.5-4.3V32.3z"/>
                                <path id="XMLID_29_" class="st0" d="M260.7,38.3c0-2.1,0.4-4,1.1-5.7c0.7-1.7,1.6-3.1,2.8-4.3c1.2-1.2,2.5-2.1,4-2.7
                                    c1.5-0.6,3-0.9,4.6-0.9c1.9,0,3.6,0.3,5,1c1.4,0.7,2.6,1.6,3.5,2.7c0.9,1.1,1.6,2.5,2.1,4c0.5,1.5,0.7,3.1,0.7,4.9
                                    c0,0.8,0,1.5-0.1,2.1s-0.2,1.1-0.2,1.4h-14.8c0.4,1.7,1.2,2.8,2.2,3.4c1.1,0.6,2.3,0.9,3.8,0.9c0.9,0,1.8-0.1,2.6-0.4
                                    s1.7-0.6,2.7-1.2l2.9,5.3c-1.4,1-3,1.8-4.7,2.3c-1.7,0.5-3.3,0.8-4.7,0.8c-1.9,0-3.7-0.3-5.3-0.9c-1.6-0.6-3-1.5-4.2-2.6
                                    c-1.2-1.2-2.1-2.6-2.8-4.3C261.1,42.4,260.7,40.4,260.7,38.3z M276.9,35.4c0-1.1-0.3-2-0.8-2.8c-0.5-0.8-1.4-1.1-2.8-1.1
                                    c-1,0-1.9,0.3-2.6,0.9c-0.7,0.6-1.3,1.6-1.5,3.1H276.9z"/>
                                <path id="XMLID_32_" class="st0" d="M289.4,25.3h7.3l0.6,4.5h0.2c1-1.8,2.1-3.1,3.5-3.9c1.3-0.8,2.6-1.2,3.9-1.2
                                    c0.8,0,1.4,0,1.9,0.1c0.5,0.1,0.9,0.2,1.3,0.4l-1.5,7.7c-0.5-0.1-0.9-0.2-1.4-0.3c-0.4-0.1-0.9-0.1-1.5-0.1c-0.9,0-1.9,0.3-2.9,1
                                    c-1,0.6-1.8,1.8-2.5,3.4v14.4h-8.9V25.3z"/>
                                <path id="XMLID_34_" class="st0" d="M315.5,22.1c-1.5,0-2.6-0.4-3.6-1.2c-0.9-0.8-1.4-1.9-1.4-3.2c0-1.3,0.5-2.4,1.4-3.2
                                    c0.9-0.8,2.1-1.2,3.6-1.2s2.6,0.4,3.6,1.2s1.4,1.9,1.4,3.2c0,1.3-0.5,2.4-1.4,3.2C318.2,21.7,317,22.1,315.5,22.1z M311.1,25.3
                                    h8.9v25.9h-8.9V25.3z"/>
                                <path id="XMLID_37_" class="st0" d="M326,25.3h7.3l0.6,3.1h0.2c1-1,2.2-1.9,3.6-2.6c1.3-0.7,2.9-1.1,4.6-1.1c2.8,0,4.9,1,6.2,2.9
                                    c1.3,1.9,1.9,4.5,1.9,7.7v16h-8.9V36.4c0-1.7-0.2-2.8-0.6-3.3c-0.4-0.6-1.1-0.8-2-0.8c-0.8,0-1.5,0.2-2.1,0.5
                                    c-0.6,0.3-1.2,0.8-1.9,1.5v17H326V25.3z"/>
                                <path id="XMLID_39_" class="st0" d="M354.7,55.5c0-2,1.2-3.7,3.6-5v-0.2c-0.7-0.5-1.3-1.1-1.7-1.8c-0.5-0.7-0.7-1.6-0.7-2.7
                                    c0-0.9,0.3-1.8,0.8-2.6c0.5-0.9,1.2-1.6,2.1-2.2v-0.2c-0.9-0.6-1.8-1.5-2.5-2.6c-0.7-1.1-1.1-2.5-1.1-4c0-1.6,0.3-3,0.9-4.2
                                    c0.6-1.2,1.5-2.2,2.5-3c1-0.8,2.2-1.4,3.6-1.7c1.3-0.4,2.7-0.6,4.1-0.6c1.5,0,2.9,0.2,4.2,0.6h9.7v6.4h-3.7
                                    c0.1,0.3,0.2,0.7,0.3,1.2c0.1,0.5,0.1,1,0.1,1.5c0,1.5-0.3,2.8-0.8,3.9c-0.6,1.1-1.3,2-2.2,2.7c-0.9,0.7-2,1.2-3.3,1.5
                                    c-1.3,0.3-2.6,0.5-4.1,0.5c-0.9,0-1.8-0.1-2.9-0.4c-0.3,0.2-0.5,0.5-0.5,0.6c-0.1,0.2-0.1,0.5-0.1,0.9c0,0.6,0.3,1,0.8,1.2
                                    c0.6,0.2,1.5,0.3,2.8,0.3h3.9c3.3,0,5.8,0.5,7.5,1.6c1.8,1.1,2.7,2.8,2.7,5.2c0,1.4-0.4,2.7-1.1,3.9c-0.7,1.2-1.7,2.2-3,3
                                    c-1.3,0.8-2.9,1.5-4.7,1.9c-1.9,0.4-3.9,0.7-6.3,0.7c-1.5,0-2.9-0.1-4.2-0.3c-1.3-0.2-2.5-0.6-3.5-1.1c-1-0.5-1.8-1.2-2.4-2
                                    C355,57.7,354.7,56.7,354.7,55.5z M362,54.1c0,0.8,0.5,1.4,1.4,1.8c0.9,0.4,2.2,0.6,3.7,0.6c1.5,0,2.7-0.2,3.6-0.6
                                    c1-0.4,1.5-1,1.5-1.7c0-0.7-0.3-1.1-0.9-1.3c-0.6-0.2-1.5-0.3-2.6-0.3h-2c-1,0-1.8,0-2.4-0.1c-0.5-0.1-1-0.1-1.4-0.2
                                    c-0.3,0.3-0.5,0.6-0.7,0.9C362.1,53.4,362,53.7,362,54.1z M366.5,37.8c0.8,0,1.5-0.3,2-0.9c0.5-0.6,0.8-1.5,0.8-2.8
                                    c0-1.2-0.3-2.1-0.8-2.7c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.5,0.6-0.8,1.5-0.8,2.7c0,1.2,0.3,2.2,0.8,2.8
                                    C365,37.5,365.6,37.8,366.5,37.8z"/>
                                <path id="XMLID_43_" class="st0" d="M150.7,79.8h9.2l5.3,14l1.9,5.5h0.2l1.9-5.5l5.1-14h9.2v33.7h-8.3v-10c0-0.9,0-1.8,0.1-2.9
                                    c0.1-1,0.2-2.1,0.3-3.2c0.1-1.1,0.2-2.2,0.4-3.2c0.1-1,0.3-2,0.4-2.8h-0.2l-2.8,7.9l-4.7,11.4h-3.3l-4.7-11.4l-2.7-7.9h-0.2
                                    c0.1,0.8,0.2,1.8,0.4,2.8c0.1,1,0.3,2.1,0.4,3.2c0.1,1.1,0.2,2.2,0.3,3.2c0.1,1,0.1,2,0.1,2.9v10h-8.2V79.8z"/>
                                <path id="XMLID_45_" class="st0" d="M194.7,84.4c-1.5,0-2.6-0.4-3.6-1.2c-0.9-0.8-1.4-1.9-1.4-3.2c0-1.3,0.5-2.4,1.4-3.2
                                    c0.9-0.8,2.1-1.2,3.6-1.2c1.5,0,2.6,0.4,3.6,1.2s1.4,1.9,1.4,3.2c0,1.3-0.5,2.4-1.4,3.2S196.2,84.4,194.7,84.4z M190.3,87.6h8.9
                                    v25.9h-8.9V87.6z"/>
                                <path id="XMLID_48_" class="st0" d="M210.7,100l-7.4-12.5h9.5l1.9,3.6c0.3,0.7,0.7,1.5,1,2.2c0.3,0.8,0.7,1.5,1,2.2h0.2
                                    c0.2-0.7,0.5-1.5,0.8-2.2c0.3-0.8,0.5-1.5,0.8-2.2l1.2-3.6h9.2l-7.4,13.5l7.8,12.5H220l-2.1-3.6c-0.4-0.7-0.8-1.5-1.1-2.2
                                    c-0.4-0.8-0.8-1.5-1.1-2.2h-0.2c-0.3,0.7-0.6,1.5-0.9,2.2c-0.3,0.7-0.6,1.5-0.9,2.3l-1.5,3.6h-9.2L210.7,100z"/>
                                <path id="XMLID_50_" class="st0" d="M237.7,84.4c-1.5,0-2.6-0.4-3.6-1.2c-0.9-0.8-1.4-1.9-1.4-3.2c0-1.3,0.5-2.4,1.4-3.2
                                    c0.9-0.8,2.1-1.2,3.6-1.2c1.5,0,2.6,0.4,3.6,1.2s1.4,1.9,1.4,3.2c0,1.3-0.5,2.4-1.4,3.2S239.1,84.4,237.7,84.4z M233.2,87.6h8.9
                                    v25.9h-8.9V87.6z"/>
                                <path id="XMLID_53_" class="st0" d="M248.2,87.6h7.3l0.6,3.1h0.2c1-1,2.2-1.9,3.6-2.6c1.3-0.7,2.9-1.1,4.6-1.1
                                    c2.8,0,4.9,1,6.2,2.9c1.3,1.9,1.9,4.5,1.9,7.7v16h-8.9V98.7c0-1.7-0.2-2.8-0.6-3.3c-0.4-0.6-1.1-0.8-2-0.8c-0.8,0-1.5,0.2-2.1,0.5
                                    c-0.6,0.3-1.2,0.8-1.9,1.5v17h-8.9V87.6z"/>
                                <path id="XMLID_55_" class="st0" d="M276.9,117.8c0-2,1.2-3.7,3.6-5v-0.2c-0.7-0.5-1.3-1.1-1.7-1.8c-0.5-0.7-0.7-1.6-0.7-2.7
                                    c0-0.9,0.3-1.8,0.8-2.6s1.2-1.6,2.1-2.2V103c-0.9-0.6-1.8-1.5-2.5-2.6c-0.7-1.1-1.1-2.5-1.1-4c0-1.6,0.3-3,0.9-4.2
                                    c0.6-1.2,1.5-2.2,2.5-3c1-0.8,2.2-1.4,3.6-1.7c1.3-0.4,2.7-0.6,4.1-0.6c1.5,0,2.9,0.2,4.2,0.6h9.7V94h-3.7
                                    c0.1,0.3,0.2,0.7,0.3,1.2c0.1,0.5,0.1,1,0.1,1.5c0,1.5-0.3,2.8-0.8,3.9c-0.6,1.1-1.3,2-2.2,2.7c-0.9,0.7-2,1.2-3.3,1.5
                                    c-1.3,0.3-2.6,0.5-4.1,0.5c-0.9,0-1.8-0.1-2.9-0.4c-0.3,0.2-0.5,0.5-0.5,0.6c-0.1,0.2-0.1,0.5-0.1,0.9c0,0.6,0.3,1,0.8,1.2
                                    c0.6,0.2,1.5,0.3,2.8,0.3h3.9c3.3,0,5.8,0.5,7.5,1.6s2.7,2.8,2.7,5.2c0,1.4-0.4,2.7-1.1,3.9s-1.7,2.2-3,3
                                    c-1.3,0.8-2.9,1.5-4.7,1.9c-1.9,0.4-3.9,0.7-6.3,0.7c-1.5,0-2.9-0.1-4.2-0.3c-1.3-0.2-2.5-0.6-3.5-1.1c-1-0.5-1.8-1.2-2.4-2
                                    C277.2,120,276.9,119,276.9,117.8z M284.2,116.3c0,0.8,0.5,1.4,1.4,1.8c0.9,0.4,2.2,0.6,3.7,0.6c1.5,0,2.7-0.2,3.6-0.6
                                    c1-0.4,1.5-1,1.5-1.7c0-0.7-0.3-1.1-0.9-1.3c-0.6-0.2-1.5-0.3-2.6-0.3h-2c-1,0-1.8,0-2.4-0.1c-0.5-0.1-1-0.1-1.4-0.2
                                    c-0.3,0.3-0.5,0.6-0.7,0.9C284.3,115.6,284.2,115.9,284.2,116.3z M288.6,100c0.8,0,1.5-0.3,2-0.9c0.5-0.6,0.8-1.5,0.8-2.8
                                    c0-1.2-0.3-2.1-0.8-2.7c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.5,0.3-2,0.9c-0.5,0.6-0.8,1.5-0.8,2.7c0,1.2,0.3,2.2,0.8,2.8
                                    C287.1,99.7,287.8,100,288.6,100z"/>
                            </g>
                            <g id="XMLID_1_">
                            </g>
                            <g id="XMLID_61_">
                            </g>
                            <g id="XMLID_62_">
                            </g>
                            <g id="XMLID_63_">
                            </g>
                            <g id="XMLID_64_">
                            </g>
                            <g id="XMLID_65_">
                            </g>
                            <g id="XMLID_66_">
                            </g>
                            <g id="XMLID_67_">
                            </g>
                            <g id="XMLID_68_">
                            </g>
                            <g id="XMLID_69_">
                            </g>
                            <g id="XMLID_70_">
                            </g>
                            <g id="XMLID_71_">
                            </g>
                            <g id="XMLID_72_">
                            </g>
                            <g id="XMLID_73_">
                            </g>
                            <g id="XMLID_74_">
                            </g>
                        </g>
                        </svg>

						</a></p>
                    <?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

				<?php endif; ?>
			</div><!-- .site-header-main -->
					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->

			<?php if ( get_header_image() ) : ?>
				<?php
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
