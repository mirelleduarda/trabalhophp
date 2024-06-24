<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\trabalhophp\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\trabalhophp\MODEL\Cargo.php';

   class Cargo{
      public function Select(){       
           
         $sql = "Select * from cargo;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar(); 


         foreach ($registros as $linha){
             $cargo = new \MODEL\Cargo(); 
             $cargo->setId($linha['ID']); 
             $cargo->setNome($linha['nome']);
             $cargo->setDescricao($linha['descricao']);
             $cargo->setSalarioBase($linha['salarioBase']);
             $lstCargo[] = $cargo; 
         }
         return $lstCargo;
          
      }
      public function SelectID(int $ID){}
      public function SelectNome(string $nome){}
      public function SelectDesc(string $descricao){}
      public function SelectSalarioBase(string $salarioBase){}
   }

?>