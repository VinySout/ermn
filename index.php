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
    <body id="#wrapper">
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
                    <a href="#" title="Acessibiliade" accesskey="5">
                    Acessibilidade</a>                       
                </li>
                <li id="siteaction-contraste" class="design">
                    <a href="#" title="Alto Contraste" accesskey="6">
                        Alto Contraste</a>
                </li>
                <li id="siteaction-mapadosite" class="last-item design">
                    <a href="#" title="Mapa do Site" accesskey="7">Mapa do Site</a>
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
        </header>
        <!-- Fim do Cabeçalho -->
        <section class="container" id="main">
            
            <div class="links">
                    <div class="col-lg-2 main-titulo">
                        <div class="main-titulo-2">Institucional</div>
                            <ul class=" nav">
                                <li class="  main-titulo-link"><a href="views/missao.php" >Missão</a></li>
                                <li class=" main-titulo-link"><a href="views/historia.php">História</a></li>
                                <li class=" main-titulo-link"><a href="views/">Heráldica</a></li>
                                <li class=" main-titulo-link"><a href="views/#">Comandantes</a></li>
                                <li class=" main-titulo-link"><a href="views/#">Organograma</a></li>
                            </ul>
                        <div class="main-titulo-2">Administração</div>
                            <ul class=" nav">
                                <li class="main-titulo-link"><a href="views/#">STI</a></li>
                                <li class="main-titulo-link"><a href="views/#">ComSoc</a></li>
                                <li class="main-titulo-link"><a href="views/#">SeCom</a></li>
                                <li class="main-titulo-link"><a href="views/#">Gestoria</a></li>
                                <li class="main-titulo-link"><a href=views/"#">Pessoal</a></li>
                                <li class="main-titulo-link"><a href="views/#">Meio Ambiente</a></li>
                            </ul>
                        <div class="main-titulo-2">Operações</div>
                            <ul class=" nav">
                                <li class="main-titulo-link"><a href="#">Posto de Transmissão</a></li>
                                <li class="main-titulo-link"><a href="#">Posto de Recepção</a></li>
                                <li class="main-titulo-link"><a href="#">Posto de Monitoragem</a></li>
                            </ul>
                        <!-- Seção de Login -->
                        <form action="util/valida.php" method="POST">                            
                            <div class="main-titulo-2">Login</div>
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
                    <div class="col-lg-10 main-conteudo" id="tela">
                        <ul class="diaporama1">
                            <li><img src="img/galerie/u1.JPG" alt="foto aérea do PR" title="Foto aérea do PR e PMO" /></li>
                            <li><img src="img/galerie/u2.JPG" alt="foto aérea do PR" title="Foto aérea do PR e PMO"/></li>
                            <li><img src="img/galerie/u3.JPG" alt="foto aérea do PR" title="Foto aérea do PR e PMO" /></li>
                            <li><img src="img/galerie/u4.JPG" alt="foto aérea do PR" title="Foto aérea do PR e PMO"/></li>
                        </ul>                         
                    </div>
                </div>
        </section>
        <footer>
            <div id="footer">
                <div class="links">
                    <div class="col-lg-4 coluna-1">
                        <p><a href="clti.com3dn.mb">CLTI-3DN</a></p>
                    </div>
                    <div class="col-lg-4 coluna-2"></div>
                    <div class="col-lg-4 coluna-3"></div>
                </div>
                <div class="footer-dados">
                <p>
                    Km 04 da BR-304 - Guarapes - Parnamirim - RN - CEP: 59.146-750<br/>
                    Tel.: (84) 3643-1151 Retelma: 8350-2403<br/>
                    *Fundada em 15 de maio de 1986<br/>
                </p>
                </div>
            </div>
        </footer>
    </body>
</html>
