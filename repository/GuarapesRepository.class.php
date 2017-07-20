<?php
header('Content-Type: text/html; charset=utf-8',true);

class GuarapesRepository {
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    public function inserir($guarapes){
        $query = "INSERT INTO oguarapes (id, imagem, pdf, edicao) values(?,?,?,?)";
      
          
        if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            $stmt->bind_param("isss", $guarapes->getId(),$guarapes->getImagem(),$guarapes->getPdf(), $guarapes->getEdicao());
            $stmt->execute();
        }else{
            
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
    }
    public function listaGuarapes(){
        $retorno = array();
        $query = "SELECT id, imagem, pdf, edicao FROM oguarapes ORDER BY id DESC ";
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $imagem, $pdf, $edicao);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new Guarapes($id, $imagem, $pdf, $edicao);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
    public function listaGuarapesId($id){
        $retorno = array();
        $query = "SELECT id, imagem, pdf, edicao FROM oguarapes WHERE id=".$id;
        
          if ($stmt = $this->conexao->getMysqli()->prepare($query)) {
            
            $stmt->execute();
            $stmt->bind_result($id, $nome, $pdf, $edicao);
            
          
            while ($stmt->fetch()) {
                $retorno[] = new Guarapes($id, $nome, $pdf, $edicao);
            }
        }else{
            throw new Exception("erro no prepare: ". $this->conexao->getObjetoConexao()->error );
        }
        
        return $retorno;
    }
}
