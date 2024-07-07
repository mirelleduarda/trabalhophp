<?php 
    namespace VIEW\Cargo;
    include_once 'C:\xampp\htdocs\trabalhophp\BLL\Cargo.php'; 

    $ID = $_GET['id']; 

    $bllCargo = new \BLL\Cargo(); 
    $result =  $bllCargo->Delete($ID);  
    
    header("location: lstCargo.php");
?>