<?php

function includeModels(){
    $directorio= opendir(MODELS);
    while($archivo= readdir($directorio)){
        if(!is_dir($archivo)){
            require_once MODELS.$archivo;;
        }
    }
    
}

