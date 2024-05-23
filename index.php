<?php include("MainAdmin/templates/bd.php");
$sentence = $conexion->prepare("SELECT * FROM tbl_banners ORDER BY ID DES limit 1");
$sentence->execute();
$lista_sentencia = $sentence->fetchAll(PDO::FETCH_ASSOC);
print_r($lista_sentencia)

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> Restaurante</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#chef">Chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonio">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#horario">Horarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Seccion banner -->
    <section id="inicio" class="container-fluid p-0">
        <div class="banner-img" style="position: relative; background:url('images/slider-image.jpg') center/cover no-repeat; height:400px;">
            <div class="banner-text" style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); text-align:center; color:#fff">
                <?php foreach ($lista_sentencia as $banner) { ?>
                    <h1><?php echo $banner['titulo']; ?></h1>
                    <p><?php echo $banner['descripcion']; ?></p>
                    <a href="<?php echo $banner['link']; ?>" class="btn btn-primary">Menu</a>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Seccion Presentacion -->
    <section id="id" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white">
            <br />
            <h2>Bienvenido</h2>
            <p>
                Deléitate con cada bocado: Tu destino gastronómico de excelencia.
            </p>
            <br />
        </div>
    </section>
    <!-- Seccion personal -->
    <section id="chef" class="container mt-4 text-center">
        <h2>Chefs</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/colaboradores/team-black-image1.jpg" class="card-img-top" alt="Chef preparando comida">

                    <div class="card-body">
                        <h5 class="card-title">Cristian</h5>
                        <p class="card-text">Soy el chef Cristian</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark md-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/colaboradores/team-white-image3.jpg" class="card-img-top" alt="Chef preparando comida">

                    <div class="card-body">
                        <h5 class="card-title">Carlos</h5>
                        <p class="card-text">Soy el chef Carlos</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark md-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/colaboradores/team-black-image2.jpg" class="card-img-top" alt="Chef preparando comida">

                    <div class="card-body">
                        <h5 class="card-title">Esteban</h5>
                        <p class="card-text">Soy el chef Esteban</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark md-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-dark md-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seccion testimonios -->
    </section>
    <section id="testimonio" class="bg-light py-5">
        <div class="container">
            <h2 class="tex-center mb-4">Testimonios</h2>
            <div class="row">
                <div class="col md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Muy buena comida</p>
                        </div>
                        <div class="card-footer text-muted">
                            Oscar Uh
                        </div>
                    </div>
                </div>
                <div class="col md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Muy buena comida</p>
                        </div>
                        <div class="card-footer text-muted">
                            Oscar Uh
                        </div>
                    </div>
                </div>
                <div class="col md-6 d-flex">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <p class="card-text">Muy buena comida</p>
                        </div>
                        <div class="card-footer text-muted">
                            Oscar Uh
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seccion menu -->
    <section id="menu" class="container mt-4">
        <h2 class="text-center">Menu (Nuestra recomendacion)</h2>
        <br />
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/fried-meat.jpg" alt=" Tiernos trozos de carne frita acompañados de papas doradas y cebolla caramelizada, sobre una cama de verduras frescas y sazonadas" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Tiernos trozos de carne frita acompañados de papas doradas y cebolla caramelizada, sobre una cama de verduras frescas y sazonadas</h5>
                        <p class="card-text"><strong>Precio:</strong>$17</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/nuggets-with-cream.jpg" alt="Nuggets rellenos de crema y jamón, servidos con rodajas de piña" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nuggets rellenos de crema y jamón, servidos con rodajas de piña</h5>
                        <p class="card-text"><strong>Precio:</strong>$14</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/grilled-beef.jpg" alt="Jugoso filete de res a la parrilla, acompañado de una exquisita selección de champiñones frescos y verduras asadas, coronado con una salsa especial de la casa." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Jugoso filete de res a la parrilla, acompañado de una exquisita selección de champiñones frescos y verduras asadas, coronado con una salsa especial de la casa.</h5>
                        <p class="card-text"><strong>Precio:</strong>$20</p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card">
                    <img src="images/menu/spaghetti.jpg" alt="Tallarines al dente envueltos en una sedosa salsa de ostras, acompañados de una exquisita selección de mariscos frescos del mar." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Tallarines al dente envueltos en una sedosa salsa de ostras, acompañados de una exquisita selección de mariscos frescos del mar.</h5>
                        <p class="card-text"><strong>Precio:</strong>$25</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seccion contacto -->
    <section id="contacto" class="container mt-4">
        <h2>Contacto</h2>
        <p>Estamos Aqui para servirle</p>
        <form action="?" method="post">
            <div class="mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escribe tu nombre..." required>
            </div>
            <div class="mb-3">
                <label for="email">Correo Electronico:</label>
                <input type="email" name="email" class="form-control" placeholder="Escribe tu correo electronico" required>
                <br />
            </div>
            <div class="mb-3">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" class="form-control" cols="50" rows="6" required></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar mensaje">
        </form>
    </section>
    <br />
    <!-- Seccion horarios -->
    <div id="horario" class="text-center bg-light p-4">
        <h3 class="mb-4">Horario de atencion</h3>
        <div>
            <p><strong>Lunes a Viernes</strong></p>
            <p><strong>9:00am - 10:00pm</strong></p>
        </div>
        <div>
            <p><strong>Sabado</strong></p>
            <p><strong>12:00am - 5:00pm</strong></p>
        </div>
        <div>
            <p><strong>Domingo</strong></p>
            <p><strong>7:00am - 2:00pm</strong></p>
        </div>
    </div>


    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2024 Restaurante Todos los derechos reservados</p>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/97a646fdfb.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>