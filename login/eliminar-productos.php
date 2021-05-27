<?php
    include "conectarbd.php";
    $conexion= mysqli_connect('localhost', 'root', '', 'restaurante');

	EliminarProductos($_GET['id_menu'], $conexion);

	function EliminarProductos($id_menu, $conexion)
	{
		$sentencia="DELETE FROM menu_del_dia WHERE id_menu='".$id_menu."' ";
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto eliminado exitosamente");
	window.location.href='menu_admin.php';
</script>