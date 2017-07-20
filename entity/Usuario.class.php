<?php

class Usuario {
    private $id;
    private $nome;
    private $usuario;
    private $senha;
    
    public function __construct($id, $nome, $usuario, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }



}
