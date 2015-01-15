<html>
<head>
    <title>Solicitação enviada</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/resultado.css">
</head>

<div id="resultado">



    <?php
    $y = true;
    foreach ($_POST as $x) {
        if (empty($x)) $y = false;
    }
    if ($y == true) {
        ?>
        <h3>Seus dados foram enviados com sucesso</h3>
        <p>
            Confira abaixo os dados enviados:<br><br>
            Nome: <?= $_POST['nome']; ?><br>
            Endereço de email: <?= $_POST['email']; ?><br>
            Assunto: <?= $_POST['assunto']; ?><br>
            Mensagem: <?= $_POST['mensagem']; ?><br>
        </p>
        <a class="link-home" href="/">Clique aqui para voltar para nossa página inicial</a>
        <?php
    }
    else {
        echo '<h3>Seus dados não foram enviados corretamente. Por favor preencha novamente.</h3>
                <a class="link-home" href="/?page=contato">Clique aqui para voltar para a página de contatos</a>';
    }
    ?>

    <br>
    <br>
</div>
</html>
