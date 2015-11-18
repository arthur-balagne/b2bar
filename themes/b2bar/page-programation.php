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

<?php
get_header(); ?>

<div id="primary" class="content-area container">

    <div class="page-header-2 col-md-12">
        <div class="page-header-title">
            <h1>Programation thématiques</h1>
        </div>
    </div>



    <main id="main" class="site-main col-md-6" role="main">
        <div class="light-bcg">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'programation' ); ?>
            <?php endwhile; // End of the loop. ?>
        </div>
    </main><!-- #main -->
    <div class="col-md-6 no-bcg">
        <img src="http://placehold.it/450x450">
    </div>

</div><!-- #primary -->

<?php get_footer(); ?>
