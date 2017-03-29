$(document).on("ready", function(){
    loadData();
});
var loadData = function(){
    $.ajax({
        type:"POST",
        url:"../repository/comandantesRepository.php"
    }).done(function(data){
        console.log(data);
        var  comandante = JSON.parse(data);
        for(var i in comandante){
            $("#content").append(comandante[i].foto+" "+comandante[i].nome+" "+comandante[i].periodo+'</br>');
        }
    });
}
$(document).ready(function(){
    $(".excluir").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("Confirma a exclusão deste comandante da página?\nAVISO: o processo não poderá ser revertido!")) {
            
            // cria a variável idProduto e pega o valor id do botão
            var idProduto = $(this).attr("id");
            console.log(idProduto);
            $(location).attr('href',"../repository/excluirComandanteRepository.php?id="+idProduto);
   
        }
    });
});
$(document).ready(function(){
    $(".editar").click(function(event){
        event.preventDefault();
        console.log(event);
        if(confirm("você deseja realmente alterar os  dados desse comandante?")) {
            
            // cria a variável idProduto e pega o valor id do botão
            var id = $(this).attr("id");
            console.log(id);
            $(location).attr('href',"../views/editarComandante.php?id="+id);
   
        }
    });
});