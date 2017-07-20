$(document).on("ready", function(){
    loadData();
});
var loadData = function(){
    $.ajax({
        type:"POST",
        url:"../repository/chamadadoStiRepository.php"
    }).done(function(data){
        console.log(data);
        var  chamado = JSON.parse(data);
        for(var i in chamado){
            $("#content").append(chamado[i].usuario+" "+chamado[i].descricao+" "+chamado[i].solucao+'</br>');
        }
    });
}
$(document).ready(function(){
    $(".excluirCall").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("Confirma a exclusão desta solicitação da página?\nAVISO: o processo não poderá ser revertido!")) {
            
            
            var idSolicitacao = $(this).attr("id");
            console.log(idSolicitacao);
            $(location).attr('href',"../repository/excluirChamadoStiRepository.php?id="+idSolicitacao);
   
        }
    });
});
$(document).ready(function(){
    $(".editarCall").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("você deseja realmente alterar os  dados desta solicitação?")) {
            
            
            var id = $(this).attr("id");
            console.log(id);
            $(location).attr('href',"../usoInterno/editarChamadoSti.php?id="+id+"#stiRef");
   
        }
    });
});
$(document).ready(function(){
    $(".detalhesCall").click(function(event){
        event.preventDefault();
        console.log(event);
        
            // cria a variável idSolicitacao e pega o valor id do botão
            var id = $(this).attr("id");
            console.log(id);
            $(location).attr('href',"../views/detalhesChamadoSti.php?id="+id+"#stiRef");
   
    });
});
