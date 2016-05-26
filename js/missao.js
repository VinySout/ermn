            $(document).on("ready", function(){
                loadData();
            });
            var loadData = function(){
                $.ajax({
                    type:"POST",
                    url:"../repository/missaoRepository.php"
                }).done(function(data){
                    console.log(data);
                    var  missao = JSON.parse(data);
                    for(var i in missao){
                        $("#content").append(missao[i].missao+'</br>');
                    }
                });
            }
