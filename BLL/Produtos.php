<?php
namespace BLL;
include_once 'C:\xampp\htdocs\trabalhophp\DAL\Produtos.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Produtos.php';

use DAL;

class Produtos
{
    public function Select()
    {   
        $dalProd = new \DAL\Produtos(); 
        return $dalProd->Select();
    }

    public function SelectByID(int $ID)
    {   
        $dalProd = new \DAL\Produtos();   
        return $dalProd->SelectByID($ID);
    }

    public function Insert(\MODEL\Produtos $prod) 
    {
        $dalProd = new \DAL\Produtos();   

        $bllProd = new \BLL\Produtos();
        //Regra de negócio para somar um no campo quantidade da tabela preco
        //com base no preco que foi informado no campo de produtos
        $produto = $bllProd->SelectByID($prod->getPreco()); //recupera o preço

        //soma 1 no valor do campo preco
        $preco = $prod->getpreco();
        $preco++; //preco = $preco + $produtos->getPreco();
        $prod->setPreco($preco);

        $bllProd->Update($prod); // atualiza no banco de dados o valor de preco

        return $dalProd->Insert($prod); 
    }

    public function Update(\MODEL\Produtos $prod)
    {
        $dalProd = new \DAL\Produtos();
        return $dalProd->Update($prod);
    }
    
    public function Delete(int $id)
    {
        $dalProd = new \DAL\Produtos();
        return $dalProd->Delete($id);
    }
}
?>