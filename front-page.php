<?php
/* Template Name: Home page */

/*
HOME PAGE template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner home-hero txt-center pb-md">
        <div class="home-hero__title">
            <?php if(get_field('title_top')): ?>
                <h1><?php the_field('title_top'); ?></h1>
            <?php endif; ?>
        </div>
        <div class="home-hero__image hp-slider">
            <picture class="slide slide--1">
                <?php
                $topImgDesktop = get_field('large_image_desktop');
                if(!empty($topImgDesktop)): ?>
                    <source srcset="<?php echo esc_url($topImgDesktop['url']); ?>" alt="<?php echo esc_attr($topImgDesktop['alt']); ?>"
                    media="(min-width: 768px)"
                    />
                <?php endif; ?>

                <?php
                $topImgMobile = get_field('top_image_mobile');
                if(!empty($topImgMobile)): ?>
                    <img class="hh-img" width="1640" height="480" src="<?php echo esc_url($topImgMobile['url']); ?>" alt="<?php echo esc_attr($topImgMobile['alt']); ?>"/>
                <?php endif; ?>
            </picture>
            <picture class="slide slide--2">
                <?php
                $topImgDesktop2 = get_field('large_image_desktop_2');
                if(!empty($topImgDesktop2)): ?>
                    <source srcset="<?php echo esc_url($topImgDesktop2['url']); ?>" alt="<?php echo esc_attr($topImgDesktop2['alt']); ?>"
                    media="(min-width: 768px)"
                    />
                <?php endif; ?>

                <?php
                $topImgMobile2 = get_field('top_image_mobile_2');
                if(!empty($topImgMobile2)): ?>
                    <img class="hh-img" width="1640" height="480" src="<?php echo esc_url($topImgMobile2['url']); ?>" alt="<?php echo esc_attr($topImgMobile2['alt']); ?>"/>
                <?php endif; ?>
            </picture>
            <picture class="slide slide--3">
                <?php
                $topImgDesktop3 = get_field('large_image_desktop_3');
                if(!empty($topImgDesktop3)): ?>
                    <source srcset="<?php echo esc_url($topImgDesktop3['url']); ?>" alt="<?php echo esc_attr($topImgDesktop3['alt']); ?>"
                    media="(min-width: 768px)"
                    />
                <?php endif; ?>

                <?php
                $topImgMobile3 = get_field('top_image_mobile_3');
                if(!empty($topImgMobile3)): ?>
                    <img class="hh-img" width="1640" height="480" src="<?php echo esc_url($topImgMobile3['url']); ?>" alt="<?php echo esc_attr($topImgMobile3['alt']); ?>"/>
                <?php endif; ?>
            </picture>
        </div>
        <div class="dots"></div>
    </div>
</section>

<section class="container hp-news">
    <div class="container__inner pt-md pb-lr">
        <div class="hp-events--container pb-md">
            <div class="hp-news__left">
                <h2><?php _e('News', 'siluteskc'); ?></h2>
            </div>
            <div class="hp-events__right">
                <p class="link link--blue"><a href="/naujienos"><?php _e('See all news', 'siluteskc'); ?></a></p>
            </div>
        </div>
        <?php
            $homepageNews = new WP_Query(
                array(
                    'post_type'=> array('news'),
                    'post_status'=>'publish',
                    'orderby'			=> 'date',
                    'order'				=> 'DESC',
                    'posts_per_page' => 3,
                ));
            $countNews = "";
            if($homepageNews->found_posts == 2){
                $countNews = "hp-news__items--only-2";
            }
            if($homepageNews->found_posts <= 1 ){
                $countNews = "hp-news__items--only-1";
            }
            ?>
        <div class="hp-news__items <?php echo $countNews; ?>">
            <?php if ( $homepageNews->have_posts() ) : ?>
                <?php while ( $homepageNews->have_posts() ) : $homepageNews->the_post(); ?>
                <div class="hp-news__item">
                    <div class="item-card-top">
                        <h4><?php the_title(); ?></h4>
                        <p class="hp-news__item--date pb-sm"><?php echo get_the_date(); ?></p>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>"><p class="hp-news__item--button"><?php _e('Read more', 'siluteskc'); ?></p></a>
                </div>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="txt-center"><?php _e('No news yet', 'siluteskc'); ?></h4>
            <?php endif; ?>
        </div>
    </div>
    <div class="hp-news__right-img"></div>
</section>

<section class="container pb-lr pt-lr hp-events">
    <div class="container__inner">
        <div class="hp-events--container pb-md">
            <div class="hp-events__left">
                <?php if(get_field('events_heading')): ?>
                <h2><?php the_field('events_heading'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="hp-events__right">
                <?php if(get_field('events_button_text')): ?>
                    <p class="link link--blue"><a href="<?php the_field('all_events_url'); ?>"><?php the_field('events_button_text'); ?></a></p>
                <?php endif; ?>
            </div>
        </div>
            <?php
            $nearestEvents = new WP_Query(
                array(
                    'post_type'=> array('events'),
                    'post_status'=>'publish',
                    'meta_key'			=> 'event_date',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'ASC',
                    'posts_per_page' => 3,
                    'meta_query'=> array(
                      'relation' => 'OR',
                      array(
                        'key' => 'event_date',
                        'compare' => '>',
                        'value' => date("Y-m-d"),
                        'type' => 'DATE'
                      ),
                      array(
                        'key' => 'event_date',
                        'compare' => '=',
                        'value' => date("Y-m-d"),
                        'type' => 'DATE'
                      )
                      ),
                ));
            $countEvents = "";
            if($nearestEvents->found_posts == 2){
                $countEvents = "hp-gallery--only-2";
            }
            if($nearestEvents->found_posts <= 1 ){
                $countEvents = "hp-gallery--only-1";
            }
        ?>
        <div class="hp-events--gallery hp-gallery pb-md <?php echo $countEvents; ?>">

                <?php if ( $nearestEvents->have_posts() ) : ?>
                    <?php while ( $nearestEvents->have_posts() ) : $nearestEvents->the_post(); ?>
            <div class="hp-gallery__item">
            <a href="<?php the_permalink(); ?>">
                <picture>
                    <?php
                        $portraitImg = get_field('portrait_home_page_image');
                        if(!empty($portraitImg)): ?>
                        <source srcset="<?php echo esc_url($portraitImg['url']); ?>"
                        media="(min-width: 900px)"
                        />
                    <?php endif; ?>
                    <?php
                        $eventImg = get_field('event_single_top_image');
                        if(!empty($eventImg)): ?>
                        <img class="hp-gallery__item__img" src="<?php echo esc_url($eventImg['url']); ?>" alt="<?php echo esc_attr($eventImg['alt']); ?>"/>
                    <?php endif; ?>
                </picture>
                <div class="hp-gallery__item__content">
                    <?php if(get_field('event_date')):
                    $rawDateValue = get_field('event_date');
                    $monthArr = ['SAUSIO', 'VASARIO', 'KOVO', 'BALANDŽIO', 'GEGUŽĖS', 'BIRŽELIO', 'LIEPOS', 'RUGPJŪČIO', 'RUGSĖJO', 'SPALIO', 'LAPKRIČIO', 'GRUODŽIO'];
                    $dateTime = DateTime::createFromFormat("Y-m-d", $rawDateValue);
                    if ( is_object($dateTime) ) {
                    $eventMonth = $dateTime->format('F');
                    $eventDay = $dateTime->format('d');
                    }
                    switch($eventMonth){
                        case 'January':
                            $eventMonthFormatted = $monthArr[0];
                            break;
                        case 'February':
                            $eventMonthFormatted = $monthArr[1];
                            break;
                        case 'March':
                            $eventMonthFormatted = $monthArr[2];
                            break;
                        case 'April':
                            $eventMonthFormatted = $monthArr[3];
                            break;
                        case 'May':
                            $eventMonthFormatted = $monthArr[4];
                            break;
                        case 'June':
                            $eventMonthFormatted = $monthArr[5];
                            break;
                        case 'July':
                            $eventMonthFormatted = $monthArr[6];
                            break;
                        case 'August':
                            $eventMonthFormatted = $monthArr[7];
                            break;
                        case 'September':
                            $eventMonthFormatted = $monthArr[8];
                            break;
                        case 'October':
                            $eventMonthFormatted = $monthArr[9];
                            break;
                        case 'November':
                            $eventMonthFormatted = $monthArr[10];
                            break;
                        default:
                            $eventMonthFormatted = $monthArr[11];
                    };
                        ?>

                    <?php endif; ?>
                    <p>
                        <?php
                        $category = get_the_category();
                        if($category != null){
                            echo $category[0]->cat_name;
                        }
                        ?>
                    </p>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>" style="text-decoration: underline;"><?php _e('Learn more', 'siluteskc'); ?></a>
                </div>
                <div class="hp-gallery__item__label txt-center">
                    <div class="item-label__day"><?php echo $eventDay; ?><?php if(get_field('event_date_until')):
                        $rawDateUntilValue = get_field('event_date_until');
                        $dateUntil = DateTime::createFromFormat("Y-m-d", $rawDateUntilValue);
                        if ( is_object($dateUntil) ) {
                            $eventDayUntil = $dateUntil->format('d');
                        } else{
                            $eventDayUntil = "";
                        }
                    ?>-<?php echo $eventDayUntil; ?>
                    <?php endif; ?>
                    </div>
                    <div class="item-label__month"><?php echo $eventMonthFormatted; ?></div>
                </div>
            </a>
            </div>
            <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="txt-center"><?php _e('No events yet', 'siluteskc'); ?></h4>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="container pt-lr pb-md">
    <div class="container__inner partners">
        <?php if(get_field('friends_and_partners_title')): ?>
        <h5 class="txt-center pb-sm"><?php the_field('friends_and_partners_title'); ?></h5>
        <?php endif; ?>
        <div class="pt-sm pb-sm">
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
