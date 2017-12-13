<!DOCTYPE html>

<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <title>Aluguéis UTF</title>
        <link href="http://localhost/morarsh/css/estilos-morarsh.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <header></header>
        <main>
            <!--MENU-->
            <ul>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="imoveis.php">Imóveis</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <?php
                include_once("filtros.php");
                include_once("listagemImoveis.php");
            ?>
        </main>
        <footer></footer>

        <script type="text/javascript" src="http://localhost/morarsh/js/scripts-morarsh.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   </body>
</html>