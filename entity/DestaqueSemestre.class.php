<?php

class DestaqueSemestre {
    private $id;
    private $img;
    private $posto;
    private $nome;
    private $semestre;
    function __construct($id, $img, $posto, $nome, $semestre) {
        $this->id = $id;
        $this->img = $img;
        $this->posto = $posto;
        $this->nome = $nome;
        $this->semestre = $semestre;
    }
    function getId() {
        return $this->id;
    }

    function getImg() {
        return $this->img;
    }
    function getPosto() {
        return $this->posto;
    }

    function getNome() {
        return $this->nome;
    }

    function getSemestre() {
        return $this->semestre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setImg($img) {
        $this->img = $img;
    }
    function setPosto($posto) {
        $this->posto = $posto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSemestre($semestre) {
        $this->semestre = $semestre;
    }
}
