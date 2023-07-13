<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>La Gran Nicoya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php 
    include "code/global_css.html";
    include "code/papeleta_css.html";
  ?>

</head>

<body class="page-team">

  <!-- ======= Header ======= -->
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
          <li class="dropdown"><a href="papeleta.php" class="active" id="m3"><span>Papeleta</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#alcaldia">Alcaldía</a></li>
              <li><a href="#regidores">Regidores</a></li>
              <li><a href="#sindicos">Síndicos</a></li>
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
          <li><a href="contacto.php" id="m8">Contacto</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/foto_iglesia.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Papeleta 2024-2028</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Papeleta</li>
        </ol>

      </div>
    </div>

    <section id="team" class="team bg-danger bg-opacity-10"">
      <div class="container" data-aos="fade-up">

        <!-- Alcaldía 2024-2028 -->
        <?php include "code/team_alcaldia.html" ?>

        <!-- Regidores 2024-2028 -->
        <?php include "code/team_regidores.html"?>

        <!-- Sindicos 2024-2028 -->
        <?php include "code/team_sindicos.html" ?>

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