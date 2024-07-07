<?php 
  namespace VIEW\Produtos;
  include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Produtos.php'; 
  include_once 'C:\xampp\htdocs\trabalhophp\DAL\Produtos.php'; 

  $produtos = new \MODEL\Produtos();

  $produtos->setID($_POST['txtID']);
  $produtos->setNome($_POST['txtNome']);
  $produtos->setDescricao($_POST['txtDescProduto']);
  $produtos->setPreco($_POST['txtPreco']);
  $produtos->setCategoriaID($_POST['txtCatId']);
  $produtos->setIngredientes($_POST['txtIngredientes']);

  $bllProd = new \BLL\Produtos(); 
  $result =  $bllProd->Update($produtos);    


  header("location: lstProdutos.php");

?>