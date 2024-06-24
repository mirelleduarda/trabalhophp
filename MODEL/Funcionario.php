<?php 
  namespace MODEL; 
  
  class Funcionario {
    private ?int $ID;
    private ?string $nome;
    private ?string $dataNascimento; 
    private ?string $CPF;
    private ?string $endereco;
    private ?string $cidade;
    private ?string $telefone;
    private ?string $email;
    private ?int $cargoID;

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

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getCPF()
    {
        return $this->CPF;
    }

    public function setCPF(string $CPF)
    {
        $this->CPF = $CPF;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }
    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function getCargoID()
    {
        return $this->cargoID;
    }

    public function setCargoID(int $cargoID)
    {
        $this->cargoID = $cargoID;
    }
  }