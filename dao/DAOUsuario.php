<?php
    require_once ('../dao/Conexao.php');
    require_once ('../dto/DTOUsuario.php');
/**
 * Description of DAOUsuario
 *
 * @author Alan
 */
class DAOUsuario {
    
    public function __construct() {
        
    }

    /*
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para buscar o usuario pelo participante. Retorno um objeto.
     * @data: 14/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function buscarUsuarioPorId($usuId) {
        $sql = 'SELECT * FROM pessoas WHERE pes_id = :IDs';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':IDs', $usuId, PDO::PARAM_INT);
        $pstmt->execute();
        $usu = $pstmt->fetch(PDO::FETCH_OBJ);
        return $usu;
    }
    
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para salvar os dados no banco.
     * @data: 07/11/2017.
     * @alterada em: 14/11/2017.
     * @alterada por: Alan.
     */
    public function salvarUsuario($DTOUsuario){
        $sql = 'INSERT INTO pessoas (pes_nome, pes_cpf, pes_genero, pes_email, pes_telefone, pes_senha, pes_endereco, '
                . 'pes_bairro, pes_cidade, pes_cep) VALUES(:NOME, :CPF, :SEXO, :EMAIL, :TELEFONE, :SENHA, :ENDERECO, '
                . ':BAIRRO, :CIDADE, :CEP)';
        
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':NOME', $DTOUsuario->getPes_nome(), PDO::PARAM_STR);
        $pstmt->bindValue(':CPF', $DTOUsuario->getPes_cpf(), PDO::PARAM_STR);
        $pstmt->bindValue(':SEXO', $DTOUsuario->getPes_genero(), PDO::PARAM_STR);
        $pstmt->bindValue(':EMAIL', $DTOUsuario->getPes_email(), PDO::PARAM_STR);
        $pstmt->bindValue(':TELEFONE', $DTOUsuario->getPes_telefone(), PDO::PARAM_INT);
        $pstmt->bindValue(':SENHA', $DTOUsuario->getPes_senha(), PDO::PARAM_STR);
        $pstmt->bindValue(':ENDERECO', $DTOUsuario->getPes_endereco(), PDO::PARAM_STR);
        $pstmt->bindValue(':BAIRRO', $DTOUsuario->getPes_bairro(), PDO::PARAM_STR);
        $pstmt->bindValue(':CIDADE', $DTOUsuario->getPes_cidade(), PDO::PARAM_STR);
        $pstmt->bindValue(':CEP', $DTOUsuario->getPes_cep(), PDO::PARAM_INT);
        $pstmt->execute();
        
        return $pstmt->rowCount();
    }

    /*
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para editar usuário.
     * @data: 17/11/2017.
     * @alterada em: dd/mm/aaaa, dd/mm/aaaa, dd/mm/aaaa, etc.
     * @alterada por: nome, nome, nome, etc.
     */
    public function editarUsuario($usuId) {
        $sql = 'UPDATE pessoas SET (pes_nome = NOME, pes_telefone = :TELEFONE, pes_senha = :SENHA, pes_endereco = :ENDERECO, '
                . 'pes_bairro = :BAIRRO, pes_cidade = :CIDADE, pes_cep = :CEP) WHERE pes_id = :ID';
        
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':NOME', $DTOUsuario->getPes_nome(), PDO::PARAM_STR);
        $pstmt->bindValue(':TELEFONE', $DTOUsuario->getPes_telefone(), PDO::PARAM_INT);
        $pstmt->bindValue(':SENHA', $DTOUsuario->getPes_senha(), PDO::PARAM_STR);
        $pstmt->bindValue(':ENDERECO', $DTOUsuario->getPes_endereco(), PDO::PARAM_STR);
        $pstmt->bindValue(':BAIRRO', $DTOUsuario->getPes_bairro(), PDO::PARAM_STR);
        $pstmt->bindValue(':CIDADE', $DTOUsuario->getPes_cidade(), PDO::PARAM_STR);
        $pstmt->bindValue(':CEP', $DTOUsuario->getPes_cep(), PDO::PARAM_INT);
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
    public function excluirUsuario($usuId){
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
    public function listarUsuarios($apartir, $quantidade){
        $sql = 'SELECT * FROM pessoas LIMIT :inicio, :quant';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':inicio', $apartir, PDO::PARAM_INT);
        $pstmt->bindValue(':quant', $quantidade, PDO::PARAM_INT);
        $pstmt->execute();
        
        return $pstmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
