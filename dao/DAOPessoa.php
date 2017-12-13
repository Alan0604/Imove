<?php
    require_once ('Conexao.php');
    require_once ('./dto/DTOPessoa.php');
/**
 * Description of DAOPessoa
 *
 * @author Alan
 */
class DAOPessoa {
    
    public function __construct() {
        
    }

    /*
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para buscar o usuario pelo participante. Retorno um objeto.
     * @data: 14/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarPessoaPorId($usuId) {
        $sql = 'SELECT * FROM pessoas WHERE pes_id = :IDs';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':IDs', $usuId, PDO::PARAM_INT);
        $pstmt->execute();
        $usu = $pstmt->fetch(PDO::FETCH_OBJ);
        var_dump($usu);
        return $usu;
        
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para salvar os dados no banco.
     * @data: 07/11/2017.
     * @alterada em: 14/11/2017, 29/11/2017.
     * @alterada por: Alan, Alan.
     */
    public function salvarPessoa($DTOPessoa){
        $sql = 'INSERT INTO pessoas (pes_nome, pes_rg, pes_cpf, pes_genero, pes_email, pes_telefone'
                . ') VALUES(:NOME, :RG, :CPF, :SEXO, :EMAIL, :TELEFONE)';
        if(!empty(':RG') || !empty(':CPF') || !empty(':EMAIL')){
            $pstmt = Conexao::getInstance()->prepare($sql);
            $pstmt->bindValue(':NOME', $DTOPessoa->getPes_nome(), PDO::PARAM_STR);
            $pstmt->bindValue(':RG', $DTOPessoa->getPes_rg(), PDO::PARAM_STR);
            $pstmt->bindValue(':CPF', $DTOPessoa->getPes_cpf(), PDO::PARAM_STR);
            $pstmt->bindValue(':SEXO', $DTOPessoa->getPes_genero(), PDO::PARAM_STR);
            $pstmt->bindValue(':EMAIL', $DTOPessoa->getPes_email(), PDO::PARAM_STR);
            $pstmt->bindValue(':TELEFONE', $DTOPessoa->getPes_telefone(), PDO::PARAM_INT);
            $pstmt->execute();
        }
        else{
            echo 'Não foi possivel realizar cadastro! RG, CPF ou EMAL já cadastrados';
        }
        
        return $pstmt->rowCount();
    }

    /*
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para editar usuário.
     * @data: 17/11/2017.
     * @alterada em: 29/11/2017.
     * @alterada por: Alan.
     */
    public function editarPessoa($usuId) {
        $sql = 'UPDATE pessoas SET (pes_nome = NOME, pes_telefone = :TELEFONE, pes_senha = :SENHA, pes_endereco = :ENDERECO, '
                . 'pes_bairro = :BAIRRO, pes_cidade = :CIDADE, pes_cep = :CEP) WHERE pes_id = :ID';
        
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':NOME', $DTOPessoa->getPes_nome(), PDO::PARAM_STR);
        $pstmt->bindValue(':TELEFONE', $DTOPessoa->getPes_telefone(), PDO::PARAM_INT);
        $pstmt->execute();
        
        return $pstmt->rowCount();
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para excluir um usuario
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function excluirPessoa($usuId){
        $sql = 'DELETE FROM pessoas WHERE pes_id = :ID';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':ID', $usuId, PDO::PARAM_INT);
        return $pstmt->execute();
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para buscar N usuários, para paginação.
     *             Retorno uma lista de objetos enquete do banco.
     * @data: 08/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function listarPessoa($apartir, $quantidade){
        $sql = 'SELECT * FROM pessoas LIMIT :inicio, :quant';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':inicio', $apartir, PDO::PARAM_INT);
        $pstmt->bindValue(':quant', $quantidade, PDO::PARAM_INT);
        $pstmt->execute();
        
        return $pstmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function buscarPessoaPorEmailDocNome($pesNome, $pesRG, $pesCPF, $pesEmail){
        $sql = 'SELECT * FROM pessoa WHERE lower(pes_nome) = :nome AND (pes_rg = :rg AND pes_cpf = :cpf) AND lower(pes_email) = :email';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':nome', strtolower($pesNome), PDO::PARAM_STR);
        $pstmt->bindValue(':rg', $pesRG, PDO::PARAM_STR);
        $pstmt->bindValue(':cpf', $pesCPF, PDO::PARAM_STR);
        $pstmt->bindValue(':email', strtolower($pesEmail), PDO::PARAM_STR);
        $pstmt->execute();
        $par = $pstmt->fetch(PDO::FETCH_OBJ);
        return $par;
    }
}
