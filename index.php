<!DOCTYPE html>
<?php
session_start();
    header('Content-Type: text/html; charset=utf-8',true);

    include_once 'entity/Cardapio.class.php';
    include_once 'entity/PlanoDia.class.php';
    include_once 'entity/Ndnr.class.php';
    include_once 'entity/IndDesemp.class.php';
    include_once 'util/ConexaoDeInclusao.class.php';
    include_once 'repository/PlanoDiaRepository.class.php';
    include_once 'repository/CardapioRepository.class.php';
    include_once 'repository/NdnrRepository.class.php';
    include_once 'repository/IndDesempRepository.class.php';
    
        $conexao = new ConexaoDeInclusao();
        $planoDiaRepository = new PlanoDiaRepository($conexao);
        $lista = $planoDiaRepository->listarPlanoDia();
        $ultimo = $lista[0];
        
        $cardapioRepository = new CardapioRepository($conexao);
        $cardapioList = $cardapioRepository->listarCardapio();
        $ultimoCardapio = $cardapioList[0];
        
        $ndnrRepository = new NdnrRepository($conexao);
        $ndnrList = $ndnrRepository->listarNdnr();
        $ultimoNdnr = $ndnrList[0];
        
        $indDesempRepository = new IndDesempRepository($conexao);
        $indDesempList = $indDesempRepository->listarIndDesemp();
        $ultimoIndDesemp = $indDesempList[0];
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
                        <li class="lst-item">
                            <a href="http://www.dpmm.mb/?q=node/97" target="_blanktitle=">SisBol-Web</a>
                        </li>
                        <li class="last last-itm">
                            <a href="https://catalogo2.dadm.mb:8443/novocat/" target="_blanktitle=" >Catálogo MB</a>   
                        </li>                        
                    </ul>
                    </div>
                    <div class="btn-group linksBarraHeader2">
                        <button type="button" class="btn btn-primary btnLinks" data-toggle="dropdown" aria-expanded="false">
                        Links Úteis
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="http://www.comprasgovernamentais.gov.br/" target="_blank">Compras Net</a></li>
                          <li><a href="http://netuno.dadm.mb/" target="_blank">Programa Netuno</a></li>                                                     
                          <li><a href="http://www.densm.mb" target="_blank">Diretoria de Ensino da Marinha</a></li>                          
                          <li><a href="http://www.gcm.mb" target="_blank">Gabinete do Comandante da Marinha</a></li> 
                          <li><a href="http://www.ccsm.mb" target="_blank">Centro de Comunicação Social da Marinha</a></li>
                                                     
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
                        <nav class="navigation">
                            <ul class="nav mainmenu">
                                <li>
                                    <div class="main-titulo-2">
                                        Institucional
                                        <span class="caret"></span>
                                    </div>                                    
                                    <ul class="submenu">
                                        <li class=" main-titulo-link"><a href="views/comandantes.php#comandantesRef">Comandantes</a></li>
                                        <li class=" main-titulo-link"><a href="views/heraldica.php#heraldicaRef">Heráldica</a></li>
                                        <li class=" main-titulo-link"><a href="views/historia.php#historiaRef">História</a></li>                                
                                        <li class=" main-titulo-link"><a href="views/missao.php#missaoRef" >Missão</a></li>                                
                                        <li class=" main-titulo-link"><a href="views/organograma.php#organogramaRef">Organograma</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        Comunicação Social
                                        <span class="caret"></span>
                                    </div>
                                    <ul class="submenu">
<!--                                        <li class="main-titulo-link"><a href="views/comSoc.php#comSocRef">Notícias</a></li>-->
                                        <li class="main-titulo-link"><a href="views/oGuarapes.php#informativoRef">Informativos</a></li>
                                        <li class="main-titulo-link"><a href="views/comSoc.php#destaqueRef">Destaques do semestre</a></li>                                        
