<?php
    class Entidade{
        public function conectar(){
            $con = new mysqli("localhost", "root", "", "meu_trabalho");
            if($con->connect_errno){
                die("Não foi possível conectar, nº do erro: " . $con->connect_errno . ", mensagem: " . $con->connect_error);
            }
            return $con;
        }
    }
?>