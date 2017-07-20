<?php
   header('Content-Type: text/html; charset=utf-8',true);
class ChamadoStiRepository {
    
      private $conexao;
      function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($chamadoSti){
        $query = "INSERT INTO chamadosti (id, nome, usuario, descricao, sdata, infpc, infpc2, providenciado, solucao, "
                . "substituicao, itemdesc) values(?,?,?,?,?,?,?,?,?,?,?)";
      
          
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("issssssssss", $chamadoSti->getId(), $chamadoSti->getNome(), $chamadoSti->getUsuario(),
                    $chamadoSti->getDescricao(), $chamadoSti->getSdata(), $chamadoSti->getInfPc(), $chamadoSti->getInfPc2(),
                    $chamadoSti->getProvidenciado(), $chamadoSti->getSolucao(), $chamadoSti->getSubstituicao(), $chamadoSti->getItemDesc());
            
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
        public function listarChamadoSti(){
        $retorno = array();
        $query = "SELECT id, nome, usuario, descricao, sdata, infpc, infpc2, providenciado, solucao, "
                . "substituicao, itemdesc FROM chamadosti ORDER BY id DESC ";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome, $usuario, $descricao, $sData, $infpc, $infpc2, $providenciado, $solucao, $substituicao, $itemdesc);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new ChamadoSti($id, $nome, $usuario, $descricao, $sData, $infpc, $infpc2, $providenciado, $solucao, $substituicao, $itemdesc);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    
     public function listarChamadoStiId($id){
        $retorno = array();
        $query = "SELECT id, nome, usuario, descricao, sdata, infpc, infpc2, providenciado, solucao, "
                . "substituicao, itemdesc FROM chamadosti WHERE id=".$id;
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome, $usuario, $descricao, $sData, $infpc, $infpc2, $providenciado, $solucao, $substituicao, $itemdesc);
            
            //$id = result.getInt(0); 
          
            while ($stmt->fetch()) {
                $retorno[] = new ChamadoSti($id, $nome, $usuario, $descricao, $sData, $infpc, $infpc2, $providenciado, $solucao, $substituicao, $itemdesc);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
}

