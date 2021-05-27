<?php
    include "conectarbd.php";
    $conexion= mysqli_connect('localhost', 'root', '', 'restaurante');

	EliminarProductos($_GET['id_bebida'], $conexion);

	function EliminarProductos($id_bebida, $conexion)
	{
		$sentencia="DELETE FROM menu_bebida WHERE id_bebida='".$id_bebida."' ";
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto eliminado exitosamente");
	window.location.href='menu_admin.php';
</script>