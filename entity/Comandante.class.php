<?php

class Comandante {
    private $id;
    private $foto;
    private $nome;
    private $periodo;
    function __construct($id, $foto, $nome, $periodo) {
        $this->id = $id;
        $this->foto = $foto;
        $this->nome = $nome;
        $this->periodo = $periodo;
    }
    function getId() {
        return $this->id;
    }

    function getFoto() {
        return $this->foto;
    }

    function getNome() {
        return $this->nome;
    }

    function getPeriodo() {
        return $this->periodo;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }



}
