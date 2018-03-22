<?php

show_admin_bar( false );

//add_theme_support('widgets');

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
        'name' => 'w1-from-text1',
        'id' => 'w1-from-text1-sidebar',
		'before_title'  => '<h3>',
		'after_title'   => "</h3>"
        ) );
	register_sidebar( array(
        'name' => 'w2-from-text1',
        'id' => 'w2-from-text1-sidebar',
		'before_title'  => '<h3>',
		'after_title'   => "</h3>"
        ) );
	register_sidebar( array(
        'name' => 'w3-from-text1',
        'id' => 'w3-from-text1-sidebar',
		'before_title'  => '<h3>',
		'after_title'   => "</h3>"
        ) );
	register_sidebar( array(
        'name' => 'w1-from-text2',
        'id' => 'w1-from-text2-sidebar',
		'before_title'  => '<h2>',
		'after_title'   => "</h2>"
        ) );
	register_sidebar( array(
        'name' => 'w1-from-text',
        'id' => 'w1-from-text-sidebar'
        ) );
    register_sidebar( array(
        'name' => 'w2-from-text',
        'id' => 'w2-from-text-sidebar'
        ) );
    register_sidebar( array(
        'name' => 'w3-from-text',
        'id' => 'w3-from-text-sidebar'
        ) );
    register_sidebar( array(
        'name' => 'w4-from-text',
        'id' => 'w4-from-text-sidebar'
        ) );
	register_sidebar( array(
        'name' => 'w1-from-text3',
        'id' => 'w1-from-text3-sidebar',
		'before_title'  => '<h2>',
		'after_title'   => "</h2>"
        ) );
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Верхнее меню' );
	register_nav_menu( 'bottom', 'Нижнее меню' );
}

add_action( 'wp_enqueue_scripts', 'it_develops_scripts' );
function it_develops_scripts() {	
	// CSS STYLES
	wp_enqueue_style( 'bootstrap.min', get_theme_file_uri( '/css/bootstrap.min.css' ));
	wp_enqueue_style( 'fontElegant', get_theme_file_uri( '/css/fontElegant.css' ));
	wp_enqueue_style( 'prettyPhoto', get_theme_file_uri( '/css/prettyPhoto.css' ));
	wp_enqueue_style( 'flexslider', get_theme_file_uri( '/css/flexslider.css' ));
	wp_enqueue_style( 'animate', get_theme_file_uri( '/css/animate.css' ));
		
	wp_enqueue_style( 'it-develops-style', get_stylesheet_uri() );
	
	// SCRIPTS
	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', null , array('jquery.min'));
	wp_enqueue_script( 'jquery.prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', null , array('jquery.min'));
	wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', null , array('jquery.min'));
	wp_enqueue_script( 'jquery.isotope.min', get_template_directory_uri() . '/js/jquery.isotope.min.js', null , array('jquery.min'));
	wp_enqueue_script( 'sorting', get_template_directory_uri() . '/js/sorting.js');
	wp_enqueue_script( 'jquery.twitter', get_template_directory_uri() . '/js/jquery.twitter.js', null , array('jquery.min'));
	wp_enqueue_script( 'superfish.min', get_template_directory_uri() . '/js/superfish.min.js');
	wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js', null , array('jquery.min'));
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js');
	wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/myscript.js');
}

/**
 * class-wp-bootstrap-navwalker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/*add_filter( 'frontpage_template',  'my_front_page_template' );
function my_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
*/