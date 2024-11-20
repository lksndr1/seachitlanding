<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Maxter</title>
</head>
<body>
    <div class="container">
        <header class="header header__wrapper">
            <div class="header__logo">
                <?php
                    $image = get_field('header_logo', 'option'); 
                    if( !empty( $image ) ): ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                        </a>
                <?php endif; ?>
            </div>
            <div class="header__menu-list-wrapper">
                <?php $menu = wp_nav_menu( [
                            'theme_location' => 'header',
                            'container'      => false,
                            'menu_class'     => "menu-list",
                            'menu_id'        => false,
                            'echo'           => true,
                            'items_wrap'     => '<ul id="%1$s" %2$s">%3$s</ul>',
                        ] );
                    if($menu) : ?>

                    <nav>
                        <?php echo $menu ?>	
                    </nav>

                <?php endif; ?>    
            </div>
            <button class="header__button">Sign in</button>
        </header>
    </div>