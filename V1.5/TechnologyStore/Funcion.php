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


                $sql = "INSERT INTO usuario(cedulaU, nombre, apellido, usuario, password, correo, direccion, ciudad, genero, F_nacimiento) VALUES('$cedula','$nombre','$apellido','$usuario','$contra','$correo','$direccion','$ciudad','$genero','$fecha')";
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
                $Telefono = $_POST['telefono'];
                $Correo = $_POST['corr'];
                $Direccion = $_POST['dire'];
                $City=$_POST['Ciudad'];
                $N_tarjeta = $_POST['NumeroTarjeta'];
                $F_Caducidad = $_POST['FechaCaducidad'];
                $C_seguridad = $_POST['CodigoSeguridad'];

                $sql ="INSERT INTO factura(Num_factura, cedulaU, nombre, apellido, telefono, correo, direccion, ciudad, N_tarjeta, F_caducidad, C_seguridad) VALUES ('','$Cedula','$Nombre','$Apellido','$Telefono','$Correo','$Direccion','$City','$N_tarjeta','$F_Caducidad','$C_seguridad')";
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
