<!--TEMPLATE DESCRIPTION-->
<?php 
  /*
  * Template Name: Servicio Template
  * Template Post Type: post, page, product
  */
?>

<!--HEADER THEME-->
<?php
  get_header();
?>

<!-- FUNCTION QUERY DATA-->
<?php

  $postQuery;
  $postTitle;
  $postContent;
  $postId;
  $postFeatImg;
  $postBtnText;
  $postBtnLink;

  function gettingPostData($thisPost){
    global $post;
    $post_slug=$post->post_name;
    $currentService = "servicio-" . $post_slug; 
    $mainCatID = get_cat_ID( $currentService );

    $args = array(
      'posts_per_page' => 1,
      'category__and' => array( $mainCatID, $thisPost )
    );
    $postQuery = new WP_Query( $args );
    while( $postQuery->have_posts() ):
      $postQuery->the_post();
      global $postTitle;
      global $postContent;
      global $postId;
      global $postFeatImg;
      global $postBtnText;
      global $postBtnLink;
      $postTitle = get_the_title();
      $postContent = get_the_content();
      $postId = get_the_ID();
      $postFeatImg = get_the_post_thumbnail_url($postId);
      $postBtnText = get_post_meta($postId, 'texto-boton', true);
      $postBtnLink = get_post_meta($postId, 'enlace-boton', true);
    endwhile;
    //CLEAN QUERY POST
    wp_reset_postdata();
  }
?>

<!--GETTING BANNER CATEGORY POST-->
<?php
  $banner = get_cat_ID('banner');
  $hola = gettingPostData($banner);
?>

  <!--SLIDER -->
  <div class="cm-noslider-wrapper service corretaje" style="background-image: url(<?php echo $postFeatImg; ?>);">
    <div class="flex col start cm-flex-service-noslider">
      <h2>Servicios<br /><?php echo $postTitle; ?></h2>
      <p>
        <?php echo $postContent; ?>
      </p>
      <a class="button highlight" data-scroll="" href="<?php echo $postBtnLink; ?>"><?php echo $postBtnText; ?></a>
    </div>
  </div>
  <!--UF BAND-->
  <div class="cm-uf-band flex row center">Lunes 27 de Agosto de 2018, Valor UF: $29.238,94 CLP | $44.25 USD</div>

<!--GETTING LISTA CATEGORY POST-->
<?php
  $list = get_cat_ID('lista');
  gettingPostData($list);
?>
<!--SERVICE FEATURES-->
<div class="flex col center cm-service-features">
  <h3><?php echo $postTitle; ?></h3>
  <div class="cm-serv-feat-wrapper">
    <?php echo $postContent; ?>
  </div>
  <a class="button normal" data-scroll="" href="<?php echo $postBtnLink; ?>"><?php echo $postBtnText; ?></a>
</div>

<!--GETTING DESCRIPCION CATEGORY POST-->
<?php
  $content = get_cat_ID('descripcion');
  gettingPostData($content);
?>
<!--SERVICE CONTENT-->
<div class="flex row center cm-service-expand">
  <div class="cm-service-exp-img corretaje" style="background-image: url(<?php echo $postFeatImg; ?>);"></div>
  <article class="cm-service-article">
    <h4>¿En qué consiste?</h4>
    <h5><?php echo $postTitle; ?></h5>
    <p>
      <?php echo $postContent; ?>
    </p>
  </article>
</div>

<!--CONTACT SECTION-->
<?php
  include('contact.php');
?>

<!--FOOTER THEME-->
<?php
  get_footer();
?>