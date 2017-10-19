<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Trabalho | Login</title>
        <meta http-equiv="refresh" content="60; index.php">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilo.css" type="text/css" />
        <!−− Referência externa −−>
        <script language="javascript" type="text/javascript" src="sistema/css/jquery.js"></script>
            <script language="javascript" type="text/javascript">
            <?php
                if(isset($_GET["erro"])){
            ?>
                f_mostra();
            <?php
                }
            ?>
            function f_mostra() {
                alert("Usuário e/ou senha incorretos!");
            }
        </script>
    </head>
    <body>
        <div id="fundo">
            <div class="login">
                <div class="linha_topo"></div>
                <h1 id="texto_login" class="texto_login">Login</h1>
                <form action="sistema/login/entrar.php" method="POST">
                    <input type="email" name="email" class="campo_login" placeholder="Informe o seu e-mail" required/>
                    <input type="password" name="senha" class="campo_login" placeholder="Informe sua senha" required />
                    <button type="submit" class="botao_login">
                        <span>Entrar</span>
                    </button>
                </form>
                <p>Não é registrado? <a href="#">Crie uma conta</a></p>
            </div>
        </div>
    </body>
</html>
