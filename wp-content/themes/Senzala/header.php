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

  <!-- Effets de la page (onglet) Graduation -->
  <script type="text/javascript" src="../wp-content/themes/Senzala/js/graduation/jquery.js"></script>
  <script type="text/javascript" src="../wp-content/themes/Senzala/js/graduation/fancybox.js"></script>
  <script type="text/javascript" src="../wp-content/themes/Senzala/js/graduation/wow.js"></script>
  <script type="text/javascript" src="../wp-content/themes/Senzala/js/graduation/main.js"></script>
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/Senzala/css/graduation/animate.css">

  <!-- Google Formulaire - Landing Page Inscription -->
  <link rel="stylesheet" type="text/css" href="../wp-content/themes/Senzala/css/googleform/stylegoogleform.css">
  <script type="text/javascript">
      /**
       * @license
       *! H5F
       * https://github.com/ryanseddon/H5F/
       * Copyright (c) Ryan Seddon | Licensed MIT
       */

      (function(e, t) {
          "function" == typeof define && define.amd ? define(t) : e.H5F = t()
      })(this, function() {
          var e, t, a, i, n, r, s, l, u, o, c, d, v, f, p, m, h, g, b, y, w, C, N, A, E, $, k = document,
              x = k.createElement("input"),
              q = /^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
              M = /[a-z][\-\.+a-z]*:\/\//i,
              L = /^(input|select|textarea)$/i;
          return r = function(e, t) {
              var a = !e.nodeType || !1,
                  i = {
                      validClass: "valid",
                      invalidClass: "error",
                      requiredClass: "required",
                      placeholderClass: "placeholder"
                  };
              if ("object" == typeof t)
                  for (var r in i) t[r] === void 0 && (t[r] = i[r]);
              if (n = t || i, a)
                  for (var l = 0, u = e.length; u > l; l++) s(e[l]);
              else s(e)
          }, s = function(a) {
              var i, n = a.elements,
                  r = n.length,
                  s = !!a.attributes.novalidate;
              if (b(a, "invalid", u, !0), b(a, "blur", u, !0), b(a, "input", u, !0), b(a, "keyup", u, !0), b(a, "focus", u, !0), b(a, "change", u, !0), b(a, "click", o, !0), b(a, "submit", function(i) {
                  e = !0, t || s || a.checkValidity() || w(i)
              }, !1), !v())
                  for (a.checkValidity = function() {
                      return c(a)
                  }; r--;) i = !!n[r].attributes.required, "fieldset" !== n[r].nodeName.toLowerCase() && l(n[r])
          }, l = function(e) {
              var t = e,
                  a = g(t),
                  n = {
                      type: t.getAttribute("type"),
                      pattern: t.getAttribute("pattern"),
                      placeholder: t.getAttribute("placeholder")
                  },
                  r = /^(email|url)$/i,
                  s = /^(input|keyup)$/i,
                  l = r.test(n.type) ? n.type : n.pattern ? n.pattern : !1,
                  u = f(t, l),
                  o = m(t, "step"),
                  v = m(t, "min"),
                  h = m(t, "max"),
                  b = !("" === t.validationMessage || void 0 === t.validationMessage);
              t.checkValidity = function() {
                  return c.call(this, t)
              }, t.setCustomValidity = function(e) {
                  d.call(t, e)
              }, t.validity = {
                  valueMissing: a,
                  patternMismatch: u,
                  rangeUnderflow: v,
                  rangeOverflow: h,
                  stepMismatch: o,
                  customError: b,
                  valid: !(a || u || o || v || h || b)
              }, n.placeholder && !s.test(i) && p(t)
          }, u = function(e) {
              var t = C(e) || e,
                  a = /^(input|keyup|focusin|focus|change)$/i,
                  r = /^(submit|image|button|reset)$/i,
                  s = /^(checkbox|radio)$/i,
                  o = !0;
              !L.test(t.nodeName) || r.test(t.type) || r.test(t.nodeName) || (i = e.type, v() || l(t), t.validity.valid && ("" !== t.value || s.test(t.type)) || t.value !== t.getAttribute("placeholder") && t.validity.valid ? (A(t, [n.invalidClass, n.requiredClass]), N(t, n.validClass)) : a.test(i) ? t.validity.valueMissing && A(t, [n.requiredClass, n.invalidClass, n.validClass]) : t.validity.valueMissing ? (A(t, [n.invalidClass, n.validClass]), N(t, n.requiredClass)) : t.validity.valid || (A(t, [n.validClass, n.requiredClass]), N(t, n.invalidClass)), "input" === i && o && (y(t.form, "keyup", u, !0), o = !1))
          }, c = function(t) {
              var a, i, n, r, s = !1;
              if ("form" === t.nodeName.toLowerCase()) {
                  a = t.elements;
                  for (var l = 0, o = a.length; o > l; l++) i = a[l], n = !!i.attributes.required, r = !!i.attributes.pattern, "fieldset" !== i.nodeName.toLowerCase() && (n || r && n) && (u(i), i.validity.valid || s || (e && i.focus(), s = !0));
                  return !s
              }
              return u(t), t.validity.valid
          }, d = function(e) {
              var t = this;
              t.validationMessage = e
          }, o = function(e) {
              var a = C(e);
              a.attributes.formnovalidate && "submit" === a.type && (t = !0)
          }, v = function() {
              return E(x, "validity") && E(x, "checkValidity")
          }, f = function(e, t) {
              if ("email" === t) return !q.test(e.value);
              if ("url" === t) return !M.test(e.value);
              if (t) {
                  var i = e.getAttribute("placeholder"),
                      n = e.value;
                  return a = RegExp("^(?:" + t + ")$"), n === i ? !1 : "" === n ? !1 : !a.test(e.value)
              }
              return !1
          }, p = function(e) {
              var t = {
                      placeholder: e.getAttribute("placeholder")
                  },
                  a = /^(focus|focusin|submit)$/i,
                  r = /^(input|textarea)$/i,
                  s = /^password$/i,
                  l = !!("placeholder" in x);
              l || !r.test(e.nodeName) || s.test(e.type) || ("" !== e.value || a.test(i) ? e.value === t.placeholder && a.test(i) && (e.value = "", A(e, n.placeholderClass)) : (e.value = t.placeholder, b(e.form, "submit", function() {
                  i = "submit", p(e)
              }, !0), N(e, n.placeholderClass)))
          }, m = function(e, t) {
              var a = parseInt(e.getAttribute("min"), 10) || 0,
                  i = parseInt(e.getAttribute("max"), 10) || !1,
                  n = parseInt(e.getAttribute("step"), 10) || 1,
                  r = parseInt(e.value, 10),
                  s = (r - a) % n;
              return g(e) || isNaN(r) ? "number" === e.getAttribute("type") ? !0 : !1 : "step" === t ? e.getAttribute("step") ? 0 !== s : !1 : "min" === t ? e.getAttribute("min") ? a > r : !1 : "max" === t ? e.getAttribute("max") ? r > i : !1 : void 0
          }, h = function(e) {
              var t = !!e.attributes.required;
              return t ? g(e) : !1
          }, g = function(e) {
              var t = e.getAttribute("placeholder"),
                  a = /^(checkbox|radio)$/i,
                  i = !!e.attributes.required;
              return !(!i || "" !== e.value && e.value !== t && (!a.test(e.type) || $(e)))
          }, b = function(e, t, a, i) {
              E(window, "addEventListener") ? e.addEventListener(t, a, i) : E(window, "attachEvent") && window.event !== void 0 && ("blur" === t ? t = "focusout" : "focus" === t && (t = "focusin"), e.attachEvent("on" + t, a))
          }, y = function(e, t, a, i) {
              E(window, "removeEventListener") ? e.removeEventListener(t, a, i) : E(window, "detachEvent") && window.event !== void 0 && e.detachEvent("on" + t, a)
          }, w = function(e) {
              e = e || window.event, e.stopPropagation && e.preventDefault ? (e.stopPropagation(), e.preventDefault()) : (e.cancelBubble = !0, e.returnValue = !1)
          }, C = function(e) {
              return e = e || window.event, e.target || e.srcElement
          }, N = function(e, t) {
              var a;
              e.className ? (a = RegExp("(^|\\s)" + t + "(\\s|$)"), a.test(e.className) || (e.className += " " + t)) : e.className = t
          }, A = function(e, t) {
              var a, i, n = "object" == typeof t ? t.length : 1,
                  r = n;
              if (e.className)
                  if (e.className === t) e.className = "";
                  else
                      for (; n--;) a = RegExp("(^|\\s)" + (r > 1 ? t[n] : t) + "(\\s|$)"), i = e.className.match(a), i && 3 === i.length && (e.className = e.className.replace(a, i[1] && i[2] ? " " : ""))
          }, E = function(e, t) {
              var a = typeof e[t],
                  i = RegExp("^function|object$", "i");
              return !!(i.test(a) && e[t] || "unknown" === a)
          }, $ = function(e) {
              for (var t = document.getElementsByName(e.name), a = 0; t.length > a; a++)
                  if (t[a].checked) return !0;
              return !1
          }, {
              setup: r
          }
      });
  </script>

  <link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/forms/d/1x3An_xxQr5Bj1XuOpi8nxQlu5DeS1v3VwgQBJlprSeM/oembed?url=https://docs.google.com/forms/d/1x3An_xxQr5Bj1XuOpi8nxQlu5DeS1v3VwgQBJlprSeM/viewform?fbzx%3D2042654638902479472&amp;format=xml">
  <!-- Fin du Google Formulaire - Landing Page Inscription -->

	<!-- Favicon Aigle Senzala -->
	<link rel="icon" type="image/png" href="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/favicon.png">

	<!-- Icon Touch Apple -->
	<link rel="apple-touch-icon" href="http://localhost:8888/CSenzala_01/wp-content/themes/Senzala/images/favicon_iphone.png">

	<!-- Google Font - LATO -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  <!-- Page Photo -->
    <script src="../wp-content/themes/Senzala/js/lightbox.js"></script>
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/Senzala/css/page-photo/screen.css">
    <link rel="stylesheet" type= "text/css" href="../wp-content/themes/Senzala/css/page-photo/lightbox.css">

  <!-- Page La Capoeira / Senzala78 -->
    <script src="../wp-content/themes/Senzala/js/jquery.js"></script>
    <script src="../wp-content/themes/Senzala/js/script.js"></script>

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
                          "featureType": "administrative",
                          "elementType": "labels.text.stroke",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#ffffff" },
                            { "weight": 5.6 }
                          ]
                        },{
                          "featureType": "administrative.neighborhood",
                          "stylers": [
                            { "visibility": "off" }
                          ]
                        },{
                          "featureType": "landscape.man_made",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#ffffff" }
                          ]
                        },{
                          "featureType": "landscape.natural",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#ffffff" }
                          ]
                        },{
                          "featureType": "poi",
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
                          "featureType": "water",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#13191c" }
                          ]
                        },{
                          "featureType": "road",
                          "elementType": "geometry.fill",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#ffffff" }
                          ]
                        },{
                          "featureType": "road",
                          "elementType": "geometry.stroke",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#f9bb10" }
                          ]
                        },{
                          "featureType": "road",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            { "color": "#13191c" },
                            { "visibility": "off" }
                          ]
                        },{
                          "featureType": "administrative",
                          "elementType": "labels.text.stroke",
                          "stylers": [
                            { "color": "#13191c" },
                            { "visibility": "off" }
                          ]
                        },{
                          "featureType": "administrative",
                          "elementType": "labels.text.fill",
                          "stylers": [
                            { "color": "#13191c" }
                          ]
                        },{
                          "featureType": "transit",
                          "stylers": [
                            { "visibility": "off" }
                          ]
                        },{
                          "featureType": "water",
                          "stylers": [
                            { "visibility": "on" }
                          ]
                        },{
                        },{
                          "featureType": "water",
                          "stylers": [
                            { "visibility": "on" },
                            { "color": "#d3dffc" }
                          ]
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
