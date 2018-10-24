<?php
  /*
  * Template Name: Corretaje Template
  * Template Post Type: post, page, product
  */
  get_header();
?>
  
<?php while(have_posts()): the_post();?>
<!--SLIDER START-->
<div class="cm-noslider-wrapper service tasacion" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <div class="flex col start cm-flex-service-noslider tasacion">
    <h2><?php the_title(); ?></h2>
    <p>
      <?php echo wp_strip_all_tags( get_the_content() ); ?>
    </p>
    <a class="button highlight" data-scroll="" href="#contact">Haz tu consulta ahora</a>
  </div>
</div>
<?php endwhile; ?>
<!--SLIDER END-->

<!--UF BAND START-->
<div class="cm-uf-band flex row center">Lunes 27 de Agosto de 2018, Valor UF: $29.238,94 CLP | $44.25 USD</div>
<!--UF BAND END-->

<?php
  $post_id = 49;
  $queried_post = get_post($post_id);
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
      <?php   echo $content; ?>
    </ul>
  </div><a class="button normal" data-scroll="" href="#contact">Contáctanos</a>
</div>


<?php get_footer();?>