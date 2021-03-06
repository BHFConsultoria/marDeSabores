<?php

class ClienteDAO extends AbstractDAO {
    private $con;
    
    function __construct() {
        $this->con = new Conexao();
    }

    function desativarCliente($cdCliente){
        try {
            $query = "UPDATE cliente SET nm_situacao = 'D' WHERE cd_cliente = ?";
            $pdo = $this->con->getConexao()->prepare($query);
            
            $pdo->bindValue(1, $cdCliente);
            
            $pdo->Execute();
            
            if($pdo->rowCount()){
                return "Cliente Desativado";
            }
            
        } catch (Exception $ex) {
            echo $ex->getCode(),$ex->getFile(),$ex->getLine(),$ex->getMessage();
        }
    }
    
    function alterarCliente($bean){
        try{
        $query = "UPDATE cliente SET nm_cliente = ?, nm_email = ?, ds_senha = ?, cd_cpf = ?, dt_nascimento = ?, cd_telefone = ?, nm_logradouro = ?, nm_complemento = ?, nm_cidade = ?, nm_bairro = ?, cd_cep = ?, sg_uf = ?, sg_sexo = ?,cd_celular = ? WHERE cd_cliente = ?";
    $pdo  = $this->con->getConexao()->prepare($query);
         
         $pdo->bindValue(1, $bean->getNmCliente());
         $pdo->bindValue(2, $bean->getNmEmail());
         $pdo->bindValue(3, $bean->getDsSenha());
         $pdo->bindValue(4, $bean->getCdCpf());
         $pdo->bindValue(5, $bean->getDtNascimento());
         $pdo->bindValue(6, $bean->getCdTelefone());
         $pdo->bindValue(7, $bean->getNmLogradouro());
         $pdo->bindValue(8, $bean->getNmComplemento());
         $pdo->bindValue(9, $bean->getNmCidade());
         $pdo->bindValue(10, $bean->getNmBairro());
         $pdo->bindValue(11, $bean->getCdCep());
         $pdo->bindValue(12, $bean->getSgUf());
         $pdo->bindValue(13, $bean->getSgSexo());
         $pdo->bindValue(14, $bean->getCdCelular());
         $pdo->bindValue(15, $bean->getCdCliente());
         $pdo->execute();
        
         if($pdo->rowCount()){
                return "Cliente Alterado";
            }
            
        } catch (Exception $ex) {
            echo $ex->getCode(),$ex->getFile(),$ex->getLine(),$ex->getMessage();
        }
         
    }   
    
    function cadastrarCliente($bean){
        
        try {
         $query = "INSERT INTO cliente (nm_cliente,nm_email,ds_senha, cd_cpf, dt_nascimento, cd_telefone, nm_logradouro, nm_complemento, nm_cidade, nm_bairro, cd_cep, sg_uf, sg_sexo,cd_celular, nm_situacao)
VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
         $pdo  = $this->con->getConexao()->prepare($query);
         
         $pdo->bindValue(1, $bean->getNmCliente());
         $pdo->bindValue(2, $bean->getNmEmail());
         $pdo->bindValue(3, $bean->getDsSenha());
         $pdo->bindValue(4, $bean->getCdCpf());
         $pdo->bindValue(5, $bean->getDtNascimento());
         $pdo->bindValue(6, $bean->getCdTelefone());
         $pdo->bindValue(7, $bean->getNmLogradouro());
         $pdo->bindValue(8, $bean->getNmComplemento());
         $pdo->bindValue(9, $bean->getNmCidade());
         $pdo->bindValue(10, $bean->getNmBairro());
         $pdo->bindValue(11, $bean->getCdCep());
         $pdo->bindValue(12, $bean->getSgUf());
         $pdo->bindValue(13, $bean->getSgSexo());
         $pdo->bindValue(14, $bean->getCdCelular());
         $pdo->bindValue(15, 'A');
         $pdo->execute();

         if($pdo->rowCount()){
             return "Cliente Cadastrado";
         }
        } catch (Exception $ex) {
            echo $ex->getCode(),$ex->getMessage(),$ex->getFile(),$ex->getLine();
        }  
    }
    
    protected function getTabela() {
        return "cliente";
    }

    protected function getCon() {      
        return $this->con;
    }

    protected function getPk() {
        return "cd_cliente";
    }

}

    
