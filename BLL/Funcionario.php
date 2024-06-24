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

        //Regra de negócio para somar um no campo quantidade da tabela cargo
        //com base no cargo que foi informado no campo de funcionário
        $cargo = $bllCargo->SelectByID($func->getEquipamento()); //recupera o cargo

        //soma 1 no valor do campo quantidade
        $quantidade = $cargo->getQuantidade();
        $quantidade++; //$quantidade = $quantidade + $func->getValorQuantidade();
        $cargo->setQuantidade($quantidade);

        $bllEqpto->Updade($equipamento); // atualiza no banco de dados o registro de equipamento
        
        return $dalFunc->Insert($func); //salva o registro de funcionário




    }
}
?>