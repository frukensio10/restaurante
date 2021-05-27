<?php
$conexion= mysqli_connect('localhost', 'root', '', 'restaurante');
?>

<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../login/static/css/estilo.css">
<head>
	<meta charset="UTF-8">
	<title>Ver personales</title>

	
<link rel="stylesheet" type="text/css" href="../login/static/css/estilo.css">

</head>
<body>
	<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Nombre</th><th>Apellido</th><th>Correo</th><th>Contraseña</th><th>Profesión</th>
				</tr>
			</thead>

    <?php
    include "conectarbd.php";
    $sentencia="SELECT * FROM personales";
    $resultado=mysqli_query($conexion, $sentencia);
    
    while($filas=mysqli_fetch_assoc($resultado))
    {
      echo "<tr>";
        echo "<td>"; echo $filas['nombre']; echo "</td>";
        echo "<td>"; echo $filas['apellido']; echo "</td>";
        echo "<td>"; echo $filas['correo']; echo "</td>";
        echo "<td>"; echo $filas['contraseña']; echo "</td>";
        echo "<td>"; echo $filas['profesion']; echo "</td>";

        
        echo "<td> <a href='eliminar-personales.php?nombre=".$filas['nombre']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
      echo "</tr>";
    }
      

    ?>
		</table>
    <table>
    <form>
    <a class="btn btn-primary" href="plantilla-admin.php">Volver al menú</a>
    </form>
    
    </table>
	</div>
</body>
</html>

