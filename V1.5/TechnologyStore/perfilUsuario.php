<?php
session_start();
include 'conexion.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
      <center><p> 
        Bienvenido sirve conche tu madre
    </p></center>
  </article>
    <a href="SesionExit.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>