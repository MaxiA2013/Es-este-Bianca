<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- inicio nav-->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="indexo.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Atención
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Turnos</a></li>
                            <li><a class="dropdown-item" href="#">Doctores</a></li>
                            <li><a class="dropdown-item" href="areas.php">Areas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistas/paginas/login.php">Iniciar Sesion</a>
                    </li>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
            </div>
        </div>
    </nav><!-- final nav -->


    <div id="carouselExampleCaptions" class="carousel slide"> <!-- inicio carrusel informacion -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/6511c213dadb6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/doctores_marketing_negocios-1024x683.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/tres-tipos-de-medicos.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> <!-- final carrusel informacion -->

    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Bienvenido</h1>
        <p>Busca tu turno o doctor segun tus preferencias</p>
    </div>


    <div class="container">
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Area:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Doctor:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Fecha:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Hora:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

<!-- cartes de area -->
    <section class="space light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-style1 mb-5">
                        <h2>Servicios de Calidad para usted</h2>
                    </div>
                </div>
            </div>

            <!-- Carousel Bootstrap --> <!-- tarjetas de areas -->
            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <div class="service-block">
                                    <img src="images/service-icon1.png" class="img-fluid" alt="Dental Care">
                                    <h3>Dental Care</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore</p>
                                    <a href="#" class="btn btn-dark">READ MORE</a>
                                    <div class="service-bg-icon mt-3">
                                        <img src="images/services-bg1.png" class="img-fluid" alt="Service Background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <div class="service-block">
                                    <img src="images/service-icon2.png" class="img-fluid" alt="Eye Care">
                                    <h3>Eye Care</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore</p>
                                    <a href="#" class="btn btn-dark">READ MORE</a>
                                    <div class="service-bg-icon mt-3">
                                        <img src="images/services-bg2.png" class="img-fluid" alt="Service Background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-center">
                                <div class="service-block">
                                    <img src="images/service-icon3.png" class="img-fluid" alt="Allergic Issue">
                                    <h3>Allergic Issue</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore</p>
                                    <a href="#" class="btn btn-dark">READ MORE</a>
                                    <div class="service-bg-icon mt-3">
                                        <img src="images/services-bg3.png" class="img-fluid" alt="Service Background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <p class="service-help_link">
                    Contact us for better help and services.
                    <a href="#">Let’s get started</a>
                </p>
            </div>
        </div>
    </section>
<!-- cartas de area -->




    <footer class="footer">
        <div class="container-footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Clinica San Pedro</h4>
                    <ul>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Politica de Privacidad</a></li>
                        <li><a href="#">Terminos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Atención al Cliente</h4>
                    <ul>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Soporte</a></li>
                        <li><a href="#">Contactanos</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Siguenos</h4>
                    <div class="social-links">
                        <a href="#"><img src="icons/facebook.svg" alt="Facebook"></a>
                        <a href="#"><img src="icons/twitter.svg" alt="Twitter"></a>
                        <a href="#"><img src="icons/instagram.svg" alt="Instagram"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Clinica San Pedro - Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <!-- Jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>

</html>