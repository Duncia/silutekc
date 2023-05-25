<?php
/*
Newsletter block.
*/
?>

<section class="container newsletter-block pb-md pt-md">
    <div class="container__inner newsletter d-grid-2">
        <div class="newsletter__left">
            <div class="newsletter__left--title pb-sm">
                <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="18.1169" cy="32.0713" rx="9.34819" ry="9.20759" stroke="#233F64" stroke-width="5.35714"/>
                <path d="M7.92196 26.395L39.4006 36.1667C40.0863 36.3796 40.8195 36.5423 41.5011 36.3164C48.9758 33.8391 48.9758 5.30743 41.5011 2.83013C40.8195 2.60425 40.0863 2.76696 39.4006 2.97983L7.92196 12.7515C1.22165 14.8315 1.22165 24.3151 7.92196 26.395Z" fill="#D0E5FF"/>
                <path d="M39.4006 36.1667L38.6065 38.7249L38.6065 38.7249L39.4006 36.1667ZM7.92196 26.395L8.71607 23.8369L8.71607 23.8369L7.92196 26.395ZM7.92196 12.7515L7.12785 10.1934L7.12785 10.1934L7.92196 12.7515ZM39.4006 2.97983L38.6065 0.421674L38.6065 0.421675L39.4006 2.97983ZM41.5011 2.83013L40.6584 5.3727L40.6584 5.3727L41.5011 2.83013ZM41.5011 36.3164L40.6584 33.7738L40.6584 33.7738L41.5011 36.3164ZM40.1947 33.6086L8.71607 23.8369L7.12785 28.9532L38.6065 38.7249L40.1947 33.6086ZM8.71607 23.8369C4.52838 22.5369 4.52838 16.6096 8.71607 15.3097L7.12785 10.1934C-2.08507 13.0533 -2.08508 26.0932 7.12785 28.9532L8.71607 23.8369ZM8.71607 15.3097L40.1947 5.53798L38.6065 0.421675L7.12785 10.1934L8.71607 15.3097ZM40.1947 5.53798C40.481 5.44909 40.6449 5.41403 40.7459 5.40289C40.8339 5.39319 40.7804 5.41313 40.6584 5.3727L42.3438 0.287562C40.7867 -0.228492 39.3202 0.200101 38.6065 0.421674L40.1947 5.53798ZM40.6584 5.3727C40.8506 5.43638 41.243 5.6618 41.7445 6.39329C42.2408 7.11717 42.7252 8.16938 43.1437 9.54087C43.9796 12.2803 44.4285 15.8786 44.4285 19.5733C44.4285 23.2679 43.9796 26.8662 43.1437 29.6057C42.7252 30.9772 42.2408 32.0294 41.7445 32.7532C41.243 33.4847 40.8506 33.7102 40.6584 33.7738L42.3438 38.859C44.0203 38.3033 45.2629 37.0952 46.1629 35.7825C47.0681 34.4623 47.7517 32.8596 48.2676 31.1692C49.3003 27.7848 49.7857 23.6308 49.7857 19.5733C49.7857 15.5157 49.3003 11.3617 48.2676 7.97733C47.7517 6.2869 47.0681 4.68428 46.1629 3.36399C45.2629 2.05131 44.0203 0.843205 42.3438 0.287561L40.6584 5.3727ZM40.6584 33.7738C40.7804 33.7334 40.8339 33.7533 40.7459 33.7437C40.6449 33.7325 40.481 33.6974 40.1947 33.6086L38.6065 38.7249C39.3202 38.9464 40.7867 39.375 42.3438 38.859L40.6584 33.7738Z" fill="#233F64"/>
                </svg>
                <h5>
                    <?php 
                    if(get_locale() === 'lt_LT'){
                        echo get_theme_mod('newsletter-headline');
                    } else {
                        echo get_theme_mod('newsletter-headline-en');
                    };?>
                </h5>
            </div>
            <p>
                <?php 
                if(get_locale() === 'lt_LT'){
                    echo get_theme_mod('newsletter-text');
                } else {
                    echo get_theme_mod('newsletter-text-en');
                };?>
            </p>
        </div>
        <div class="newsletter__right">
            <div class="newsletter__btn" id="newsletter__btn">
                <p class="btn btn--dark-blue">
                    <span>
                        <?php 
                        if(get_locale() === 'lt_LT'){
                            echo get_theme_mod('newsletter-text-btn');
                        } else {
                            echo get_theme_mod('newsletter-text-btn-en');
                        };?>
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" fill="#ffffff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-overlay newsletter-overlay--close" id="close-newsletter-overlay">
    <div class="newsletter-overlay__content">
        <h4 class="pb-md" id="close-newsletter-close-btn">Uždaryti | X</h4>
        <!--
        <form method="post" action="" class="subscribe-newsletter-form" id="subscribe-newsletter-form" novalidate>
            <p class="pt-md pb-sm">
                <label for="subscribe-newsletter-form__input">Norėdami užsakyti mūsų naujienlaiškius, įveskite el. pašto adresą</label>
                <input type="email" id="subscribe-newsletter-form__input" class="subscribe-newsletter-form__input">
            </p>
            <button class="btn btn--dark-blue" type="submit" name="send">Prenumeruoti</button>
        </form>
                    -->
        <?php echo do_shortcode('[fluentform id="4"]'); ?>
    </div>
</section>