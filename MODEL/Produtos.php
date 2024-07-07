<?php 
  namespace MODEL; 
  
  class Produtos {
    private ?int $ID;
    private ?string $nome;
    private ?string $descricao; 
    private ?float $preco;
    private ?int $categoriaID;
    private ?string $ingredientes;

    public function __construct()
    {
    }

    public function getID()
    {
        return $this->ID;
    }

    public function setID(int $ID)
    {
        $this->ID = $ID;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    public function getCategoriaID()
    {
        return $this->categoriaID;
    }

    public function setCategoriaID(int $categoriaID)
    {
        $this->categoriaID = $categoriaID;
    }
    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    public function setIngredientes(string $ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }
  }