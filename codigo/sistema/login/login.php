<?php
    include_once './entidade.php';
    include_once '../usuario/usuario.php';
    
    class Login extends Entidade{
        public $email;
        public $senha;
        
        public function entrar($email, $senha){
            $conexao = $this->conectar();
            
            $resultado = $conexao->query("SELECT * FROM usuario WHERE email LIKE '$email' AND senha LIKE '$senha'");
            
            if($resultado){
                if($registro = $resultado->fetch_array(MYSQLI_ASSOC)){
                    $usuario = new Usuario();
                    
                    $usuario->id = $registro["id"];
                    $usuario->nome = $registro["nome"];
                    $usuario->nascimento = $registro["nascimento"];
                    $usuario->telefone = $registro["telefone"];
                    $usuario->sexo = $registro["sexo"];
                    $usuario->email = $registro["email"];
                    $usuario->senha = $registro["senha"];
                    $usuario->data_atualizacao = $registro["data_atualizacao"];
                    $usuario->ocupacao_id = $registro["ocupacao_id"];
                    
                    return $usuario;
                }
            } else {
                return 0;
            }
        }
    }
?>