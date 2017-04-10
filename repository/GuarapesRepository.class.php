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
}
