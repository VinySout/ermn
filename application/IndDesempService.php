<?php

class IndDesempService {
    private $incluirIndDesemp;
    
    function __construct($conexao) {
        $this->incluirIndDesemp = new IndDesempRepository($conexao);
    }
    function inserirIndDesemp(IndDesemp $indDesemp){
        $this->incluirIndDesemp->inserir($indDesemp);
    }
    function mostrarIndDesemp($id){
        return $this->incluirIndDesemp->listarIndDesemp();
    }

    
}
