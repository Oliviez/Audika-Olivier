<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage fw
 * @since fw 1.0
 */

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Footer</title>
  </head>
  <body>
      <footer>
        <div class="colonne">
            <div class="logo-ico">
              <img src="<? echo get_template_directory_uri(); ?>/svg/logo.svg" alt="">

              <div class="ico">
                  <a href="#"><div class="facebook circle">
                    <span aria-hidden="true" data-icon="\e905" class="icon-facebook"></span>
                  </div></a>
                  <a href="#"><div class="twitter circle">
                    <span aria-hidden="true" data-icon="\e90b" class="icon-twitter"></span>
                  </div></a>
                  <a href="#"><div class="linkedin circle">
                    <span aria-hidden="true" data-icon="\e906" class="icon-linkedin"></span>
                  </div></a>
                  <a href="#"><div class="viadeo circle">
                    <span aria-hidden="true" data-icon="\e90c" class="icon-viadeo"></span>
                  </div></a>
                </div>
              </div>


          <div class="list-link">
            <div class="list">
              <h4>
                Plan du site
              </h4>
              <?php
                  wp_nav_menu( array(
                      'theme_location' => 'footer',
                      'menu_class'     => '',
                      'container'      => false,
                      'menu_id'        => 'footer-menu'
                   ) );
              ?>
            </div>
            <div class="list">
              <h4>
                Catégorie
              </h4>
              <ul>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
              </ul>
            </div>
            <div class="list">
              <h4>
                Catégorie
              </h4>
              <ul>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
              </ul>
            </div>
            <div class="list">
              <h4>
                Catégorie
              </h4>
              <ul>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
              </ul>
            </div>
            <div class="list">
              <h4>
                Catégorie
              </h4>
              <ul>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
                <li><a href="#">Lien</a></li>
              </ul>
            </div>
          </div>

          <div class="mention">
            <p>Mentions Légales</p>
            <p>By Vingtcinq</p>
          </div>
        </div>
      </footer>
    </main>


  </body>
</html>
