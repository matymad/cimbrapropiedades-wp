<!--CONTACT-->
<section class="cm-contact" id="contacto">
  <div class="flex row between cm-flex-contact">
    <h2 class="flex row start">Escríbenos y conversemos acerca de tu espacio.</h2>
    <form action="mailer.php" class="flex col end cm-contact-form" method="post">
      <h4>Formulario de Contacto</h4>
      <div class="flex row end cm-flex-form"><label>Nombre:*</label><input id="name" name="name" type="text" /></div>
      <div class="flex row end cm-flex-form"><label>Teléfono:*</label><input id="phone" name="phone" type="text" /></div>
      <div class="flex row end cm-flex-form"><label>Correo:*</label><input id="email" name="email" type="email" /></div>
      <div class="flex row end cm-flex-form"><label>Asunto:</label><input id="subject" name="subject" type="text" /></div>
      <div class="flex row end cm-flex-form"><label>Mensaje:</label><textarea id="message" name="message" rows="7"></textarea></div><button
        class="normal" type="submit">Enviar</button><span class="cm-note">Te contactaremos de vuelta en un plazo max.
        de 24hrs (hábiles)</span>
    </form>
  </div>
</section>