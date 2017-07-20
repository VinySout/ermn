<?php

header('Content-Type: text/html; charset=utf-8',true);
     
$db = 'intranetermn'; 
$server = 'localhost';    
$user = 'root';          
$senha = '';               
        $conexao = @mysqli_connect($server,$user,$senha,$db);
        if(!$conexao){
            die ("Erro de conexao".mysqli_connect_error());
        }
        
        mysqli_set_charset($conexao,'utf8');
   