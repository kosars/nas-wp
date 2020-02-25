<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('sylesheet_url');?>">
    <link rel="stylesheet" href="http://wptest/wp-content/themes/nas/uikit.css">
    <!-- Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type='text/javascript' src='http://wptest/wp-content/themes/nas/js/insta-slider.js'></script>
    <script type="text/javascript" src='http://wptest/wp-content/themes/nas/js/slider.js'></script>
    <?php wp_head(); ?>

    <?php echo get_post_meta($post->ID, 'fc-my-script', true); ?>


