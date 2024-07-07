<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Cafeteria</title>
</head>


<?php 
    include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php'; 

    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

    //echo "Usuario: " . $usuario . "</br></br>"; 
    echo "Senha: " . $senha . "  -  ".  md5($senha) . " <br/><br/>";
   //  echo "Senha: " . $senha . "  -  ".  sha1($senha) . " <br/><br/>";

    $sql = "Select * from usuario where usuario=?";
    $con = \dal\Conexao::conectar(); 
    $query = $con->prepare($sql);

    try{
       $query->execute (array($usuario));
       $linha = $query->fetch(\PDO::FETCH_ASSOC);
    }
    catch (Exception $e) { echo "usuario inexistente"; }

    \dal\Conexao::desconectar(); 

  /*  if ($linha!= null){
      //  echo "Usuario: " . $linha['usuario'] . "</br></br>"; 
      //  echo "Senha: " . $linha['senha'] . " <br/><br/>";
    }*/

  if (md5($senha) == $linha['senha']){
       session_start();
       $_SESSION['login'] = $usuario ;
       //$_SESSION['nivel'] = $linha['nivel']; 
       header("location:menu.php"); 
    }
    else header("location:index.php"); 

    ?>