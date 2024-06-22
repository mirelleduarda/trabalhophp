<?php
  namespace VIEW\Cargo;
  include_once 'C:\xampp\htdocs\trabalhophp1smt\DAL\conexao.php';
  $sql = "select * from categoria;";
  $con = \DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
     <title>Listar Categorias</title>
</head>

<body>
    <h1>Listar Categorias</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>

        <?php foreach ($registros as $linha) { ?>
            <tr>
                <td> <?php echo $linha['ID']; ?> </td>
                <td> <?php echo $linha['nome'] ?> </td>
                <td> <?php echo $linha['descricao'] ?> </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>