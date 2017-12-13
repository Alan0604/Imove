<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ALUGUÉIS UTFPR</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="CImovel.php" enctype="multipart/form-data">			
            <br>
            <div>
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" placeholder="" required>
            </div>
            <br>
            <div>
                <label for="descricao">Tipo</label>
                <input type="text" name="tipo" id="descricao" placeholder="">
            </div>
            <br>
            <div>
                <label for="cozinhas">Quartos:</label>
                <select name="quartos">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="cozinhas">Cozinhas:</label>
                <select name="cozinhas">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="salasestar">Salas de Estar:</label>
                <select name="salasestar">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="banheiros">Banheiros:</label>
                <select name="banheiros">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="suites">Suites:</label>
                <select name="suites">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="churrasqueiras">Churrasqueiras:</label>
                <select name="churrasqueiras">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="jardins">Jardins:</label>
                <select name="jardins">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="dispensas">Dispensas:</label>
                <select name="dispensas">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="salastv">Salas TV:</label>
                <select name="salastv">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="escritorios">Escritorios:</label>
                <select name="Escritorios">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="empregadas">Empregadas:</label>
                <select name="empregadas">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="porao">Porão:</label>
                <select name="porao">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <div>
                <label for="piscinas">Piscinas:</label>
                <select name="piscinas">
                        <option value="0">Nenhum</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">Mais</option>
                </select>
            </div>
            <br>
            <div>
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" placeholder="" required>
            </div>
            <br>
            <div>
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" placeholder="Rua Bahia" required>
            </div>
            <br>
            <div>
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" autofocus placeholder="89" required>
            </div>
            <br>
            <div>
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" placeholder="Centro" required>
            </div>
            <br>

            <div>
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" placeholder="Santa Helena" required>
            </div>
            <br>
            <div>
                <label for="estado">Estado:</label>
                    <select name="estado">
                            <option value="0">Nenhum</option>
                            <option value="PR">Parana</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">Mais</option>
                    </select>
            </div>
            <br>
            <div>
                <label for="preco">Preco R$</label>
                <input type="text" name="preco" id="preco" placeholder="R$300,00" required>
            </div>
            <br>
            <div>
                <label>
                    Imagens: 
                    <input type="file" name="arquivo[]" multiple>
                    <br>OBS: Uma ou mais imagens.
		</label>
            </div>
            
            <br>

            <input type="hidden" name="processo" value="criar">
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
        
        <?php include_once("listagemImoveis.php"); ?>

        <footer></footer>
        
        <script type="text/javascript" src="http://localhost:8080/Imovel/js/scripts-morarsh.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
