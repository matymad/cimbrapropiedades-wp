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
    ));
  }
  add_action('init', 'cimbraMenus');
?>