<?php
/**
 * The template for displaying home pages.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package b2bar
 */
?>
<section class="content-section video-section">
    <video autoplay="" muted="true" width="100%" height="auto" type="video/mp4" src="http://www.htmgarcia.com/themes/cacoon/images/spaceboundd.mp4">

    </video>
</section>

<?php
get_header(); ?>

<div id="primary" class="content-area container">

    <div class="slider col-md-12">

    </div>

    <div class="panels">
        <div class="col-md-4">
            <div class="ribbon-container">
                <h4 class="title ribbon-full">L'ambiance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asper</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ribbon-container">
                <h4 class="title ribbon-full">L'ambiance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asper</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ribbon-container">
                <h4 class="title ribbon-full">L'ambiance</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asperconsectetur adipisicing elit. Aliquid animi asper</p>
            </div>
        </div>
    </div>


        <main id="main" class="site-main col-md-12" role="main">
            <div class="light-bcg">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>
            </div>
        </main><!-- #main -->
    <div class="col-md-12">
        <div class="col-md-6">
            <section class="ribbon-container">
                <h3 class="horraires-title ribbon-full">Horraires d'ouverture</h3>
                <div class="horraires-content">
                    <p>
                        <ul>
                            <li>
                                du lundi au vendredi de 19h à 22h45 et de 12h à 14h30
                            </li>
                            <li>
                                le Samedi de 19h à 22h45 et de 12h à 14h45
                            </li>
                            <li>
                                Fermé le dimanche
                            </li>
                        </ul>
                    </p>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="google-maps ribbon-container">
                <h3 class="maps-title ribbon-full">Adresse</h3>
                <div class="maps-caption">
                     <p>
                         <a href="https://www.google.fr/maps/place/La+Cave/@48.9431099,2.2487284,15z/data=!4m2!3m1!1s0x0:0x8ef05f8eb768f053">111 Rue Paul Vaillant Couturier, 95100 Argenteuil</a>
                     </p>
                </div>
                <div class="maps-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10482.17950438165!2d2.2487284!3d48.9431099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8ef05f8eb768f053!2sLa+Cave!5e0!3m2!1sfr!2sfr!4v1447786741891"
                            width="600"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            allowfullscreen>
                    </iframe>
                </div>

            </section>
        </div>
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>
