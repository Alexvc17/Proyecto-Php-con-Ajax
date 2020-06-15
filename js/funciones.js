$(function(){

    $("#Enviar").click(function(){

        var destino = "procesos.php";
        $.ajax({

            type: "POST",
            url: destino,
            data: $("#form").serialize(),
            
            
            success: function(data){

                    $("#respuesta").html(data);
            }


        })
        return false;

    });


});