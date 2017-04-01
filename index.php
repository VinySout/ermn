<!DOCTYPE html>
<?php 
session_start();

?>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="img/brasaoErmn.png">
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        
        <!-- Css -->
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/index.css"/>  
        <!-- Javascript -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.jDiaporama.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
      
    </head>
    <body id="wrapper">
        <!-- Barra do site Brasil.gov -->
        <div id="barra-identidade">
                <div id="barra-brasil">
                    <div id="wrapper-barra-brasil">
                        <div id="brasil-flag">
                            <a href="http://brasil.gov.br" class="link-barra">
                                Brasil</a>
                        </div>
                        <span class="acesso-info">
                            <a href="http://brasil.gov.br/barra#acesso-informacao"
                               class="link-barra">Acesso à Informação</a>
                        </span>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" id="menu-icon"></a>
                                </li>
                                <li class="list-item first">
                                    <a href="http://brasil.gov.br/barra#participe"
                                       class="link-barra">Participe</a>
                                </li>
                                <li class="list-item">
                                    <a href="http://www.servicos.gov.br/?pk_campaogn=barrabrasil" class="link-barra" id="barra-brasil-orgao">Serviços</a>
                                </li>
                                <li class="list-item">
                                    <a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legislação</a>
                                </li>
                                <li class="list-item last last-item">
                                    <a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript" defer async></script>
        </div>
        <!-- Fim da Barra Brasil.gov -->
        <!-- Inicio do Cabeçalho -->
        <header role="banner">
          <div class="header container">
            <ul id="portal-siteactions">
                <li id="siteaction-accessibility" class="design">
                    <a href="#iNotesSigDemRef" title="iNotes | SiGDEM" accesskey="5">
                    iNOTES | SiGDEM</a>                       
                </li>
                <li id="siteaction-contraste" class="design">
                    <a href="#loginRef" title="Login" accesskey="6">
                        LOGIN</a>
                </li>
                <li id="siteaction-mapadosite" class="last-item design">
                    <a href="#rodapeRef" title="Rodapé" accesskey="7">RODAPÉ</a>
                </li>
                
            </ul>
            <div id="logo">
                
                <a id="portal-logo" title href="index.php">
                    <span id="portal-title-1"></span>
                    <h1 id="portal-title" class="corto">ERMN</h1>
                    <span id="portal-descrition"></span>
                </a>
                <div class="saudacao">
                        <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != ""){
                            $hr = date(" H ");
                            if($hr >= 12 && $hr<18) {
                            $resp = "Boa tarde ".$_SESSION['usuario'];}
                            else if ($hr >= 0 && $hr <12 ){
                            $resp = "Bom dia ".$_SESSION['usuario'];}
                            else {
                            $resp = "Boa noite ".$_SESSION['usuario'];}
                            echo "$resp";
                            }?>
                    
                </div>
                <!-- busca no bussola da MB -->
                <div class="buscar">
                    
                    <form class="form-inline" action="http://bussola.mb/search" method="GET" target="mainFrame">
                        <input type="text" class="form-control"  placeholder="Buscar">
                        <input type="submit" class="btn btn-default img-buscar" value="">
                        <input type="hidden" name="site" value="default_collection">
                        
                        <input type="hidden" name="client" value="default_frontend">
                        <input type="hidden" name="output" value="xml_no_dtd">
                        <input type="hidden" name="proxystylesheet" value="default_frontend">
                         
                    </form>
                       
                </div>
                <!-- Fim do Busca -->
            </div>              
          </div>     
            <div id="sobre">
                <nav class="container header ">
                    <ul>
                                
                                <li class="list-item first">                                    
                                    <a class=" links" href="http://www.defesa.gov.br/" target="_blank title=" >Ministério da Defesa</a>
                                </li>
                                <li class="list-item">
                                    <a class=" links" href="http://www.mar.mil.br/" target="_blank title=" >Marinha</a>
                                </li>
                                <li class="list-item">
                                    <a class=" links" href="http://www.eb.mil.br/" target="_blank title=" >Exército</a>
                                </li>       
                                <li class="last last-item">
                                    <a class=" links" href="http://www.fab.mil.br/" target="_blank title=" >Aeronáutica</a>
                               
                                </li>
                            </ul>
                </nav>
                
              </div>
        </header>
        <!-- Fim do Cabeçalho -->
        <section class="container" id="main">
            
            <div class="links">
                    <div class="col-md-2 main-titulo">
                        <div class="main-titulo-2">Institucional</div>
                            <ul class=" nav">
                                <li class="  main-titulo-link"><a href="views/missao.php#missaoRef" >Missão</a></li>
                                <li class=" main-titulo-link"><a href="views/historia.php#historiaRef">História</a></li>
                                <li class=" main-titulo-link"><a href="views/heraldica.php#heraldicaRef">Heráldica</a></li>
                                <li class=" main-titulo-link"><a href="views/comandantes.php#comandantesRef">Comandantes</a></li>
                                <li class=" main-titulo-link"><a href="views/organograma.php#organogramaRef">Organograma</a></li>
                            </ul>
                        <div class="main-titulo-2">Administração</div>
                            <ul class=" nav">
                                <li class="main-titulo-link"><a href="views/sti.php#stiRef">STI</a></li>
                                <li class="main-titulo-link"><a href="#">ComSoc</a></li>
                                <li class="main-titulo-link"><a href="#">SeCom</a></li>
                                <li class="main-titulo-link"><a href="#">Gestoria</a></li>
                                <li class="main-titulo-link"><a href="#">Pessoal</a></li>
                                <li class="main-titulo-link"><a href="#">Meio Ambiente</a></li>
                            </ul>
                        <div class="main-titulo-2">Operações</div>
                            <ul class=" nav">
                                <li class="main-titulo-link"><a href="#">Posto de Transmissão</a></li>
                                <li class="main-titulo-link"><a href="#">Posto de Recepção</a></li>
                                <li class="main-titulo-link"><a href="#">Posto de Monitoragem</a></li>
                            </ul>
                        <!-- Seção de Login -->
                        <form action="util/valida.php" method="POST">                            
                            <div class="main-titulo-2" id="loginRef">Login</div>
                            <table>                            
                                <tr>
                                    <td><input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuário"></td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" type="password" name="senha" id="senha" placeholder="Senha"></td>
                                </tr>
                            </table>                                
                                <input class="btn btn-xs btn-primary bt-entrar" type="submit" value="Entrar">                                                   
                        </form>
                        <form action="./util/logoff.php" method="POST">                            
                                    <input class="btn btn-xs btn-primary bt-sair" type="submit" value="Sair">
                        </form>
                            
                    </div>
                    <div class="col-md-9">
                        <ul class="diaporama1">
                            <li><img src="img/galerie/u1.JPG" alt="Ajustando o slide" title="Ajustando o Slide" /></li>
                            <li><img src="img/galerie/u2.JPG" alt="Estrada Lateral" title="Estrada Lateral"/></li>
                            <li><img src="img/galerie/u3.JPG" alt="Foto Aérea da ADM" title="Foto Aérea da ADM" /></li>
                            <li><img src="img/galerie/u4.JPG" alt="Visão distante da ADM" title="Visão Distante da ADM"/></li>
                        </ul> 
                        <table class="tabelaEmails" id="iNotesSigDemRef">
                            <tr>
                                <td class="tdEmails">
                                    <a href="#" target="_blank">                                
                                     <img src="img/iNotes9.png"> </figure> 
                                    </a>
                                </td>
                                <td class="tdEmails">
                                <a href="#" target="_blank">                               
                                    <img src="img/sigDem.png">                              
                                </a>    
                                </td>
                            </tr>
                            <tr>
                                <td class="tdEmails">iNotes</td>
                                <td class="tdEmails">SiGDEM</td>
                            </tr>
                    </table> 
                    </div>                       
                </div>
        </section>
        <?php 
        include 'views/footer.php';
        ?>
    </body>
</html>
