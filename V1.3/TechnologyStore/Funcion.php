<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>
           <?php
            
            include 'conexion.php';

           if (isset($_POST['reg'])) {
                $cedula=$_POST['cedu'];
                $nombre=$_POST['nomb'];
                $apellido=$_POST['apel'];
                $usuario=$_POST['user'];
                $contra=$_POST['cont'];
                $correo=$_POST['corr'];
                $direccion=$_POST['dire'];
                $ciudad=$_POST['ciud'];
                $genero=$_POST['gene'];
                $fecha=$_POST['fech'];
//                $enciptar= sha1($contra);
                
                
                $sql="INSERT INTO usuario(cedulaU, nombre, apellido, usuario, password, correo, direccion, ciudad, genero, F_nacimiento) VALUES('$cedula','$nombre','$apellido','$usuario','$contra','$correo','$direccion','$ciudad','$genero','$fecha')";
                $res = mysql_query($sql, $conexion) or die(mysql_error());
                
                if(!$res){
                    echo 'Error al registrarse';
                }else{
                echo '<script>
                alert("Usuario Registrado"); 
//              header("Location:index.php");
                window.history.go(-1);
                </script>';
                
              
                    }
                }
                
            
            
               
            
            ?>
            
           
                    
        </body>
    </html>
   