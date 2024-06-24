<?php
namespace BLL;

include_once 'C:\xampp\htdocs\trabalhophp\DAL\Categoria.php';
use DAL;

class Categoria
{
    public function Select()
    {
        $dalCategoria = new \DAL\Categoria();
    
        return $dalCategoria->Select();
    }
}

?>