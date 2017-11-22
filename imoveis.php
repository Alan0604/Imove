
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUÉIS UTFPR</title>
    </head>
    <body>
        <form method="POST" action="controle/CImovel.php">
		<div>
			<label for="numero">Número</label>
			<input type="text" name="numero" id="numero">
		</div>			
		<br>	                
                                             
		<div>
			<label for="endereco">Endereço</label>
			<input type="text" name="endereco" id="endereco">
		</div>
		<br>

		<div>
			<label for="bairro">Bairro</label>
			<input type="text" name="bairro" id="bairro">
		</div>
		<br>

		<div>
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" id="cidade">
		</div>
		<br>
		
                <div>
			<label for="descricao">Descrição</label>
			<input type="text" name="descricao" id="descricao">
		</div>
		<br>
                                
                <input type="hidden" name="processo" value="criar">
                <input type="submit" value="CADASTRAR">
                <a href="index.php" ><input type="button" value="CANCELAR"></a>
        </form>
    </body>
</html>
