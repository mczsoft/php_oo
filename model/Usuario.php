<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author PHP
 */
class Usuario {
   public $email;
    public $nome;
     public $nascimento;
     
     public function autenticar() {
         echo 'Usuario autenticou no sistema';
     }
     
     public function sair($param) {
         echo 'Usuario saiu do sistema';
     }
}


