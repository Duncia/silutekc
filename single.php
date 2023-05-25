<?php get_header(); ?>

<section class="container">
    <div class="container__inner block-width-fix pt-sm pb-sm">
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

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>