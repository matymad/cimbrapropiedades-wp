<?php 
  /*
  * Template Name: Plantilla para servicios
  * Template Post Type: post, page, product
  */
  //get_header();

  global $post;
  $post_slug=$post->post_name;
  $currentService = "servicio-" . $post_slug; 
  //print $currentService;
  $mainCatID = get_cat_ID( $currentService );
  $list = get_cat_ID('list');

  $args = array(
    'posts_per_page' => 1,
    'category__and' => array( $mainCatID, $list )
  );

  $my_query = new WP_Query( $args );
  while( $my_query->have_posts() ):
    $my_query->the_post();
    the_title();
  endwhile;

  wp_reset_postdata();

  include('contact.php');

  get_footer();
?>
