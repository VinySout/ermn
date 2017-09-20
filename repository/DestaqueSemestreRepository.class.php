<?php

class DestaqueSemestreRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($destSem){
        $query = "INSERT INTO destaquesemestre (id, img, posto, nome, semestre) values(?,?,?,?,?)";
      
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("issss", $destSem->getId(), $destSem->getImg(), $destSem->getPosto(), $destSem->getNome(), $destSem->getSemestre());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listarDestSem(){
        $retorno = array();
        $query = "SELECT id, img, posto, nome, semestre  FROM destaquesemestre ORDER BY id DESC limit 4";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $img, $posto, $nome, $semestre);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new DestaqueSemestre($id, $img, $posto, $nome, $semestre);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    public function listarDest($id){
        $retorno = array();
        $query = "SELECT id, img, posto, nome, semestre  FROM destaquesemestre WHERE id=".$id;
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $img, $posto, $nome, $semestre);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new DestaqueSemestre($id, $img, $posto, $nome, $semestre);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
}