<?php


class ShowCliente {

    private $cliente;

    public function __construct($cliente)
    {
        $this->cliente = $cliente;
    }


    public function showClienteIndPF($cliente)
    {
        $nome = $cliente->getNome();
        $classificacao = $cliente->getClassificacao();
        $endcobranca = $cliente->getEndcobranca();

        echo $cliente->getNome().'<br>';
        echo $cliente->getIdade(). '<br>';
        echo $cliente->getCpf(). '<br>';
        echo $cliente->getEndereco(). '<br>';
        if (empty ($classificacao) or empty ($endcobranca)) {
            ?>
            <form action="/dados" class="form-group" id="form-cliente" name="form-cliente" method="post">
                <?php
                if (empty($classificacao) && !empty($endcobranca)) {
                    if (!empty($_SESSION[$nome]['classificacao'])) {
                        echo $_SESSION[$nome]['classificacao'] . '<br>';
                    } else { ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setClassif();
                    }
                    echo $endcobranca . '<br><br>';
                }
                if (empty($endcobranca) && !empty($classificacao)) {
                    echo $classificacao . '<br><br>';
                    if (!empty ($_SESSION[$nome]['endcobranca'])) {
                        echo $_SESSION[$nome]['endcobranca'] . '<br>';
                    } else { ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setEndCob();
                    }
                }
                if (empty($classificacao) && empty($endcobranca)) {
                    if (!empty ($_SESSION[$nome]['classificacao'])) {
                        echo $_SESSION[$nome]['classificacao'] . '<br>';
                    }
                    if (!empty ($_SESSION[$nome]['endcobranca'])) {
                        echo $_SESSION[$nome]['endcobranca'] . '<br>';
                    }
                    if (empty ($_SESSION[$nome]['classificacao']) && empty ($_SESSION[$nome]['endcobranca'])) {
                        ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setClassif();
                        setEndCob();
                    }
                }   ?>
                <input type="submit" value="Enviar" class="cliente-enviar">
            </form> <?php
        } else {
            echo $classificacao.'<br>';
            echo $endcobranca.'<br>';
        }
    }

    public function showClienteIndPJ($cliente)
    {
        $nome = $cliente->getNome();
        $classificacao = $cliente->getClassificacao();
        $endcobranca = $cliente->getEndcobranca();

        echo $cliente->getNome() . '<br>';
        echo $cliente->getCnpj() . '<br>';
        echo $cliente->getEndereco() . '<br>';
        if (empty ($classificacao) or empty ($endcobranca)) {
            ?>
            <form action="/dados" class="form-group" id="form-cliente" name="form-cliente" method="post">
                <?php
                if (empty($classificacao) && !empty($endcobranca)) {
                    if (!empty($_SESSION[$nome]['classificacao'])) {
                        echo $_SESSION[$nome]['classificacao'] . '<br>';
                    } else { ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setClassif();
                    }
                    echo $endcobranca . '<br><br>';
                }
                if (empty($endcobranca) && !empty($classificacao)) {
                    echo $classificacao . '<br><br>';
                    if (!empty ($_SESSION[$nome]['endcobranca'])) {
                        echo $_SESSION[$nome]['endcobranca'] . '<br>';
                    } else { ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setEndCob();
                    }
                }
                if (empty($classificacao) && empty($endcobranca)) {
                    if (!empty ($_SESSION[$nome]['classificacao'])) {
                        echo $_SESSION[$nome]['classificacao'] . '<br>';
                    }
                    if (!empty ($_SESSION[$nome]['endcobranca'])) {
                        echo $_SESSION[$nome]['endcobranca'] . '<br>';
                    }
                    if (empty ($_SESSION[$nome]['classificacao']) && empty ($_SESSION[$nome]['endcobranca'])) {
                        ?>
                        <input type="text" value="<?php echo $nome; ?>" name="cliente"><br><br> <?php
                        setClassif();
                        setEndCob();
                    }
                } ?>
                <input type="submit" value="Enviar" class="cliente-enviar">
            </form> <?php
        } else {
            echo $classificacao . '<br>';
            echo $endcobranca . '<br>';
        }
    }
}

