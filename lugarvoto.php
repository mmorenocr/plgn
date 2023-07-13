<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Gran Nicoya</title>

    <?php 
        /* require_once "padron/scripts.php" */
        include "code/padron_css.html";
    ?>
    
</head>
<body>

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
                    <li><a href="lugarvoto.php" class="active" id="m4">Dónde voto?</a></li>
                    <!-- <li><a href="calendario.php" id="m5">Calendario 2024</a></li> -->
                    <li><a href="comite.php" id="m6">Comité Ejecutivo</a></li>
                    <li><a href="publicaciones.php" id="m7">Publicaciones</a></li>
                    <li><a href="contacto.php" id="m8">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main"> 

        <!-- =======  ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('lib/img/foto_iglesia.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Dónde voto? Elecciones Municipales 2024-2028</h2>
                <ol>
                <li><a href="index.php">Home</a></li>
                <li>Dónde voto?</li>
                </ol>

            </div>
        </div>
    </main>

    <section class="bg-danger bg-opacity-10">
        <div>
            <div class="container" >
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card text-left">
                            <div class="card-header text-center align-items-center"> <br>
                                <h2 class="text-danger">Consulte su lugar y mesa de votación</h2>
                                <h3 class="text-success"> Padrón Electoral provisto por el Tribunal de Elecciones</h3><br>
                            </div>
                            <div class="card-body">
                                <div id="tablaDatatable"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <?php include "code/footer.html" ?>
    </footer>

    <!--  JS File -->
    <?php include "code/padron_js.html" ?>

    </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDatatable').load('lib/crud/datatable/tabla.php');
    });
</script>
