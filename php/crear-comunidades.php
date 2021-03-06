<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/Crear-Comunidades.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis|Exo|Handlee|Saira+Semi+Condensed|Satisfy" rel="stylesheet">
    <title>Crear comunidad</title>
    <script src="../js/Crear-Comunidades.js"></script>
</head>
<body>
    
    <div class="jumbotron mb-0 text-center">
        
    </div>

    <form action="Comunidades.html" method="GET">
    <div class="master container-fluid">
        <div class="row">
                <div class="contenido col-8" >
                
                        <br>
                            <h3>Informacion</h3>
                        <br>
            
                        <form>
                            <div class="form-group container-fluid row">
                            <input type="text" class="form-control col-4" id="formGroupExampleInput" placeholder="Nombre de la Comunidad" name="Nombre" >
                            </div>
                        </form>
            
                        <div class="container-fluid row">
                            <select class="custom-select col-4" name="Topico">
                                <option selected>Tópico de la Comunidad</option>
                                <option value="Artista-o-banda">Artista o Banda</option>
                                <option value="Genero">Género</option>
                            </select>
                        </div>
                        <br>
                        <div class="container-fluid row">
                                <textarea class="form-control descripcion-comunidad col-9" name="Descripcion">Descripción</textarea> 
                        </div>
                        <br>
                            <h3>Reglas</h3>
                        <br>
                        <div class="container-fluid row">
                            
                            <p class="form-control col-8 reglas">No postear links externos</p>
                                
                            <p class="form-control col-8 reglas"> No publicar spam</p>
        
                            <p class="form-control col-8 reglas">No publicar contenido discriminatorio, violento o de índole sexual</p>
                                
                            <p class="form-control col-8 reglas"> Respetar a todos los integrantes</p>
        
                            <p class="form-control col-8 reglas">Regla predeterminada 5</p>
                            
                            <input type="text" class="form-control col-8 reglas-usuario" id="formGroupExampleInput"  placeholder="Regla para la comunidad" >
                            
                        </div>
            
                    </div>
                    
                    <div class="lateral col-4">
                        <br>
                        <h3>Editar apariencia</h3>
                        <br>
                        <h4>Icono</h4>
                        <br>
                        <div>
                            <input type="radio" name="icono" value="auriculares">
                            <label><img src="../imagenes/auri.jpg" class= "iconos"></label>
            
                            <input type="radio" name="icono" value="disco">
                            <label><img src="../imagenes/disco.jpg" class= "iconos"></label>
            
                            <input type="radio" name="icono" value="microfono">
                            <label><img src="../imagenes/microfono.jpg" class= "iconos"></label>
            
                            <input type="radio" name="icono" value="parlante">
                            <label><img src="../imagenes/parlante.jpg" class= "iconos"></label>
                        </div>

                        <br>

                        <div class="custom-file container-fluid ">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"> Seleccione una imagen</label>
                        </div>
                        <br>
                        <br>
                        <button id="Crear">Crear Comunidad</button>
                        <br>
                        <br>
                        <footer class="container-fluid">
                                <p>Creado para ComIT / Curso PHP 2019</p>
                        </footer>
                    </div>
        </div>
    </div>
    </form>

    
</body>
</html>