<?php 
/* Template Name: Gallery page */

/*
Gallery page template
 */
$galYearArray = array();
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner skc-gal">
        <?php
            $eventPageBannerImg = get_field('banner_image');
            if(!empty($eventPageBannerImg)): ?>
            <div class="page-banner pt-sm pb-md">
                <img class="" width="1640" height="100" src="<?php echo esc_url($eventPageBannerImg['url']); ?>" alt="<?php echo esc_attr($eventPageBannerImg['alt']); ?>"/>
                <?php if(get_field('banner_title')): ?>
                    <div class="page-banner__title">
                        <h2><?php the_field('banner_title'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php 
            $allGalleries = new WP_Query(
                array(
                    'post_type'         => array('gallery'), 
                    'post_status'       =>'publish',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                )); 
            $countGalleries = "";
            if($allGalleries->found_posts == 2){
                $countGalleries = "hp-news__items--only-2";
            }
            if($allGalleries->found_posts <= 1 ){
                $countGalleries = "hp-news__items--only-1";
            }
        ?>
        <?php 
            $galYearFakeIndx = 0;
            $prevYear = 0;
            if ( $allGalleries->have_posts() ) :?>
            <?php while ( $allGalleries->have_posts() ) : $allGalleries->the_post(); ?>
                <?php 
                $galYear = get_the_date('Y');
                if($prevYear != $galYear){
                    $galYearArray[$galYearFakeIndx] = $galYear;
                }
                $galYearFakeIndx++;
                $prevYear = $galYear;
                ?>
            <?php endwhile; ?>
            <div class="gallery-year-tabs">
                <p class="gallery-year-tab all-years" data-galyear="all-years">Visos</p>
                <?php
                foreach($galYearArray as $it){ ?>
                    <p class="gallery-year-tab <?php echo $it; ?>" data-galyear="<?php echo $it; ?>"><?php echo $it; ?></p>
                <?php };
                ?>
            </div>
        <?php endif; ?>

        <div class="skc-gallery pb-md <?php echo $countGalleries; ?>">

                <?php if ( $allGalleries->have_posts() ) : ?>
                    <?php while ( $allGalleries->have_posts() ) : $allGalleries->the_post(); ?>
            <div class="skc-gallery__item <?php $galItemYear = get_the_date('Y'); echo $galItemYear;?>" data-galyear="<?php $galItemYear = get_the_date('Y'); echo $galItemYear;?>">
                <h4 class="skc-single__title"><?php echo get_the_date(); ?></h4>
                <a href="<?php the_permalink(); ?>"  style="text-decoration:none;">
                <picture>
                    <?php
                        $galImg = get_field('banner_image');
                        if(!empty($galImg)): ?>
                        <img class="skc-gallery__item__img" src="<?php echo esc_url($galImg['url']); ?>" alt="<?php echo esc_attr($galImg['alt']); ?>"/>
                    <?php endif; ?>
                </picture>
                </a>
                <div class="skc-gallery__item__content">
                    <div class="item-content__split">
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>"><?php _e('Learn more', 'siluteskc'); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="txt-center"><?php _e('No galleries yet', 'siluteskc'); ?></h4>
            <?php endif; ?>
        </div>

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