<?php


include "help/helps.php";
define("APP_RUTA",RUTA_BASE."app/");
define("VISTA_RUTA",RUTA_BASE."view/");
define("BOOKSHOP",RUTA_BASE."bookshop/");
define("RUTA",APP_RUTA."rutas/");
define("MODELS",APP_RUTA."model/");
//echo RUTA;
//configuraciones
include RUTA_BASE."config/config.php";
include "ORM/conexionphp.php";
include "ORM/Modelo.php";


includeModels();
include "view.php";
include "Ruta.php";
include RUTA."rutas.php";


