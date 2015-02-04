<?php

class ORM {

    public $table = '';

    protected function flush () {

    }
}

class Clientes {
    private $nome;
    private $idade;
    private $cpf;
    private $endereco;

    public function __construct($nome, $idade, $cpf, $endereco)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function setCliente()
    {
        $name = $_POST['nome-cliente'];
        $age = $_POST['idade-cliente'];
        $ccpf = $_POST['cpf-cliente'];
        $endereco = $_POST['endereco-cliente'];

        $cliente = new Clientes($name, $age, $ccpf, $endereco);
        return $cliente;
    }

    public function saveClient(){
        $cliente = setCliente();

        $query = "INSERT INTO clientes (nome, idade, cpf, endereco) VALUES (:nome, :idade, :cpf, :endereco);";
        $stmt = conexaoDB()->prepare($query);
        $stmt->bindValue('nome', $cliente->getNome());
        $stmt->bindValue('idade', $cliente->getIdade());
        $stmt->bindValue('cpf', $cliente->getCpf());
        $stmt->bindValue('endereco', $cliente->getEndereco());
        $stmt->execute();
    }


}



