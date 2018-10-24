<?php get_header(); ?>

  <?php while(have_posts()): the_post();?>

  <!--SLIDER START-->
  <div class="cm-noslider-wrapper service tasacion" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
    <div class="flex col start cm-flex-service-noslider tasacion">
      <h2><?php the_title(); ?></h2>
      <p>
        <?php echo wp_strip_all_tags( get_the_content() ); ?>
      </p>
      <a class="button highlight" data-scroll="" href="#contact">Descargar PDF Resumen</a>
    </div>
  </div>
  <?php endwhile; ?>
  <!--SLIDER END-->

  <!--UF BAND START-->
  <div class="cm-uf-band flex row center">Lunes 27 de Agosto de 2018, Valor UF: $29.238,94 CLP | $44.25 USD</div>
  <!--UF BAND END-->

<?php get_footer(); ?>