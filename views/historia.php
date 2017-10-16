<!DOCTYPE html>
<?php 
session_start();
header('Content-Type: text/html; charset=utf-8',true);

    include_once '../util/ConexaoDeInclusao.class.php';
    include_once '../entity/Cardapio.class.php';
    include_once '../entity/PlanoDia.class.php'; 
    include_once '../entity/Ndnr.class.php';
    include_once '../entity/IndDesemp.class.php';
    include_once '../repository/NdnrRepository.class.php';
    include_once '../repository/PlanoDiaRepository.class.php';
    include_once '../repository/CardapioRepository.class.php';
    include_once '../repository/IndDesempRepository.class.php';
    
    $conexao = new ConexaoDeInclusao();
    $planoDiaRepository = new PlanoDiaRepository($conexao);
    $pdList = $planoDiaRepository->listarPlanoDia();
    $ultimoPd = $pdList[0];

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
<html lang="pt-br">
    <head lang=pt-br"">
        <title>Estação Radiogoniométrica da Marinha em Natal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php 
            include './cssJsImports.php'; 
        ?>
    </head>
    <body id="wrapper">
        <?php 
        include 'header.php';
        ?>
        <section class="container" id="main">
            
            <div class="links">
                    <?php 
                    include './navegacao.php';
                    ?>
                    <div class="col-md-9"  >
                        <p class="styleTitulo" id="historiaRef">HISTÓRIA</p>                        
                        <p id="historia">
                            A Estação Rádio da Marinha foi criada pela Portaria Ministerial nº 1695 de 05 de dezembro de 1983, 
                        com a finalidade de atender aos serviços afetos a uma Estação Rádio de 1ª classe, sob o Comando de Oficial Superior.
                        Durante a fase de sua implantação, foi criado um Núcleo da Estação Rádio da Marinha em Natal até sua prontificação final.
                        Pela Portaria nº 0009 de 29 de abril de 1986 do Comandante de Operações Navais, foi resolvida a ativação, em sua plenitude, 
                        da Estação Rádio da Marinha em Natal a partir de 15 de maio de 1986, com a conseqüente extinção do Núcleo até então formado.
                        Pela Portaria Ministerial nº 0536 de 27 de maio de 1986 ficou aprovado o Distintivo para a Estação Rádio da Marinha em Natal.
                        Pela Portaria nº 0021 de 29 de junho de 1988 do Chefe do Estado-Maior da Armada ficou aprovado o Regulamento das Estações Rádio da Marinha. 
                        Pela Portaria Ministerial nº 0654 de 27 de julho de 1988 a Estação Rádio da Marinha em Natal foi reclassificada como Estação Rádio de Segunda Classe.
                        O Regimento Interno para a Estação Rádio da Marinha em Natal foi aprovado pela Portaria nº 0047 de 28 de novembro de 1989 do Comandante de Operações Navais.
                        Em 1º de junho de 1994, em substituição à Estação Radiogoniométrica do Pina, localizada em Recife/PE, 
                        foi ativada para Estação Radiogoniométrica de Alta Freqüência (ERGAF). A mudança de denominação para Estação Radiogoniométrica da Marinha em Natal (ERMN) ocorreu em 17 de abril de 2002.
                        <p>
                    </div>
                </div>
        </section>
            <?php 
            include 'footer.php';
            ?>
    </body>
</html>
