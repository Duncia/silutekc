<?php 
/* Template Name: Contacts page */

/*
Contacts page template
 */
?>

<?php get_header(); ?>

<section class="container">
    <div class="container__inner">
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
    </div>
</section>

<section class="container">
    <div class="container__inner">
        <div class="contacts-title pb-md">
            <div class="contacts-title__line"></div>
            <h3 class="contacts-title__headline"><?php _e('Structure and contacts', 'siluteskc'); ?></h3>
        </div>
    </div>
</section>

<section class="container">
    <div class="container__inner pb-md">
        <div class="contacts-departments">
            <div class="contacts-departments__address">
                <div class="contacts-departments__address__item">
                    <?php if(get_field('silute_kc_title')): ?>
                        <h4><?php the_field('silute_kc_title'); ?></h4>
                    <?php endif; ?>                  
                    <div class="address-item">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8822 9.1894C12.0247 9.1894 11.1828 9.05534 10.3849 8.79178C9.99396 8.65849 9.51337 8.78077 9.27476 9.02573L7.69999 10.2141C5.8737 9.23956 4.74874 8.11541 3.78718 6.30354L4.94099 4.77039C5.24075 4.47114 5.34827 4.03401 5.21945 3.62385C4.95466 2.82213 4.82015 1.98093 4.82015 1.12343C4.82019 0.503963 4.31603 0 3.69636 0H1.12432C0.504648 0 0.000488281 0.503964 0.000488281 1.12339C0.000488281 8.22365 5.77913 14 12.8822 14C13.5018 14 14.006 13.496 14.006 12.8766V10.3127C14.0059 9.69336 13.5018 9.1894 12.8822 9.1894Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('silute_kc_mobile')): ?>
                            <p><?php the_field('silute_kc_mobile'); ?></p>
                        <?php endif; ?>  
                    </div>
                    <div class="address-item">
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5381 0.0234375H1.43941C1.21296 0.0234375 1.00269 0.0719428 0.808594 0.168953L7.48877 5.58537L14.1689 0.168953C13.9748 0.0719428 13.7808 0.0234375 13.5381 0.0234375Z" fill="#FFB23F"/>
                        <path d="M7.94175 7.07294C7.81235 7.18611 7.65061 7.23462 7.48886 7.23462C7.32711 7.23462 7.16537 7.18611 7.03597 7.07294L0 1.36548C0 1.39782 0 1.41398 0 1.46249V10.2419C0 11.0342 0.646986 11.6809 1.43954 11.6809H13.5544C14.3469 11.6809 14.9939 11.0342 14.9939 10.2419V1.46249C14.9939 1.43015 14.9939 1.41398 14.9939 1.36548L7.94175 7.07294Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('silute_kc_emails')): ?>
                            <?php the_field('silute_kc_emails'); ?>
                        <?php endif; ?>  
                    </div>
                    <div class="address-item">
                        <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.47416C0 2.89853 2.89974 0 6.47668 0C10.0537 0 12.9534 2.89853 12.9534 6.47416C12.9534 10.0497 8.53953 16.6712 6.47668 16.6712C4.41383 16.6712 0 10.0497 0 6.47416ZM3.06738 6.03345C3.06738 7.91571 4.59377 9.44153 6.47668 9.44153C8.3596 9.44153 9.88599 7.91571 9.88599 6.03345C9.88599 4.1513 8.3596 2.62543 6.47668 2.62543C4.59377 2.62543 3.06738 4.1513 3.06738 6.03345Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('silute_kc_address')): ?>
                            <?php the_field('silute_kc_address'); ?>
                        <?php endif; ?>  
                    </div>   
                </div>
                <div class="contacts-departments__address__item">
                    <?php if(get_field('tickets_title')): ?>
                        <h4><?php the_field('tickets_title'); ?></h4>
                    <?php endif; ?>  
                    <?php if(get_field('tickets_text')): ?>
                        <?php the_field('tickets_text'); ?>
                    <?php endif; ?>  
                </div>
                <div class="contacts-departments__address__item">
                    <?php if(get_field('sveksna_title')): ?>
                        <h4><?php the_field('sveksna_title'); ?></h4>
                    <?php endif; ?> 
                    <div class="address-item">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8822 9.1894C12.0247 9.1894 11.1828 9.05534 10.3849 8.79178C9.99396 8.65849 9.51337 8.78077 9.27476 9.02573L7.69999 10.2141C5.8737 9.23956 4.74874 8.11541 3.78718 6.30354L4.94099 4.77039C5.24075 4.47114 5.34827 4.03401 5.21945 3.62385C4.95466 2.82213 4.82015 1.98093 4.82015 1.12343C4.82019 0.503963 4.31603 0 3.69636 0H1.12432C0.504648 0 0.000488281 0.503964 0.000488281 1.12339C0.000488281 8.22365 5.77913 14 12.8822 14C13.5018 14 14.006 13.496 14.006 12.8766V10.3127C14.0059 9.69336 13.5018 9.1894 12.8822 9.1894Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('sveksna_mobile')): ?>
                            <p><?php the_field('sveksna_mobile'); ?></p>
                        <?php endif; ?>  
                    </div>
                    <div class="address-item">
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5381 0.0234375H1.43941C1.21296 0.0234375 1.00269 0.0719428 0.808594 0.168953L7.48877 5.58537L14.1689 0.168953C13.9748 0.0719428 13.7808 0.0234375 13.5381 0.0234375Z" fill="#FFB23F"/>
                        <path d="M7.94175 7.07294C7.81235 7.18611 7.65061 7.23462 7.48886 7.23462C7.32711 7.23462 7.16537 7.18611 7.03597 7.07294L0 1.36548C0 1.39782 0 1.41398 0 1.46249V10.2419C0 11.0342 0.646986 11.6809 1.43954 11.6809H13.5544C14.3469 11.6809 14.9939 11.0342 14.9939 10.2419V1.46249C14.9939 1.43015 14.9939 1.41398 14.9939 1.36548L7.94175 7.07294Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('sveksna_email')): ?>
                            <?php the_field('sveksna_email'); ?>
                        <?php endif; ?>  
                    </div>
                    <div class="address-item">
                        <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.47416C0 2.89853 2.89974 0 6.47668 0C10.0537 0 12.9534 2.89853 12.9534 6.47416C12.9534 10.0497 8.53953 16.6712 6.47668 16.6712C4.41383 16.6712 0 10.0497 0 6.47416ZM3.06738 6.03345C3.06738 7.91571 4.59377 9.44153 6.47668 9.44153C8.3596 9.44153 9.88599 7.91571 9.88599 6.03345C9.88599 4.1513 8.3596 2.62543 6.47668 2.62543C4.59377 2.62543 3.06738 4.1513 3.06738 6.03345Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('sveksna_address')): ?>
                            <?php the_field('sveksna_address'); ?>
                        <?php endif; ?>  
                    </div>   
                </div>
                <div class="contacts-departments__address__item">
                    <?php if(get_field('mokslo_plc_title')): ?>
                        <h4><?php the_field('mokslo_plc_title'); ?></h4>
                    <?php endif; ?> 
                    <div class="address-item">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8822 9.1894C12.0247 9.1894 11.1828 9.05534 10.3849 8.79178C9.99396 8.65849 9.51337 8.78077 9.27476 9.02573L7.69999 10.2141C5.8737 9.23956 4.74874 8.11541 3.78718 6.30354L4.94099 4.77039C5.24075 4.47114 5.34827 4.03401 5.21945 3.62385C4.95466 2.82213 4.82015 1.98093 4.82015 1.12343C4.82019 0.503963 4.31603 0 3.69636 0H1.12432C0.504648 0 0.000488281 0.503964 0.000488281 1.12339C0.000488281 8.22365 5.77913 14 12.8822 14C13.5018 14 14.006 13.496 14.006 12.8766V10.3127C14.0059 9.69336 13.5018 9.1894 12.8822 9.1894Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('mokslo_plc_mobile')): ?>
                            <p><?php the_field('mokslo_plc_mobile'); ?></p>
                        <?php endif; ?> 
                    </div>
                    <div class="address-item">
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5381 0.0234375H1.43941C1.21296 0.0234375 1.00269 0.0719428 0.808594 0.168953L7.48877 5.58537L14.1689 0.168953C13.9748 0.0719428 13.7808 0.0234375 13.5381 0.0234375Z" fill="#FFB23F"/>
                        <path d="M7.94175 7.07294C7.81235 7.18611 7.65061 7.23462 7.48886 7.23462C7.32711 7.23462 7.16537 7.18611 7.03597 7.07294L0 1.36548C0 1.39782 0 1.41398 0 1.46249V10.2419C0 11.0342 0.646986 11.6809 1.43954 11.6809H13.5544C14.3469 11.6809 14.9939 11.0342 14.9939 10.2419V1.46249C14.9939 1.43015 14.9939 1.41398 14.9939 1.36548L7.94175 7.07294Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('mokslo_plc_email')): ?>
                            <?php the_field('mokslo_plc_email'); ?>
                        <?php endif; ?> 
                    </div>
                    <div class="address-item">
                        <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.47416C0 2.89853 2.89974 0 6.47668 0C10.0537 0 12.9534 2.89853 12.9534 6.47416C12.9534 10.0497 8.53953 16.6712 6.47668 16.6712C4.41383 16.6712 0 10.0497 0 6.47416ZM3.06738 6.03345C3.06738 7.91571 4.59377 9.44153 6.47668 9.44153C8.3596 9.44153 9.88599 7.91571 9.88599 6.03345C9.88599 4.1513 8.3596 2.62543 6.47668 2.62543C4.59377 2.62543 3.06738 4.1513 3.06738 6.03345Z" fill="#FFB23F"/>
                        </svg>
                        <?php if(get_field('mokslo_plc_address')): ?>
                            <?php the_field('mokslo_plc_address'); ?>
                        <?php endif; ?>
                    </div>   
                </div>
            </div>
            <div class="contacts-departments__company-data">
                <div class="company-data__inner">
                    <?php if(get_field('company_info')): ?>
                        <?php the_field('company_info'); ?>
                    <?php endif; ?>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="container">
    <div class="container__inner">
        <div class="contacts-title pb-md">
            <div class="contacts-title__line"></div>
            <h3 class="contacts-title__headline"><?php _e('Team', 'siluteskc'); ?></h3>
        </div>
    </div>
</section>

<section class="container">
    <div class="container__inner contact-cards-container pb-lr">
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