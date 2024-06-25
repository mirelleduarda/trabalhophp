<?php 
  namespace MODEL; 
  class Categoria {
    private ?int $ID; 
    private ?string $nome;
    private ?string $descricao;

    public function __construct() { }

    public function getID(){
        return $this->ID; 
    }

    public function setID(int $ID){
        $this->ID = $ID;     
    }

    public function getNome(){
    return $this->nome; 
    }

    public function setNome(string $nome){
       $this->nome = $nome;     
    }

    public function getDescricao(){
        return $this->descricao;       
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao; 
    }
  }
?>