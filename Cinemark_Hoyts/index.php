<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font-Awesome! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicion -->

    <!-- CSS -->
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./assets/logo_cinemark.png" alt="Logo" width="225" height="60"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cartelera">PELICULAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/candy.php">CANDY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/sala.php">SALAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pages/login.html">CINECLUB</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <!-- INICIO CARRUSEL -->
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/home/1.png" class="d-block  h-50 w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/4.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/5.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/6.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/7.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/8.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/home/9.png" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- FIN CARRUSEL -->

        <!-- INDICADOR -->
        <section class="indicaciones">
            <div class="pasos">
                <i class="fa-regular fa-hand-pointer"></i>
                <p>CLICK EN LA PELÍCULA</p>
            </div>
            <div class="pasos">
                <i class="fa-regular fa-calendar"></i>
                <p>BUSCÁ SALA, FECHA Y HORA</p>
            </div>
            <div class="pasos">
                <i class="fa-solid fa-house"></i>
                <p>VOLVÉ A LA HOME</p>
            </div>
        </section>
        <!-- INDICADOR -->

        <!-- CARTELERA -->
        <div class="flex-box">
            <strong>CARTELERA</strong>
            <input type="text" id="busqueda" placeholder="🔍︎ Busca aquí">
        </div>
        <div id="lista-peliculas"></div>
        <section id="cartelera">

        </section>


    </main>

    <footer>
        <div class="card text-center">
            <div class="card-header">
                CINEMARK HOYTS
            </div>
            <div class="card-body">
                <h5 class="card-title">Visita nuestras redes sociales</h5>
                <div class="redes_sociales">
                    <a href="https://www.youtube.com/c/CinemarkHoyts"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.facebook.com/CinemarkHoyts/?locale=es_LA"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/cinemarkhoyts/?hl=es"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/CinemarkHoyts?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i
                            class="fa-brands fa-square-twitter"></i></a>
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                <p class="texto_footer">Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <!-- AYUDA -->

    <a href="./pages/ayuda.php" class="boton-ayuda">AYUDA</a>





    <!-- CONEXION CON JS -->
    <script src="./js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>