<!--                                        <li class="main-titulo-link"><a href="views/comSoc.php#contatoRef">Contato</a></li>-->
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        Gestão Ambiental
                                        <span class="caret"></span>
                                    </div>
                                    <ul class="submenu">
                                        <li class="main-titulo-link"><a href="img/zips/OI1006B.zip">10-06B Sistema de Gestão Ambiental da ERMN - 2017</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                        echo '<a href="usoInterno/progNetuno.php#progNetunoRef">';
                                            }?>
                                        Programa Netuno
                                        <span class="caret"></span>
                                        <?php echo '</a>'; ?>                                        
                                    </div>
                                    <ul class="submenu">
                                        <li class="main-titulo-link"><a href="./img/pdfs/Planejamento Estrategico Organizacional-da ERMN 2012-2016.odt.ass">Planejamento Estratégico Organizacional</a></li>
                                        <li class="main-titulo-link"><a href="./img/pdfs/Carta-de-Servico-ERMN-2016.pdf" target="_blank">Carta de Serviços</a></li>
                                        <li class="main-titulo-link"><a href="./img/zips/Gestao-de-Riscos.zip">Gestão de Riscos</a></li>
                                        <li class="main-titulo-link"><a href="./img/indDesemp/<?= $ultimoIndDesemp->getNome()?>" target="_blank">Indicadores de Desempenhos</a></li>
                                        <li class="main-titulo-link"><a href="./img/pdfs/OF36-Anx-PlanoDaMelhoriaDaGestao-2016_2017.odt.ass">Planos de Melhoria da Gestão</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                                        echo '<a href="usoInterno/seCom.php#">';
                                            }?>
                                        Secretaria de Comunicação
                                        <span class="caret"></span>
                                        <?php echo '</a>'; ?>                                        
                                    </div>
                                    <ul class="submenu">                                        
                                        <li class="main-titulo-link"><a href="img/trigramas.pdf" target="_blank">Lista de Trigramas para redução de textos de mensagens</a></li>
                                        <li class="main-titulo-link"><a href="img/pdfs/correio.pdf" target="_blank">Relação das Caixas Lotus Notes</a></li>
                                        <li class="main-titulo-link"><a href="img/telErmn.pdf" target="_blank">Telefones ERMN</a></li>
                                        <li class="main-titulo-link"><a href="img/zips/<?= $ultimoNdnr->getNome() ?>">Tráfego TB/NDNR</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        Seção de TI
                                        <span class="caret"></span>
                                    </div>
                                    <ul class="submenu">
                                        <li class="main-titulo-link"><a href="img/cartilha/cartilha-seguranca-internet.pdf" target="_blank">Cartilha de Segurança para Internet</a></li>
                                        <li class="main-titulo-link"><a href="usoInterno/abrirChamadoSti.php#stiRef">Realizar Chamado</a></li>
                                        <li class="main-titulo-link"><a href="views/sti.php#stiRef">Chamados Realizados</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        Sistemas
                                        <span class="caret"></span>
                                    </div>
                                    <ul class="submenu">
                                        <li class="main-titulo-link"><a href="https://ermn3.ermn.mb/ermnat/aplica/sigdem20/ermnat.nsf" target="_blank">SiGDEM 2.0</a></li>
                                        <li class="main-titulo-link"><a href="http://clti-com3dn1.intranet.mb/webmailredirect.nsf" target="_blank">Correio</a></li>
                                        <li class="main-titulo-link"><a href="http://mensageiro.ctim.mb/sparkweb/index.html" target="_blank" >Spark Web</a></li>
                                        <li class="main-titulo-link"><a href="https://www.aplicacoes.dpmm.mb/seguranca/login.asp" target="_blank">BDPES</a></li>
                                        <li class="main-titulo-link"><a href="http://www.quaestor.mb/" target="_blank">Quaestor</a></li>
                                        <li class="main-titulo-link"><a href="http://www.sismat.dfm.mb/" target="_blank">Sismat</a></li>                                        
                                        <li class="main-titulo-link"><a href="http://www.singra.dabm.mb:7778/prod/dyn_index.show" target="_blank">Singra Web</a></li>
                                        <li class="main-titulo-link"><a href="http://www.dgom.mb/siplad/siplad.htm" target="_blank">SIPLAD</a></li>
                                        <li class="main-titulo-link"><a href="https://www.compartilhamentodearquivos.mar.mil.br/login.php" target="_blank">Compartilhamento de arquivos MB</a></li>
                                        <li class="main-titulo-link"><a href="http://internet.ctim.mb/score/login.php" target="_blank">SCORE 1.3</a></li>
                                        <li class="main-titulo-link"><a href="https://acesso.serpro.gov.br/HOD10/jsp/logonID.jsp" target="_blank">Acesso SERPRO (SIAFI)</a></li>
                                        <li class="main-titulo-link"><a href="https://siafi.tesouro.gov.br/senha/public/pages/security/login.jsf" target="_blank">SIAFI</a></li>
                                        <li class="main-titulo-link"><a href="https://tesourogerencial.tesouro.gov.br/servlet/mstrWeb?pg=login" target="_blank">Tesouro gerencial</a></li>
                                        <li class="main-titulo-link"><a href="http://www.safin.mb/" target="_blank">SAFIN</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="main-titulo-2">
                                        Uso interno
                                        <span class="caret"></span>
                                    </div>
                                    <ul class="submenu">
                                        <li class="main-titulo-link"><a href="usoInterno/arquivos/<?= $ultimo->getNome() ?>" target="_blank">Plano do Dia</a></li>
                                        <li class="main-titulo-link"><a href="usoInterno/arquivos/<?= $ultimoCardapio->getNome() ?>" target="_blank">Cardápio Semanal</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>                        
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
                            <li><a href="#"><img src="img/galerie/u1.jpg" alt="Entrada da ERMN" title="Entrada da ERMN" width="600px" height="320px"/></a></li>
                            <li><img src="img/galerie/u2.jpg" alt="Antena 'MODELO'" title="Frente do prédio do comando" width="600px" height="320px"/></li>
                            <li><img src="img/galerie/u3.jpg" alt="Lema da ERMN" title="Lema da ERMN" width="600px" height="320px"/></li>
                            <li><img src="img/galerie/u4.jpg" alt="Tipulação Atual" title="Tipulação Atual" width="600px" height="320px"/></li>
                            <li><img src="img/galerie/u5.jpg" alt="Nosso Profesp" title="Nosso Profesp" width="600px" height="320px"/></li>
                            <li><img src="img/galerie/u6.jpg" alt="Visão Aérea da ADM" title="Visão Aérea da ADM" width="600px" height="320px"/></li>
                            <!--<li><img src="img/galerie/u7.jpg" alt="Alinhando o JS" title="Alinhando o JS"/></li>-->
                        </ul> 
                        <table class="tabelaEmails" id="iNotesSigDemRef">
                            <tr>
                                <td class="tdEmails">
                                    <a href="http://clti-com3dn1.intranet.mb/webmailredirect.nsf" target="_blank">                                
                                        <img src="img/iNotes9.png"/>
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
