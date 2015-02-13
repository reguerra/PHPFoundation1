<?php

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

    public function setClassif()
    { ?>
        <h5>Classifique o cliente abaixo</h5>
            <select name="classificacao">
                <option value="1">1 Estrela</option>
                <option value="2">2 Estrelas</option>
                <option value="3">3 Estrelas</option>
                <option value="4">4 Estrelas</option>
                <option value="5">5 Estrelas</option>
            </select><br><br>
            <?php
    }
/*
    public function verClassif()
    {
        $classificacao = $this->getClassificacao();

        if (!empty ($classificacao)) {
            echo 'Classificação: ' . $classificacao . '<br>';
        }
    } */

    public function setEndCob()
    { ?>
        <h5>Cadastre um endereço de cobrança para o cliente abaixo</h5>
            <input type="text" name="endcob"><br><br>
            <?php
    }

    public function setBoth()
    {
        $nome = $this->getNome();
        $classificacao = $this->getClassificacao();
        $endcobranca = $this->getEndcobranca();

        if (empty ($classificacao) or empty ($endcobranca)){?>
            <form action="/newclient" class="form-group" id="form-cliente" name="form-cliente" method="post">
                <?php
                if (empty($classificacao) && ! empty($endcobranca)){ ?>
                    <input type="text" value="<?php echo $nome;?>" name="cliente"><br><br> <?php
                    $this->setClassif();
                    echo 'Endereço de cobrança: '.$endcobranca.'<br><br>';
                } if (empty($endcobranca) && ! empty($classificacao)){
                    echo 'Classificação: '.$classificacao.'<br><br>';
                    ?>
                    <input type="text" value="<?php echo $nome;?>" name="cliente"><br><br> <?php
                    $this->setEndCob();
                } if (empty($classificacao) && empty($endcobranca)){
                    ?>
                    <input type="text" value="<?php echo $nome;?>" name="cliente"><br><br> <?php
                    $this->setClassif();
                    $this->setEndCob();
                } ?>
                <input type="submit" value="Enviar" class="cliente-enviar">
            </form> <?php
        } else {
            echo 'Classificação: '.$classificacao.'<br><br>';
            echo 'Endereço de cobrança: '.$endcobranca.'<br><br>';
        }
    }

    public function setDois(){

        if (! empty($_POST['cliente'])){
            $classificacao = $_POST['classificacao'];
            $endcobranca = $_POST['endcob'];

            if (isset ($classificacao) && ! empty($_POST['classificacao'])){
                $this->setClassif($classificacao);
                return $this;
                } if (isset($endcobranca) && ! empty($endcobranca)){
                $this->setEndCob($_POST['endcob']);
                return $this;
                }
        }
    }
}