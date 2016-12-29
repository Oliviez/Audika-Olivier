<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage fw
* @since fw 1.0
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

    <script type="text/javascript">
        var baseUrl = "<?php echo network_site_url(); ?>";
    </script>

    <!-- Typo -->
    <script src="https://use.typekit.net/cai4fip.js"></script>
    <script>try{Typekit.load({ async: false });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
    <header class="main-header to-blur" role="banner">

      <nav>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 575.34 173.95">
          <defs>
          <style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#fff;}.cls-4{fill:#009fe3;}.cls-5{clip-path:url(#clip-path-2);}.cls-6{fill:url(#radial-gradient);}.cls-7{clip-path:url(#clip-path-3);}.cls-8{fill:url(#radial-gradient-2);}.cls-9{fill:#f59c00;}.cls-10{clip-path:url(#clip-path-6);}.cls-11{fill:url(#radial-gradient-3);}.cls-12{clip-path:url(#clip-path-7);}.cls-13{fill:url(#radial-gradient-4);}
          </style>
          <clipPath id="clip-path">
            <rect class="cls-1" width="578.00" height="212.06"/>
          </clipPath>
          <clipPath id="clip-path-2">
            <path class="cls-1" d="M172.86,87A86.07,86.07,0,0,1,138,156.19H538.16a29.4,29.4,0,0,0,29.41-29.4V19L139.48,19A86.07,86.07,0,0,1,172.86,87"/>
          </clipPath>
          <radialGradient id="radial-gradient" cx="-7.37" cy="533.67" r="1.53" gradientTransform="matrix(217.15, 0, 0, -217.15, 2088.04, 116043.31)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#009fe3"/>
            <stop offset="1" stop-color="#153d8a"/>
          </radialGradient>
          <clipPath id="clip-path-3">
            <path class="cls-1" d="M7.43,87A79.24,79.24,0,1,0,86.67,7.79,79.24,79.24,0,0,0,7.43,87"/>
          </clipPath>
          <radialGradient id="radial-gradient-2" cx="-7.63" cy="535.51" r="1.53" gradientTransform="matrix(100.77, 0, 0, -100.77, 908.62, 54108.55)" xlink:href="#radial-gradient"/>
          <clipPath id="clip-path-6">
            <path class="cls-1" d="M76.13,80.92A10.27,10.27,0,1,0,86.4,70.64,10.27,10.27,0,0,0,76.13,80.92"/>
          </clipPath>
          <radialGradient id="radial-gradient-3" cx="-1.83" cy="591.51" r="1.54" gradientTransform="matrix(6.18, 0, 0, -6.18, 100.54, 3732.91)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#fffffd"/>
            <stop offset="1" stop-color="#f59c00"/>
          </radialGradient>
          <clipPath id="clip-path-7">
            <path class="cls-1" d="M399.47,52.94a7.64,7.64,0,1,0,7.65-7.65,7.65,7.65,0,0,0-7.65,7.65"/>
          </clipPath>
          <radialGradient id="radial-gradient-4" cx="24.56" cy="613.95" r="1.53" gradientTransform="matrix(4.6, 0, 0, -4.6, 296.18, 2877)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#fffbda"/>
            <stop offset="1" stop-color="#f59c00"/>
          </radialGradient>
        </defs>
        <title>logo2_1</title>
        <g id="Calque_2" data-name="Calque 2">
          <g id="Calque_1-2" data-name="Calque 1">
            <g class="cls-2">
              <path class="cls-3" d="M129.56,11.18A87,87,0,1,0,87,174a86.42,86.42,0,0,0,40.55-10.07H538.15a37.23,37.23,0,0,0,37.19-37.18V11.23Z"/>
              <path class="cls-4" d="M139.48,19A86.06,86.06,0,0,1,138,156.19H538.16a29.41,29.41,0,0,0,29.41-29.4V19Z"/>
              <path class="cls-4" d="M165.91,87A79.24,79.24,0,1,1,86.67,7.79,79.23,79.23,0,0,1,165.91,87"/>
            </g>
            <g class="cls-5">
              <rect class="cls-6" x="138.02" y="18.98" width="429.55" height="137.21"/>
            </g>
            <g class="cls-7">
              <rect class="cls-8" x="7.43" y="7.79" width="158.48" height="158.47"/>
            </g>
            <g class="cls-2">
              <path class="cls-3" d="M309.34,79.19v20.1c0,10-8.14,19-18.44,19s-18.58-9-18.58-19V66.61H262.08V99.93c0,15.47,12.92,27.42,28.81,27.42s28.81-12,28.81-27.42V66.61c-10.11,0-10.37,7.26-10.37,12.58"/>
              <path class="cls-3" d="M503.91,118.56c-11.32,0-20.13-10.17-20.13-21.54s8.81-21.7,20.13-21.7S524,85.66,524,97s-8.75,21.54-20.09,21.54m29.92-25.43h0A30,30,0,0,0,504,66.55,30.92,30.92,0,0,0,473.33,97c-.21,16.81,12.55,30.39,29.28,30.39a32.06,32.06,0,0,0,23-9.58,14.42,14.42,0,0,0,12.83,9.51Z"/>
            </g>
            <rect class="cls-3" x="401.61" y="66.61" width="10.23" height="60.73"/>
            <g class="cls-2">
              <path class="cls-3" d="M476.8,127.33,443.32,94l31-27.41-13.36,0-25.5,23V57.7c0-5.31-.28-12.58-10.36-12.58v82.22h10.36V99.94l27.16,27.39Z"/>
              <path class="cls-3" d="M358.54,118.56c-11.33,0-20.18-10.17-20.18-21.55s8.85-21.71,20.18-21.71S378.63,85.66,378.63,97s-8.76,21.55-20.09,21.55M378.66,57.7V74.25a30.09,30.09,0,0,0-20.12-7.7A30.45,30.45,0,0,0,328.19,97a30.06,30.06,0,0,0,30,30.39c16.74,0,30.71-13.58,30.71-30.39V45.12c-10.1,0-10.23,7.27-10.23,12.58"/>
              <path class="cls-3" d="M221.8,58.27,238,100.49H205.32Zm26.57,69H260L227.09,45c-4,0-9.65.27-12.63,7.61,0,0-24,58-30.73,74.67,5.63,0,11,.25,14.84-9.08L201.9,110h39.48Z"/>
              <path class="cls-9" d="M71.18,96.14c-14.81-2.6-22.27-13.72-23-27.92A37.19,37.19,0,0,1,58.26,40.56C65,33.41,74.8,29.31,85.72,29a40.48,40.48,0,0,1,41.74,37v.11c1.42,20.08-7.41,30.74-18.58,44.25l-2.26,2.75c-2,2.47-3.07,6.45-4.17,10.67-2.2,8.46-5.22,20.05-19.67,21.47a16.36,16.36,0,0,1-17.63-14.93c3.27,4.53,10.09,7.58,16.79,6.37s9.82-6,12.19-15.07c1.28-4.93,2.61-10,5.85-14l2.28-2.77C113.35,91.43,120,83.33,118.88,66.74,117.17,49.35,103.33,37.09,86,37.59,68.1,38.1,56.37,50.34,56.78,68c.08,3.4.51,21,14.4,28.1"/>
            </g>
            <g class="cls-10">
              <rect class="cls-11" x="76.13" y="70.64" width="20.55" height="20.54"/>
            </g>
            <g class="cls-12">
              <rect class="cls-13" x="399.47" y="45.29" width="15.29" height="15.3"/>
        </g>
      </g>
    </g>
  </svg>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'menu list-unstyled',
                'container'      => false,
                'menu_id'        => 'main-menu'
             ) );
        ?>
      </nav>
      <div class="bg-opac" style="background-image: url('<? echo get_template_directory_uri(); ?>/img/img-lg.jpg');">
        <div class="main-title">
          <div class="center">
            <h2>ENVIE DE REJOINDRE AUDIKA ?</h2>
            <p>
              Envoyez-nous votre candidature !
            </p>
            <a href="#">
              JE CANDIDATE
            </a>
          </div>
          <div class="savoir-plus">
            <p>
              EN SAVOIR PLUS
            </p>
            <svg xmlns="http://www.w3.org/2000/svg">
            <metadata>Generated by IcoMoon</metadata>
            <defs>
            <font id="icomoon" horiz-adv-x="1024">
            <font-face units-per-em="1024" ascent="960" descent="-64" />
            <missing-glyph horiz-adv-x="1024" />
            <glyph unicode="&#xe900;" glyph-name="arrow-down" d="M510.446-51.571c-275.671 0-499.147 223.476-499.147 499.147s223.476 499.147 499.147 499.147c275.671 0 499.147-223.476 499.147-499.147-0.321-275.542-223.605-498.825-499.116-499.147zM510.446 918.193c-260.070 0-470.899-210.829-470.899-470.899s210.829-470.899 470.899-470.899c260.070 0 470.899 210.829 470.899 470.899 0 0.099 0 0.199 0 0.298-0.482 259.803-211.057 470.279-470.868 470.601zM496.322 605.484h28.248v-301.692h-28.248v301.692zM510.446 269.612l-184.179 184.179 20.056 20.056 164.122-164.405 164.405 164.405 19.774-20.056-184.179-184.179z" />
            </font></defs></svg>
          </div>

        </div>
      </div>

    </header>

    <!--[if lt IE 10]>
       <div class="browser">
           <div class="browser-table">
               <div class="browser-table-cell">
                   <img class="logo" src="<?php echo get_site_url(); ?>/wp-content/themes/audika/svg/logo.svg" alt="pdb_logo">
                   <p>Vous utilisez un navigateur obsolète.<br>Mettez à jour votre navigateur <br>pour une utilisation optimale de ce site</p>
                   <div class="mtm">
                       <a class="btn btn-gray-ie" href="http://browsehappy.com/" target="_blank">Mettre à jour</a>
                   </div>
               </div>
           </div>
       </div>
       <![endif]-->

    <main class="body-view"/>
