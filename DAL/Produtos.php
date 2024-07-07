<?php
namespace DAL;

include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Produtos.php';

class Produtos
{
    public function Select()
    {

        $sql = "Select * from produtos;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $prod = new \MODEL\Produtos();
            $prod->setId($linha['ID']);
            $prod->setNome($linha['nome']);
            $prod->setDescricao($linha['descricao']);
            $prod->setPreco($linha['preco']);
            $prod->setCategoriaID($linha['categoriaID']);
            $prod->setIngredientes($linha['ingredientes']);
            $lstProd[] = $prod;
        }
        return $lstProd;

    }


    public function SelectByID(int $ID)
    {
        //recuperar do banco de dados
        $sql = "Select * from produtos where ID=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $prod = new \MODEL\Produtos();
        $prod->setId($linha['ID']);
        $prod->setNome($linha['nome']);
        $prod->setDescricao($linha['descricao']);
        $prod->setPreco($linha['preco']);
        $prod->setCategoriaID($linha['categoriaID']);
        $prod->setIngredientes($linha['ingredientes']);
        return $prod;

    }

    public function Insert(\MODEL\Produtos $prod)
    {
        $sql = "INSERT INTO produtos (ID, nome, descricao, preco, categoriaID, ingredientes ) VALUES (?,?,?,?,?,?) ;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($prod->getID(), $prod->getNome(), $prod->getDescricao(), $prod->getPreco(), $prod->getCategoriaID(), $prod->getIngredientes()));
        $con = Conexao::desconectar();
      
        return $result; 
    }

    public function Update(\MODEL\Produtos $prod)
    {
        $sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, categoriaID = ?, ingredientes = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($prod->getNome(), $prod->getDescricao(), $prod->getPreco(), $prod->getCategoriaID(), $prod->getIngredientes()));
        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete($id)
    {
        $sql = "delete from produtos WHERE id = ?;";

        $con = Conexao::conectar();
        $query= $con->prepare($sql);
        $result = $query->execute(array( $id ));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>