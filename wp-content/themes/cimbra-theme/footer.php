    <!--FOOTER-->
    <footer class="cm-footer flex row between">
      <div class="flex col start">
        <p>Síguenos en nuestras redes sociales</p>
        <?php
          $footerSocialMenu = array(
            'theme_location' => 'footer-social-menu',
            'container' => false,
            'items_wrap' => '<div class="flex row start">%3$s</div>',
          );
          wp_nav_menu( $footerSocialMenu );
        ?>
        <p class="direct">O contáctanos directamente</p>
        <?php
          $footerContactMenu = array(
            'theme_location' => 'footer-contact-menu',
            'container' => false,
            'items_wrap' => '<div class="flex row start">%3$s</div>',
          );
          wp_nav_menu( $footerContactMenu );
        ?>
      </div>
      <a class="cm-footer-logo" href="<?php echo esc_url( home_url('/') );?>">
        <img alt="cimbra logo" src="<?php echo get_template_directory_uri() . '/img/'?>logo-cimbra.svg" />
      </a>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>