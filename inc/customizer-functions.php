<?php
//Header and footer customizer
function siluteskc_header_logo($wp_customize){
    $wp_customize->add_section('skc-header-section', array(
      'title' => 'Viršus / Header',
      'priority' => 10
    ));
  
    $wp_customize->add_setting('header-logo-headline', array(
      'default' => 'Šilutės kultūros ir pramogų centras'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-logo-headline-control', array(
      'label' => 'Logo tekstas (LT)',
      'section' => 'skc-header-section',
      'settings' => 'header-logo-headline'
    )));

    $wp_customize->add_setting('header-logo-subheadline', array(
      'default' => 'Aukščiausios kategorijos kultūros centras'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-logo-subheadline-control', array(
      'label' => 'Sublogo tekstas (LT)',
      'section' => 'skc-header-section',
      'settings' => 'header-logo-subheadline'
    )));
    
    $wp_customize->add_setting('header-calendar', array(
      'default' => 'Kalendorius'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-calendar-control', array(
      'label' => 'Kalendorius (LT)',
      'section' => 'skc-header-section',
      'settings' => 'header-calendar'
    )));
  
    $wp_customize->add_setting('header-logo-headline-en', array(
      'default' => 'Šilutė culture and entertainment center'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-logo-headline-control-en', array(
      'label' => 'Logo text (EN)',
      'section' => 'skc-header-section',
      'settings' => 'header-logo-headline-en'
    )));
    
    $wp_customize->add_setting('header-logo-subheadline-en', array(
      'default' => 'Highest category culture center'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-logo-subheadline-control-en', array(
      'label' => 'Sublogo text (EN)',
      'section' => 'skc-header-section',
      'settings' => 'header-logo-subheadline-en'
    )));

    $wp_customize->add_setting('header-calendar-en', array(
        'default' => 'Calendar'
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header-calendar-control-en', array(
        'label' => 'Calendar (EN)',
        'section' => 'skc-header-section',
        'settings' => 'header-calendar-en'
      )));
  
    $wp_customize->add_setting('header-logo-img');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header-logo-img-control', array(
      'label' => 'Logo paveikslėlis / Logo image',
      'section' => 'skc-header-section',
      'settings' => 'header-logo-img',
      'width' => 70,
      'height' => 50
    )));
  
  }
  add_action('customize_register', 'siluteskc_header_logo');
  
