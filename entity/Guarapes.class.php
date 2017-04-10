<?php
class Guarapes {
    private $id;
    private $imagem;
    private $pdf;
    private $edicao;
    
    function __construct($id,$image,$pdf,$edicao){
        $this->id=$id;
        $this->imagem=$image;
        $this->pdf=$pdf;
        $this->edicao=$edicao;
    }
    function getId() {
        return $this->id;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getPdf() {
        return $this->pdf;
    }

    function getEdicao() {
        return $this->edicao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setPdf($pdf) {
        $this->pdf = $pdf;
    }

    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }


}
