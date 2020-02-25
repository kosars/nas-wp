<?php
/**
 * The template for displaying theme header.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<link rel='stylesheet' href='http://nas.zp.ua/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' href='http://nas.zp.ua/jquery-ui-1.12.1.custom/jquery-ui.css' />

<script src='http://nas.zp.ua/fullcalendar/lib/jquery.min.js'></script>
<script src='http://nas.zp.ua/fullcalendar/lib/moment.min.js'></script>
<script src='http://nas.zp.ua/fullcalendar/fullcalendar.js'></script>
<script src='http://nas.zp.ua/fullcalendar/locale/ru.js'></script>
<script src='http://nas.zp.ua/fullcalendar/locale/uk.js'></script>
<script type='text/javascript' src='http://nas.zp.ua/fullcalendar/gcal.js'></script>

<script type="text/javascript" src="http://nas.zp.ua/my-js/popup-footer-calendar.js"></script>

<?php wp_head(); ?>

<?php echo get_post_meta($post->ID, 'fc-my-script', true); ?>

</head>
<body <?php cherry_attr( 'body' ); ?>>

	<?php do_action( 'cherry_body_start' ); ?>

	<div id="site-wrapper" class="hfeed site">

		<?php do_action( 'cherry_header_before' ); ?>

		<?php do_action( 'cherry_header' ); ?>

		<?php do_action( 'cherry_header_after' ); ?>