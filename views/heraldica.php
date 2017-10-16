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
                    <div class="col-md-9">
                        
                        <p class="styleTitulo" id="heraldicaRef">HERÁLDICA</p>
                        
                        <p class="heraldica">                            
                        O DISTINTIVO para Estação Radiogoniométrica da Marinha em Natal (ERMN) foi aprovado pela Portaria nº 0536, 
                        do Exmo Sr. Ministro da Marinha, em 27 de maio de 1986, conforme a figura ilustrativa abaixo.
                        </p>
                        <div id="brasaoHeraldica"></div>
                        <p class="heraldica">
                        Em um escudo boleado, encimado pela coroa naval e envolto por elipse feita de um cabo de ouro terminado em nó direito, 
                        campo de azul, duas centelhas de ouro de três ramos cada uma, 
                        com os segundos ramos postos em faixa e os terceiros voltados para baixo, terminados em forma de seta e opostos aos dois outros por uma circunferência do mesmo metal; 
                        no chefe, uma estrela com cauda luminosa de prata.
                        O campo azul, simbolizando o céu, representa o Espaço infinito por onde transitam as mensagens telegráficas transmitidas e recebidas pela Estação Radiogoniométrica da Marinha em Natal; 
                        as centelhas, envoltas numa circunferência, distintivo da telegrafia na Marinha, indicam as atividades da aludida Estação. No chefe, a estrela de prata lembra a de Natal, guia dos Reis Magos, evocando o nome da cidade em que se encontra a Estação Radiogoniométrica da Marinha em Natal. 
                        </p>
                    </div>
                </div>
        </section>
            
        <?php  
            include 'footer.php';
        ?>
    </body>
</html>
