<?php
// подключение стилей и скрипотв
function nas_scripts() {
	wp_enqueue_style( 'nas-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nas-slider', get_template_directory_uri() . '/js/slider.js', array(), '20151215', true );
	wp_enqueue_script( 'nas-owl', get_template_directory_uri() . '/js/owl.js', array(), '20151215', true );

	wp_enqueue_script( 'nas-insta-slider', get_template_directory_uri() . '/js/insta-slider.js', array(), '20151215', true );
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'nas_scripts' );
// регистрация кастомного типа постов
add_action( 'init', 'family_init' );
function family_init(){
	register_post_type('family', array(
		'labels'             => array(
			'name'               => 'Семья', // Основное название типа записи
			'singular_name'      => 'Археолог', // отдельное название записи типа Book
			'add_new'            => 'Добавить археолога',
			'add_new_item'       => 'Добавить нового археолога',
			'edit_item'          => 'Редактировать семью',
			'new_item'           => 'Новый археолог',
			'view_item'          => 'Посмотреть археолога',
			'search_items'       => 'Найти археолога',
			'not_found'          => 'Семьи не найдено',
			'not_found_in_trash' => 'В мусоре семьи не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Семья'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
		// 'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
add_action( 'init', 'calendar_init' );
function calendar_init(){
	register_post_type('calendar', array(
		'labels'             => array(
			'name'               => 'Календарь', // Основное название типа записи
			'singular_name'      => 'Событие', // отдельное название записи типа Book
			'add_new'            => 'Добавить событие',
			'add_new_item'       => 'Добавить новое событие',
			'edit_item'          => 'Редактировать событие',
			'new_item'           => 'Новое событие',
			'view_item'          => 'Посмотреть событие',
			'search_items'       => 'Найти событие',
			'not_found'          => 'Событие не найдено',
			'not_found_in_trash' => 'В мусоре событий не найдёшь',
			'parent_item_colon'  => '',
			'menu_name'          => 'Календарь'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
		// 'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
add_action( 'init', 'sights_init' );
function sights_init(){
	register_post_type('sight', array(
		'labels'             => array(
			'name'               => 'Памятники', // Основное название типа записи
			'singular_name'      => 'Памятник', // отдельное название записи типа Book
			'add_new'            => 'Добавить памятник',
			'add_new_item'       => 'Добавить новый памятник',
			'edit_item'          => 'Редактировать памятник',
			'new_item'           => 'Новый памятник',
			'view_item'          => 'Посмотреть памятник',
			'search_items'       => 'Найти памятники',
			'not_found'          => 'Памятник не найден',
			'not_found_in_trash' => 'В мусоре памятники не найдёшь',
			'parent_item_colon'  => '',
			'menu_name'          => 'Памятники'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
		// 'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
//поддержка превьюшек для постов
add_theme_support( 'post-thumbnails' );
// 414x322 -- family/news
// 162x162 -- calendar
if( function_exists('add_image_size')){
	add_image_size( 'family-news-prewiev', 414, 322, true);
	add_image_size( 'calendar-prewiev', 162, 162, true);
}
## Исполняемый PHP код в контенте записи WordPress.
## [exec]PHP_код[/exec]
##
## @version: 1.0
if( 'Исполняемый PHP код в контенте' ){

	add_filter( 'the_content', 'content_exec_php', 0 );

	function content_exec_php( $content ){
		return preg_replace_callback( '/\[exec( off)?\](.+?)\[\/exec\]/s', '_content_exec_php', $content );
	}

	function _content_exec_php( $matches ){

		if( ' off' === $matches[1] ){
			return "\n\n<".'pre>'. htmlspecialchars( $matches[2] ) .'</pre'.">\n\n";
		}
		else {
			eval( "ob_start(); {$matches[2]}; \$exec_php_out = ob_get_clean();" );
			return $exec_php_out;
		}

	}

}

/**
 * AJAX Load More
 * @link http://www.billerickson.net/infinite-scroll-in-wordpress
 */
function be_ajax_load_more() {

	$args = isset( $_POST['query'] ) ? array_map( 'esc_attr', $_POST['query'] ) : array();
	$args['post_type'] = isset( $args['post_type'] ) ? esc_attr( $args['post_type'] ) : 'post';
	$args['paged'] = esc_attr( $_POST['page'] );
	$args['post_status'] = 'publish';

	ob_start();
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();
		be_post_summary();
	endwhile; endif; wp_reset_postdata();
	$data = ob_get_clean();
	wp_send_json_success( $data );
	wp_die();
}
add_action( 'wp_ajax_be_ajax_load_more', 'be_ajax_load_more' );
add_action( 'wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more' );
/**
 * Javascript for Load More
 *
 */
function be_load_more_js() {

	global $wp_query;
	$args = array(
		'url'   => admin_url( 'admin-ajax.php' ),
		'query' => $wp_query->query,
	);
			
	wp_enqueue_script( 'be-load-more', get_stylesheet_directory_uri() . '/js/load-more.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( 'be-load-more', 'beloadmore', $args );
	
}
add_action( 'wp_enqueue_scripts', 'be_load_more_js' );
?>