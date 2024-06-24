<?php
namespace BLL;
include_once 'C:\xampp\htdocs\trabalhophp\DAL\Funcionario.php';
include_once 'C:\xampp\htdocs\trabalhophp\BLL\Cargo.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Cargo.php';

use DAL;

class Funcionario
{
    public function Select()
    {   
        $dalFunc = new \DAL\Funcionario();   
        return $dalFunc->Select();
    }

    public function SelectByID(int $ID)
    {   
        $dalFunc = new \DAL\Funcionario();   
        return $dalFunc->SelectByID($ID);
    }

    public function Insert(\MODEL\Funcionario $func) {
        $dalFunc = new \DAL\Funcionario();   

        $bllCargo = new \BLL\Cargo();

        //Regra de negócio 
        $cargo = $bllCargo->SelectByID($func->getCargoID()); //recupera o cargo
        
        return $dalFunc->Insert($func); //salva o registro de funcionário




    }
}
?>