
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
                        <a href="../index.php#iNotesSigDemRef" title="iNotes | SiGDEM">
                        iNOTES | SiGDEM</a>                       
                    </li>
                    <li>
                        <a href="#loginRef" title="Login">
                            LOGIN</a>
                    </li>
                    <li>
                        <a href="#rodapeRef" title="Rodapé">RODAPÉ</a>
                    </li>                
                </ul>
                <!--Fim da navegação na Página Atual-->

                <!--Barra da Logo-->
                <div id="logo">
                    <!--Logo da ERMN-->
                    <a href="../index.php">
                        <img src="../img/subTitle.png"> 
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
                            <a href="http://mensageiro.ctim.mb/sparkweb/index.html" target="_blank=" >Spark Web</a>                                      
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