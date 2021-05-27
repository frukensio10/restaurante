<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];
        $correo=$_GET["correo"];
        $contraseña=$_GET["contraseña"];
        $profesion=$_GET["profesion"];
                
        
         require 'conectando-camarero.php';
        
        $consulta="INSERT INTO `personales`(`nombre`,`apellido`,`correo`, `contraseña`, `profesion`  ) VALUES ('$nombre','$apellido','$correo', '$contraseña', '$profesion')";
        
        $resultado= mysqli_query($conexion, $consulta);// la consulta se guarda en forma de arrray
        if ($resultado==FALSE){
            echo"REGISTRO CON ERROR";
        }
        ELSE{
            ECHO"REGISTRO CON EXITO";
            ECHO " $nombre "." $apellido "." $correo "." $contraseña ". " $profesion ";
        }
        
     echo"<br>";
     echo"<br>"; 
       
        
        
        mysqli_close($conexion);//cierra la base de dtos
        
        ?> 
        
    </body>
</html>
<style>
    .boton {
border: 1px solid #2e518b; /*anchura, estilo y color borde*/
padding: 10px; /*espacio alrededor texto*/
background-color: #2e518b; /*color botón*/
color: #ffffff; /*color texto*/
text-decoration: none; /*decoración texto*/
text-transform: uppercase; /*capitalización texto*/
font-family: 'Helvetica', sans-serif; /*tipografía texto*/
border-radius: 50px; /*bordes redondos*/
}
</style>

<table border="0" align="center">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                
                <a class="boton" href="registrar-camarero.php">volver al menú</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>




