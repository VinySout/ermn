<?php
session_start();
include_once './conexao.php';

function validaUsuario($usuario, $senha) {
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);
  if (empty($resultado)) {
    return false;
  } else {
    $_SESSION['usuarioID'] = $resultado['id']; 
    $_SESSION['usuarioNome'] = $resultado['nome']; 
    
    if ($_SG['validaSempre'] == true) {
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }
    
    return true;
  }
}
