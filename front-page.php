
<div class="hero-background-wrapper">
    <?php
        get_header();
    ?>
    <section class='section hero-section'>
        <div class='container'>
            <div class='hero-section__content'>
                <h1 class='hero-section__text'>Embark on a magical adventure</h1>
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
            <div class="home-section__flex-wrapper">
                <?php 
                    $image = get_field('home_section_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="home-section__flex-wrapper__description">
                    <h5>Discover the Magic of Maxter cluster Pro</h5>
                    <p>You will be taken to a magical world of online gaming. With its launch in 2023, a new era of adventures and emotions began. From the legendary Big Cluster of Scary to the treasure of Extra Monster Pro.</p>
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section new-games-section">
        <div class="container">
            new games
        </div>
    </section>
</main>

<?php get_footer(); ?>