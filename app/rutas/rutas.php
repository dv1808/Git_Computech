<?php

//todas las rutas disponibles en nuestra aplicacion
$ruta=new Ruta();
$ruta->controladores
        (array(
            "/"=>"PrincipalController","/usuarios"=>"UserController"));
