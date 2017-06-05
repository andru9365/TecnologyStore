<?php
session_start();
include 'conexion.php';

if (isset($_SESSION['user'])) {
    ?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/materialize.min.js" ></script>
        <script src="js/main.js" ></script>
    </head>
    <body>

        <form action="Funcion.php" method="POST" id="RegModal" class="modal modal-fixed-footer" >
            <div class="modal-content">
                <h5 class="center-align">EDITAR</h5>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <input id="cedula" name="cedu" type="text" class="validate"required>
                        <label for="cedula">Cedula</label>

                    </div>
                     <div class="input-field col s12">
                        <i class="zmdi zmdi-account prefix"></i>
                        <input id="tipo" name="tipo" type="text" class="validate"required>
                        <label for="tipo">Tipo Usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account prefix"></i>
                        <input id="nombre" name="nomb" type="text" class="validate"required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account prefix"></i>
                        <input id="apellido" name="apel" type="text" class="validate"required>
                        <label for="apellido">Apellido</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account prefix"></i>
                        <input id="nombre" name="user" type="text" class="validate"required>
                        <label for="nombre">Usuario</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="zmdi zmdi-lock prefix"></i>
                        <input id="password" name="cont" type="password" class="validate"required>
                        <label for="password">Contraseña</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <input id="correo" name="corr" type="email" class="validate"required>
                        <label for="correo">Correo</label>
<!--                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>-->
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <input id="correo" name="dire" type="text" class="validate"required>
                        <label for="correo">Direccion</label>
<!--                                        <i class="fa fa-envelope-open" aria-hidden="true"></i>-->
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <input id="ciudad" name="ciud" type="text" class="validate"required>
                        <label for="ciudad">Ciudad</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <input id="genero" name="gene" type="text" class="validate"required>
                        <label for="genero">Genero</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-account-box prefix"></i>
                        <br></br>
                        <input id="fecha" name="fech" type="date" class="validate"required>
                        <label for="fecha">Fecha Nacimiento</label>
                    </div>

                </div>

            </div>

            <div class="modal-footer" >
                <button type="submit" name="reg" class="btn btn-primary">
                    <i class="icon-user icon-white"></i> ENVIAR
                </button>


<!--                <input type="submit" name="reg" <a data-position="top" data-tooltip="Enviar"></a>-->

                <a href="#!" class="modal-action modal-close waves-effect btn-flat tooltipped" data-position="top" data-tooltip="Cancelar"><i class="zmdi zmdi-close"></i></a>


            </div>


        </form>
                <nav class="NavBar full">
            <div class="row">
                <div class="tittles NavBar-logo col s12 m3">Technology Store</div>
                <ul class="NavBar-links col m9">
                    <li><a href="productos.php" class="waves-effect" >CATALOGO</a></li>
                    <li><a href="carritodecompras.php" class="waves-effect" >CARRO DE COMPRAS</a></li>
                    <li><a href="#RegModal" class="waves-effect modal-trigger">EDITAR PERFIL</a></li>	
                </ul>
                <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
            </div>
        </nav>
        
   <?php
}else{
	echo '<script> window.location="index.php";</script>';
}
?>

            </body>
</html>