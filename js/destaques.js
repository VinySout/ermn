$(document).on("ready", function(){
    loadData();
});
var loadData = function(){
    $.ajax({
        type:"POST",
        url:"../repository/destaquesRepository.php"
    }).done(function(data){
        console.log(data);
        var  dest = JSON.parse(data);
        for(var i in dest){
            $("#content").append(dest[i].img+" "+dest[i].posto+" "+dest[i].nome+" "+dest[i].semestre+'</br>');
        }
    });
}
$(document).ready(function(){
    $(".excluirDest").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("Confirma a exclusão deste militar da página?\nAVISO: o processo não poderá ser revertido!")) {
            
            // cria a variável idProduto e pega o valor id do botão
            var idProduto = $(this).attr("id");
            console.log(idProduto);
            $(location).attr('href',"../repository/excluirDestaqueRepository.php?id="+idProduto);
   
        }
    });
});
$(document).ready(function(){
    $(".editarDest").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("você deseja realmente alterar os  dados desse militar?")) {
            
            // cria a variável idProduto e pega o valor id do botão
            var id = $(this).attr("id");
            console.log(id);
            $(location).attr('href',"../usoInterno/editarDestaque.php?id="+id);
   
        }
    });
});