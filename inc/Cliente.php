<?php

require_once 'functions.php';

class Cliente
{
    private $nome;
    private $endereco;
    private $endcobranca;
    private $classificacao;

    public function __construct__($nome = null, $endereco = null, $endcobranca = null, $classificacao = null)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->endcobranca = $endcobranca;
        $this->classificacao = $classificacao;
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

    /**
     * @return mixed
     */
    public function getEndcobranca()
    {
        return $this->endcobranca;
    }

    /**
     * @param mixed $endcobranca
     */
    public function setEndcobranca($endcobranca)
    {
        $this->endcobranca = $endcobranca;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassificacao()
    {
        return $this->classificacao;
    }

    /**
     * @param mixed $classificacao
     */
    public function setClassificacao($classificacao)
    {
        $this->classificacao = $classificacao;
        return $this;
    }

    /*
    public function verEndCob()
    {
        $endcobranca = $this->getEndcobranca();

        if (!empty ($endcobranca)) {
            echo 'Endereço de Cobrança: ' . $endcobranca . '<br>';
        }
    }*/
/*
    public function verClassif()
    {
        $classificacao = $this->getClassificacao();

        if (!empty ($classificacao)) {
            echo 'Classificação: ' . $classificacao . '<br>';
        }
    } */

    public function setDois(){

        if (! empty($_POST['cliente'])){
            $cliente = $_POST['cliente'];
            $classificacao = $_POST['classificacao'];
            $endcobranca = $_POST['endcob'];

            if (isset ($classificacao) && ! empty($_POST['classificacao'])){
                $_SESSION[$cliente]['classificacao'] = $classificacao;
                }
            if (isset($endcobranca) && ! empty($endcobranca)){
                $_SESSION[$cliente]['endcobranca'] = $endcobranca;
                }
        }
    }
}