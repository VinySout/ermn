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
        <script type="text/javascript" src='js/bootstrap.min.js'></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body id="wrapper">
    <?php  
        if (!$sock = @fsockopen('www.google.com.br', 80, $num, $error, 5)) { 
        /*A barra Brasil.gov não será mostrada*/
        }
        else {
    ?>
        <!-- Barra site Brasil.gov -->
            <div id="barra-brasil"></div>
            <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript" defer async></script>
        <!-- Fim da Barra Brasil.gov -->
    <?php    
        }
    ?>  

        <!-- Inicio do Cabeçalho -->
        <header role="banner"> 
            <!--Barra Principal da Página-->
            <div class="header container">
                <!--Navegação na Pagina Atual-->
                <ul id="portal-siteactions">
                    <li>
                        <a href="#iNotesSigDemRef" title="iNotes | SiGDEM">
                        iNOTES | SiGDEM</a>                       
                    </li>
                    <li>
                        <a href="#loginRef" title="Login">
                            LOGIN</a>
                    </li>
                    <li>
                        <a href="#rodapeRef" title="Rodapé" >RODAPÉ</a>
                    </li>                
                </ul>
                <!--Fim da navegação na Página Atual-->

                <!--Barra da Logo-->
                <div id="logo">
                    <!--Logo da ERMN-->
                    <a href="index.php">
                        <img src="img/subTitle.png">  
                        <h3 id="portal-title">ERMN</h3>                                     
                        <h6 id="portal-subTitle">Estação Radiogoniométrica da Marinha em Natal</h6>
                    </a>
                    <!--Fim da Logo-->

                    <!--Saudação a usuário logado-->
                    <div class="saudacao">
                        <?php 
                            if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != ""){
                                $hr = date(" H ");
                                if($hr >= 12 && $hr<18) {
                                    $resp = "Boa tarde ".$_SESSION['usuario'];}
                                else if ($hr >= 0 && $hr <12 ){
                                    $resp = "Bom dia ".$_SESSION['usuario'];}
                                else {
                                    $resp = "Boa noite ".$_SESSION['usuario'];}
                                echo "$resp";
                            }
                        ?>                    
                    </div>
                    <!--Fim da Saudação-->

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
                <!--Fim da barra da Logo-->
            </div>
            <!--Fim da Barra Principal da Página-->
            
            <!--Barra de outros Sitios na RECIM -->
            <div id="sobre">
                <!--Lista de Links de Sitios na RECIM-->
                <nav class="container header ">
                    <div class="linksBarraHeader">    
                    <ul>                                
                        <li class="lst-item first">                                    
                            <a href="views/oGuarapes.php#oGuarapesRef">O Guarapes</a>
                        </li>
                        <li class="lst-item">
                            <a href="#" target="_blank title=" >Amazônia Azul</a>
                        </li>
                        <li class="lst-item">
                            <a href="#" target="_blank title=" >Bono Sede</a>
                        </li>       
                        <li class="lst-item">
                            <a href="#" target="_blank title=" >Sinopse</a>   
                        </li>
                        <li class="lst-item">
                            <a href="#" target="_blank title=" >SisBol-Web</a>                                      
                        </li>
                        <li class="lst-item">
                            <a href="#" target="_blank title=" >Web Bono</a>                                      
                        </li>
                        <li class="last last-itm">
                            <a href="#" target="_blank title=" >Catálogo MB</a>   
                        </li>                        
                    </ul>
                    </div>
                    <div class="btn-group linksBarraheader2">
                        <button type="button" class="btn btn-primary btnLinks">Links</button>
                        <button type="button" class="btn btn-primary btnLinks" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">EPO McAfee</a></li>
                          <li><a href="#">Submenu2</a></li>
                          <li><a href="#">Submenu3</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Submenu4</a></li>
                        </ul>
                    </div>
                </nav> 
                <!--Fim da lista de links de Sitios na RECIM-->
            </div>
            <!--Fim da Barra de outros Sitios na RECIM -->
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
                            <div class="main-titulo-2">Login</div>
                            <table>                            
                                <tr>
                                    <td><input class="form-control" type="text" name="usuario" id="loginRef" placeholder="Usuário"></td>
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
