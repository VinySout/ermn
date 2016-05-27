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
