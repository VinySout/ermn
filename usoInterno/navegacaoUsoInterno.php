<nav class="col-md-2 main-titulo">
    
    <div class="main-titulo-2">Institucional</div>
        <ul class=" nav">
            <li class=" main-titulo-link"><a href="../views/comandantes.php#comandantesRef">Comandantes</a></li>
            <li class=" main-titulo-link"><a href="../views/heraldica.php#heraldicaRef">Heráldica</a></li>
            <li class=" main-titulo-link"><a href="../views/historia.php#historiaRef">História</a></li>                                
            <li class=" main-titulo-link"><a href="../views/missao.php#missaoRef" >Missão</a></li>                                
            <li class=" main-titulo-link"><a href="../views/organograma.php#organogramaRef">Organograma</a></li>
        </ul>
    <div class="main-titulo-2">Departamentos</div>
        <ul class=" nav">
            <li class="main-titulo-link"><a href="../views/comSoc.php#comSocRef">ComSoc</a></li>
            <li class="main-titulo-link"><a href="../views/meioAmbiente.php#mAmbienteRef">Gestão Ambiental</a></li>
            <li class="main-titulo-link"><a href="../views/gestoria.php#gestoriaRef">Gestoria</a></li>
            <li class="main-titulo-link"><a href="../views/pessoal.php#pessoalRef">Pessoal</a></li>
            <li class="main-titulo-link"><a href="../views/profesp.php#profespRef">Profesp</a></li>
            <li class="main-titulo-link"><a href="../views/netuno.php#netunoRef">Programa Netuno</a></li>                                
            <li class="main-titulo-link"><a href="../views/seCom.php#seComRef">SeCom</a></li> 
            <li class="main-titulo-link"><a href="../views/sti.php#stiRef">Seção de TI</a></li>             
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