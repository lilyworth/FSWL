<?php 

//menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//custom post tyles
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'exhibitions',
    array(
      'labels' => array(
        'name' => __( 'exhibitions' ),
        'singular_name' => __( 'exhibition' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

?>