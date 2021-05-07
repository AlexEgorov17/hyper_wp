<?php
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

        
        <?php 
            if(is_singular()) {
                ?>
                    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/news.css">
                <?php
            } 
            // else {
            //     ? > 
            //         <script src="<?php bloginfo('template_directory'); ? >/js/main.js"></script>
            //     < ? php
            // }
            wp_head(); 
        ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		    wp_body_open();
		?>

        <section class="<?php echo !is_front_page() ? 'intro header-default' : 'intro' ?>" >
            <div class="header-wrapper"> 
                <div class="header-left">	
                    <ul>
                        <li id="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.svg" alt="logo-icon"></a></li>
                        <li class="text">КАК НАЧАТЬ ИГРАТЬ?</li>
                        <li class="text"><a href="<?php echo get_site_url(); ?>/news">НОВОСТИ</a></li>
                        <li ><a class="btn btn-donat" href="<?php echo get_site_url(); ?>/form">Связь</a></li>
                        <div id="hamburger" class="hamburglar is-closed">
                            <div class="burger-icon">
                                <div class="burger-container">
                                <span class="burger-bun-top"></span>
                                <span class="burger-filling"></span>
                                <span class="burger-bun-bot"></span>
                                </div>
                            </div>
                            <div class="burger-ring">
                                <svg class="svg-ring">
                                    <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                                </svg>
                            </div>
                            <svg width="0" height="0">
                                <mask id="mask">
                            <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                                </mask>
                                </svg>
                            <div class="path-burger">
                                <div class="animate-path">
                                <div class="path-rotation"></div>
                                </div>
                            </div>
                        </div>
                    </ul>
                    
                </div>
                <div class="header-right">
                    <ul>	
                        <li><img src="<?php echo bloginfo('template_url'); ?>/images/icons/telegram.svg" alt="telegram-icon"></li>
                        <li><img src="<?php echo bloginfo('template_url'); ?>/images/icons/vk.svg" alt="vk-icon"></li>
                        <li><img src="<?php echo bloginfo('template_url'); ?>/images/icons/instagram.svg" alt="instagram-icon"></li>
                        <li><img src="<?php echo bloginfo('template_url'); ?>/images/icons/yt.svg" alt="yt-icon"></li>
                    </ul>
                </div>
            </div>