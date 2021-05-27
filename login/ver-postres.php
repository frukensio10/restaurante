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
	<title>Ver postres</title>

	
<link rel="stylesheet" type="text/css" href="../login/static/css/estilo.css">

</head>
<body>
	<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>codigo del producto</th><th>Nombre</th><th>Precio</th><th>Imagen de los postres</th>
				</tr>
			</thead>

    <?php
    include "conectarbd.php";
    $sentencia="SELECT * FROM menu_postre";
    $resultado=mysqli_query($conexion, $sentencia);
    
    while($filas=mysqli_fetch_assoc($resultado))
    {
      echo "<tr>";
        echo "<td>"; echo $filas['id_postre']; echo "</td>";
        echo "<td>"; echo $filas['nombre']; echo "</td>";
        echo "<td>"; echo $filas['precio']; echo "</td>";
        echo "<td>"; echo $filas['imagen_del_postre']; echo "</td>";

        
        echo "<td> <a href='eliminar-postre.php?id_postre=".$filas['id_postre']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
      echo "</tr>";
    }
      

    ?>
		</table>
    <table>
    <form>
    <a class="btn btn-primary" href="menu_admin.php">Volver al menú</a>
    </form>
    
    </table>
	</div>
</body>
</html>

