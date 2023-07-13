<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La Gran Nicoya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--  CSS Files -->
  <?php include "code/global_css.html" ?>

</head>

<body class="page-contact">

   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-evenly">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">
          <span class="text-success">Partido</span> &nbsp;
          <span class="text-danger">La Gran</span> &nbsp;
          <span class="text-success">Nicoya</span>
        </h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php" id="m1">Home</a></li>
          <li><a href="partido.php" id="m2">Partido</a></li>
          <li class="dropdown"><a href="papeleta.php" id="m3"><span>Papeleta</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="papeleta.php#alcaldia">Alcaldía</a></li>
              <li><a href="papeleta.php#regidores">Regidores</a></li>
              <li><a href="papeleta.php#sindicos">Síndicos</a></li>
              <li class="dropdown"><a href="#"><span>Consejos de Distrito</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Nicoya</a></li>
                  <li><a href="#">Mansión</a></li>
                  <li><a href="#">San Antonio</a></li>
                  <li><a href="#">Quebrada Honda</a></li>
                  <li><a href="#">Sámara</a></li>
                  <li><a href="#">Nosara</a></li>
                  <li><a href="#">Belén de Nosarita</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="lugarvoto.php" id="m4">Dónde voto?</a></li>
          <!-- <li><a href="calendario.php" id="m5">Calendario 2024</a></li> -->
          <li><a href="comite.php" id="m6">Comité Ejecutivo</a></li>
          <li><a href="publicaciones.php" id="m7">Publicaciones</a></li>
          <li><a href="contacto.php" class="active" id="m8">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('lib/img/foto_iglesia.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contáctenos</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contacto</li>
        </ol>

      </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Ubicación:</h4>
                <p>Casa Club, 100 mts Este y 50 mts Sur de la Casa Cural <br>
                   Nicoya, Guanacaste. Costa Rica
                </p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Correo electrónico:</h4>
                <p>info@lagrannicoya.cr</p>
              </div>
            </div>

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Teléfono:</h4>
                <p>+506 8888 8888</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Su mensaje a sido enviado. Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <?php include "code/footer.html" ?>
  </footer>

  <!--  JS Files -->
  <?php include "code/global_js.html" ?>

</body>

</html>