<?php 
    namespace VIEW\Produtos;
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Produtos.php'; 

    $id = $_GET['id'];

    $bllProd = new \BLL\Produtos();
    $result =  $bllProd->Delete($produtos);  

    header("location: lstProdutos.php");

?>