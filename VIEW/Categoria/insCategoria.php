<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Categoria.php'; 
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Categoria.php'; 

    \DAL\Conexao::desconectar();

    $categoria = new \MODEL\Categoria();

    $categoria->setNome($_POST['txtNome']);
    $categoria->setDescricao($_POST['txtDescricao']);

    $bllCategoria = new \BLL\Categoria(); 
    $result =  $bllCategoria->Insert($categoria);  
?>