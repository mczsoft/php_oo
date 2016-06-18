<?php
require_once '../model/Usuario.php';
    $usuario= new Usuario();
    $usuario->nome = 'Gustavo';
    $usuario->email = 'gustavo.softwares@hotmail.com';
    $usuario->nascimento = '18/11/1985';
   
    $resultado_soma = $usuario->somar(2,2);
    echo $usuario->nome; 
        
              
?>
    