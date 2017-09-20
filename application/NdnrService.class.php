<?php

class NdnrService {
    private $incluirNdnr;
    
    function __construct($conexao) {
        $this->incluirNdnr = new NdnrRepository($conexao);
    }
    function inserirNdnr(Ndnr $ndnr){
        $this->incluirNdnr->inserir($ndnr);
    }
    function mostrarNdnr($id){
        return $this->incluirNdnr->listarNdnr($id);
    }

    
}
