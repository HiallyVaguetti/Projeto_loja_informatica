<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

</head>
<body>
    <!--Início da barra de navegação-->
    <div id="container">
        <nav>
            <ul>
                <li id="logo">
                    LOJA DE INFORMÁTICA
                </li>
                <!--
                <li>
                    <a href="#" class="item_menu">Home</a>
                </li>
                <li>
                    <a href="#" class="item_menu">Produtos</a>
                </li>
                <li>
                    <a href="cadastro_usuario.php" class="item_menu">Cadastro de Usuário</a>
                </li>
                <li>
                    <a href="login.php" class="item_menu">Login</a>
                </li>-->
            </ul>
        </nav>
    </div>
 <!--Fim da barra de navegação-->
 <div id="container_login">
     <img src="../imagens/usuario.png" width="200px" height="200px" alt="usuario">
     <form action="">
        <div>
            <input type="text" name="email" id="email" class="email" placeholder="Digite seu e-mail">
        </div>
        <div>
            <input type="password" name="senha" id="senha" class="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="submit" class="submit" value="Logar">
        </div>

     </form>

 </div>
</body>
</html>