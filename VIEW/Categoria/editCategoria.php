<?php 
  namespace VIEW\Categoria;
  include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Categoria.php'; 
  include_once 'C:\xampp\htdocs\trabalhophp\BLL\Categoria.php'; 

  $categoria = new \MODEL\Categoria();

  $categoria->setID((int)$_POST['txtID']);
  $categoria->setNome($_POST['txtNome']);
  $categoria->setDescricao($_POST['txtDescricao']);

  $bllCategoria = new \BLL\Categoria(); 
  $result =  $bllCategoria->Update($categoria);    


  header("location: lstCategoria.php");

?>