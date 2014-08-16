<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  <meta name="Author" content="Grupo Senzala 78" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
  <!-- OpenGraph Facebook : Meta -->
  <!--
  <meta property="og:title" content="Association Capoeira Senzala 78 | Grupo Senzala - Le site" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="fr_FR" />
  <meta property="og:description" content="Capoeira Senzala 78 dirigé par Mestre Banana. Association rattachée au Grupo Senzala, l'un des plus important groupe de Capoeira au monde." />
  <meta property="og:image" content="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/og-senzala78.png" />
  <meta property="og:image:width" content="250" />
  <meta property="og:image:height" content="250" />
  <meta property="og:url" content="http://localhost:8888/CSenzala_01/" />
	-->

	<!-- Favicon Aigle Senzala -->
	<link rel="icon" type="image/png" href="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/favicon.png">

	<!-- Icon Touch Apple -->
	<link rel="apple-touch-icon" href="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/favicon_iphone.png">

	<!-- Google Font - LATO -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

  <!--Page Photo -->
    <script src="../wp-content/themes/Senzala/js/lightbox.js"></script>
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/Senzala/css/page-photo/screen.css">
    <link rel="stylesheet" type= "text/css" href="../wp-content/themes/Senzala/css/page-photo/lightbox.css">

	<!--Page Où Pratiquer -->
    <script src="../wp-content/themes/Senzala/js/jquery-1.10.2.js"></script>
    <script src="../wp-content/themes/Senzala/js/jquery-ui-1.10.4.custom.js"></script>
    <script>
    $(function() {
        $( "#accordion" ).accordion({
        collapsible: true
        });



        // Hover states on the static widgets
        $( "#dialog-link, #icons li" ).hover(
            function() {
                $( this ).addClass( "ui-state-hover" );
            },
            function() {
                $( this ).removeClass( "ui-state-hover" );
            }
        );

    });
    </script>
  <!-- fin Page Où pratiquer-->

    <!--Carte Google Maps Personnalisée -->
    <!-- Ce code est à placer dans les pages concernée uniquement. Impact sur les performances conséquents -->
                    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                    <script>
                    window.onload = function () {
                        var styles = [
                          {
                            "featureType": "water",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#d0d0d0" }
                            ]
                          },{
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              { "color": "#f9bb07" },
                              { "weight": 6.4 }
                            ]
                          },{
                            "featureType": "administrative.neighborhood",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "landscape.man_made",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "landscape.natural",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "poi",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "labels.text",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#f9bb07" },
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "geometry.stroke",
                            "stylers": [
                              { "weight": 0.8 },
                              { "color": "#f9bb07" }
                            ]
                          },{
                            "featureType": "road.local",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#d0d0d0" }
                            ]
                          },{
                            "featureType": "administrative",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#777777" }
                            ]
                          },{
                          },{
                            "featureType": "road.arterial",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                          },{
                          }
                        ]

                    var options = {
                        mapTypeControlOptions: {
                            mapTypeIds: ['Styled']
                        },
                        center: new google.maps.LatLng(48.961286,2.018738, 0.216398,0.439453),
                        zoom: 11,
                        disableDefaultUI: true,
                        mapTypeId: 'Styled'
                    };

                    var div = document.getElementById('kp_maps');
                    var map = new google.maps.Map(div, options);
                    var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
                    map.mapTypes.set('Styled', styledMapType);
                    var ctaLayer = new google.maps.KmlLayer('https://dl.dropboxusercontent.com/u/79008563/Senzala%20GMap%20Icon/CapoeiraSenzala78.kml');
                    ctaLayer.setMap(map);
                    console.log(div);
                    }
                    </script>

    <!--Fin du code de la carte Google Maps Personnalisée-->

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">

<!-- Début logo -->
				<div>
          <a href="<?php echo home_url( '/' );?>">
            <img class="logo_senzala" src="<?php echo home_url( 'wp-content/themes/Senzala/images/headers/logo-capoeira-senzala.png' ); ?>" alt="Cours de Capoeira dans les Yvelines - Capoeira Senzala 78 - Mestre Banana."/>
          </a>
        </div>
<!-- Fin logo -->

<div class="motif_header"></div>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
