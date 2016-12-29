<?php
/**
 * Template Name: Home
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
     <title>Audika - Home</title>
   </head>
   <body>

     <!-- HEADER -->
     <?php get_header();  ?>


     <!-- SECTION ABOUT -->
     <section class="about">
       <h2>QUI SOMMES-NOUS ?</h2>
       <div class="full">
         <div class="half">
           <h3><span aria-hidden="" dta-icon="\e90a" class="icon-sonor"></span>L'histoire</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span/>Pellentesque vehicula</span>, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat. Ut tempus, neque a <span>suscipit dictum</span>, lectus nunc rhoncus nibh, vitae varius velit nibh ac leo. Cras in auctor tortor, vel efficitur ex. Sed eu odio sodales, iaculis velit ac, commodo odio. Suspendisse quis tortor vel quam congue vehicula ut eu arcu. Ut eget nisi ac turpis condimentum pulvinar. Maecenas vel mollis neque. Mauris imperdiet in felis a porta. Vestibulum nec vulputate tellus, ac aliquet lacus. Cras vitae aliquam ligula. Duis ornare malesuada est ac accumsan.</p>
         </div>
         <div class="half">
           <h3><span aria-hidden="" dta-icon="\e90a" class="icon-sonor"></span>Aujourd'hui</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat. <span>Ut tempus</span>, neque a suscipit dictum, lectus nunc rhoncus nibh, vitae varius velit nibh ac leo. Cras in auctor tortor, vel efficitur ex. Sed eu odio sodales, iaculis velit ac, <span>commodo odio</span>. Suspendisse quis tortor vel quam congue vehicula ut eu arcu. Ut eget nisi ac turpis condimentum pulvinar. Maecenas vel mollis neque. Mauris imperdiet in felis a porta. Vestibulum nec vulputate tellus, ac aliquet lacus. Cras vitae aliquam ligula. Duis ornare malesuada est ac accumsan.</p>
         </div>
       </div>
       <div class="link">
         <a href="#">Découvrir Audika</a>
       </div>
     </section>


     <!-- SECTION MAP -->
     <section class="map-section">
       <div class="map" id="map">

       </div>
    <script>
      function initMap() {

        // Définition de la lattitude et longitude
        var latLng = {lat: 48.862725, lng: 2.287592000000018};

        // Création d'une map et de l'objet du dom ciblé.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: latLng,
          scrollwheel: false,
          zoom: 12
        });

        // Création d'un marqueur pour Paris
        // var svg = 'svg/markercluster.svg';
        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          title: 'Paris',
          // icon: svg
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtilUzRYMf9z4qW-H79TiTDrde5-mc7dE&callback=initMap"async defer></script>
    <a href="#" class="offres">
      TOUTES LES OFFRES
    </a>
     </section>


     <!-- SECTION AVANTAGES -->
     <section class="benefit-section">
       <h2>NOS AVANTAGES</h2>
       <div class="full">
         <div class="quarter">
           <img src="<? echo get_template_directory_uri(); ?>/svg/formation.svg" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <img src="<? echo get_template_directory_uri(); ?>/svg/mobile.svg" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <img src="<? echo get_template_directory_uri(); ?>/svg/reseau.svg" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <img src="<? echo get_template_directory_uri(); ?>/svg/stagiaire.svg" alt="">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
       </div>
     </section>


     <!-- SECTION CANDIDAT -->
     <section class="candidat-section">
       <h2>Ces jeunes diplômés ont choisi Audika</h2>
       <div class="full">
         <div class="third">
           <img src="<? echo get_template_directory_uri(); ?>/img/pierre.jpg" alt="Pierre">
           <h3>
             Pierre
           </h3>
           <p>
             CHEZ AUDIKA DEPUIS 6 MOIS
           </p>
           <hr>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat.
           </p>
         </div>
         <div class="third">
           <img src="<? echo get_template_directory_uri(); ?>/img/paul.jpg" alt="Paul">
           <h3>
             Paul
           </h3>
           <p>
             CHEZ AUDIKA DEPUIS 6 MOIS
           </p>
           <hr>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat.
           </p>
         </div>
         <div class="third">
           <img src="<? echo get_template_directory_uri(); ?>/img/jacques.jpg" alt="Jacques">
           <h3>
             Jacques
           </h3>
           <p>
             CHEZ AUDIKA DEPUIS 1 AN
           </p>
           <hr>
           <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat.
           </p>
         </div>
       </div>
       <div class="link">
         <a href="#">REJOIGNEZ LES !</a>
       </div>
     </section>


     <!-- FOOTER -->
     <?php get_footer(); ?>
   </body>
 </html>
