<?php
    include_once './entidade.php';
  
    class Usuario extends Entidade{
        public $id;
        public $nome;
        public $nascimento;
        public $telefone;
        public $sexo;
        public $email;
        public $senha;
        public $data_atualizacao;
        public $ocupacao_id;
        
    }
?>