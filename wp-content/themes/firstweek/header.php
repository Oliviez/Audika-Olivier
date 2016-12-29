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
        <img src="<? echo get_template_directory_uri(); ?>/svg/logo.svg" alt="">
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
            <span aria-hidden="true" data-icon="\e900" class="icon-arrow-down" id="scroll-to-about"></span>
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
