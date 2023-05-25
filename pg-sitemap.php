<?php 
/* Template Name: Sitemap */

/*
Sitemap page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner pt-sm pb-sm">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
        <?php the_content(); ?>
        <?php 
            endwhile;
        endif; 
        ?>
    </div>
</section>

<section class="container">
    <div class="container__inner pt-sm pb-sm">
        <div class="sitemap block-width-fix">
            <?php $args = array(
            'theme_location' => 'sitemap-meniu');
            wp_nav_menu($args); ?>
</div>
    </div>
</section>

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>