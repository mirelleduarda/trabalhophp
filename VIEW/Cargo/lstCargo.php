<?php
  namespace VIEW\Cargo;
  include_once 'C:\xampp\htdocs\trabalhophp1smt\DAL\conexao.php';
  $sql = "select * from cargo;";
  $con = \DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
     <title>Listar Cargos</title>
</head>

<body>
    <h1>Listar Cargos</h1>
    <table>
	<tr>
	  <th>ID</th>
	  <th>Nome</th>
	  <th>Descrição</th>
	  <th>Salário Base</th>
	</tr>
	
	<?php foreach ($registros as $linha) { ?>
		<tr>
			<td> <?php echo $linha['ID']; ?> </td>
			<td> <?php echo $linha['nome'] ?> </td>
			<td> <?php echo $linha['descricao'] ?> </td>
			<td> <?php echo $linha['salarioBase'] ?> </td>
		</tr>
	<?php } ?>
	
  </table>

</body>

</html>