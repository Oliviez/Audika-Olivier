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
           <h3>L'histoire</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span/>Pellentesque vehicula</span>, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat. Ut tempus, neque a <span>suscipit dictum</span>, lectus nunc rhoncus nibh, vitae varius velit nibh ac leo. Cras in auctor tortor, vel efficitur ex. Sed eu odio sodales, iaculis velit ac, commodo odio. Suspendisse quis tortor vel quam congue vehicula ut eu arcu. Ut eget nisi ac turpis condimentum pulvinar. Maecenas vel mollis neque. Mauris imperdiet in felis a porta. Vestibulum nec vulputate tellus, ac aliquet lacus. Cras vitae aliquam ligula. Duis ornare malesuada est ac accumsan.</p>
         </div>
         <div class="half">
           <h3>Aujourd'hui</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, urna at tincidunt aliquam, nisi tellus malesuada lectus, vitae ullamcorper sem arcu at erat. <span>Ut tempus</span>, neque a suscipit dictum, lectus nunc rhoncus nibh, vitae varius velit nibh ac leo. Cras in auctor tortor, vel efficitur ex. Sed eu odio sodales, iaculis velit ac, <span>commodo odio</span>. Suspendisse quis tortor vel quam congue vehicula ut eu arcu. Ut eget nisi ac turpis condimentum pulvinar. Maecenas vel mollis neque. Mauris imperdiet in felis a porta. Vestibulum nec vulputate tellus, ac aliquet lacus. Cras vitae aliquam ligula. Duis ornare malesuada est ac accumsan.</p>
         </div>
       </div>
       <div class="link">
         <a href="#">Découvrir Audika</a>
       </div>
     </section>


     <!-- SECTION MAP -->
     <section class="map-section">
       <div id="map"></div>
    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.862725, lng: 2.287592000000018},
          scrollwheel: false,
          zoom: 12
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtilUzRYMf9z4qW-H79TiTDrde5-mc7dE&callback=initMap"async defer></script>
     </section>


     <!-- SECTION AVANTAGES -->
     <section class="benefit-section">
       <h2>NOS AVANTAGES</h2>
       <div class="full">
         <div class="quarter">
           <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 60"><defs><style>.cls-1{fill:#f39b1f;}</style></defs><title>formation</title><path class="cls-1" d="M32,17.11a5.71,5.71,0,1,1,5.71-5.71A5.72,5.72,0,0,1,32,17.11ZM32,6.64a4.75,4.75,0,1,0,4.75,4.75A4.76,4.76,0,0,0,32,6.64Z"/><path class="cls-1" d="M61.06,29.75H46.16A4.18,4.18,0,0,1,42,25.57V24.42h1v1.15a3.22,3.22,0,0,0,3.21,3.21H61.06a3.22,3.22,0,0,0,3.21-3.21V5.68a3.22,3.22,0,0,0-3.21-3.21H46.16a3.22,3.22,0,0,0-3.21,3.21V18.53H42V5.68a4.18,4.18,0,0,1,4.17-4.17H61.06a4.18,4.18,0,0,1,4.17,4.17V25.57A4.18,4.18,0,0,1,61.06,29.75Z"/><path class="cls-1" d="M20,17.35,14.4,15H8.74a2.34,2.34,0,0,1-2.33-2.34v-5A2.34,2.34,0,0,1,8.74,5.3h12a2.34,2.34,0,0,1,2.33,2.34v5A2.34,2.34,0,0,1,20.73,15H20ZM8.74,6.27A1.37,1.37,0,0,0,7.37,7.64v5a1.37,1.37,0,0,0,1.37,1.37l5.94,0,4.4,1.82V14.05h1.65a1.37,1.37,0,0,0,1.37-1.37v-5a1.37,1.37,0,0,0-1.37-1.37Z"/><path class="cls-1" d="M38.76,34.41h-1V26.16l7.46-3.63,4.93-6.88L47.5,13.17,43.68,18.6l-7.5,2.7h-11A3.15,3.15,0,0,0,22,24.44v10h-1v-10a4.11,4.11,0,0,1,4.11-4.11H36.1l7-2.53,4.28-6.08,4.13,3.8L45.9,23.28l-7.14,3.47Z"/><rect class="cls-1" x="25.24" y="26.7" width="0.96" height="7.72"/><rect class="cls-1" x="16.31" y="33.93" width="30.34" height="0.96"/><rect class="cls-1" x="46.4" y="6.73" width="13.85" height="0.96"/><rect class="cls-1" x="46.4" y="9.68" width="13.85" height="0.96"/><rect class="cls-1" x="51.45" y="12.63" width="8.8" height="0.96"/><rect class="cls-1" x="52.83" y="15.58" width="7.42" height="0.96"/><rect class="cls-1" x="51.45" y="18.53" width="8.8" height="0.96"/><rect class="cls-1" x="49.79" y="21.48" width="10.46" height="0.96"/><rect class="cls-1" x="46.4" y="24.43" width="13.85" height="0.96"/><path class="cls-1" d="M17.35,50.07a5.2,5.2,0,1,1,5.2-5.2A5.2,5.2,0,0,1,17.35,50.07Zm0-9.43a4.24,4.24,0,1,0,4.24,4.24A4.24,4.24,0,0,0,17.35,40.64Z"/><path class="cls-1" d="M25.66,58.79h-1V55.22a3.78,3.78,0,0,0-3.78-3.78H13.79A3.78,3.78,0,0,0,10,55.22v3.56H9V55.22a4.75,4.75,0,0,1,4.74-4.74h7.13a4.75,4.75,0,0,1,4.74,4.74Z"/><path class="cls-1" d="M36.19,50.07a5.2,5.2,0,1,1,5.2-5.2A5.2,5.2,0,0,1,36.19,50.07Zm0-9.43a4.24,4.24,0,1,0,4.24,4.24A4.24,4.24,0,0,0,36.19,40.64Z"/><path class="cls-1" d="M44.49,58.79h-1V55.22a3.78,3.78,0,0,0-3.78-3.78H32.62a3.78,3.78,0,0,0-3.78,3.78v3.56h-1V55.22a4.75,4.75,0,0,1,4.74-4.74h7.13a4.75,4.75,0,0,1,4.74,4.74Z"/><path class="cls-1" d="M55,50.07a5.2,5.2,0,1,1,5.2-5.2A5.2,5.2,0,0,1,55,50.07Zm0-9.43a4.24,4.24,0,1,0,4.24,4.24A4.24,4.24,0,0,0,55,40.64Z"/><path class="cls-1" d="M63.33,58.79h-1V55.22a3.78,3.78,0,0,0-3.78-3.78H51.46a3.78,3.78,0,0,0-3.78,3.78v3.56h-1V55.22a4.75,4.75,0,0,1,4.74-4.74h7.13a4.75,4.75,0,0,1,4.74,4.74Z"/></svg>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 60"><defs><style>.cls-1{fill:#f39b1f;}</style></defs><title>mobile</title><path class="cls-1" d="M27.44,51.13A.5.5,0,0,1,27,50.4c3.19-6-1.21-12.56-1.26-12.63a.5.5,0,0,1,.12-.69s3.62-2.6,4.3-3.19,3.89-6.28,2.34-8.74c-.25-.39-.62-.85-1-.85h0c-.68,0-1.52,1.34-2.13,2.32l-.46.72c-1.18,1.77-5.8,7-6,7.18-11,10.8-20.71,3.22-20.81,3.14a.5.5,0,0,1,.58-.81c1.29.83,4,1.26,7.14.33,2.78-.82,8-3.36,11.56-11.21,5.95-13,16.28-14.52,21.91-14.23,5.17.26,8.72,3.56,11.31,6,.38.35.73.68,1.06,1a1.83,1.83,0,0,0,1.58.57A3.13,3.13,0,0,0,59,17.8c-2-1.56-1.45-5.46-1.43-5.63a.5.5,0,0,1,.48-.43.51.51,0,0,1,.51.4c.22,1.05,2.18,2.16,3,2.52h1.83l2.71-1.17a.5.5,0,0,1,.69.4,3.68,3.68,0,0,1-1.59,3.62,7.06,7.06,0,0,1,1.26,2.15l3.88,2.23a.5.5,0,0,1,0,.87A11.66,11.66,0,0,1,63.52,24a.5.5,0,0,1-.19-.07h0s-.7-.27-2.07,1.14l-.42.46a8.88,8.88,0,0,1-6,3.17c-.62,2.75-2.06,6-5.38,6.89a.49.49,0,0,1-.48-.13l-1.26-1.29a.5.5,0,0,1,0-.72A7.72,7.72,0,0,0,49.89,29a62.64,62.64,0,0,1-6.5-.56,58.14,58.14,0,0,0-2.66,5.85c-.83,2.34-7.24,4.2-9.39,4.77,2.53,5.33-1,11.48-1.15,11.75a.5.5,0,0,1-.41.25l-2.31.09Zm-.61-13.52c.93,1.53,3.82,7,1.42,12.48l1.2,0c.62-1.2,3.21-6.68.72-11.09a.5.5,0,0,1,.32-.73c3.29-.8,8.72-2.67,9.3-4.29a61.21,61.21,0,0,1,2.88-6.29.5.5,0,0,1,.51-.26,60.39,60.39,0,0,0,7.27.6.5.5,0,0,1,.49.52,8.69,8.69,0,0,1-2.16,5.32l.71.72c2.76-.87,3.94-3.93,4.45-6.38a.5.5,0,0,1,.42-.39c3.61-.51,4.8-1.83,5.76-2.9l.44-.48c1.71-1.77,2.85-1.51,3.21-1.35a10.2,10.2,0,0,0,5.2-.78l-3.2-1.84a.5.5,0,0,1-.23-.28A5.36,5.36,0,0,0,64,17.82a.5.5,0,0,1,.1-.88,2.74,2.74,0,0,0,1.66-2.23l-2.13.92a.5.5,0,0,1-.2,0h-2a.51.51,0,0,1-.2,0,10,10,0,0,1-2.73-1.77c0,1.27.36,2.81,1.4,3.35a.5.5,0,0,1,.22.66c0,.08-1,2-2.64,2.38a2.8,2.8,0,0,1-2.44-.8c-.34-.3-.7-.63-1.08-1-2.48-2.3-5.87-5.45-10.68-5.7C37.88,12.47,28,13.88,22.31,26.39c-3.75,8.22-9.25,10.89-12.19,11.76a13.63,13.63,0,0,1-3.79.56h0c3.56,1.18,9.42,1.49,15.91-4.87,0,0,4.74-5.33,5.88-7l.45-.7c.82-1.31,1.75-2.79,3-2.79h0c.68,0,1.28.43,1.84,1.32,1.94,3.07-1.79,9.39-2.53,10C30.23,35.15,27.79,36.93,26.83,37.62Z"/><circle class="cls-1" cx="62.51" cy="19.45" r="0.73"/></svg>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 60"><defs><style>.cls-1{fill:#f39b1f;}</style></defs><title>reseau</title><path class="cls-1" d="M36.23,35.2a4.5,4.5,0,1,1,4.5-4.5A4.5,4.5,0,0,1,36.23,35.2Zm0-8a3.53,3.53,0,1,0,3.53,3.53A3.53,3.53,0,0,0,36.23,27.18Z"/><path class="cls-1" d="M55.28,19.84a8.36,8.36,0,1,1,8.36-8.36A8.37,8.37,0,0,1,55.28,19.84Zm0-15.75a7.39,7.39,0,1,0,7.39,7.39A7.4,7.4,0,0,0,55.28,4.09Z"/><path class="cls-1" d="M17.31,46.07a8.89,8.89,0,1,1,8.89-8.89A8.91,8.91,0,0,1,17.31,46.07Zm0-16.82a7.92,7.92,0,1,0,7.92,7.92A7.93,7.93,0,0,0,17.31,29.25Z"/><path class="cls-1" d="M49.1,52.64a7.75,7.75,0,1,1,7.75-7.75A7.76,7.76,0,0,1,49.1,52.64Zm0-14.52a6.78,6.78,0,1,0,6.78,6.78A6.78,6.78,0,0,0,49.1,38.12Z"/><path class="cls-1" d="M61.14,36.48a4.21,4.21,0,1,1,4.21-4.21A4.22,4.22,0,0,1,61.14,36.48Zm0-7.46a3.24,3.24,0,1,0,3.24,3.24A3.25,3.25,0,0,0,61.14,29Z"/><rect class="cls-1" x="36.85" y="21.98" width="15.42" height="0.97" transform="translate(-2.83 38.09) rotate(-45)"/><rect class="cls-1" x="48.4" y="22.81" width="0.97" height="17.36" transform="translate(13.11 77.32) rotate(-84.81)"/><rect class="cls-1" x="41.02" y="32.67" width="0.97" height="7.86" transform="translate(-13.71 32.98) rotate(-37.66)"/><rect class="cls-1" x="23.03" y="42.08" width="17.4" height="0.97" transform="translate(-19.83 55.25) rotate(-67.12)"/><path class="cls-1" d="M27,58.18A4.21,4.21,0,1,1,31.21,54,4.22,4.22,0,0,1,27,58.18Zm0-7.46A3.24,3.24,0,1,0,30.24,54,3.25,3.25,0,0,0,27,50.72Z"/><rect class="cls-1" x="30.67" y="15.46" width="0.97" height="12.57" transform="translate(-6.69 18.41) rotate(-29.88)"/><path class="cls-1" d="M24.39,18.13a8.36,8.36,0,1,1,8.36-8.36A8.37,8.37,0,0,1,24.39,18.13Zm0-15.75a7.39,7.39,0,1,0,7.39,7.39A7.4,7.4,0,0,0,24.39,2.38Z"/><rect class="cls-1" x="24.78" y="32.84" width="7.88" height="0.97" transform="translate(-9.89 12.23) rotate(-20.6)"/></svg>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula.</p>
         </div>
         <div class="quarter">
           <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 60"><defs><style>.cls-1{fill:#f39b1f;}</style></defs><title>stagiaire</title><path class="cls-1" d="M59.5,57.21H13.13A6.84,6.84,0,0,1,6.3,50.37V17.81A6.84,6.84,0,0,1,13.13,11H59.5a6.84,6.84,0,0,1,6.83,6.83V50.37A6.84,6.84,0,0,1,59.5,57.21ZM13.13,12.07a5.75,5.75,0,0,0-5.74,5.74V50.37a5.75,5.75,0,0,0,5.74,5.74H59.5a5.75,5.75,0,0,0,5.74-5.74V17.81a5.75,5.75,0,0,0-5.74-5.74Z"/><path class="cls-1" d="M40.24,40.54H32.39a2.8,2.8,0,0,1-2.8-2.8v-7.3a2.8,2.8,0,0,1,2.8-2.8h7.85a2.8,2.8,0,0,1,2.8,2.8v7.3A2.8,2.8,0,0,1,40.24,40.54Zm-7.85-11.8a1.71,1.71,0,0,0-1.71,1.71v7.3a1.71,1.71,0,0,0,1.71,1.71h7.85a1.71,1.71,0,0,0,1.71-1.71v-7.3a1.71,1.71,0,0,0-1.71-1.71Z"/><polygon class="cls-1" points="42.6 34.28 42.38 33.21 65.67 28.26 65.9 29.32 42.6 34.28"/><polygon class="cls-1" points="30.02 34.28 6.73 29.32 6.96 28.26 30.25 33.21 30.02 34.28"/><path class="cls-1" d="M46.58,11.63H45.49V7.46a1.2,1.2,0,0,0-1.2-1.2h-16a1.2,1.2,0,0,0-1.2,1.2v4.17H26V7.46a2.29,2.29,0,0,1,2.29-2.29h16a2.29,2.29,0,0,1,2.29,2.29Z"/><path class="cls-1" d="M49.56,11.63H48.47V6.2a2.89,2.89,0,0,0-2.89-2.89H27A2.89,2.89,0,0,0,24.15,6.2v5.42H23.06V6.2a4,4,0,0,1,4-4H45.58a4,4,0,0,1,4,4Z"/><path class="cls-1" d="M36.31,36.1a2,2,0,1,1,2-2A2,2,0,0,1,36.31,36.1Zm0-2.91a.91.91,0,1,0,.91.91A.91.91,0,0,0,36.31,33.18Z"/></svg>
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
