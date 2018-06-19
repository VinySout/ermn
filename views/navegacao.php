<nav class="col-md-2 main-titulo">
    <nav class="navigation">
    <div id="cssmenu">
        <ul class="nav mainmenu">
            <li >
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Institucional
                        <span class="caret"></span>
                    </div>
                </a>                                    
                <ul class="submenu">
                    <li class=" main-titulo-link"><a href="comandantes.php#comandantesRef">Comandantes</a></li>
                    <li class=" main-titulo-link"><a href="heraldica.php#heraldicaRef">Heráldica</a></li>
                    <li class=" main-titulo-link"><a href="historia.php#historiaRef">História</a></li>                                
                    <li class=" main-titulo-link"><a href="missao.php#missaoRef" >Missão</a></li>                                
                    <li class=" main-titulo-link"><a href="organograma.php#organogramaRef">Organograma</a></li>
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Comunicação Social
                        <span class="caret"></span>
                    </div>
                </a>
                <ul class="submenu">
                    <li class="main-titulo-link"><a href="oGuarapes.php#informativoRef">Informativos</a></li>
                    <li class="main-titulo-link"><a href="comSoc.php#destaqueRef">Destaques do semestre</a></li>                                        
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Gestão Ambiental
                        <span class="caret"></span>
                    </div>
                </a>
                <ul class="submenu">
                    <li class="main-titulo-link"><a href="../img/zips/OI1006B.zip">10-06B Sistema de Gestão Ambiental da ERMN - 2017</a></li>
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Programa Netuno
                        <span class="caret"></span>
                    </div>
                </a>
                <ul class="submenu">
                    <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                        echo '<li class="main-titulo-link"><a href="../usoInterno/progNetuno.php#progNetunoRef">Alterar';
                        } echo '</a></li>'; ?>
                    <li class="main-titulo-link"><a href="../img/pdfs/Planejamento Estrategico Organizacional-da ERMN 2012-2016.odt.ass">Planejamento Estratégico Organizacional</a></li>
                    <li class="main-titulo-link"><a href="../img/pdfs/Carta-de-Servico-ERMN-2016.pdf" target="_blank">Carta de Serviços</a></li>
                    <li class="main-titulo-link"><a href="../img/zips/Gestao-de-Riscos.zip">Gestão de Riscos</a></li>
                    <li class="main-titulo-link"><a href="../img/indDesemp/<?= $ultimoIndDesemp->getNome()?>" target="_blank">Indicadores de Desempenhos</a></li>
                    <li class="main-titulo-link"><a href="../img/pdfs/OF36-Anx-PlanoDaMelhoriaDaGestao-2016_2017.odt.ass">Planos de Melhoria da Gestão</a></li>
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Secretaria de Comunicação                                    
                    </div>
                </a>
                <ul class="submenu">
                <?php if(isset($_SESSION['usuarioNome']) && $_SESSION['usuarioNome'] != ""){
                        echo '<li class="main-titulo-link"><a href="../usoInterno/seCom.php#">Alterar';
                        } echo '</a></li>'; ?>                                    
                    <li class="main-titulo-link"><a href="../img/trigramas.pdf" target="_blank">Lista de Trigramas para redução de textos de mensagens</a></li>
                    <li class="main-titulo-link"><a href="../img/pdfs/correio.pdf" target="_blank">Relação das Caixas Lotus Notes</a></li>
                    <li class="main-titulo-link"><a href="../img/telErmn.pdf" target="_blank">Telefones ERMN</a></li>
                    <li class="main-titulo-link"><a href="../img/zips/<?= $ultimoNdnr->getNome() ?>">Tráfego TB/NDNR</a></li>
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Seção de TI
                        <span class="caret"></span>
                    </div>
                </a>
                <ul class="submenu">
                    <li class="main-titulo-link"><a href="../img/cartilha/cartilha-seguranca-internet.pdf" target="_blank">Cartilha de Segurança para Internet</a></li>
                    <li class="main-titulo-link"><a href="../usoInterno/abrirChamadoSti.php#stiRef">Realizar Chamado</a></li>
                    <li class="main-titulo-link"><a href="../views/sti.php#stiRef">Chamados Realizados</a></li>
                </ul>
            </li>
            <li>
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Sistemas
                        <span class="caret"></span>
                    </div>
                </a>
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
                <a href='#' id="btn-menu-lateral">
                    <div class="main-titulo-2">
                        Uso interno
                        <span class="caret"></span>
                    </div>
                </a>
                <ul class="submenu">
                <li class="main-titulo-link"><a href="usoInterno/arquivos/<?= $ultimoPd->getNome() ?>" target="_blank">Plano do Dia</a></li>
                <li class="main-titulo-link"><a href="usoInterno/arquivos/<?= $ultimoCardapio->getNome() ?>" target="_blank">Cardápio Semanal</a></li>
                </ul>
            </li>
        </ul>
    </div>
    </nav>
    
    <!-- Seção de Login -->
    <form action="../util/valida.php" method="POST">                            
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
    <form action="../util/logoff.php" method="POST">                            
                <input class="btn btn-xs btn-primary bt-sair" type="submit" value="Sair">
    </form>
                            
</nav>