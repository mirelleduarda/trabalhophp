<?php
namespace BLL;

include_once 'C:\xampp\htdocs\trabalhophp\DAL\Cargo.php';
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

        ///regras de negócio que dependem do sistema proposto 
        
        return $dalCargo->Insert($cargo);
    }


    public function Update(\MODEL\Cargo $cargo) {
        $dalCargo = new \DAL\Cargo();   

        ///regras de negócio que dependem do sistema propoto 
        
        return $dalCargo->Update($cargo);
    }

   public function Delete(int $ID)
    {   
        $dalCargo = new \DAL\Cargo();   
        return $dalCargo->Delete($ID);
    }
}

?>