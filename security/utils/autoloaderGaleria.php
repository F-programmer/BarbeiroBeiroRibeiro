<?php

//função que faz parte da SPL que significa Standard PHP Library

function loadClass($className)
{   
    // para pegar o diretorio raiz
    $rootPath = '../../security/models/';
    // para pegar as extensoes necessarias
    $extension = spl_autoload_extensions();
    // para carregar
    require_once(
        $rootPath . $className . $extension
    );
}

spl_autoload_extensions('.php');
spl_autoload_register('loadClass');

?>