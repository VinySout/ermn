<?php
 header('Content-Type: text/html; charset=utf-8',true);
class ChamadoSti {
    private $id;
    private $nome;
    private $usuario;
    private $descricao;
    private $sData;
    private $infPc;
    private $infPc2;
    private $providenciado;
    private $solucao;
    private $substituicao;
    private $itemDesc;
    
    function __construct($id, $nome, $usuario, $descricao, $sData, $infpc, $infpc2, $providenciado, $solucao, $substituicao, $itemdesc) {
        $this->id = $id;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->descricao = $descricao;
        $this->sData = $sData;
        $this->infPc = $infpc;
        $this->infPc2 = $infpc2;
        $this->providenciado = $providenciado;
        $this->solucao = $solucao;
        $this->substituicao = $substituicao;
        $this->itemDesc = $itemdesc;
    }
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getSData() {
        return $this->sData;
    }

    function getInfPc() {
        return $this->infPc;
    }

    function getInfPc2() {
        return $this->infPc2;
    }

    function getProvidenciado() {
        return $this->providenciado;
    }

    function getSolucao() {
        return $this->solucao;
    }

    function getSubstituicao() {
        return $this->substituicao;
    }

    function getItemDesc() {
        return $this->itemDesc;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setSData($sData) {
        $this->sData = $sData;
    }

    function setInfPc($infPc) {
        $this->infPc = $infPc;
    }

    function setInfPc2($infPc2) {
        $this->infPc2 = $infPc2;
    }

    function setProvidenciado($providenciado) {
        $this->providenciado = $providenciado;
    }

    function setSolucao($solucao) {
        $this->solucao = $solucao;
    }

    function setSubstituicao($substituicao) {
        $this->substituicao = $substituicao;
    }

    function setItemDesc($itemDesc) {
        $this->itemDesc = $itemDesc;
    }




}
