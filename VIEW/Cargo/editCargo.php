<?php 
  namespace VIEW\Cargo;
  include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Cargo.php'; 
  include_once 'C:\xampp\htdocs\trabalhophp\BLL\Cargo.php'; 

  $cargo = new \MODEL\Cargo();

  $cargo->setID((int)$_POST['txtID']);
  $cargo->setNome($_POST['txtNome']);
  $cargo->setDescricao($_POST['txtDescricao']);
  $cargo->setSalarioBase($_POST['txtSalarioBase']);

  $bllFunc = new \BLL\Cargo(); 
  $result =  $bllFunc->Update($cargo);    


  header("location: lstCargo.php");

?>