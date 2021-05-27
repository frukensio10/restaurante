<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../login/static/css/menu-admin.css">
<meta charset="utf-8">
	<title>Restaurante</title>
</head>
<body>
	<h1></h1>
	<br>
	<br>
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-5">
	<table class="table table-striped">
                  <thead>
                    <tr>
                      <th><center>nombre</th>
                      <th><center>precio</th>
                      <th><center>imagen del producto</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                   $con= mysqli_connect('localhost', 'root', '', 'restaurante');

                   $query  = "select * from menu_del_dia";
				   $result = mysqli_query($con, $query);
				   
                   $cant = 0;
                   if (mysqli_affected_rows($con) != 0) {
                       while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                         $nombre = $row["nombre"];
                         $precio = $row["precio"];
						 $imagen_del_producto = $row["imagen_del_producto"];
						 $routeImgUser = "static/img/$imagen_del_producto";
						 
                         
						 //insercion de datos en cuerpo de la tabla
                         echo  "<tr><td><center><br> $nombre </center></td>
								<td><center><br> $precio  </center></td>
								<td><center><img style='width:60px; height:70px' class='img-profile rounded-circle' src='$routeImgUser'></center></td>
								</tr>";
                         
						 
						 
        }
      }
      ?>
        
                  </tbody>
                </table>
	</div>

		
  
  <style type="text/css">
		
		div{
			text-align: center;
		}
		td{
			text-align: center;
			border:1px solid black;
			position: relative;
			background-color: white;
		}
		th{
			text-align: center;
			color: red;
			border: 1px solid black;
			position: relative;
			background-color: black;

		}
		table{
			border: 7px solid black;
			width:auto;
			position: relative;
			margin-left: "150px";
			margin: 0 auto;
		}
		img{
			alt:"mountain view";
			width: 200px;
			height: 80px;

		}
		h1{
			position: relative;
			text-align: center;
			color: white;
			text-decoration: underline;


		}
		h3{
			text-align: center;
			
		    color: #E37310;
			font-weight: normal;
			font-size: 35px;
			font-family: Arial;
			text-transform: uppercase;
		}
		.boton_personalizado{
			text-decoration: none;
			padding: 10px;
			font-weight: 600;
			font-size: 20px;
			color: #ffffff;
			background-color: #1883ba;
			border-radius: 6px;
			border: 2px solid #0016b0;
			float: left;
			

		}
	</style>
	

</body>
</html>
  <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../login/static/css/menu-admin.css">
<meta charset="utf-8">
	<title>Restaurante</title>
</head>
<body>
	<h1></h1>
	<br>
	<br>
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-5">
	<table class="table table-striped">
                  <thead>
                    <tr>
                      <th><center>nombre</th>
                      <th><center>precio</th>
                      <th><center>imagen de las bebidas</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                   $con= mysqli_connect('localhost', 'root', '', 'restaurante');

                   $query  = "select * from menu_bebida";
				   $result = mysqli_query($con, $query);
				   
                   $cant = 0;
                   if (mysqli_affected_rows($con) != 0) {
                       while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                         $nombre = $row["nombre"];
                         $precio = $row["precio"];
						 $imagen_del_producto = $row["imagen_bebida"];
						 $routeImgUser = "static/img/$imagen_del_producto";
						 
                         
						 //insercion de datos en cuerpo de la tabla
                         echo  "<tr><td><center><br> $nombre </center></td>
								<td><center><br> $precio  </center></td>
								<td><center><img style='width:60px; height:70px' class='img-profile rounded-circle' src='$routeImgUser'></center></td>
								</tr>";
                         
						 
						 
        }
      }
      ?>
        
                  </tbody>
                </table>
	</div>
 
	</div>
	

</body>
</html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../login/static/css/menu-admin.css">
<meta charset="utf-8">
	<title>Restaurante</title>
</head>
<body>
	<h1></h1>
	<br>
	<br>
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-5">
	<table class="table table-striped">
                  <thead>
                    <tr>
                      <th><center>nombre</th>
                      <th><center>precio</th>
                      <th><center>imagen de los postres</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                   $con= mysqli_connect('localhost', 'root', '', 'restaurante');

                   $query  = "select * from menu_postre";
				   $result = mysqli_query($con, $query);
				   
                   $cant = 0;
                   if (mysqli_affected_rows($con) != 0) {
                       while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                         $nombre = $row["nombre"];
                         $precio = $row["precio"];
						 $imagen_del_producto = $row["imagen_del_postre"];
						 $routeImgUser = "static/img/$imagen_del_producto";
						 
                         
						 //insercion de datos en cuerpo de la tabla
                         echo  "<tr><td><center><br> $nombre </center></td>
								<td><center><br> $precio  </center></td>
								<td><center><img style='width:60px; height:70px' class='img-profile rounded-circle' src='$routeImgUser'></center></td>
								</tr>";
                         
						 
						 
        }
      }
      ?>
        
                  </tbody>
                </table>
	</div>
 
	</div>
	<a class="boton_personalizado" href="plantilla-camarero.php">Volver al menú</a>
	

</body>
</html>