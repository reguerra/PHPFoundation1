    <main>
        <h1>Contato</h1>
        <h2>
            Formulário de contato
        </h2>
        <p>
            Preencha o formulário corretamente, e entraremos em contato assim que possível.
        </p>
        <form action="form.php" name="form-de-contato" method="post">
            <fieldset>
                <legend>Dados para contato</legend>
                    <label>Nome<br><input type="text" name="nome"></label>
                    <label>Endereço de email<br><input type="text" name="email"></label>
                    <label>Assunto<br><input type="text" name="assunto"></label>
                    <label>Mensagem<br><textarea name="mensagem"></textarea></label>
                    <input id="submit" type="submit" name="submit" value="Enviar" class="btn btn-primary">
            </fieldset>
        </form>
    </main>