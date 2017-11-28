<?php

class conexion{ 
    public static function conectar(){
        try{
        $cn= new PDO("mysql:host=".HOST.";database=".DB,USER,PASSWORD);
        } catch (PDOException $ex){
            die($ex->getMessage());
        }
        echo "conectado correctamente";
    }
    
}

conexion::conectar();
