<?php
namespace BLL;
include_once 'C:\xampp\htdocs\trabalhophp\DAL\Cargo.php';
include_once 'C:\xampp\htdocs\trabalhophp\BLL\Cargo.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Cargo.php';

use DAL;

class Cargo
{
    public function Select()
    {   
        $dalCargo = new \DAL\Cargo();   
        return $dalCargo->Select();
    }

    public function SelectByID(int $ID)
    {   
        $dalCargo = new \DAL\Cargo();   
        return $dalCargo->SelectByID($ID);
    }

    public function Insert(\MODEL\Cargo $cargo) {
        $dalCargo = new \DAL\Cargo();   

        $bllCargo = new \BLL\Cargo();

        //Regra de negócio 
        $cargo = $bllCargo->SelectByID($cargo->getCargoID()); //recupera o cargo
        
        return $dalCargo->Insert($cargo); //salva o registro de cargo

    }

    public function Update(\MODEL\Cargo $cargo) {
        $dalCargo = new \DAL\Cargo();   

        ///regras de negócio que dependem do sistema  
        
        return $dalCargo->Update($cargo);
    }

    public function Delete(int $ID)
    {   
        $dalCargo = new \DAL\Cargo();   
        return $dalCargo->Delete($ID);
    }
}
?>