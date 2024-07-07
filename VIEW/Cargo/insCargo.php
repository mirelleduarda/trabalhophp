<?php 
    namespace VIEW\Cargo;
    include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Cargo.php'; 
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Cargo.php'; 

    \DAL\Conexao::desconectar();

    $cargo = new \MODEL\Cargo();

    $cargo->setNome($_POST['txtNome']);
    $cargo->setDescricao($_POST['txtDescricao']);
    $cargo->setSalarioBase($_POST['txtSalarioBase']);

    $bllFunc = new \BLL\Cargo(); 
    $result =  $bllFunc->Insert($cargo);  
?>