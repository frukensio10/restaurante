<html>
    <meta charset="UTF-8"/>
<head>
        <title>restaurante</title>

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel= "stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/index.css">
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/male-portrait-avatar-png-clip-art.png"/>


                </div>
                <form class="col-12" id="logint" method="POST" action="login.php">
                    <div class="form-group" id="user-group">
                        <input name="user" type="text" class="form-control" placeholder="Nombre de usuario"/>

                    </div>
                    <div class="form-group" id="Contraseña-group" >
                        <input name="clave" type="password" class="form-control" placeholder="Contraseña"/>

                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>

                </form>
                <div class="col-12 forgot">
                    <a href="#"> Recordar Contraseña</a>

                </div>

            </div>

        </div>

    </div>


 </body>
</html>