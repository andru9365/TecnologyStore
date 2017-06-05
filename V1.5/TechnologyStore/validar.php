<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <title>Validando...</title>
        <meta charset="utf-8">
    </head>
</head>
<body>
    <?php
    include 'conexion.php';
    if (isset($_POST['ini'])) {
        $usuario = $_POST['user'];
        $pw = $_POST['pass'];
        $log = mysql_query("SELECT * FROM usuario WHERE usuario='$usuario' AND password='$pw'");
        if (mysql_num_rows($log) > 0) {
            $row = mysql_fetch_array($log);
            $_SESSION["user"] = $row['usuario'];
            echo '<script>alert("BIENVENIDO");</script>';
            echo '<script> window.location="productos.php";</script>';
        } else {
            echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
            echo '<script> window.location="index.php";</script>';
        }
    }
    ?>	
</body>
</html>