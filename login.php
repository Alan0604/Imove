<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aluguéis UTF</title>
    </head>
    <body>
        <form method="POST" action="controle/CLogin.php">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <input type="checkbox" name="lembrar" id="lembrar" value="lembrar">
            <label for="lembrar">Lembrar-me</label>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>

            <input type="hidden" name="processo" value="logar">
            <br>
            <input type="submit" value="ENTRAR">
            <a href="index.php" ><input type="button" value="CANCELAR"></a>
            <br>
        </form>
        <a href="esqueceuSenha.php">Esqueci minha senha</a>
        <a href="usuarios.php">Cadastre-se</a>
    </body>
</html>