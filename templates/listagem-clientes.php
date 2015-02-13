<?php

require_once PHP_ROOT.'/inc/functions.php';
require_once 'newclient.php';
require_once 'header.php';

echo '<h2>Confira abaixo a listagem de clientes</h2>';
echo '<p>Clique no cliente para listar os dados individuais</p>'; ?>

<div class="tabela-listagem">
    <div class="pessoa">
        <p>Tipo</p>
    </div>
    <div class="nome">
        <p>Nome</p>
    </div>
    <div class="classif">
        <p>Classificação (1 a 5 estrelas)</p>
    </div><br>

    <?php

    foreach ($clientes as $cliente){
        $classificacao = $cliente->getClassificacao();
        $nome = $cliente->getNome();?>
        <div class="pessoa">
            <h5><a href="/cliente?cliente=<?php echo $nome; ?>">
                <?php if ($cliente instanceof ClientePF) {
                    echo 'Pessoa Física';
                } else {
                    echo 'Pessoa Jurídica';
                } ?>
            </a></h5>
        </div>
        <div class="nome">
            <h5><a href="/cliente?cliente=<?php echo $nome; ?>">
                <?php echo $nome; ?>
            </a></h5>
        </div>
        <div class="classif">
            <h5><a href="/cliente?cliente=<?php echo $nome; ?>">
                <?php if (!empty ($classificacao)) {
                    echo $classificacao;} else {
                    echo '';
                } ?>
            </a></h5>
        </div> <?php
    }?>
</div>

<?php

echo '</div>';

require_once 'footer.php';