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

    public function setBoth()
    {
        $cliente = $this->getNome();
        $classificacao = $this->getClassificacao();
        $endcobranca = $this->getEndcobranca();

        if (empty ($classificacao) or empty ($endcobranca)){?>
            <form action="/dados" class="form-group" id="form-cliente" name="form-cliente" method="post">
                <?php
                if (empty($classificacao) && ! empty($endcobranca)){
                    if (! empty($_SESSION[$cliente]['classificacao'])){
                        echo $_SESSION[$cliente]['classificacao'].'<br>';}
                        else {?>
                    <input type="text" value="<?php echo $cliente;?>" name="cliente"><br><br> <?php
                    setClassif();}
                    echo $endcobranca.'<br><br>';
                } if (empty($endcobranca) && ! empty($classificacao)){
                    echo $classificacao.'<br><br>';
                    if (! empty ($_SESSION[$cliente]['endcobranca'])){
                        echo$_SESSION[$cliente]['endcobranca'].'<br>';
                    }else { ?>
                    <input type="text" value="<?php echo $cliente;?>" name="cliente"><br><br> <?php
                    setEndCob();
                }} if (empty($classificacao) && empty($endcobranca)){
                    if (!empty ($_SESSION[$cliente]['classificacao'])){
                        echo $_SESSION[$cliente]['classificacao'].'<br>';
                    }
                    if (! empty ($_SESSION['endcobranca'])){
                        echo $_SESSION[$cliente]['endcobranca'].'<br>';
                    }
                    if (empty ($_SESSION[$cliente]['classificacao']) && empty ($_SESSION['endcobranca'])){?>
                    <input type="text" value="<?php echo $cliente;?>" name="cliente"><br><br> <?php
                    setClassif();
                    setEndCob();
                }} ?>
                <input type="submit" value="Enviar" class="cliente-enviar">
            </form> <?php
        } else {
            echo $classificacao.'<br><br>';
            echo $endcobranca.'<br><br>';
        }
    }

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