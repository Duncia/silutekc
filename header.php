<?php
/*
Website HEADER part.

- Includes <head> section
- Top header section with logo and menus.
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <header class="container container--header">
        <div class="header">
            <div class="header__logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="logo-img" width="111" height="80" src="<?php 
                    if(get_theme_mod('header-logo-img') > 0 ){
                        echo wp_get_attachment_url(get_theme_mod('header-logo-img')); 
                    } else {
                        echo get_template_directory_uri() . '/img/logo.jpg';
                    }   
                    ?>" alt="Logo">
                </a>
                <div class="logo-title">
                    <a href="<?php echo get_home_url(); ?>">
                        <?php 
                        if(get_locale() === 'lt_LT'){
                            echo get_theme_mod('header-logo-headline');
                        } else {
                            echo get_theme_mod('header-logo-headline-en');
                        };?>
                        <div class="logo-subtitle">
                            <?php 
                            if(get_locale() === 'lt_LT'){
                                echo get_theme_mod('header-logo-subheadline');
                            } else {
                                echo get_theme_mod('header-logo-subheadline-en');
                            };?>
                        </div>
                    </a>
                </div>
            </div>
            <div class="header__right">
                <div class="header__menu">
                    <nav class="navigation-top">
                        <?php $args = array(
                        'theme_location' => 'header-meniu');
                        wp_nav_menu($args); ?>
                    </nav>
                </div>
                <div class="header__sitemap-icon">
                    <a href="<?php echo get_home_url(); ?>/svetaines-zemelapis/">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 14V11C20 9.89 19.11 9 18 9H12V6H14V0H8V6H10V9H4C2.89 9 2 9.89 2 11V14H0V20H6V14H4V11H10V14H8V20H14V14H12V11H18V14H16V20H22V14H20ZM10 2H12V4H10V2ZM4 18H2V16H4V18ZM12 18H10V16H12V18ZM20 18H18V16H20V18Z" fill="black"/>
                        </svg>
                    </a>
                </div>
                <div class="header__search-icon">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.0209 21C16.049 21 20.1251 16.7467 20.1251 11.5C20.1251 6.25329 16.049 2 11.0209 2C5.99282 2 1.91675 6.25329 1.91675 11.5C1.91675 16.7467 5.99282 21 11.0209 21Z" stroke="#151411" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.0834 22L19.1667 20" stroke="#151411" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="header__main-search">
                        <form class="main-search__form" method="get" action="<?php echo esc_url(site_url('/')); ?>">
                            <div class="seach__input">
                                <input type="text" name="s" class="main-seach-input" placeholder="<?php 
                                    if(get_locale() === 'lt_LT'){
                                        echo 'Ieškoti...';
                                    } else {
                                        echo 'Search...';
                                    };?>" autocomplete="off" minlength="3" required>
                            </div>
                            <button type="submit" class="main-search-button">
                                <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.0209 21C16.049 21 20.1251 16.7467 20.1251 11.5C20.1251 6.25329 16.049 2 11.0209 2C5.99282 2 1.91675 6.25329 1.91675 11.5C1.91675 16.7467 5.99282 21 11.0209 21Z" stroke="#151411" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.0834 22L19.1667 20" stroke="#151411" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="header__calendar" id="header-calendar">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 11H9V13H7V11ZM21 5V19C21 20.11 20.11 21 19 21H5C3.89 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H6V1H8V3H16V1H18V3H19C20.11 3 21 3.9 21 5ZM5 7H19V5H5V7ZM19 19V9H5V19H19ZM15 13H17V11H15V13ZM11 13H13V11H11V13Z" fill="white"/>
                    </svg>
                    <p class="calendar--text">
                        <?php 
                        if(get_locale() === 'lt_LT'){
                            echo get_theme_mod('header-calendar');
                        } else {
                            echo get_theme_mod('header-calendar-en');
                        };?>
                    </p>
                </div>
                <div class="header__burger" id="burger">
                    <div class="header__burger__middle" id="burger__middle"></div>
                </div>
                <div class="mobile-menu mobile-menu--close" id="mobile-menu">
                    <nav class="mobile-menu__nav">
                        <?php $args = array(
                        'theme_location' => 'header-meniu');
                        wp_nav_menu($args); ?>
                    </nav>
                </div>
            </div>
        </div>
        <div class="calendar-wrapper calendar-wrapper--hide" id="header-cal-container">
            <header>
                <div class="icons">
                <span id="prev" class="material-symbols-rounded"><</span>
                    <div class="current-date"></div>
                <span id="next" class="material-symbols-rounded">></span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                <li>P</li>
                <li>A</li>
                <li>T</li>
                <li>K</li>
                <li>PN</li>
                <li>Š</li>
                <li>S</li>
                </ul>
                <ul class="days"></ul>
            </div>
            <div class="calendar-events-preview"></div>
        </div>
    </header>