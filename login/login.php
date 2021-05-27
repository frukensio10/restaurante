<?php

$db_host="localhost";
$db_nombre="restaurante";
$db_usuario="root"; 
$db_contraseña="";
        
    $conexion= mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
    MYSQLI_SET_CHARSET($conexion, "utf8");

$nombre = $_POST['user'];
$contraseña = $_POST['clave'];

$consulta = "SELECT * FROM personales WHERE nombre = '$nombre' and contraseña = '$contraseña' LIMIT 1";
        $query = mysqli_query($conexion, $consulta);
		
        if ($query) {
            $row = mysqli_fetch_array($query);
            
            if ($row[0] != null && $row[4] == 'administrador') {
                header("Location: http://localhost/restaurante/login/plantilla-admin.php");
            } else if ($row[0] != null && $row[4] == 'camarero') {
                header("Location: http://localhost/restaurante/login/plantilla-camarero.php");
            } else {
                header("Location: http://localhost/restaurante/login/");
            }

        } else {
            return "error";
            throw new mysqli_sql_exception("Error al consultar los partidos.");
        }



?>