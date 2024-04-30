<?php
// Enqueue styles and scripts
function my_theme_enqueue_styles() {
    // Estilos
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Área de Widgets', 'my_theme' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Añade widgets aquí para personalizar tu sitio.', 'my_theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}add_action( 'widgets_init', 'my_theme_widgets_init' );