function siluteskc_footer($wp_customize){
    $wp_customize->add_section('skc-footer-section', array(
      'title' => 'Apačia / Footer',
      'priority' => 11
    ));
    $wp_customize->add_setting('footer-headline', array(
      'default' => 'Šilutės kultūros ir pramogų centras'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-headline-control', array(
      'label' => 'Apačios pavadinimas (LT)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-headline'
    )));

    $wp_customize->add_setting('footer-subheadline', array(
      'default' => 'Biudžetinė įstaiga Šilutės kultūros ir pramogų centras. Įstaigos kodas 177414328.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-subheadline-control', array(
      'label' => 'Apačios tekstas (LT)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-subheadline',
      'type' => 'textarea'
    )));
  
    $wp_customize->add_setting('footer-headline-fblink', array(
      'default' => 'https://www.facebook.com/siluteskulturoscentras/'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-fblink-control', array(
      'label' => 'Facebook nuoroda',
      'section' => 'skc-footer-section',
      'settings' => 'footer-headline-fblink'
    )));

    $wp_customize->add_setting('footer-headline-iglink', array(
      'default' => 'https://www.facebook.com/siluteskulturoscentras/'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-iglink-control', array(
      'label' => 'Instragram nuoroda',
      'section' => 'skc-footer-section',
      'settings' => 'footer-headline-iglink'
    )));

    $wp_customize->add_setting('footer-headline-youtubelink', array(
      'default' => 'https://www.facebook.com/siluteskulturoscentras/'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-youtubelink-control', array(
      'label' => 'Youtube nuoroda',
      'section' => 'skc-footer-section',
      'settings' => 'footer-headline-youtubelink'
    )));

    $wp_customize->add_setting('footer-phone', array(
      'default' => '+370 441 77 113'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-phone-control', array(
      'label' => 'Telefonas / Phone',
      'section' => 'skc-footer-section',
      'settings' => 'footer-phone'
    )));

    $wp_customize->add_setting('footer-email', array(
      'default' => 'siluteskultura@gmail.com; info@silutekpc.lt'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-email-control', array(
      'label' => 'El. paštas / Email',
      'section' => 'skc-footer-section',
      'settings' => 'footer-email',
      'type' => 'textarea'
    )));

    $wp_customize->add_setting('footer-address', array(
      'default' => 'Lietuvininkų g. 6, LT-99185, Šilutė'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-address-control', array(
      'label' => 'Adresas / Adress',
      'section' => 'skc-footer-section',
      'settings' => 'footer-address',
      'type' => 'textarea'
    )));

    $wp_customize->add_setting('footer-cashier-headline', array(
      'default' => 'Kasos darbo laikas'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-cashier-headline-control', array(
      'label' => 'Kasų pavadinimas (LT)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-cashier-headline'
    )));

    $wp_customize->add_setting('footer-cashier-subheadline', array(
      'default' => 'Antradieniais–penktadieniais 14.00–18.00 val. ir 1 val. prieš renginį<br><br>Kasos tel. Nr. +370 673 27 382<br><br>Pirmadieniais kasa nedirba, išskyrus renginio dieną – 1 val. prieš renginį'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-cashier-subheadline-control', array(
      'label' => 'Kasų darbo paragrafas (LT)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-cashier-subheadline',
      'type' => 'textarea'
    )));
  
    $wp_customize->add_setting('footer-headline-en', array(
      'default' => 'Šilutė culture and entertainment center'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-headline-control-en', array(
      'label' => 'Footer title (EN)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-headline-en'
    )));

    $wp_customize->add_setting('footer-subheadline-en', array(
      'default' => 'State company Šilutė culture and entertainment center. Institution code 177414328.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-subheadline-control-en', array(
      'label' => 'Footer text (EN)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-subheadline-en',
      'type' => 'textarea'
    )));

    $wp_customize->add_setting('footer-cashier-headline-en', array(
      'default' => 'Cashier open time'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-cashier-headline-control-en', array(
      'label' => 'Cashier open time title (EN)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-cashier-headline-en'
    )));

    $wp_customize->add_setting('footer-cashier-subheadline-en', array(
      'default' => 'Tuesdays-Fridays 14.00–18.00 and 1 hour before the event<br><br>Cashier tel. No. +370 673 27 382<br><br>Mondays cashier is closed except event day 1 hour before the event'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer-cashier-subheadline-control-en', array(
      'label' => 'Cashier open times paragraph (EN)',
      'section' => 'skc-footer-section',
      'settings' => 'footer-cashier-subheadline-en',
      'type' => 'textarea'
    )));
  }
  add_action('customize_register', 'siluteskc_footer');

  //Newsletter section customizer
  function siluteskc_newsletter($wp_customize){
    $wp_customize->add_section('skc-newsletter-section', array(
      'title' => 'Naujienlaiškiai / Newsletter',
      'priority' => 10
    ));
  
    $wp_customize->add_setting('newsletter-headline', array(
      'default' => 'Nepraleiskite naujienų'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-headline-control', array(
      'label' => 'Naujienlaiškių pavadinimas (LT)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-headline'
    )));

    $wp_customize->add_setting('newsletter-text', array(
      'default' => 'Užsisakykite Šilutės Kultūros ir pramogų centro naujienlaiškį ir sužinokite apie artimiausius renginius pirmieji!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-text-control', array(
      'label' => 'Naujienlaiškių tekstas (LT)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-text'
    )));

    $wp_customize->add_setting('newsletter-text-btn', array(
      'default' => 'Užsiprenumeruoti'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-text-btn-control', array(
      'label' => 'Mhygtuko tekstas (LT)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-text-btn'
    )));
  
    $wp_customize->add_setting('newsletter-headline-en', array(
      'default' => 'Do not miss news'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-headline-control-en', array(
      'label' => 'Newsletter title (EN)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-headline-en'
    )));

    $wp_customize->add_setting('newsletter-text-en', array(
      'default' => 'Šilutė culture and entertainment center newsletter and be the first to know about newest events and activities!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-text-control-en', array(
      'label' => 'Newsletter text (EN)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-text-en'
    )));

    $wp_customize->add_setting('newsletter-text-btn-en', array(
      'default' => 'Subscribe'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'newsletter-text-btn-control-en', array(
      'label' => 'Button text (EN)',
      'section' => 'skc-newsletter-section',
      'settings' => 'newsletter-text-btn-en'
    )));
  
  }
  add_action('customize_register', 'siluteskc_newsletter');