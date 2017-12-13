<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aluguéis UTF</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="CLogin.php">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" autofocus placeholder="alan@mail.com" value="<?php echo(@$emailcok); ?>" required>
            
            <input type="checkbox" name="lembrar" id="lembrar" value="lembrar" <?php empty($emailcok) ? "" : print("checked"); ?>>
            <label for="lembrar">Lembrar-me</label>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required placeholder="*******">

            <input type="hidden" name="processo" value="logar">
            <br>
            <input type="submit" value="ENTRAR">
            <a href="index.php" ><input type="button" value="CANCELAR"></a>
            <br>
        </form>
               <a href="usuarios.php">Cadastre-se</a>
        <footer>
            <script type="text/javascript" src="http://localhost:8080/morarsh/js/scripts-morarsh.js"></script>
        </footer>
    </body>
    
</html>