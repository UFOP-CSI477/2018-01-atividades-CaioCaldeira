$(document).ready(function(){
    $("#corrigir").click(function(){
        if(!($("input[name='grupo1']").is(':checked') && $("input[name='grupo2']").is(':checked') && $("input[name='grupo3']").is(':checked') && $("input[name='grupo4']").is(':checked'))){
            alert("Por favor marque todos os grupos.");
        }else{
            var grupo1 = document.querySelector("input[name='grupo1']:checked").value;
            var grupo2 = document.querySelector("input[name='grupo2']:checked").value;
            var grupo3 = document.querySelector("input[name='grupo3']:checked").value;
            var grupo4 = document.querySelector("input[name='grupo4']:checked").value;
            if(grupo1 == "Sabonete"){
                $("#alertaVF1").hide();
                $("#alertaV1").show();
            }else{
                $("#alertaVF1").show();
                $("#alertaV1").hide();
            }
            if(grupo2 == "Algodão doce"){
                $("#alertaVF2").hide();
                $("#alertaV2").show();
            }else{
                $("#alertaVF2").show();
                $("#alertaV2").hide();
            }
            if(grupo3 == "Máquina de lavar"){
                $("#alertaVF3").hide();
                $("#alertaV3").show();
            }else{
                $("#alertaVF3").show();
                $("#alertaV3").hide();
            }
            if(grupo4 == "Chave de fenda"){
                $("#alertaVF4").hide();
                $("#alertaV4").show();
            }else{
                $("#alertaVF4").show();
                $("#alertaV4").hide();
            }
        }
    });

    $("#resetar").click(function(){
        $("#alertaVF1").hide();
        $("#alertaV1").hide();
        $("#alertaVF2").hide();
        $("#alertaV2").hide();
        $("#alertaVF3").hide();
        $("#alertaV3").hide();
        $("#alertaVF4").hide();
        $("#alertaV4").hide();

        $('input[name="grupo1"]').prop('checked', false);
        $('input[name="grupo2"]').prop('checked', false);
        $('input[name="grupo3"]').prop('checked', false);
        $('input[name="grupo4"]').prop('checked', false);
    });
});
