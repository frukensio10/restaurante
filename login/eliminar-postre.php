<?php
    include "conectarbd.php";
    $conexion= mysqli_connect('localhost', 'root', '', 'restaurante');

	EliminarProductos($_GET['id_postre'], $conexion);

	function EliminarProductos($id_postre, $conexion)
	{
		$sentencia="DELETE FROM menu_postre WHERE id_postre='".$id_postre."' ";
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto eliminado exitosamente");
	window.location.href='menu_admin.php';
</script>