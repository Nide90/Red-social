<?php
    session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/Comunidades.css">
    <title>Comunidades</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="row nav">

                <!--logo-->
                <div class="col-3">
                    <a href="home.html">
                        <img src="../imagenes/logo.png" width="40" height="40" alt="logo"></a>
                </div>


                <!--buscador-->
                <div class="col-4 offset-1">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 buscador" type="search" placeholder="Buscar"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                    </form>
                </div>

                <!--iconos-->
                <div class="col-1 offset-3">

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <div class="inbox">
                                <li class="nav-item">
                                    <a class="nav-link" href="inbox.html">
                                        <img class="fa fa-envelope navegador"></img>
                                    </a>
                                </li>
                            </div>

                            <div class="amigos">
                                <li class="nav-item">
                                    <a class="nav-link " href="friends.html">
                                        <i class="fas fa-user-friends navegador"></i>
                                    </a>
                                </li>
                            </div>

                            <div class="notif">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-bell navegador"></i>
                                    </a>
                                </li>
                            </div>

                            <div class="config">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cog navegador"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Administrar comunidades</a>
                                        <a class="dropdown-item" href="#">Configurar notificaciones</a>
                                        <a class="dropdown-item" href="#">Cerrar sesión</a>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                <div>
                    <button type="submit" class="button" id="boton-post"><span>Crear Post</span></button>
                </div>
                <br>
                <div id="creador"></div>
                <div id="post-done"></div>
                <div class="card text bg-primary mb-3">

                    <div class="card-body container-fluid">
                        <div class="row">
                            <div class="acciones col-md-1 col-sm-2">
                                <div class="positivo">
                                    <i class="fas fa-volume-up" id="votoPositivo"></i>
                                </div>
                                <div class="negativo">
                                    <i class="fas fa-volume-mute" id="votoNegativo"></i>
                                </div>
                                <div class="comentar">
                                    <i class="fas fa-drum" id="Comentar"></i>
                                </div>
                                <div class="guardar">
                                    <i class="fas fa-bookmark" id="Guardar"></i>
                                </div>
                                <div class="compartir">
                                    <i class="fas fa-broadcast-tower" id="Compartir"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-10">
                                <h4 class="card-title">Titulo del post</h4>
                                <p class="card-text">Contenido del post</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">Posteado por USUARIO hace 20 minutos</div>
                </div>

                <div class="card text bg-primary mb-3">

                    <div class="card-body container-fluid">
                        <div class="row">
                            <div class="acciones col-1">
                                <div class="positivo">
                                    <i class="fas fa-volume-up" id="votoPositivo"></i>
                                </div>
                                <div class="negativo">
                                    <i class="fas fa-volume-mute" id="votoNegativo"></i>
                                </div>
                                <div class="comentar">
                                    <i class="fas fa-drum" id="Comentar"></i>
                                </div>
                                <div class="guardar">
                                    <i class="fas fa-bookmark" id="Guardar"></i>
                                </div>
                                <div class="compartir">
                                    <i class="fas fa-broadcast-tower" id="Compartir"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                <h4 class="card-title">Titulo del post</h4>
                                <p class="card-text">Contenido del post</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">Posteado por USUARIO hace 20 minutos</div>
                </div>

            </div>
            <div class="col-4 offset-1">
                <div class="Descripcion">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi quae vero maxime repudiandae
                        totam atque ut eius? Neque unde dolores maiores officia atque.
                        Quae commodi voluptatibus quam nemo iusto!Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Illum modi quae vero maxime repudiandae totam atque ut eius? Neque unde dolores maiores
                        officia atque.
                        Quae commodi voluptatibus quam nemo iusto!</p>
                </div>

                <br>
                <br>

                <div class="Admin-Mods">
                    Administradores<ul class="Admin">
                        <li>Admin1</li>
                        <li>Admin2</li>
                        <li>Admin3</li>
                    </ul>

                    Moderadores<ul class="Mod">
                        <li>Mod1</li>
                        <li>Mod2</li>
                        <li>Mod3</li>
                    </ul>
                </div>

                <br>
                <br>

                <div>
                    <p class="form-control reglas">No postear links externos</p>

                    <p class="form-control reglas"> No publicar spam</p>

                    <p class="form-control reglas">No publicar contenido discriminatorio, violento o de índole
                        sexual</p>

                    <p class="form-control reglas"> Respetar a todos los integrantes</p>

                    <p class="form-control reglas">Regla predeterminada 5</p>

                    <p class="form-control reglas">Regla definida por Admin</p>

                    <p class="form-control reglas">Regla definida por Admin</p>

                    <p class="form-control reglas">Regla definida por Admin</p>

                </div>

            </div>

        </div>
    </div>
    </div>
    <br>
    <br>
    <hr>
    <footer class="container-fluid">
        <p>Creado para ComIT / Curso PHP 2019</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="../js/Comunidades.js"></script>
</body>

</html>