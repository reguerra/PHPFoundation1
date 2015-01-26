<?php
require_once "header.php";
?>

<h3>Faça o login abaixo</h3>
<div id="login-form">
    <form action="../templates/login.php" class="form-group" name="login" method="post" id="login">
        <fieldset><h2>Login</h2></fieldset>
        <label for="user">Nome de usuário
            <input type="text" name="user" class="login">
        </label>
        <label for="senha">Senha
            <input type="password" name="senha">
        </label>
        <input type="submit" class="botao">
    </form>
</div>

<?php
require_once "footer.php";
?>