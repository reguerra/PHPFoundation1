<?php

class ClientePF extends Cliente{
    private $cpf;
    private $idade;

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

    public function showClienteInd(){
        $nome = $this->getNome();
        $idade = $this->getIdade();
        $cpf = $this->getCpf();
        $endereco = $this->getEndereco();

        echo '<h3>Nome: '.$nome.'</h3><br>';
        echo 'Idade: '.$idade.'<br>';
        echo 'CPF: '.$cpf.'<br>';
        echo 'Endereço: '.$endereco.'<br><br>';
        $this->setBoth();
    }

}