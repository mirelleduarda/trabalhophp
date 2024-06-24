<?php 
  namespace MODEL; 
  class Cargo {
    private ?int $ID; 
    private ?string $nome;
    private ?string $descricao;
    private ?float $salarioBase;

    public function __construct() { }

    public function getID(){
        return $this->ID; 
    }

    public function setId(int $ID){
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

    public function getSalarioBase(){
        return $this->salarioBase;       
    }

    public function setSalarioBase(float $salarioBase){
        $this->salarioBase = $salarioBase; 
    }

  }

?>