$(document).ready(function(){
    $("#calcular").click(function(){
        console.log("Eoqq");
        var amplitude = $("#amplitude").val();
        amplitude = parseFloat(amplitude.replace(',','.'));
        var tempo = $("#tempo").val();
        tempo = parseFloat(tempo.replace(',','.'));
        var escala = Math.log10(amplitude) + (3 * Math.log10(8 * tempo)) - 2.92;
        if(isNaN(amplitude) || isNaN(tempo) || amplitude== "" || tempo == ""){
            alert("Por favor preencha os campos apenas com valores numéricos.");
        }else{
            $("#escala").html("A magnitude do terremoto é " + escala +".");
            $("#escala").addClass("eoq");
            $("#escala").show();
            $("#alertaV1").hide();
            $("#alertaV2").hide();
            $("#alertaV3").hide();
            $("#alertaV4").hide();
            $("#alertaV5").hide();
            $("#alertaV6").hide();
            if(escala < 3.5){
                $("#alertaV1").show();
            }if(3.5 <= escala && escala < 5.5){
                $("#alertaV2").show();
            }if(5.5 <= escala && escala < 6){
                $("#alertaV3").show();
            }if(6 <= escala && escala < 6.9){
                $("#alertaV4").show();
            }if(6.9 <= escala && escala < 7.9){
                $("#alertaV5").show();
            }if(escala >= 7.9){
                $("#alertaV6").show();
            }
        }
    });

    $("#resetar").click(function(){
        $("#alertaV1").hide();
        $("#alertaV2").hide();
        $("#alertaV3").hide();
        $("#alertaV4").hide();
        $("#alertaV5").hide();
        $("#alertaV6").hide();
        $("#escala").hide();
        $("#amplitude").val("");
        $("#tempo").val("");
    });
});
