<?php
    include "conectarbd.php";
    $conexion= mysqli_connect('localhost', 'root', '', 'restaurante');

	EliminarPersonal($_GET['nombre'], $conexion);

	function EliminarPersonal($nombre, $conexion)
	{
		$sentencia="DELETE FROM personales WHERE nombre='".$nombre."' ";
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Personal eliminado exitosamente");
	window.location.href='registrar-camarero.php';
</script>