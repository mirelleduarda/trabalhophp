<?php
namespace DAL;

include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Funcionario.php';

class Funcionario
{
    public function Select()
    {

        $sql = "Select * from funcionario;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $fun->setId($linha['ID']);
            $fun->setNome($linha['nome']);
            $fun->setDataNascimento($linha['dataNascimento']);
            $fun->setCPF($linha['CPF']);
            $fun->setEndereco($linha['endereco']);
            $fun->setCidade($linha['cidade']);
            $fun->setTelefone($linha['telefone']);
            $fun->setEmail($linha['email']);
            $fun->setCargoID($linha['cargoID']);
            $fun->setQuantidade($linha['cargoID']);
            $lstFun[] = $fun;
        }
        return $lstFun;

    }


    public function SelectByID(int $ID)
    {
        //recuperar do banco de dados
        $sql = "Select * from funcionario where ID=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $fun = new \MODEL\Funcionario();
        $fun->setId($linha['ID']);
            $fun->setNome($linha['nome']);
            $fun->setDataNascimento($linha['dataNascimento']);
            $fun->setCPF($linha['CPF']);
            $fun->setEndereco($linha['endereco']);
            $fun->setCidade($linha['cidade']);
            $fun->setTelefone($linha['telefone']);
            $fun->setEmail($linha['email']);
            $fun->setCargoID($linha['cargoID']);
            $fun->setQuantidade($linha['cargoID']);
        return $fun;

    }

    public function Insert(\MODEL\Inventario $inv)
    {
        $sql = "INSERT INTO funcionario (ID, nome, dataNacimento, CPF, endereco, cidade, telefone, email, cargoID, quantidade) VALUES (?,?,?,?,?,?,?,?,?,?) ;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($inv->getID(), $inv->getNome(), $inv->getDataNascimento(), $inv->getCPF(), $inv->getEndereco(), $inv->getcidade(), $inv->getTelefone(), $inv->getEmail(), $inv->getCargoID(), $inv->getQuantidade()));
        $con = Conexao::desconectar();
      
        return $result; 

    }
}

?>