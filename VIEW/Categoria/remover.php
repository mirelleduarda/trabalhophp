<?php 
    namespace VIEW\Fncionario;
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Funcionario.php'; 

    $ID = $_GET['id']; 

    $bllFunc = new \BLL\Funcionario(); 
    $result =  $bllFunc->Delete($ID);  
    
    header("location: lstFuncionario.php");
?>