<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Funcionario.php'; 
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Funcionario.php'; 

    \DAL\Conexao::desconectar();

    $funcionario = new \MODEL\Funcionario();

    $funcionario->setNome($_POST['txtNome']);
    $funcionario->setDataNascimento($_POST['txtDataNascimento']);
    $funcionario->setCPF($_POST['txtCPF']);
    $funcionario->setEndereco($_POST['txtEndereco']);
    $funcionario->setCidade($_POST['txtCidade']);
    $funcionario->setTelefone($_POST['txtTelefone']);
    $funcionario->setEmail($_POST['txtEmail']);
    $funcionario->setCargoID($_POST['txtCargoID']);

    $bllFunc = new \BLL\Funcionario(); 
    $result =  $bllFunc->Insert($funcionario);  
?>