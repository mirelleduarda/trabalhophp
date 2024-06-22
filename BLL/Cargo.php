<?php
namespace BLL;

include_once 'C:\xampp\htdocs\trabalhophp1smt\DAL\Cargo.php';
use DAL;

class Cargo
{
    public function Select()
    {
        $dalCargo = new \DAL\Cargo();
    
        return $dalCargo->Select();
    }
}

?>