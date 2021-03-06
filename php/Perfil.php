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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../estilos/Perfil.css">
  <title>Music Village: perfil</title>
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="row nav">

        <!--logo-->
        <div class="col-3">
          <a href="home.html">
            <img src="../img/logo.png" width="50" height="50" alt="logo"></a>
        </div>

        <!--buscador-->
        <div class="col-4 offset-1">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
          </form>
        </div>

        <!--iconos-->
        <div class="col-1 offset-3">

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">



              <div class="amigos">
                <li class="nav-item">
                  <a class="nav-link" href="friends.html">
                    <i class="fas fa-user-friends"></i>
                  </a>
                </li>
              </div>



              <div class="notif">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-bell"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><img src="../img/001.png" width="30" height="30" alt="logo">
                      Username2 comentó tu post</a>
                    <a class="dropdown-item" href="#"><img src="../img/Pikachu.png" width="30" height="30" alt="logo">
                      Username3 comentó tu post</a>
                    <a class="dropdown-item" href="#">notif generica</a>
                    <a class="dropdown-item" href="#">notif generica</a>
                    <a class="dropdown-item" href="#">notif generica</a>
                  </div>
                </li>
              </div>

              <div class="config">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-cog"></i>
                  </a>


                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="crear-comunidades.php">Administrar comunidades</a>
                    <a class="dropdown-item" href="notificaciones.php">Configurar notificaciones</a>
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
  <!--navbar-->


  <!--foto,estado-->
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="contenido col-2">
        <div class="editarperfil">
          <a href="editarperfil.php"><i class="far fa-edit"></i></a>
        </div>
        <img src="../img/155.png" alt="username1" style="width:128px;height:128px;">
      </div>

      <div class="lateral col-7">
        <div class="inbox">
          <h1>Username1 <i class="far fa-envelope" id="inbox"></i></h1>
        </div>
        <p class="estado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto animi voluptatum odit
          autem quis ut expedita dolore deserunt in.</p>
      </div>
      <!--foto,estado-->
      <!--reputacion-->
      <div class="lateral col-2">
        <div class="reputacion">
          <div class="positivoo">
            <p><i class="fas fa-volume-up"></i> 20</p>
          </div>
          <div class="negativoo">
            <p><i class="fas fa-volume-off"></i> 10</p>
          </div>
        </div>
      </div>
      <!--reputacion-->
    </div>


    <!--actividad/inbox-->
    <div class="container-fluid">
      <div class="row">
        <div class="contenido col-8">
          <div id="crearmensaje">
            <h3> <i class="fas fa-times" id="cerrar"></i> Enviar mensaje</h3>
            <form>
            <form action="mensaje" method="GET">
            <input type="text" placeholder="Para:">
            <br>
            <br>
            <input type="text" placeholder="Asunto:">
            <br>
            <br>
            <textarea placeholder="Escribir mensaje" textarea rows="5" cols="90" style="resize: none"></textarea>
            <br>
            <br>
            <button class="button" style="vertical-align:middle"><span>Enviar</span></button>
            </form>
          </div>
          <div id="inboxdestino"></div>
          <div id="actividad">
            <h3>Actividad</h3>
            <div class="card text bg-primary mb-3">
              <div class="card-body container-fluid">
                <div class="row">
                  <div class="acciones col-1">
                    <div class="positivo">
                      <i class="fas fa-volume-up"></i>
                    </div>
                    <div class="negativo">
                      <i class="fas fa-volume-mute"></i>
                    </div>
                    <div class="comentar">
                      <i class="fas fa-drum"></i>
                    </div>
                    <div class="guardar">
                      <i class="fas fa-bookmark"></i>
                    </div>
                    <div class="compartir">
                      <i class="fas fa-broadcast-tower"></i>
                    </div>
                  </div>
                  <div class="col-9">
                    <h4 class="card-title">Titulo del post</h4>
                    <p class="card-text">Contenido del post</p>
                  </div>
                </div>
              </div>
              <div class="card-header">Posteado por username1 hace 20 minutos</div>
            </div>
          </div>
        </div>

        <!--barra lateral-->
        <div class="lateral col-3">
          <h3>Gustos</h3>
          <ul>
            <li>Indie</li>
            <li>Pop</li>
            <li>EDM</li>
          </ul>
          <h3>Comunidades</h3>
          <ul>
            <li><a href="comunidades.html">Amantes del Pop</a></li>
            <li><a href="comunidades.html">Fans del rock en español</a></li>
          </ul>
          <h3>Amigos</h3>
          <ul>
            <li> <img src="../img/001.png" width="40" height="40" alt="logo"> <a href="username2.html">Username2</a>
            </li>
            <li> <img src="../img/Pikachu.png" width="40" height="40" alt="logo"> <a href="username2.html">Username3</a>
            </li>
            <li> <img src="../img/Charmander.png" width="40" height="40" alt="logo"> <a
                href="username2.html">Username4</a></li>
          </ul>
          <a href="friends.html">Ver lista de amigos</a></li>
          <hr>
          <div class="favoritos"><h3>Favoritos</h3> 
           <p>!!!</p>
          </div>
        </div>
      </div>
    </div>
    <br>

    <!--footer-->
    <div class="footer">
      <p>Creado para ComIT (2019)</p>
    </div>
    <!--footer-->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
    <script src="../js/perfil.js">
    </script>
</body>

</html>