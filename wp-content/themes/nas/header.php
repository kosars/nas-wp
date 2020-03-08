<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
    
        <?php
			if ( is_front_page() || is_home() ) :
                ?>
                <header class="header-main">
				<nav>
                    <input type="checkbox" id="checkbox-menu" />
                    <label for="checkbox-menu">
                        
                    <ul class="menu touch">
                        <li class="toggle-wrapper">
                            <div class="toggle touch">
                                <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                                <span class="toggle-lang"><a href="">EN</a></span>
                                <img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="" class="toggle-button">
                            </div>
                        </li>
                        <li class="logo">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ"/></a>
                        </li>
                        <?php include(get_template_directory(  ).'/templates/template-header-nav.php');?>
                    </ul>
                    <span class="toggle">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ" class="toggle-logo"/>
                        <span class="toggle-lang"><a href="" class="invert-color">EN</a></span>
                        <img src="<?php echo get_template_directory_uri()?>/img/menu.png" alt="" class="toggle-button">
                    </span>
                    </label>
                </nav>
                <section class="intro wrapper">
                    <p class="intro-text">
                        ПУТЕШЕСТВИЕ <br>
                        СКВОЗЬ ВРЕМЯ
                    </p>
                    <p class="intro-subtext">
                        С нами каждый может прикоснуться <br>
                        прикоснуться к прошедшим тысячелетиям
                    </p>
                    <a href="" class="button">ПРИСОЕДЕНИТЬСЯ</a>
                </section>
				<?php
			else :
                ?>
                <header class="header-page">
				<nav>
                    <input type="checkbox" id="checkbox-menu" />
                    <label for="checkbox-menu">
                    <ul class="menu touch menu-dark">
                        <li class="toggle-wrapper">
                            <div class="toggle touch">
                                <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                                <span class="toggle-lang"><a href="">EN</a></span>
                                <img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="" class="toggle-button">
                            </div>
                        </li>
                        <li class="logo">
                        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ"/></a>
                        </li>
                        <?php include(get_template_directory(  ).'/templates/template-header-nav.php');?>
                    </ul>
                    <span class="toggle">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                        <span class="toggle-lang"><a href="">EN</a></span>
                        <img src="<?php echo get_template_directory_uri()?>/img/menu.png" alt="" class="toggle-button invert-color">
                    </span>
                    </label>
                </nav>
			<?php endif; ?>
        
    </header>  
    <main>            