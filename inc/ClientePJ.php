<?php

class ClientePJ extends Cliente{
    private $cnpj;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function showClienteInd(){
        $nome = $this->getNome();
        $cnpj = $this->getCnpj();
        $endereco = $this->getEndereco();

        echo '<h3>Nome: '.$nome.'</h3><br>';
        echo 'CNPJ: '.$cnpj.'<br>';
        echo 'Endereço: '.$endereco.'<br><br>';
        $this->setBoth();
    }

}