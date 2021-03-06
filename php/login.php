<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Red social: Iniciar sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/Login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="flotante col-lg-4 col-md-4 col-sm-4 col-8  offset-2">
                <div class=imagen>
                    <img src="../img/logo.png" alt="red social" style="width:50px;height:55px;">
                </div>

                <h2 class=titulo>Iniciar sesión</h2><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10 offset-1">

                            <!--formulario-->
                            <form action="../php/usuarios.php" method="post">
                                <input type="text"  placeholder="Username" name="username"
                                    id="user" class="form-control"><br>
                                <input type="password" id="password" placeholder="Contraseña" id="login-password"
                                    class="form-control">
                                <br>
                                <button type="submit" class="button" id="boton-loguear"><span>Iniciar
                                        sesión</span></button>
                            </form>
                        </div>
                    </div>
                    <br>
                    ¿No tenes cuenta? <a href="signin.html">Registrate</a>!
                </div>
                <br>

                <!--footer-->
                <div class="footer">
                    <p>Creado para ComIT (2019)</p>
                </div>


                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous">
                    </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                    crossorigin="anonymous">
                    </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                    crossorigin="anonymous">
                    </script>
                <script src="../js/login.js"></script>
</body>

</html>