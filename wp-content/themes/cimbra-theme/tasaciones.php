<?php
  /*
  * Template Name: Tasaciones Template
  * Template Post Type: post, page, product
  */
  get_header();
?>

<?php while(have_posts()): the_post();?>
<!--SLIDER START--> 
<!-- BG BANNER FROM CURRENT PAGE FEATURED IMAGE -->
<div class="cm-noslider-wrapper service tasacion" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="flex col start cm-flex-service-noslider tasacion">
    <!-- TITLE FROM CURRENT PAGE TITLE -->
    <h2><?php the_title(); ?></h2>
    <p>
      <!-- TEXT FROM CURRENT PAGE TEXT -->
      <?php echo wp_strip_all_tags( get_the_content() ); ?>
    </p>
    <a class="button highlight" data-scroll="" href="<?php echo get_post_meta($post->ID, 'button-link', true); ?>"><?php echo get_post_meta($post->ID, 'button-text', true); ?></a>
  </div>
</div>
<?php endwhile; ?>
<!--SLIDER END-->

<!--UF BAND START-->
<div class="cm-uf-band flex row center">Lunes 27 de Agosto de 2018, Valor UF: $29.238,94 CLP | $44.25 USD</div>
<!--UF BAND END-->

<!--GET CURRENT SERVICE FEATURES DATA-->
<?php
  $post_list_id = 49;
  $queried_post = get_post($post_list_id);
  $content = $queried_post->post_content;
  $title = $queried_post->post_title;
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
?>

<!--SERVICE FEATURES-->
<div class="flex col center cm-service-features">
  <h3><?php echo $title;?></h3>
  <div class="cm-serv-feat-wrapper">
    <ul class="flex col start">
      <?php echo $content; ?>
    </ul>
  </div>
  <a class="button normal" data-scroll="" href="<?php echo get_post_meta($post_list_id, 'button-link', true); ?>"><?php echo get_post_meta($post_list_id, 'button-text', true); ?></a>
</div>

<!--GET CURRENT SERVICE EXPAND DATA-->
<?php
  $post_exp_id = 52;
  $queried_post_exp = get_post($post_exp_id);
  $content_exp = $queried_post_exp->post_content;
  $title_exp = $queried_post_exp->post_title;
  $content_exp_p = apply_filters('the_content', $content_exp);
  $content_exp_p = str_replace(']]>', ']]&gt;', $content_exp);
  $exp_img_feat = get_the_post_thumbnail_url($post_exp_id);
?>

<!--SERVICE EXPAND-->
<div class="flex row center cm-service-expand">
  <div class="cm-service-exp-img corretaje" style="background-image: url(<?php echo $exp_img_feat ?>);"></div>
  <article class="cm-service-article">
    <h4><?php echo $title_exp; ?></h4>
    <h5><?php the_title(); ?></h5>
    <p><?php echo $content_exp_p; ?></p>
  </article>
</div>

<!--TEST CATEGORIES -->

<?php
/**
 * Template Name: Category Custom Page
 */
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main"> 
    <?php
      $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => 'gricel',
          'posts_per_page' => 5,
          'paged' => $paged,
      );
      $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php
        if ( has_post_thumbnail() ) :
          the_post_thumbnail();
        endif;
      ?>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </article>
    <?php
      endwhile;
      wp_pagenavi(
        array(
          'query' => $arr_posts,
        )
      );
      endif;
    ?>
  </main><!-- .site-main -->
</div><!-- .content-area -->


<?php include('contact.php'); ?>

<?php get_footer();?>