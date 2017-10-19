<?php
    include_once './login.php';
    if(isset($_POST["email"])){
        $email = $_POST["email"];
    } else {
        header("Refresh: 0, ../login.php?erro=1");
    }
    if(isset($_POST["senha"])){
        $senha = $_POST["senha"];
    } else {
        header("Refresh: 0, ../login.php?erro=1");
    }
    
    $login = new Login();
    
    $resultado = $login->entrar($email, $senha);
    if($resultado){
     	//logado
        header('location:../index.php');

    } else {
        header("Refresh: 0, ../../login.php?erro=1");
    }    
?>