<?php
/* Template Name: Events page */

/*
Events page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner events pb-md">
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

        <div class="events-filter pb-md">
            <div class="events-filter__option" id="shows">
                <div class="option__icon">
                    <svg width="63" height="55" viewBox="0 0 63 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.5419 39.9296C34.5419 46.2056 29.3765 51.2933 23.0047 51.2933C16.6329 51.2933 11.4675 46.2056 11.4675 39.9296C11.4675 33.6536 11.1282 34.5001 17.5 34.5001C23.0047 36.5 28.5 37.5 34.5419 39.9296Z" stroke="#2791CD" stroke-width="6.6116"/>
                    <path d="M10.4232 32.9244L49.2729 44.9843C50.1192 45.247 51.0242 45.4478 51.8653 45.1691C61.0903 42.1117 61.0903 6.89887 51.8653 3.84148C51.0242 3.5627 50.1192 3.76352 49.2729 4.02623L10.4232 16.0861C2.15387 18.6531 2.15387 30.3574 10.4232 32.9244Z" fill="#2791CD" fill-opacity="0.2" stroke="#2791CD" stroke-width="6.6116" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('Shows', 'siluteskc'); ?>
                </div>
            </div>
            <div class="events-filter__option" id="educations">
                <div class="option__icon">
                    <svg width="47" height="61" viewBox="0 0 47 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.0156 10.7496C21.1371 8.01488 22.1118 5.3622 22.8267 4.05371C22.9066 4.10037 22.9915 4.14979 23.081 4.20192C25.2109 5.44211 29.9837 8.2212 33.7835 12.1147C36.4348 14.1795 38.5443 17.6092 38.5443 21.7269C38.5443 24.9092 37.3307 27.4651 36.1812 29.8861C34.055 34.364 32.148 37.8342 38.5443 44.5C35.1801 39.9538 14.366 44.292 13.78 41.5C12.6723 36.2224 13.0313 38.1109 13.78 35.8872C14.2086 34.6142 14.5584 33.5752 14.391 32.4652C9.27998 34.406 5.86088 29.989 4.11257 27.7304C3.86093 27.4054 3.6439 27.125 3.46143 26.9147C5.74944 23.4611 10.1245 18.0576 13.1499 14.9458C15.3365 12.6966 18.1163 11.4343 21.0156 10.7496Z" fill="#0BA198" fill-opacity="0.2" stroke="#0BA298" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.604 32.9494C15.2842 32.3136 16.8332 31.5046 18.9775 30.3486" stroke="#0BA298" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M43.1967 50.7632C43.453 52.7861 43.6443 54.8502 43.6443 56.9466H5.54248C5.54248 54.8502 5.73369 52.7861 5.99008 50.7632C6.52264 46.561 10.0498 43.2846 14.2699 42.9214C17.6256 42.6326 21.0747 42.3789 24.5934 42.3789C28.112 42.3789 31.5611 42.6326 34.9168 42.9214C39.1369 43.2846 42.6641 46.561 43.1967 50.7632Z" fill="#0BA198" fill-opacity="0.2" stroke="#0BA298" stroke-width="6.6116" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('Educations', 'siluteskc'); ?>
                </div>
            </div>
            <div class="events-filter__option" id="concerts">
                <div class="option__icon">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.4885 58.2436C18.539 58.2436 22.6332 54.1494 22.6332 49.0988C22.6332 44.0483 18.539 39.9541 13.4885 39.9541C8.43799 39.9541 4.34375 44.0483 4.34375 49.0988C4.34375 54.1494 8.43799 58.2436 13.4885 58.2436Z" fill="#129A0F" fill-opacity="0.2" stroke="#129A0F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M49.4469 53.5608C54.4021 53.5608 58.4192 49.5437 58.4192 44.5885C58.4192 39.6332 54.4021 35.6162 49.4469 35.6162C44.4916 35.6162 40.4746 39.6332 40.4746 44.5885C40.4746 49.5437 44.4916 53.5608 49.4469 53.5608Z" fill="#129A0F" fill-opacity="0.2" stroke="#129A0F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M58.4191 44.6463V20.9736M22.5835 29.2358L22.5835 49.0989" stroke="#129A0F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.5835 29.234V20.5547C22.5835 16.5603 25.2661 13.0532 29.1359 12.0638C31.5843 11.4378 34.0688 10.8251 36.5887 10.2443C42.2667 8.93556 47.8544 7.85083 53.2503 6.80333C56.1352 6.2433 58.419 8.23786 58.419 11.1766V20.9402C57.8216 21.0997 57.2218 21.2601 56.6196 21.4212C51.3096 22.8413 45.8108 24.3119 40.1328 25.6207C34.4548 26.9294 28.8671 28.0141 23.4711 29.0616C23.1746 29.1192 22.8788 29.1766 22.5835 29.234Z" fill="#129A0F" fill-opacity="0.2" stroke="#129A0F" stroke-width="6.6116"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('Concerts', 'siluteskc'); ?>
                </div>
            </div>
            <div class="events-filter__option" id="movies">
                <div class="option__icon">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="16.3558" cy="15.0345" r="10.6736" fill="#C941D5" fill-opacity="0.2" stroke="#C941D5" stroke-width="6.6116"/>
                    <circle cx="44.0984" cy="18.3265" r="7.38165" fill="#C941D5" fill-opacity="0.2" stroke="#C941D5" stroke-width="6.6116"/>
                    <path d="M18.6765 57.9094C16.5675 57.7268 14.8446 56.1012 14.5336 54.0073C14.1376 51.3417 13.7397 48.5824 13.7397 45.7564C13.7397 42.9305 14.1376 40.1711 14.5336 37.5055C14.8446 35.4117 16.5675 33.7861 18.6765 33.6035C19.0359 33.5724 19.3967 33.5408 19.7588 33.5091C23.3251 33.1968 27.0182 32.8735 30.801 32.8735C34.5839 32.8735 38.2769 33.1968 41.8432 33.5091C42.2053 33.5408 42.5661 33.5724 42.9256 33.6035C45.0345 33.7861 46.7574 35.4117 47.0684 37.5055C47.237 38.6403 47.4059 39.7921 47.5443 40.9587C51.7437 39.0818 57.3168 36.6275 57.3168 36.6275V54.8857C57.3168 54.8857 51.7436 52.4314 47.5443 50.5544C47.4059 51.721 47.237 52.8727 47.0684 54.0073C46.7574 56.1012 45.0345 57.7268 42.9256 57.9094C42.5661 57.9405 42.2053 57.9721 41.8432 58.0038C38.2769 58.316 34.5839 58.6393 30.801 58.6393C27.0182 58.6393 23.3252 58.316 19.7589 58.0038C19.3967 57.9721 19.0359 57.9405 18.6765 57.9094Z" fill="#C941D5" fill-opacity="0.2" stroke="#C941D5" stroke-width="6.6116" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('Cinema', 'siluteskc'); ?>
                </div>
            </div>
            <div class="events-filter__option" id="kids">
                <div class="option__icon">
                    <svg width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M54.9111 10.7304L50.6736 23.241C50.5273 23.5303 50.4511 23.85 50.4511 24.1742C50.4511 24.4984 50.5273 24.8181 50.6736 25.1074L58.5936 35.701C58.8212 36.0042 58.9588 36.3654 58.9905 36.7432C59.0223 37.121 58.947 37.5001 58.7733 37.8371C58.5995 38.1741 58.3343 38.4553 58.0081 38.6485C57.6819 38.8417 57.3079 38.9391 56.9289 38.9295H43.7121C43.3882 38.9391 43.0705 39.021 42.7825 39.1694C42.4944 39.3178 42.2432 39.5289 42.0474 39.7871L34.6824 50.3807C34.4664 50.6904 34.1678 50.9332 33.8206 51.0816C33.4734 51.23 33.0916 51.2781 32.7185 51.2203C32.3454 51.1625 31.996 51.0011 31.71 50.7546C31.424 50.5081 31.2129 50.1863 31.1007 49.8258L27.166 37.2144C27.0762 36.9027 26.9088 36.6188 26.6794 36.3894C26.45 36.16 26.1661 35.9926 25.8544 35.9028L13.243 31.9681C12.8825 31.8559 12.5607 31.6448 12.3141 31.3588C12.0676 31.0728 11.9063 30.7234 11.8485 30.3503C11.7907 29.9772 11.8387 29.5953 11.9871 29.2482C12.1356 28.901 12.3784 28.6024 12.6881 28.3864L23.4834 20.7691C23.7417 20.5733 23.9527 20.3222 24.1011 20.0341C24.2495 19.746 24.3315 19.4283 24.341 19.1044V5.88766C24.3551 5.54052 24.4586 5.2029 24.6414 4.90748C24.8243 4.61206 25.0803 4.36887 25.3848 4.20143C25.6892 4.034 26.0317 3.94801 26.3791 3.95178C26.7265 3.95555 27.067 4.04896 27.3678 4.22296L37.9613 12.1429C38.2303 12.3297 38.5397 12.45 38.8642 12.4938C39.1887 12.5377 39.519 12.5039 39.8278 12.3951L52.3383 8.15772C52.6971 8.03162 53.0842 8.00948 53.455 8.09385C53.8259 8.17822 54.1653 8.36567 54.4342 8.63458C54.7031 8.90348 54.8906 9.24291 54.9749 9.61373C55.0593 9.98455 55.0372 10.3717 54.9111 10.7304Z" fill="#D7E0FF" stroke="#4147D5" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26.6881 36.3613L4.00146 59.048" stroke="#4147D5" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('Kids', 'siluteskc'); ?>
                </div>
            </div>
            <div class="events-filter__option" id="all">
                <div class="option__icon">
                    <svg width="62" height="63" viewBox="0 0 62 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.95654 34.3692C11.8116 33.334 13.9839 33.0216 16.0555 33.492" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.4401 20.6724C21.2572 18.8891 20.7669 16.7349 21.0616 14.6152" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33.5575 5.26514C32.3929 8.83255 32.5462 12.6993 33.9894 16.1633" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.7314 32.0791C28.8415 34.9304 25.1476 39.9747 22.7471 43.4126C21.3551 45.4061 21.9138 48.14 23.9995 49.3899C33.7927 55.2584 44.5487 59.4284 54.7427 58.9725C56.6672 58.8864 58.2005 57.3739 58.3125 55.4507C58.9063 45.2641 54.8812 34.4528 49.1452 24.5816C47.9236 22.4794 45.1977 21.8838 43.1855 23.2486C39.7155 25.6023 34.6214 29.2278 31.7314 32.0791Z" fill="#FFB23F" fill-opacity="0.2" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.56781 21.7421C7.80144 21.7421 7.18018 21.1208 7.18018 20.3544C7.18018 19.5881 7.80144 18.9668 8.56781 18.9668" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.56891 18.9669C9.33528 18.9669 9.95654 19.5882 9.95654 20.3545C9.95654 21.1209 9.33528 21.7422 8.56891 21.7422" stroke="#FFB23F" stroke-width="6.6116" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="option__title">
                    <?php _e('All', 'siluteskc'); ?>
                </div>
            </div>
        </div>

        <div class="hp-events--gallery hp-gallery pb-md">
            <?php
                $nearestEvents = new WP_Query(
                    array(
                        'post_type'=> array('events'),
                        'post_status'=>'publish',
                        'paged'=>get_query_var('paged', 1),
                        'meta_key'			=> 'event_date',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'ASC',
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
                ?>
                <?php if ( $nearestEvents->have_posts() ) : ?>
                    <?php while ( $nearestEvents->have_posts() ) : $nearestEvents->the_post(); ?>
            <div class="hp-gallery__item <?php foreach((get_the_category()) as $category) {
                        $categoryToLower = strtolower($category->cat_name);
                        echo $categoryToLower . ' '; }?>">
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
