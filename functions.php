<?php
//Register child theme stylesheet
function theme_enqueue_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts','theme_enqueue_styles', 30);

//Unregister parent stylesheets
function remove_parent_stylesheets() {
    wp_dequeue_style('html5blank');
    wp_deregister_style('html5blank');

    //wp_dequeue_style('normalize');
    //wp_deregister_style('normalize');
}
add_action('wp_enqueue_scripts','remove_parent_stylesheets', 20);

//Unregister parent scripts
function remove_parent_scripts() {
    wp_dequeue_script('conditionizr');
    wp_deregister_script('conditionizr');
    
    wp_dequeue_script('modernizr');
    wp_deregister_script('modernizr');
    
    wp_dequeue_script('html5blankscripts');
    wp_deregister_script('html5blankscripts');
}
add_action('wp_enqueue_scripts','remove_parent_scripts', 20);

//Unregister unnecessary navs
function remove_parent_navs() {
    unregister_nav_menu( 'sidebar-menu' );
    unregister_nav_menu( 'extra-menu' );
}
add_action('init','remove_parent_navs', 20);



if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}


add_action( 'cmb2_admin_init', 'cmb2_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_portfolio_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'metabox',
        'title'         => __( 'Metabox', 'cmb2' ),
        'object_types'  => array( 'post', ), // Post type
        'cmb_styles' => false, // false to disable the CMB stylesheet
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Datum', 'cmb2' ),
        'id'         => $prefix . 'datum',
        'type'       => 'text', // function should return a bool value
    ) );
    
    // Text url
    $cmb->add_field( array(
    'name' => __( 'GitHub URL', 'cmb2' ),
    'id'   => $prefix . 'github_url',
    'type' => 'text',
    ) );
    
    // Text url
    $cmb->add_field( array(
    'name' => __( 'Live URL', 'cmb2' ),
    'id'   => $prefix . 'live_url',
    'type' => 'text',
    ) );
}
?>