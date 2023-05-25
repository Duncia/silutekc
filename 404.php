<?php
/*
Basic 404 page.
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner">
        <div class="txt-center pt-lr pb-lr">
            <h1>Deja, puslapis nerastas...</h1>
        </div>
        <div class="txt-center pb-lr">
            <h1>Sorry, page not found...</h1>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>