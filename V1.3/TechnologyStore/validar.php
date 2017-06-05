<?php
	session_start(); 
?>
<?php
			include 'conexion.php';
			if(isset($_POST['ini'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pass'];
				$log = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' AND password='$pw'");
				if (mysql_num_rows($log)>0) {
					$row = mysql_fetch_array($log);

                                     
                                        
                                        echo '<script> alert("Bienbenido");</script>';
					echo '<script> window.location="catalogo.php"; </script>';
                                         
                                        
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
                                        
				}

			}
		?>	
