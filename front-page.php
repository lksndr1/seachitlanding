
<div class="hero-background-wrapper">
    <?php
        get_header();
    ?>
    <section class='section hero-section'>
        <div class='container'>
            <div class='hero-section__content'>
                <p class='hero-section__text'>Embark on a magical adventure</p>
                <div class='hero-section__buttons'>
                    <button class='hero-section__buttons__calculator'>Loan calculator</button>
                    <button class='hero-section__buttons__read'>Read more</button>
                </div>
            </div>
        </div>
    </section>
    <div class='hero-background-wrapper__background-img'>
        <?php 
            $image = get_field('hero__background-image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
</div>
<main>
    <section class="section home-section">
        <div class="container">
            home
        </div>
    </section>
    <section class="section new-games-section">
        <div class="container">
            new games
        </div>
    </section>
</main>

<?php get_footer(); ?>