<!-- Meu CSS -->
<link rel="stylesheet" href="app/assets/css/painel.css">


<body>

    <div class="container">
        <div class="content">
            <div id="cadastro">
                <form method="post" action="">
                    <h1>Cadastro Recepcionista</h1>
                    <p id="larguraespaço">
                        <label for="email_cad"> Cadastro </label>
                        <input id="email_cad" name="email_cad" required="required" type="text" placeholder="exemplo@gmail.com" />
                    </p>
                    <p id="larguraespaço">
                        <label for="senha_cad"> Cadastro </label>
                        <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="" />
                    </p>
                    <a href="cpanel.php?pg=agenda" class="btn btn-block btn-primary">Entrar</a>
                    <a href="cpanel.php?pg=login" class="btn btn-block btn-warning my-4">Voltar</a>
                </form>
            </div>
        </div>
    </div>
</body>