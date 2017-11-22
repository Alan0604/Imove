<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUÉIS UTFPR</title>
    </head>
    <body>
        <input type="hidden" id="dados" name="dados" value="<?php echo($dados ?? ''); ?>" />
        <form method="POST" action="controle/CUsuario.php">
		<div>
			<label for="nome">* Nome</label>
                        <input type="text" name="nome" id="nome" required placeholder="Alan Rodrigo">
		</div>			
		<br>
		
		<div>
			<label for="genero">* Gênero</label>
                        <input type="radio" name="genero" id="genero" value="masculino" required>Masculino
                        <input type="radio" name="genero" id="genero" value="feminino" required>Feminino
		</div>
		<br>
                
                <div>
			<label for="email">* E-mail</label>
                        <input type="email" name="email" id="email" required placeholder="joaodanica@mail.com">
		</div>
                <br>
                
                <div>
			<label for="senha">* Senha</label>
                        <input type="password" name="senha" id="senha" required placeholder="*******">
		</div>
		<br>
                
		<div>
			<label for="telefone">* Telefone</label>
			<input type="text" name="telefone" id="telefone" required placeholder="(45) 99832-7070">
		</div>
		<br>

		<div>
			<label for="cpf">* CPF</label>
			<input type="text" name="cpf" id="cpf" required placeholder="___.___.___-__">
		</div>
		<br>

		<div>
			<label for="endereco">* Endereço</label>
			<input type="text" name="endereco" id="endereco" required placeholder="Rua tal">
		</div>
		<br>

		<div>
			<label for="bairro">* Bairro</label>
			<input type="text" name="bairro" id="bairro" required placeholder="São Luís">
		</div>
		<br>

		<div>
			<label for="cidade">* Cidade</label>
			<input type="text" name="cidade" id="cidade" required placeholder="Santa Helena">
		</div>
		<br>
                
                <div>
			<label for="cep">* CEP</label>
			<input type="text" name="cep" id="cep" required placeholder="_____-___">
		</div>
		<br>
		
                <input type="hidden" name="processo" value="criar">
                <input type="submit" value="CONFIRMAR">
                <a href="index.php" ><input type="button" value="CANCELAR"></a>
        </form>
        
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Gênero</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Bairro</td>
                    <td>Cidade</td>
                </tr>
            </thead>
            <tbody>
                <?php require_once ('controle/CUsuario.php');?>
            </tbody>
        </table>
        
        <footer>
            	<script type="text/javascript" src="http://localhost:8080/Imovel/js/scripts-morarsh.js"></script>

        </footer>
    </body>
</html>
