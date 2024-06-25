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
             $categoria->setID($linha['ID']); 
             $categoria->setNome($linha['nome']);
             $categoria->setDescricao($linha['descricao']);
             $lstCategoria[] = $categoria; 
         }
         return $lstCategoria;
          
      }
      public function SelectID(int $ID){}
      public function SelectNome(string $nome){}
      public function SelectDesc(string $descricao){}
   }

?>