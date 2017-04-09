<?php
header('Content-Type: text/html; charset=utf-8',true);
class ChamadoStiService {
    
    private $incluirChamadoSti;
    
    function __construct($conexao) {
        $this->incluirChamadoSti = new ChamadoStiRepository($conexao);
    }
    function inserirChamadoSti(ChamadoSti $chamadoSti){
        $this->incluirChamadoSti->inserir($chamadoSti);
    }
    function mostrarChamadoStiId($id){
        return $this->incluirChamadoSti->listarChamadoStiId($id);
    }

}
