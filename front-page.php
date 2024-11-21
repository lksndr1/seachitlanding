
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
            <h5>Discover the Latest Slot Games</h5>
            <p class="section new-games-section__description">Immerse yourself in magic and adventure with the latest games from MaxterCluster</p>
            <div class="new-games-section__cards-container">
                <?php
                    if( have_rows('game_card') ):
                        while( have_rows('game_card') ) : the_row();
                            $game_card_name = get_sub_field('game_card_name');
                            $game_card_image = get_sub_field('game_card_image');
                            $game_card_provider = get_sub_field('game_card_provider');
                            $game_card_rtp = get_sub_field('game_card_rtp');
                            $game_card_volatility = get_sub_field('game_card_volatility');
                            $game_card_several_ways = get_sub_field('game_card_several_ways');
                            $game_card_start_to_play_link = get_sub_field('game_card_start_to_play_link');
                ?>
                    <div class="new-games-section__card">
                        <p class="new-games-section__card-title"><?php echo $game_card_name; ?></p>
                        <?php 
                            if( !empty( $game_card_image ) ): ?>
                                <img src="<?php echo esc_url($game_card_image['url']); ?>" alt="<?php echo esc_attr($game_card_image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="new-games-section__card-text">
                            <div class="new-games-section__card-parameter-value">
                                <p>Provider:</p>
                                <p><?php echo $game_card_provider; ?></p>
                            </div>
                            <div class="new-games-section__card-parameter-value">
                                <p>Rtp:</p>
                                <p><?php echo $game_card_rtp; ?></p>
                            </div>
                            <div class="new-games-section__card-parameter-value">
                                <p>Volatility:</p>
                                <p><?php echo $game_card_volatility; ?></p>
                            </div>
                            <div class="new-games-section__card-parameter-value">
                                <p>Several ways:</p>
                                <p><?php echo $game_card_several_ways; ?></p>
                            </div>
                        </div>
                        <div class="new-games-section__card-link">
                            <a href="<?php echo $game_card_start_to_play_link; ?>">Start to play</a>
                        </div>
                    </div>

                <?php
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>