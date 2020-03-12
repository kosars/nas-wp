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
            $languages = pll_the_languages( array(
                'display_names_as'       => 'slug',
                'hide_if_no_translation' => 1,
                'raw'                    => true
              ) ); 
             // Creates the $output variable with languages container
            $output = '';
            $output_toggle= '';
            $output_toggle_invert='';

            // Runs the loop through all languages
            foreach ( $languages as $language ) {

                // Variables containing language data
                $id             = $language['id'];
                $slug           = $language['slug'];
                $url            = $language['url'];
                $current        = $language['current_lang'] ? ' languages__item--current' : '';
                $no_translation = $language['no_translation'];

                // Checks if the page has translation in this language
               // if ( ! $no_translation ) {
                    // Check if it's current language
                    if ( $current ) {
                        // Output the language in a <span> tag so it's not clickable
                        //$output .= "<span class=\"languages__item$current\">$slug</span>";
                        $output .= "<li class='lang'><a class='active'>$slug</a></li>";
                    } else {
                        // Output the language in an anchor tag
                        //$output .= "<a href=\"$url\" class=\"languages__item$current\">$slug</a>";
                        $output .= "<li class='lang'><a href=\"$url\">$slug</a></li>";
                        //echo '_lang_'.$slug;
                        $output_toggle= "<a href=\"$url\" >$slug</a>";
                        $output_toggle_invert= "<a href=\"$url\" class='invert-color'>$slug</a>";
                    }
               // }
            }
			if ( is_front_page() || is_home() ) :
                ?>
                <header class="header-main">
				<nav>
                    <input type="checkbox" id="checkbox-menu" />
                    <label for="checkbox-menu">
                        
                    <ul class="menu touch">
                        <li class="toggle-wrapper">
                            <div class="toggle touch">
                                <?php if( pll_current_language() == 'en'):?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/logo-dark-en.png" alt="НАШ" class="toggle-logo"/>
                                <?php else:?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                                <?php endif; ?>
                                <!-- <span class="toggle-lang"><a href="">EN</a></span> -->
                                <span class="toggle-lang"><?php echo $output_toggle;?></span>
                                <img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="" class="toggle-button">
                            </div>
                        </li>
                        <li class="logo">
                            <?php if( pll_current_language() == 'en'):?>
                                <a href="<?php echo get_site_url().'/en/'; ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo-en.png" alt="НАШ"/></a>
                            <?php else:?>
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ"/></a>
                            <?php endif; ?>
                        </li>
                        <?php include(get_template_directory(  ).'/templates/template-header-nav.php');?>
                    </ul>
                    <span class="toggle">
                        <?php if( pll_current_language() == 'en'):?>
                            <img src="<?php echo get_template_directory_uri()?>/img/logo-en.png" alt="НАШ" class="toggle-logo"/>
                        <?php else:?>
                            <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ" class="toggle-logo"/>
                        <?php endif; ?>
                        <!-- <span class="toggle-lang"><a href="" class="invert-color">EN</a></span> -->
                        <span class="toggle-lang"><?php echo $output_toggle_invert;?></span>
                        <img src="<?php echo get_template_directory_uri()?>/img/menu.png" alt="" class="toggle-button">
                    </span>
                    </label>
                </nav>
                <?php if( pll_current_language() == 'en'):?>
                    <section class="intro wrapper">
                        <p class="intro-text">
                            JOURNEY <br>
                            THROUGH THE ERA
                        </p>
                        <p class="intro-subtext">
                            With us everyone can  <br>
                            touch the past millennia
                        </p>
                        <a href="" class="button">JOIN</a>
                    </section>
                <?php else:?>
                    <section class="intro wrapper">
                        <p class="intro-text">
                            ПУТЕШЕСТВИЕ <br>
                            СКВОЗЬ ВРЕМЯ
                        </p>
                        <p class="intro-subtext">
                            С нами каждый может прикоснуться<br>
                            к прошедшим тысячелетиям
                        </p>
                        <a href="" class="button">ПРИСОЕДЕНИТЬСЯ</a>
                    </section>
                <?php endif; ?>
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
                                <?php if( pll_current_language() == 'en'):?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/logo-dark-en.png" alt="НАШ" class="toggle-logo"/>
                                <?php else:?>
                                    <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                                <?php endif; ?>
                                <span class="toggle-lang"><?php echo $output_toggle;?></span>
                                <img src="<?php echo get_template_directory_uri()?>/img/close.png" alt="" class="toggle-button">
                            </div>
                        </li>
                        <li class="logo">
                            <?php if( pll_current_language() == 'en'):?>
                                <a href="<?php echo get_site_url().'/en/'; ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo-dark-en.png" alt="НАШ"/></a>
                            <?php else:?>
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ"/></a>
                            <?php endif; ?>
                        </li>
                        <?php include(get_template_directory(  ).'/templates/template-header-nav.php');?>
                    </ul>
                    <span class="toggle">
                            <?php if( pll_current_language() == 'en'):?>
                                <img src="<?php echo get_template_directory_uri()?>/img/logo-dark-en.png" alt="НАШ" class="toggle-logo"/>
                            <?php else:?>
                                <img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ" class="toggle-logo"/>
                            <?php endif; ?>
                        <span class="toggle-lang"><?php echo $output_toggle;?></span>
                        <img src="<?php echo get_template_directory_uri()?>/img/menu.png" alt="" class="toggle-button invert-color">
                    </span>
                    </label>
                </nav>
			<?php endif; ?>
        
    </header>  
    <main>            