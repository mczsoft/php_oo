<?php
require_once 'Pessoa.php';

class Usuario extends Pessoa{
    private $email;
    private $nascimento;
    
    function getEmail() {
        return $this->email;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    
         public function autenticar() {
         echo 'Usuario autenticou no sistema';
     }
     
     public function sair($param) {
         echo 'Usuario saiu do sistema';
     }
     
}


