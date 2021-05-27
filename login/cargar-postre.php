<?php
    include "conectarbd.php";
    $conexion= mysqli_connect('localhost', 'root', '', 'restaurante');

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$archivo = savePicture();



	CargarDatos($conexion,$nombre,$precio,$archivo);

	function CargarDatos($conexion,$nombre,$precio,$archivo)
	{
		$sentencia="INSERT INTO `menu_postre`(`nombre`, `precio`, `imagen_del_postre`) VALUES ('$nombre',$precio,'$archivo')";
		mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}

	function savePicture(){

		$name = "";
		$directorio = "static/img/";

		if(basename($_FILES["file"]["name"]) == NULL || basename($_FILES["file"]["name"])==""){
			return "";
		}
		$archivo = $directorio . basename($_FILES["file"]["name"]);

		$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

		// valida que es imagen
		$checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);

		if ($checarSiImagen != false) {

			//validando tamaño del archivo
			$size = $_FILES["file"]["size"];

			if ($size > 500000) {
				echo "El archivo tiene que ser menor a 500kb";
			} else {

				//validar tipo de imagen
				if ($tipoArchivo == "jpg" || $tipoArchivo == "png") {
					// se validó el archivo correctamente
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {

						$name = basename($_FILES["file"]["name"]);
						return $name;

						echo "El archivo se subió correctamente";
					} else {
						echo "Hubo un error en la subida del archivo";
					}
				} else {
					echo "Solo se admiten archivos jpg/png";
				}
			}
		} else {
			echo "El documento no es una imagen";
		}
	}
?>

<script type="text/javascript">
	alert("Dato cargado exitosamente");
	window.location.href='menu_admin.php';
</script>