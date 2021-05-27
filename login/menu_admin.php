<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Restaurante</title>
	
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../login/static/css/menu-admin.css">


<head>
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
		
  
  
	<div class="col-sm-5">
			<h4>Cargar datos comida</h4>
			
		<form action="cargar-datos.php" method="POST" enctype="multipart/form-data">
			<div>
			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="true">
			</div>
			<br><br>
			<div>
			<input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required="true">
			</div>
			<br><br>
			<div>
			<input class="fas fa-camera" type="file" class="form-control" name="file" required="true">
			</div>
			
			<br><br>
			<div style="float: right">
			
			<a class="btn btn-primary" href="plantilla-admin.php">Volver al menú</a>
			<button type="submit" class="btn btn-primary"  name="action">Confirmar</button>
			<a class="btn btn-primary" href="ver-productos.php">Eliminar productos</a>
			</div>
		</form>
			
	</div>
	<div class="col-sm-1">
	</div>

</div>

	

</body>
</html>

<html>
<head>
<meta charset="utf-8">

<head>
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
		
  
  
	<div class="col-sm-5">
			<h4>Cargar datos bebidas</h4>
			
		<form action="cargar-bebidas.php" method="POST" enctype="multipart/form-data">
			<div>
			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="true">
			</div>
			<br><br>
			<div>
			<input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required="true">
			</div>
			<br><br>
			<div>
			<input class="fas fa-camera" type="file" class="form-control" name="file" required="true">
			</div>
			
			<br><br>
			<div style="float: right">
			
			<a class="btn btn-primary" href="plantilla-admin.php">Volver al menú</a>
			<button type="submit" class="btn btn-primary"  name="action">Confirmar</button>
			<a class="btn btn-primary" href="ver-bebidas.php">Eliminar bebida</a>
			</div>
		</form>
			
	</div>
	<div class="col-sm-1">
	</div>

</div>

	

</body>
</html>

<html>
<head>
<meta charset="utf-8">
<head>
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
                      <th><center>imagen del postre</th>
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
		
  
  
	<div class="col-sm-5">
			<h4>Cargar datos postres</h4>
			
		<form action="cargar-postre.php" method="POST" enctype="multipart/form-data">
			<div>
			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="true">
			</div>
			<br><br>
			<div>
			<input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required="true">
			</div>
			<br><br>
			<div>
			<input class="fas fa-camera" type="file" class="form-control" name="file" required="true">
			</div>
			
			<br><br>
			<div style="float: right">
			
			<a class="btn btn-primary" href="plantilla-admin.php">Volver al menú</a>
			<button type="submit" class="btn btn-primary"  name="action">Confirmar</button>
			<a class="btn btn-primary" href="ver-postres.php">Eliminar productos</a>
			</div>
		</form>
			
	</div>
	<div class="col-sm-1">
	</div>

</div>

	

</body>
</html>