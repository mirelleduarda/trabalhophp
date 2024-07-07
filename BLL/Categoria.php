<?php
namespace BLL;
include_once 'C:\xampp\htdocs\trabalhophp\DAL\Categoria.php';
include_once 'C:\xampp\htdocs\trabalhophp\BLL\Categoria.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Categoria.php';

use DAL;

class Categoria
{
    public function Select()
    {   
        $dalCategoria = new \DAL\Categoria();   
        return $dalCategoria->Select();
    }

    public function SelectByID(int $ID)
    {   
        $dalCategoria = new \DAL\Categoria();   
        return $dalCategoria->SelectByID($ID);
    }

    public function Insert(\MODEL\Categoria $categoria) {
        $dalCategoria = new \DAL\Categoria();   

        $bllCategoria = new \BLL\Categoria();

        //Regra de negócio 
        $categoria = $bllCategoria->SelectByID($categoria->getCategoriaID()); //recupera o categoria
        
        return $dalCategoria->Insert($categoria); //salva o registro de categoria

    }

    public function Update(\MODEL\Categoria $categoria) {
        $dalCategoria = new \DAL\Categoria();   

        ///regras de negócio que dependem do sistema  
        
        return $dalCategoria->Update($categoria);
    }

    public function Delete(int $ID)
    {   
        $dalCategoria = new \DAL\Categoria();   
        return $dalCategoria->Delete($ID);
    }
}
?>