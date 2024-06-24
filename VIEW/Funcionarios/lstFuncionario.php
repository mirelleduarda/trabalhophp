<?php
    namespace VIEW\Funcionario;
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\Funcionario.php';
    $sql = "select * from funcionario;";
    $con = \DAL\Conexao::conectar();
    $registros = $con->query($sql);
    $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="logo.ico" href="/trabalhophp/images/logo.ico">
    <link rel="stylesheet" href="/trabalhophp/css/style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Listar Funcionários</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <section>
        <br>
        <div class="estilo-lista-funcionario brown lighten-4">
            <h1 class="titulo-lista-funcionario">
                Listar Funcionários
                <a class="cadastrar waves-effect waves-light btn">
                    <i class="material-icons left"
                        onclick="JavaScript:location.href='formFuncionario.php'">add
                    </i>Cadastrar Funcionário</a>
            </h1>
            <table class="responsive-table">
                <th>ID</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>CPF</th> 
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>ID Cargo</th>
                <th>Quantidade</th>
                <?php foreach ($registros as $linha) { ?>
                    <tr>
                        <td> <?php echo $linha['ID']; ?> </td>
                        <td> <?php echo $linha['nome'] ?> </td>
                        <td> <?php echo $linha['dataNascimento'] ?> </td>
                        <td> <?php echo $linha['CPF'] ?> </td>
                        <td> <?php echo $linha['endereco'] ?> </td>
                        <td> <?php echo $linha['cidade'] ?> </td>
                        <td> <?php echo $linha['telefone'] ?> </td>
                        <td> <?php echo $linha['email'] ?> </td>
                        <td> <?php echo $linha['cargoID'] ?> </td>
                        <td> <?php echo $linha['quantidade'] ?> </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <br>
    </section>

    <footer class="rodape">
        <section class="footer">
            <div class="footer-row">
                <div class="footer-col">
                <h4>Informações</h4>
                <ul class="links">
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Compressões</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Coleção</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Obter Ajuda</h4>
                <ul class="links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Envio</a></li>
                    <li><a href="#">Devoluções</a></li>
                    <li><a href="#">Status do Pedido</a></li>
                    <li><a href="#">Opções de Pagamento</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Links Rápidos</h4>
                <ul class="links">
                    <li><a href="#">Termos e Condições</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Isenção de responsabilidade</a></li>
                </ul>
                </div>

                <div class="footer-col">
                <h4>Comunidades</h4>
                <ul class="links">
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Rede de Parceiros</a></li>
                </ul>

                <div class="icons">
                    <i class="fa-brands fa-whatsapp" onclick="window.location.href='https://wa.me/5518123456789'"></i>
                    <i class="fa-brands fa-instagram" onclick="window.location.href='https://www.instagram.com/'"></i>
                    <i class="fa-brands fa-facebook-f" onclick="window.location.href='https://www.facebook.com/?locale=pt_BR'"></i>
                    <i class="fa-regular fa-envelope" onclick="window.location.href='https://www.google.com/intl/pt-BR/gmail/about/'"></i>  
                </div>
            </div>
        </section>
    </footer>  
</body>

</html>
