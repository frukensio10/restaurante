<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../login/static/css/registrar-personal.css">
</head>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="#">
<title> Formulario de registros </title>
</head>
<body>
 <section class="form-register">
<form action="cargar-camarero.php">
<h4>Registro de personales</h4>  
<input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre">
<input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellido">
<input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
<input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
<input class="controls" type="text" name="profesion" id="profesion" placeholder="profesión">


<input  class="botons"  type="submit"  value="Registrar">
<a class="botons"  href= "ver-personales.php" >Ver personales</a>
<a class="boton"  href= "plantilla-admin.php" >Volver al menú</a>

  
</form>


</section>
</body>
</html>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    
    .form-register {
    width: 400px;
    background: #24303c;
    padding: 30px;
    margin: auto;
    margin-top: 100px;
    border-radius: 4px;
    font-family: 'calibri';
    color: white;
    box-shadow: 7px 13px 37px #000;
    }
    
    .form-register h4 {
     font-size: 22px;
     margin-bottom: 20;
     text-align: center;
    }
    
    .controls {
    width: 100%;
    background: #24303c;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border:1px solid #1f53c5;
    font-family: ´calibri´;
    font-size: 18px;
    color: white;
    }
    
    .form-register p {
     height: 40px;
     text-align: center;
     font-size: 18px;
    }
    
    .form-register a:hover {
     color: white;
     text-decoration: underline;
    }
    
    .form-register .botons {
     width: 100%;
     background: #1f53c5;
     border: none;
     padding: 12px;
     color: white;
     margin: 16px 0;
     font-size: 16px;
    }

    .form-register a {
     width: 100%;
     background: #1f53c5;
     border: none;
     padding: 12px;
     color: white;
     margin: 16px 3;
     font-size: 16px;
	 text-decoration: none;
	 line-height: 40px;
    }
    .boton {
     width: 100%;
     background: #1f53c5;
     border: none;
     padding: 12px;
     color: white;
     margin: 16px 3;
     font-size: 16px;
	 text-decoration: none;
     line-height: 40px;
     
    }
</style>
