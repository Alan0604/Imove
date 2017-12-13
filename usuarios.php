<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUÉIS UTFPR</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <input type="hidden" id="dados" name="dados" value="<?php echo($dados ?? ''); ?>" />
        <form method="POST" action="CPessoa.php">
            <div>
                <label for="nome">* Nome</label>
                <input type="text" name="nome" id="nome" autofocus required placeholder="Fulano de Tal">
            </div>			
            <br>

            <div>
                <label for="genero">* Gênero</label>
                <input type="radio" name="genero" id="genero" value="masculino" required >Masculino
                <input type="radio" name="genero" id="genero" value="feminino" required checked>Feminino
            </div>
            <br>
            
            <div>
                <label for="rg">* RG</label>
                <input type="text" name="rg" id="rg" required placeholder="___.___.___-__">
            </div>
            <br>
            
            <div>
                <label for="cpf">* CPF</label>
                <input type="text" name="cpf" id="cpf" required placeholder="___.___.___-__">
            </div>
            
            <br>
            <div>
                <label for="telefone">* Telefone</label>
                <input type="text" name="telefone" id="telefone" required placeholder="(ddd) 99999-9999">
            </div>
            
            
            <br>
            <div>
                <label for="email">* E-mail</label>
                <input type="email" name="email" id="email" required placeholder="emailid@servidor.com">
            </div>
            <br>
            
            <fieldset>
            <div>
                <label for="usuario">* Usuário</label>
                <input type="text" name="usuario" id="nome" autofocus required placeholder="Alan">
            </div>			
            <br>
            
            <div>
                <label for="senha">* Senha</label>
                <input type="password" name="senha" id="senha" autofocus required placeholder="******">
            </div>
            
            </fieldset>
            <br>

            <input type="hidden" name="processo" value="criar">
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
        
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Gênero</td>
                    <td>RG</td>
                    <td>CPF</td>
                    <td>Email</td>
                    <td>Telefone</td>
                </tr>
            </thead>
            <tbody>
                <?php require_once ('CPessoa.php');?>
            </tbody>
        </table>
        
        <footer></footer>
        
        <script type="text/javascript" src="http://localhost:8080/Imovel/js/scripts-morarsh.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
    </body>
</html>
