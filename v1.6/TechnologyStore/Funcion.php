<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
            <?php
            include 'conexion.php';

            if (isset($_POST['reg'])) {
                $cedula = $_POST['cedu'];
                $tipo = $_POST['tipo'];
                $nombre = $_POST['nomb'];
                $apellido = $_POST['apel'];
                $usuario = $_POST['user'];
                $contra = $_POST['cont'];
                $correo = $_POST['corr'];
                $direccion = $_POST['dire'];
                $ciudad = $_POST['ciud'];
                $genero = $_POST['gene'];
                $fecha = $_POST['fech'];

                
                          
//                $enciptar= sha1($contra);

                $sql = "INSERT INTO usuario(cedulaU,TipoU, nombre, apellido, usuario, password, correo, direccion, ciudad, genero, F_nacimiento) VALUES('$cedula','$tipo','$nombre','$apellido','$usuario','$contra','$correo','$direccion','$ciudad','$genero','$fecha')";
                
                $res = mysql_query($sql, $conexion) or die(mysql_error());
                if (!$res) {
                    echo 'Error al registrarse';
                } else {
//                       require 'index.php#LoginModal';

                    require 'index.php';
                    ?>

                    <script>
                        var msg = "El usuario a sido registrado"
                        alert(msg);

                    </script>
                    <?php
                }
            }
            ?>
            <!--                  Boton factura-->
            <?php
            include 'conexion.php';

            if (isset($_POST['buy'])) {
                $Cedula = $_POST['cedula'];
                $Nombre = $_POST['nombre'];
                $Apellido = $_POST['apellido'];
                $City = $_POST['ciud'];
                $Direccion = $_POST['dire'];
                $TipoT = $_POST['TipoTarjeta'];
                $N_tarjeta = $_POST['NumeroTarjeta'];
                $F_Caducidad = $_POST['fec'];
                $C_seguridad = $_POST['CodigoSeguridad'];
                
                $id = $_POST['id'];
                $name = $_POST['nomb'];
                $cantidad = $_POST['cant'];
                $Precio = $_POST['prec'];
                $canti = $_POST['canti'];     
               

                $sql = "INSERT INTO factura(Num_factura, cedulaU, nombre, apellido, ciudad, direccion, Tipo_tarjeta, N_tarjeta, F_caducidad, C_seguridad) VALUES ('','$Cedula','$Nombre','$Apellido','$City','$Direccion','$TipoT','$N_tarjeta','$F_Caducidad','$C_seguridad')";
                $sql= "INSERT INTO detalle_factura(id_Detalle, codigo_Producto, nombre_producto, cantidad, precio, subtotal) VALUES ('','$id','$name','$cantidad','$Precio','$canti')";
                $re = mysql_query($sql, $conexion) or die(mysql_error());


                    if (!$re) {
               
                    echo 'LA COMPRA NO SE PUDO REALIZAR';
                } else {

                    echo '<script>
                        var msg = "COMPRA EXITOSA REVISE SU CORREO"
                        alert(msg);

                    </script>';
                    require 'productos.php';
                    ?>


                    <?php
                }
            }
            ?>       

        </body>
    </html>
