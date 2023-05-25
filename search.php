<?php 
/* Template Name: Search page */

/*
Search page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner search pt-sm">
        <div class="search__form--inner pt-sm pb-sm">
            <form class="main-search" method="get" action="<?php echo esc_url(site_url('/')); ?>">
                <div class="seach__input">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.3333 28C22.3289 28 28 22.3289 28 15.3333C28 8.33769 22.3289 2.66663 15.3333 2.66663C8.33769 2.66663 2.66663 8.33769 2.66663 15.3333C2.66663 22.3289 8.33769 28 15.3333 28Z" stroke="#AFADB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M29.3333 29.3333L26.6666 26.6666" stroke="#AFADB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input type="text" name="s" class="home-seach-input" placeholder="<?php _e('Search...', 'siluteskc'); ?>" autocomplete="off" minlength="3" required>
                </div>
                <input type="submit" class="btn" id="home-seach-btn" value="<?php _e('Go', 'siluteskc'); ?>">
            </form>
        </div>
        <div class="search__qeury pb-sm">
            <h3><?php _e('Last search:', 'siluteskc'); ?> <?php echo esc_html(get_search_query()); ?></h3>
        </div>
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
        <?php if(get_post_type() == 'events') { 
            ?>
                <div class="search__event pb-sm">
                    <div class="search__event__img">
                        <?php
                            $eventImg = get_field('event_single_top_image');
                            if(!empty($eventImg)): ?>
                            <img class="event-element__image--search" width="300" height="150" src="<?php echo esc_url($eventImg['url']); ?>" alt="<?php echo esc_attr($eventImg['alt']); ?>"/>
                        <?php endif; ?>
                    </div>
                    <div class="search__event__cnt">
                        <h2><?php the_title();?></h2>
                        <?php if(get_field('event_date')): ?>
                            <p class="pb-sm"><?php the_field('event_date'); ?></p>
                        <?php endif; ?>
                        <p><?php  the_excerpt();?></p>
                        <div class="pt-sm">
                            <a class="btn btn--search" href="<?php the_permalink();?>"><?php _e('Learn more', 'siluteskc'); ?></a>
                        </div>
                    </div>
                </div>
        <?php } else {?>
            <div class="search__result--other pb-sm">
                    <h2><?php the_title();?></h2>
                    <p><?php  the_excerpt();?></p>
                    <div class="pt-sm">
                        <a class="btn btn--search" href="<?php the_permalink();?>"><?php _e('Learn more', 'siluteskc'); ?></a>
                    </div>
                </div>
        <?php }
            endwhile;
        else: ?>
            <div class="pt-lr pb-lr txt-center">
                <p><?php _e('No results for this search...', 'siluteskc'); ?></p>
            </div>
        <?php endif; 
        ?>
    </div>
</section>

<?php get_template_part('template-parts/newsletter-block'); ?>

<?php get_footer(); ?>