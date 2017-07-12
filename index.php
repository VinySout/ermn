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
    
        <!-- Barra site Brasil.gov -->
            <div id="barra-brasil"></div>
            <script src="http://barra.brasil.gov.br/barra.js" type="text/javascript" defer async></script>
        <!-- Fim da Barra Brasil.gov -->
        
        
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
                            if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                $hr = date(" H ");
                                if($hr >= 12 && $hr<18) {
                                    $resp = "Boa tarde ".$_SESSION['usuarioNome'];}
                                else if ($hr >= 0 && $hr <12 ){
                                    $resp = "Bom dia ".$_SESSION['usuarioNome'];}
                                else {
                                    $resp = "Boa noite ".$_SESSION['usuarioNome'];}
                                echo "$resp";
                            }
                        ?>                    
                    </div>
                    <!--Fim da Saudação-->

                    <!-- busca no bussola da MB -->
                    <div class="buscar">                    
                        <form class="form-inline" action="http://bussola.mb/search" method="GET" target="mainFrame">                        
                            <input type="text" name="q" class="form-control"  placeholder="Pesquisa Bússola">
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
                            <a href="https://www.marinha.mil.br/" target="_blanktitle=">Marinha do Brasil</a>
                        </li>
                        <li class="lst-item">
                            <a href="http://www.com3dn.mb/?q=bono-sede" target="_blanktitle=" >Bono Sede</a>
                        </li>       
                        <li class="lst-item">
                            <a href="http://rumb.dabm.mb/RUMB/" target="_blanktitle=" >RUMB</a>   
                        </li>
                        <li class="lst-item">
                            <a href="https://www.marinha.mil.br/saudenaval" target="_blanktitle=" >Saúde Naval</a>                                      
                        </li>
                        <li class="lst-item">
                            <a href="http://bono.dctim.mb/wps/portal" target="_blanktitle=" >Web Bono</a>                                      
                        </li>
                        <li class="last last-itm">
                            <a href="https://catalogo2.dadm.mb:8443/novocat/" target="_blanktitle=" >Catálogo MB</a>   
                        </li>                        
                    </ul>
                    </div>
                    <div class="btn-group linksBarraHeader2">
                        <button type="button" class="btn btn-primary btnLinks" data-toggle="dropdown" aria-expanded="false">
                        Outros
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="http://netuno.dadm.mb/" target="_blanktitle=">Programa Netuno</a></li>
                          <li><a href="http://www.dpmm.mb/?q=node/97" target="_blanktitle=">SisBol-Web</a></li>
                          <li><a href="http://www.ccsm.mb" target="_blanktitle=">CCSM</a></li>
                          <li><a href="http://www.densm.mb" target="_blanktitle=">DENSM</a></li>                          
                          <li><a href="http://www.gcm.mb" target="_blanktitle=">GCM</a></li>
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
                                <li class=" main-titulo-link"><a href="views/comandantes.php#comandantesRef">Comandantes</a></li>
                                <li class=" main-titulo-link"><a href="views/heraldica.php#heraldicaRef">Heráldica</a></li>
                                <li class=" main-titulo-link"><a href="views/historia.php#historiaRef">História</a></li>                                
                                <li class=" main-titulo-link"><a href="views/missao.php#missaoRef" >Missão</a></li>                                
                                <li class=" main-titulo-link"><a href="views/organograma.php#organogramaRef">Organograma</a></li>
                            </ul>
                        <div class="main-titulo-2">Departamentos</div>
                            <ul class=" nav">
                                <li class="main-titulo-link"><a href="views/comSoc.php#comSocRef">ComSoc</a></li>
                                <li class="main-titulo-link"><a href="views/meioAmbiente.php#mAmbienteRef">Gestão Ambiental</a></li>
                                <li class="main-titulo-link"><a href="views/gestoria.php#gestoriaRef">Gestoria</a></li>
                                <li class="main-titulo-link"><a href="views/pessoal.php#pessoalRef">Pessoal</a></li>
                                <li class="main-titulo-link"><a href="views/profesp.php#profespRef">Profesp</a></li>
                                <li class="main-titulo-link"><a href="views/netuno.php#netunoRef">Programa Netuno</a></li>
                                <li class="main-titulo-link"><a href="views/postoMonitoragem.php#pmoRef">Posto de Monitoragem</a></li>
                                <li class="main-titulo-link"><a href="views/postoTransmissao.php#ptRef">Posto de Transmissão</a></li>                                
                                <li class="main-titulo-link"><a href="views/seCom.php#seComRef">SeCom</a></li> 
                                <li class="main-titulo-link"><a href="views/sti.php#stiRef">Seção de TI</a></li> 
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
                            <li><img src="img/galerie/u1.jpg" alt="Entrada da ERMN" title="Entrada da ERMN" /></li>
                            <li><img src="img/galerie/u2.jpg" alt="Antena 'MODELO'" title="Antena 'MODELO'"/></li>
                            <li><img src="img/galerie/u3.jpg" alt="Lema da ERMN" title="Lema da ERMN" /></li>
                            <li><img src="img/galerie/u4.jpg" alt="Tipulação Atual" title="Tipulação Atual"/></li>
                            <li><img src="img/galerie/u5.jpg" alt="Nosso Profesp" title="Nosso Profesp"/></li>
                            <li><img src="img/galerie/u6.jpg" alt="Visão Aérea da ADM" title="Visão Aérea da ADM"/></li>
                            <li><img src="img/galerie/u7.jpg" alt="Alinhando o JS" title="Alinhando o JS"/></li>
                        </ul> 
                        <table class="tabelaEmails" id="iNotesSigDemRef">
                            <tr>
                                <td class="tdEmails">
                                    <a href="http://clti-com3dn1.intranet.mb/webmailredirect.nsf" target="_blank">                                
                                     <img src="img/iNotes9.png"> </figure> 
                                    </a>
                                </td>
                                <td class="tdEmails">
                                <a href="https://ermn3.ermn.mb/ermnat/aplica/sigdem20/ermnat.nsf" target="_blank">                               
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
