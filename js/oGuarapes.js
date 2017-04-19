$(document).on("ready", function(){
    loadData();
});
var loadData = function(){
    $.ajax({
        type:"POST",
        url:"../repository/guarapesRepository.php"
    }).done(function(data){
        console.log(data);
        var  edc = JSON.parse(data);
        for(var i in edc){
            $("#content").append(edc[i].imagem+" "+edc[i].pdf+" "+edc[i].edicao+'</br>');
        }
    });
}
$(document).ready(function(){
    $(".excluirEdc").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("Confirma a exclusão desta Edição da página?\nAVISO: o processo não poderá ser revertido!")) {
            
            var idEdicao = $(this).attr("id");
            console.log(idEdicao);
            $(location).attr('href',"../repository/excluirGuarapesRepository.php?id="+idEdicao);
   
        }
    });
});
$(document).ready(function(){
    $(".editarEdc").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("você deseja realmente alterar os  dados dessa Edição?")) {
            
            var idEdicao = $(this).attr("id");
            console.log(idEdicao);
            $(location).attr('href',"../views/editarGuarapes.php?id="+idEdicao);
   
        }
    });
});