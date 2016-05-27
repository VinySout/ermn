            $(document).on("ready", function(){
                loadData();
            });
            var loadData = function(){
                $.ajax({
                    type:"POST",
                    url:"../repository/heraldicaRepository.php"
                }).done(function(data){
                    console.log(data);
                    var  heraldica = JSON.parse(data);
                    for(var i in heraldica){
                        $("#content").append(heraldica[i].heraldica+'</br>');
                    }
                });
            }
