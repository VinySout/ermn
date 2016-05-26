            $(document).on("ready", function(){
                loadData();
            });
            var loadData = function(){
                $.ajax({
                    type:"POST",
                    url:"../repository/historiaRepository.php"
                }).done(function(data){
                    console.log(data);
                    var  historia = JSON.parse(data);
                    for(var i in historia){
                        $("#content").append(historia[i].historia+'</br>');
                    }
                });
            }
