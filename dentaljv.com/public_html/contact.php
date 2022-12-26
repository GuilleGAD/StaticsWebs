<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from matchthemes.com/demohtml/dentalclinic/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2017 22:27:02 GMT -->
<?php require_once("phpCompartido/head.php"); ?>

<body>
  <?php require_once("phpCompartido/subhead.php"); ?>

  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>


  <div class="wrap">
    <div class="container home-apoint">
      <div class="row">
        <div class="col-md-12 home-apoint-text">
          <h2>Contacto</h2>
        </div>
      </div>
      <!--end row-->
    </div>
    <!--end container-->
  </div>
  <!--end wrap-->


  <div class="wrap margin-block">
    <div class="container">

      <div class="row">

        <div class="col-md-12 g-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6810.122485769206!2d-64.19115016577273!3d-31.412438695351376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432987885b1a45b%3A0xeceef6322cbe79d7!2sAv.%20Col%C3%B3n%20290%2C%20X5000%20EPP%2C%20C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1622129649522!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>
      </div>
      <!--end row-->

      <div class="row">
        <div class="col-md-9">

          <header class="home-title">
            <h3>Contactanos</h3>
          </header>


          <div id="contact-container" class="margin-t clearfix">
            <form method="post" id="my-form" action="contact-form.php">

              <input type="text" id="nombre" name="nombre" class="comm-field" placeholder="Nombre" value="" size="22" tabindex="1" aria-required='true' />

              <input type="email" id="email" name="email" class="comm-field" placeholder="Email" value="" size="22" tabindex="2" aria-required='true' />

              <input type="text" id="asunto" name="asunto" class="comm-field" placeholder="Asunto" value="" size="22" tabindex="3" aria-required='true' />

              <textarea id="message2" name="message2" placeholder="Mensaje" rows="9" tabindex="4"></textarea>


              <p class="antispam">Leave this empty: <input type="text" name="url" /></p>

              <input type="submit" value="Enviar Mensaje" id="submit" name="submit" tabindex="5" />

            </form>
          </div>

          <div id="output"></div>

        </div>
        <!--end col-md-9-->

        <div class="col-md-3">

          <header class="home-title">
            <h3>Encontranos</h3>
          </header>

          <div class="margin-t">

            <div class="sidebar-archive">
              <ul>
                <li><img src="images/logos/posicion.png"/><a href="https://goo.gl/maps/6ynWFzYNicYMD7nG7" target="_blank"> Av. Colón 296 1º piso Of. 13 - Córdoba Capital</a></li>
                <li><img src="images/logos/whatsapp.png"/><a href="https://api.whatsapp.com/send?phone=5493516957144&text=Quiero%20solicitar%20un%20turno" target="_blank"> (0351)156957144</a></li>
                <li><img src="images/logos/gmail.png"/> medvaca@gmail.com</li>
                <li><img src="images/logos/facebook.png"/><a href="https://www.facebook.com/Dental-JV-101763618359244" target="_blank"> Tu Mejor Sonrisa</a></li>
                <li><img src="images/logos/instagram.png"/><a href="https://www.instagram.com/dentalj.v/" target="_blank"> Tu Mejor Sonrisa</a></li>

              </ul>
            </div>

          </div>



        </div>
        <!--end col-md-3-->
      </div>
      <!--end row-->


    </div>
    <!--end container-->
  </div>
  <!--end wrap-->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

  </div>
  <!--end mainWrap-->
</body>

<!-- Mirrored from matchthemes.com/demohtml/dentalclinic/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2017 22:27:15 GMT -->

</html>
