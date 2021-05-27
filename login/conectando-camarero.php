<?php

//Estos pasos se usan para unir la BD
        $db_host="localhost";//paso 1 direccion de la BD
        $db_nombre="restaurante";//paso 2 nombre de la BD
        $db_usuario="root"; //paso 3 ... por defecto siempre es root
        $db_contraseña="";//paso sin contraseña
        
        $conexion= mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
        MYSQLI_SET_CHARSET($conexion, "utf8");// para que se muestre las ñ y las tildes
        
        // cada ves que necesite utilizar mi base de datos copio con un requiere desde esta pagina .
        ?>