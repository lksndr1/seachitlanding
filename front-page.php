
<div class="hero-background-wrapper">
    <?php
        get_header();
    ?>
    <section id='home' class='section hero-section'>
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
    <section id='newgames' class="section new-games-section">
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
    <section class="section magic-section">
        <div class="container">
            <div class="magic-section__flex-wrapper">
                <div class="magic-section__flex-wrapper__description">
                    <h5>The Magic of Maxter Cluster at a Glance</h5>
                    <p>Discover the most exciting and distinctive feature of Maxtercluster at a glance. Immerse yourself in the magic and fun that only Maxtercluster can offer you.</p>
                    <button>Read more</button>
                </div>
                <?php 
                    $image = get_field('magic_section_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="section best-section">
        <div class="container">
            <h5>Explore the Best Slot Games</h5>
            <p class="section best-section__description">Discover the most magical MaxterCluster games in detail through our expert reviews.</p>
            <div class="best-section__cards-container">
                <?php
                    if( have_rows('best_games') ):
                        while( have_rows('best_games') ) : the_row();
                            $best_game_image = get_sub_field('best_game_image');
                            $best_game_title = get_sub_field('best_game_title');
                            $best_game_features = get_sub_field('best_game_features');
                            $best_game_view_more_link = get_sub_field('best_game_view_more_link');
                            $best_game_review_link = get_sub_field('best_game_review_link');
                ?>
                <div class="best-section__card">
                    <?php 
                        if( !empty( $best_game_image ) ): ?>
                            <img src="<?php echo esc_url($best_game_image['url']); ?>" alt="<?php echo esc_attr($best_game_image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="best-section__card__text">
                        <?php
                            if( !empty( $best_game_title ) ): ?>
                                <h4><?php echo $best_game_title; ?></h4>
                        <?php endif; ?>
                        <div class="best-section__card__text-features-container">
                            <?php 
                                if( have_rows('best_game_features') ):
                                    while( have_rows('best_game_features') ) : the_row();
                                        $best_game_feature = get_sub_field('best_game_feature');
                            ?>
                            <div class="best-section__card__text-feature">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7045 4.15347C17.034 4.4045 17.0976 4.87509 16.8466 5.20457L8.84657 15.7046C8.71541 15.8767 8.51627 15.9838 8.30033 15.9983C8.08439 16.0129 7.87271 15.9334 7.71967 15.7804L3.21967 11.2804C2.92678 10.9875 2.92678 10.5126 3.21967 10.2197C3.51256 9.92682 3.98744 9.92682 4.28033 10.2197L8.17351 14.1129L15.6534 4.29551C15.9045 3.96603 16.3751 3.90243 16.7045 4.15347Z" fill="#E4F357" />
                                </svg>
                                <p><?php echo $best_game_feature; ?></p>
                            </div>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </div>
                        <div class="best-section__card__buttons-container">
                            <div class="best-section__card__view-more">
                                <?php
                                    if( !empty( $best_game_view_more_link ) ): ?>
                                        <a href="<?php echo $best_game_view_more_link; ?>">View More</a>
                                <?php endif; ?>
                            </div>
                            <div class="best-section__card__reviews">
                                <?php
                                    if( !empty( $best_game_review_link ) ): ?>
                                        <a href="<?php echo $best_game_review_link; ?>">Reviews</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <section id='howtoplay' class="section how-to-play">
        <div class="how-to-play__container">
            <div class="how-to-play__video-wrapper">
                <button class="how-to-play__play-button" onclick="playVideo(this)">
                    <svg width="60" height="70" viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60 35L-3.26266e-06 69.641L-2.34249e-07 0.358979L60 35Z" fill="#E4F357" />
                    </svg>
                </button>
                <h5>Explore the special features</h5>
                <p>Exciting twists and magic these games have to offer. Let the videos take you on an adventure full of fun</p>
                <div class="video-container" style="display: none;">
                    <iframe 
                        width="100%" 
                        height="315" 
                        src="https://www.youtube.com/embed/oe70Uhjc_F4?autoplay=1" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>            
        </div>
    </section>
    <section id='faqs' class="section faqs-section">
        <div class="container">
            <div class="faqs-section__description">
                <h5>Answers to your Magical Questions</h5>
                <p>Find the answers you need here to fully enjoy your magical gaming experience.</p>
            </div>
            <div class="faqs-section__qa-block">
                <?php
                    if( have_rows('faqs_questions-answers') ):
                        while( have_rows('faqs_questions-answers') ) : the_row();

                            $question = get_sub_field('faqs_question');
                            $answer = get_sub_field('faqs_answer');
                            ?>
                            <div class="faqs-section__qa-block-item">
                                <div class="faqs-section__qa-block-question">
                                    <p><?php echo $question; ?></p>
                                    <svg class="faqs-section__arrow-icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.7762 8.65115C7.1345 8.30664 7.70424 8.31781 8.04875 8.67611L12.5 13.4014L16.9513 8.67611C17.2958 8.31781 17.8655 8.30664 18.2238 8.65115C18.5821 8.99567 18.5933 9.56541 18.2487 9.9237L13.1488 15.3237C12.9791 15.5002 12.7448 15.5999 12.5 15.5999C12.2552 15.5999 12.0209 15.5002 11.8513 15.3237L6.75125 9.9237C6.40674 9.56541 6.41791 8.99567 6.7762 8.65115Z" fill="#9A998E" />
                                    </svg>
                                </div>
                                <div class="faqs-section__qa-block-answer">
                                    <p><?php echo $answer; ?></p>
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