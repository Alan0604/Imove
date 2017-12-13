<?php
    require_once ('Conexao.php');

/**
 * Description of DAOUsuario
 *
 * @author Alan
 */
class DAOUsuario {
    /* 
     * @autor: Alan Rodrigo Gouveia.
     * @descrição: Método para salvar os dados no banco.
     * @data: 29/11/2017.
     * @alterada em:
     * @alterada por:
     */
    
    public function salvarUsuario($DTOUsuario){
        $sql = 'INSERT INTO usuarios (usu_nome, usu_senha, usu_status) VALUES(:NOME, :SENHA, :STATUS)';
        if(!empty(':NOME')){
            $pstmt = Conexao::getInstance()->prepare($sql);
            $pstmt->bindValue(':NOME', $DTOUsuario->getUsu_nome(), PDO::PARAM_STR);
            $pstmt->bindValue(':SENHA', $DTOUsuario->getUsu_senha(), PDO::PARAM_STR);
            $pstmt->bindValue(':NOME', $DTOUsuario->getUsu_status(), PDO::PARAM_STR);
            $pstmt->execute();

            return $pstmt->rowCount();
        }
        else{
            echo'Não foi possível cadastrar Usuário! Nome já existente';
        }
    }
    
    public function buscarUsuarioPorNome($pesNome){
        $sql = 'SELECT * FROM usuario WHERE lower(pes_nome) = :nome';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':nome', strtolower($pesNome), PDO::PARAM_STR);
        $pstmt->execute();
        $par = $pstmt->fetch(PDO::FETCH_OBJ);
        return $par;
    }
    
    public function buscarUsuarioLogado($email){
        $sql = 'SELECT * FROM pessoas WHERE lower(pes_email) = :email';
        $pstmt = Conexao::getInstance()->prepare($sql);
        $pstmt->bindValue(':email', strtolower($email), PDO::PARAM_STR);
        $pstmt->execute();
        $par = $pstmt->fetch(PDO::FETCH_OBJ);
        return $par;
    }
}
