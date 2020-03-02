<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <a href=""><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ"/></a>
                        </li>
                        <li class="nav-link"><a href="">ШКОЛА</a></li>
                        <li class="nav-link"><a href="">НАУЧНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
                        <li class="nav-link"><a href="">КАЛЕНДАРЬ</a></li>
                        <li class="nav-link mobile"><a href="">ПРИНЯТЬ УЧАСТИЕ</a></li>
                        <li class="nav-link mobile"><a href="">НОВОСТИ</a></li>
                        <li class="nav-link mobile"><a href="">ПАМЯТНИКИ</a></li>
                        <li class="nav-link"><a href="">КОНТАКТЫ</a></li>
                        <li class="lang"><a href="" class="active">RU</a></li>
                        <li class="lang"><a href="">EN</a></li>
                        <li class="help"><a href="" class="button">ПОМОЧЬ</a></li>
                    </ul>
                    <span class="toggle">
                        <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="НАШ" class="toggle-logo"/>
                        <span class="toggle-lang"><a href="" class="invert-color">EN</a></span>
                        <img src="<?php echo get_template_directory_uri()?>/img/menu.png" alt="" class="toggle-button">
                    </span>
                    </label>
                </nav>
                <section class="intro wrapper">
                    <p class="intro-text">ПОЕХАЛИ <br>
                        В ЭКСПЕДИЦИЮ
                    </p>
                    <p class="intro-subtext">Незабываемые события для всех,<br>
                        кто любит историю
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
                        <a href=""><img src="<?php echo get_template_directory_uri()?>/img/logo-dark.png" alt="НАШ"/></a>
                        </li>
                        <li class="nav-link"><a href="">ШКОЛА</a></li>
                        <li class="nav-link"><a href="">НАУЧНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
                        <li class="nav-link"><a href="">КАЛЕНДАРЬ</a></li>
                        <li class="nav-link mobile"><a href="">ПРИНЯТЬ УЧАСТИЕ</a></li>
                        <li class="nav-link mobile"><a href="" class="active">НОВОСТИ</a></li>
                        <li class="nav-link mobile"><a href="">ПАМЯТНИКИ</a></li>
                        <li class="nav-link"><a href="">КОНТАКТЫ</a></li>
                        <li class="lang"><a href="" class="active">RU</a></li>
                        <li class="lang"><a href="">EN</a></li>
                        <li class="help"><a href="" class="button">ПОМОЧЬ</a></li>
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