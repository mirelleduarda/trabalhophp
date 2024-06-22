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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="logo.ico" href="../images/logo.ico">
    <link rel="stylesheet" href="..\style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Listar Cargos</title>
</head>

<body>
	<?php include_once '..\menu.php'; ?>
    <h1>Listar Cargos</h1>
    <table class="highlight">
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