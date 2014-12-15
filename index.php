<?php require_once "header.php" ?>

    <div class="row">
        <div class="col-xs-3">
            <header>
                <ul class="nav nav-pills nav-stacked">
                    <li <?php isActive('home') ?>><a href="/">Home</a></li>
                    <li <?php isActive('empresa') ?>><a href="?page=empresa">Empresa</a></li>
                    <li <?php isActive('produtos') ?>><a href="?page=produtos">Produtos</a></li>
                    <li <?php isActive('servicos') ?>><a href="?page=servicos">Serviços</a></li>
                    <li <?php isActive('contato') ?>><a href="?page=contato">Contato</a></li>
                </ul>
            </header>
        </div>

        <div class="col-xs-9">
            <main>
                <?php
                $get = $_GET;
                if (!isset($get['page'])) {
                    require_once "home.php";
                } else {
                    switch ($get['page']) {
                        case "empresa":
                            require_once "empresa.php";
                            break;
                        case "servicos":
                            require_once "servicos.php";
                            break;
                        case "produtos":
                            require_once "produtos.php";
                            break;
                        case "contato":
                            require_once "contato.php";
                            break;
                        case "home":
                            require_once "home.php";
                            break;
                        default:
                            require_once "404.php";
                            break;
                    }
                }
                ?>
            </main>
        </div>
    </div>

<?php require_once "footer.php"; ?>