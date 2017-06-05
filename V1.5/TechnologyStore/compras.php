<?php
session_start();
include 'conexion.php';

if (isset($_SESSION['user'])) {
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Carrito de Compras</title>
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <script type="text/javascript"  href="./js/scripts.js"></script>
    </head>
    <body>

        
        <nav class="NavBar full">
            <div class="row">
                <div class="tittles NavBar-logo col s12 m3" >Technology Store</div>
                <ul class="NavBar-links col m9">
                    <li><a href="index.php" class="waves-effect" >INICIO</a></li>
                    <li><a href="productos.php" class="waves-effect ">CATALOGO</a></li>
                    <li><a href="carritodecompras.php" class="waves-effect ">CARRO DE COMPRAS</a></li>
                    <li><a href="SesionExit.php" class="waves-effect modal-trigger">CERRAR SESION</a></li>	

                </ul>
                <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
            </div>
        </nav>
       
        <div class="contenido">
           
            <div class="derecha">
                <form action="Funcion.php" method="POST" id="datosP" >
                    <fieldset class="margen">
                        <h3 style="color:#16a09b;">Datos Personales</h3>
                        <input type="text" placeholder="Cedula" name="cedula" style="width: 400px"required=""><br>
                        <input type="text" placeholder="Nombre" name="nombre" style="width: 200px"required>
                        <input type="text" placeholder="apellido" name="apellido" style="width: 200px"required><br>
                        <input type="text" placeholder="telefono" name="telefono" style="width: 200px"required>
                        <input type="email" placeholder="Correo" name="corr"  class="validate" style="width: 200px"required><br>
                        <input type="text" placeholder="Direccion de Facturación"name="dire"style="width: 400px  "required><br>
                        <input type="text" placeholder="Ciudad"name="Ciudad"style="width: 400px  "required>
                        <h3 style="color:#16a09b;" >Metodo de Pago</h3>



                        <input type="text" placeholder="Numero de Tarjeta" name="NumeroTarjeta" style="width: 400px" required=""><br>
                        <label for="fecha"  style=" text-align:center; font-size:11.5px;">Fecha de caducidad:
                            <input  type="date" name="FechaCaducidad" placeholder="Fecha de caducidad"class="validate"style="width: 290px"required></label><br>
                            <input type="text" placeholder="Codigo de Seguridad" name="CodigoSeguridad" style="width: 400px"required=""><br>
                    </fieldset>
                        <div class="modal-footer">
                <button type="submit" name="buy" class="btn btn-primary">
                    <i class="icon-user icon-white"></i> COMPRAR
                </button>
                            <br></br>

            </div>
                </form>

            </div>



            <div class="tabla" style="width: 50%s">

                <?php
               
                include "conexion.php";

                $arreglo = $_SESSION['carrito'];

                $total = 0;

                $tabla = '<table border="1px" width="50%"><tr>
                <center>
         
		<td>PRODUCTO</td>
		<td>CANTIDAD</td>
		<td>PRECIO</td>
		<td>SUBTOTAL</td>';

                for ($i = 0; $i < count($arreglo); $i++) {

                    $tabla = $tabla . '<tr>
                           
			<td>' . $arreglo[$i]['Nombre'] . '</td>
			<td>' . $arreglo[$i]['Cantidad'] . '</td>
			<td>' . $arreglo[$i]['Precio'] . '</td>
			<td>' . $arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'] . '</td>
			</tr>';

                    $total = $total + ($arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']);

                    
                }
               

                $tabla . '</table>';
                echo $tabla;
               echo '<center><h2 ">Total: ' . $total . '</h2></center>';
                ?>

            </div>
        </div>
<?php
}else{
	echo '<script> window.location="index.php";</script>';
}
?>
        


    </body>
</html>


