<?php require_once "header.php"; ?>

<h2>Preencha o formulário abaixo e clique no botão enviar para cadastrar um novo cliente</h2>

<form action="../templates/newclient.php" method="post" class="form-group" id="novo-cliente">
    <fieldset id="novo-cliente">
        <label for "nome-cliente">Nome<br>
            <input type="text" class="" name="nome-cliente">
        </label>
        <label for "idade-cliente">Idade<br>
        <input type="text" class="" name="idade-cliente">
        </label>
        <label for "cpf-cliente">CPF<br>
        <input type="text" class="" name="cpf-cliente">
        </label>
        <label for "endereco-cliente">Endereço<br>
        <input type="text" class="" name="endereco-cliente">
        </label>
        <input type="submit" id="novo-cliente-enviar">
    </fieldset>
</form>

<?php require_once "footer.php"; ?>