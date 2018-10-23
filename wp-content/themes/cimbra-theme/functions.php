<?php  
  //STYLES
  function cimbraStyles(){
    //REGISTER STYLES
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.min.css' , array(), '8.0');
    wp_register_style('general', get_template_directory_uri() . '/css/cm-styles.min.css' , array('normalize'), '1.0');
    //CALL TO STYLES
    wp_enqueue_style('general');
  }
  add_action( 'wp_enqueue_scripts', 'cimbraStyles');

  //NAVIGATION
  function cimbraMenus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu', 'cimbra'),
      'social-menu' => __('Social Menu', 'cimbra'),
      'footer-social-menu' => __('Footer Social Menu', 'cimbra'),
      'footer-contact-menu' => __('Footer Contact Menu', 'cimbra'),
    ));
  }
  add_action('init', 'cimbraMenus');

  //CUSTOM ATTRIBUTES FOR MENU LINKS
  function add_menu_atts( $atts, $item, $args ) {
    if( $args->theme_location == 'header-menu' ) {
      $atts['data-scroll'] = 'true';
    }
    if ( $args->theme_location == 'footer-social-menu' ){
      $atts['class'] = 'cm-link';
    }
    return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3 );
  
  //CUSTOM CLASSES FOR MENU LINKS
  function classCustomMenu($classes, $item, $args) {
    if($args->theme_location == 'footer-contact-menu') {
      $classes[] = 'flex row start';
    }
    if($args->theme_location == 'header-menu'){
      $classes[] = 'cm-link-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'classCustomMenu', 1, 3);
  
?>