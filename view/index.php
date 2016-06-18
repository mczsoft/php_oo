<?php
require_once '../model/Usuario.php';
    $usuario= new Usuario();
    $usuario->setNome('Gustavo');
    $usuario->setEmail('gustavo.softwares@hotmail.com');
    
    echo $usuario->getNome();
    echo $usuario->getEmail();
                   
?>
    