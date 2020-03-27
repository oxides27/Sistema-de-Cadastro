<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar Cadastro </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Alterar Cadastro</h3>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="sobrenome" type="text" class="input is-large" placeholder="Sobrenome">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Nova Senha">
                                </div>
                            </div>
                            <script language="javascript">
                                    function alterar(){
                                    form.action = 'alterar.php';
                                    form.submit();
                                    }
                                    function excluir(){
                                    form.action = 'excluir.php';
                                    form.submit();
                                    }
                                    </script>
                                    <input type='button' value='Alterar' class="button is-block is-link is-large is-fullwidth" onclick="alterar()">
                                    <br>
                                    <input type='button' value='Excluir' class="button is-block is-link is-large is-fullwidth" onclick="excluir()">
                        </form>
                        <form action="alterar.php" method="POST">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
