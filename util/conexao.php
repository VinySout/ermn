<?php

$_SG['conectaServidor'] = true;    
$_SG['caseSensitive'] = true;     
$_SG['servidor'] = 'localhost';    
$_SG['usuario'] = 'root';          
$_SG['senha'] = '';               
$_SG['banco'] = 'intranetermn';   
$_SG['tabela'] = 'usuarios';       

if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
}