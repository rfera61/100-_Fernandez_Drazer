<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MI CINECLUBS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font-Awesome! -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicion -->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <HEADER>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../assets/logo_cinemark.png" alt="Logo" width="225" height="60"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#cartelera">PELICULAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./candy.php">CANDY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sala.php">SALAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.html">CINECLUB</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </HEADER>

    <main>


        <!-- INDICADOR -->
        <section class="indicaciones">
            <div class="pasos">
                <i class="fa-solid fa-computer-mouse"></i>
                <p>DESLIZÁ HACIA ABAJO</p>
            </div>
            <div class="pasos">
                <i class="fa-solid fa-book-open-reader"></i>
                <p>REVISÁ TUS DATOS</p>
            </div>
            <div class="pasos">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p>CERRÁ SESIÓN</p>
            </div>
        </section>
        <!-- INDICADOR -->

        <p id="saludo">¡HOLA! BIENVENIDO A TU CUENTA CINECLUB</p>

        <section class="puntos">
            <h3>TUS PUNTOS CINEFAN - NIVEL I</h3>
            <div>
                <div class="imagen_puntos"><img
                        src="../assets/Cuenta/Rueda_puntos.png"
                        alt="circulo"></div>
                <div class="datos_puntos">TE FALTAN 150 PARA PASAR AL NIVEL II</div>
                <div class="datos_puntos">CONSULTÁ CON NUESTROS ASESORES EN QUE CANJEAR TUS PUNTOS</div>
            </div>
        </section>
        <section class="perfil">

            <form>
                <h3>TU PERFIL</h3>
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NOMBRE Y APELLIDO</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Nombre del usuario">

                        <br>

                        <label for="disabledTextInput" class="form-label">EMAIL</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Email del usuario">

                        <br>

                        <label for="disabledTextInput" class="form-label">GENERO FAVORITO</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Genero favorito del usuario">
                </fieldset>
            </form>


        </section>
        
        <a id="saludo" href="login.html">CERRAR SESIÓN</a>

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

    <a href="./ayuda.php" class="boton-ayuda">AYUDA</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>