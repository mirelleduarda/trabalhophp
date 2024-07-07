<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Categoria.php';

   class Categoria{
      public function Select(){       
           
         $sql = "Select * from categoria;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar(); 


         foreach ($registros as $linha){
             $categoria = new \MODEL\Categoria(); 
             $categoria->setId($linha['ID']); 
             $categoria->setNome($linha['nome']);
             $categoria->setDescricao($linha['descricao']);
             $lstCategoria[] = $categoria; 
         }
         return $lstCategoria;
      }   

      public function SelectByID(int $ID)
      {
         //recuperar do banco de dados
         $sql = "Select * from categoria where ID=?;";
         $con = Conexao::conectar(); 
         $query = $con->prepare($sql);
         $query->execute (array($ID));
         $linha = $query->fetch(\PDO::FETCH_ASSOC);
         Conexao::desconectar(); 

         $categoria = new \MODEL\Categoria();
         $categoria->setID($linha['ID']);
         $categoria->setNome($linha['nome']);
         $categoria->setDescricao($linha['descricao']);
   
         return $categoria;
   
      }

      public function Insert(\MODEL\Categoria $categoria)
    {
        $sql = "INSERT INTO categoria (nome, descricao) VALUES ('{$fun->getNome()}','{$fun->getDescricao}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();
      
        return $result; 
    }

    public function Update(\MODEL\Categoria $categoria){
        $sql = "UPDATE categoria SET nome = ?, descricao = ? WHERE ID = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($categoria->getNome(), $categoria->getDescricao()));
        $con = Conexao::desconectar();
      
        return $result; 
    }

    public function Delete($ID){
        $sql = "delete from categoria WHERE ID = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array( $ID ));
        $con = Conexao::desconectar();
      
        return $result; 
    }
}

?>