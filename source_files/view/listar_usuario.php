<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_tabela.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!--Início da barra de navegação-->
    <div id="container">
        <nav>
            <ul>
                <li id="logo">
                    LOJA DE INFORMÁTICA
                </li>
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
                </li>
            </ul>
        </nav>
    </div>
 <!--Fim da barra de navegação-->
    <div id="container_tabela">
        <h1>LISTA DE USUÁRIOS CADASTRADOS</h1>
        <table id="tabela_lista_usuario">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>LOGIN</th>
                    <th>E-MAIL</th>
                    <th>TIPO DE USUÁRIO</th>
                    <th>CPF/CNPJ</th>
                    <th>UF</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pedro José da Silva</td>
                    <td>Pedro</td>
                    <td>pedro@email.com</td>
                    <td>Administrador</td>
                    <td>125.254.587-45</td>
                    <td>MG</td>
                    <td>
                        <a href="#" title="ALTERAR"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="#" title="EXCLUIR"> <i class="fa fa-trash fa-lg"></i></a>
                    
                    </td>       
                </tr>
                <tr>
                    <td>Pedro José da Silva</td>
                    <td>Pedro</td>
                    <td>pedro@email.com</td>
                    <td>Administrador</td>
                    <td>125.254.587-45</td>
                    <td>MG</td>
                    <td>
                        <a href="#" title="ALTERAR"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="#" title="EXCLUIR"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>       
                </tr>
                <tr>
                    <td>Pedro José da Silva</td>
                    <td>Pedro</td>
                    <td>pedro@email.com</td>
                    <td>Administrador</td>
                    <td>125.254.587-45</td>
                    <td>MG</td>
                    <td>
                        <a href="#" title="ALTERAR"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="#" title="EXCLUIR"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>         
                </tr>
                <tr>
                    <td>Pedro José da Silva</td>
                    <td>Pedro</td>
                    <td>pedro@email.com</td>
                    <td>Administrador</td>
                    <td>125.254.587-45</td>
                    <td>MG</td>
                    <td>
                        <a href="#" title="ALTERAR"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="#" title="EXCLUIR"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>         
                </tr>
                <tr>
                    <td>João Henrique de Souza Cordeiro Silva</td>
                    <td>Joãohenrique</td>
                    <td>joaocordeirosilvasouza@email.com</td>
                    <td>Administrador</td>
                    <td>125.254.587-45</td>
                    <td>MG</td>
                    <td>
                        <a href="#" title="ALTERAR"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="#" title="EXCLUIR"> <i class="fa fa-trash fa-lg"></i></a>
                    </td>         
                </tr>
            </tbody>
        </table>

        <div id="rodape_container"></div>
    </div><!--fim do container-->
    
</body>
</html>