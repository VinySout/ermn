<nav class="col-md-2 main-titulo">
    
    <div class="main-titulo-2">Institucional</div>
        <ul class=" nav">
            <li class="  main-titulo-link"><a href="missao.php#missaoRef" >Missão</a></li>
            <li class=" main-titulo-link"><a href="historia.php#historiaRef">História</a></li>
            <li class=" main-titulo-link"><a href="heraldica.php#heraldicaRef">Heráldica</a></li>
            <li class=" main-titulo-link"><a href="comandantes.php#comandantesRef">Comandantes</a></li>
            <li class=" main-titulo-link"><a href="organograma.php#organogramaRef">Organograma</a></li>
        </ul>

    <div class="main-titulo-2">Administração</div>
        <ul class=" nav">
            <li class="main-titulo-link"><a href="sti.php#stiRef">STI</a></li>
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