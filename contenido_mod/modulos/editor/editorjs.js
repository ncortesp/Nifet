/*comprueben lsa rutas y si este LOAD funciona*/


            function enviartexto(){
                var hola =  CKEDITOR.instances['editor1'].getData();

                $.ajax({

                url:   'captura.php', /*tambien comprueben esta ruta , si todo sale bien deberia funcionar de una.*/
                type:  'post',
                data:  {'cosa':hola},
                beforeSend: function () {
                        $("#resultado").html("Cargando, espere por favor...");
                },
                success:  function (response) {
                        $("#editor").html(response);
                }
                });

            }
