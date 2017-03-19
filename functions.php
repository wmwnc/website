<?php
function my_theme_enqueue_styles() {

    $parent_style = 'dyad-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'dyad-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




/**
 * Register counter widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dyad_child_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Counter', 'dyad-child' ),
		'id'            => 'counter-bar',
		'description'   => esc_html__( 'Displays in header area.', 'dyad-child' ),
		'before_widget' => '<aside id="%1$s" class="count-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="counter-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dyad_child_widgets_init' );
?>
