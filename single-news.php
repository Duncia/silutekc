<?php
/*
 * Template Name: News post
 * Template Post Type: post
 */
?>
<?php get_header(); ?>

<section class="container">
    <div class="container__inner news-single pt-sm pb-md">
        <?php if(get_field('news_single_title_top')): ?>
            <h2 class="pb-sm news-single__title"><?php the_field('news_single_title_top'); ?></h2>
        <?php endif; ?>
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <h4 class="pb-sm news-single__title"><?php the_date(); ?></h4>
        <?php 
            endwhile;
        endif; 
        ?>
        <?php
            $topSingleEventImg = get_field('news_single_top_image');
            if(!empty($topSingleEventImg)): ?>
            <div class="txt-center pb-sm">
                <img class="news-single__top-img" width="1640" height="300" src="<?php echo esc_url($topSingleEventImg['url']); ?>" alt="<?php echo esc_attr($topSingleEventImg['alt']); ?>"/>
            </div>
        <?php endif; ?>
        <div class="block-width-fix">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <?php the_content(); ?>
            <?php 
                endwhile;
            endif; 
            ?>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>