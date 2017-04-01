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
                    <a href="../index.php#iNotesSigDemRef" title="iNotes | SiGDEM" accesskey="5">
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
                
                <a id="portal-logo" title href="../index.php">
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