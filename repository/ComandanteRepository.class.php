<?php

    header('Content-Type: text/html; charset=utf-8',true);
class ComandanteRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($comandante){
        $query = "INSERT INTO comandantes (id, foto, nome, periodo) values(?,?,?,?)";
      
          
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("isss", $comandante->getId(),$comandante->getFoto(),$comandante->getNome(), $comandante->getPeriodo());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarComandantes(){
        $retorno = array();
        $query = "SELECT id, foto, nome, periodo FROM comandantes ORDER BY id DESC ";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $foto, $nome, $periodo);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new Comandante($id, $foto, $nome, $periodo);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    public function listaCmdt($id){
        $retorno = array();
        $query = "SELECT id, foto, nome, periodo FROM comandantes WHERE id=".$id;
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $foto, $nome, $periodo);
            
            //$id = result.getInt(0); 
          
            while ($stmt->fetch()) {
                $retorno[] = new Comandante($id, $foto, $nome, $periodo);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}
