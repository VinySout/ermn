<meta charset="utf-8">
<?php

require_once("./seguranca.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
      $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
      if (validaUsuario($usuario, md5($senha)) == true) {
          if($usuario == "admin"){
              $_SESSION['usuario'] = $usuario;
               header("Location: ../index.php");
          }else{
              $_SESSION['usuario'] = $usuario;
              header("Location: ../index.php");
          }
       
      } else {
            echo "Usuario ou Senha Invalidos";
            header("refresh:2;url=../index.php");
      }
    }