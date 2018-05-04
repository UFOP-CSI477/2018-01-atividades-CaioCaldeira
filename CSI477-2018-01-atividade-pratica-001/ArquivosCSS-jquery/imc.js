$(document).ready(function(){
    $("#calcular").click(function(){
        var peso = $("#peso").val();
        peso = parseFloat(peso.replace(',','.'));
        var altura = $("#altura").val();
        altura = parseFloat(altura.replace(',','.'));
        var imc = peso/(altura*altura);
        if(isNaN(peso) || isNaN(altura) || peso== "" || altura == ""){
            alert("Por favor preencha os campos apenas com valores numéricos.");
        }else{
            $("#imc").html("O seu Índice de Massa Corporal é : " + imc);
            $("#imc").addClass("center cordoalerta");
            $("#imc").show();
            $("#imgcalcular").hide();
            $("#alertaV1").hide();
            $("#alertaV2").hide();
            $("#alertaV3").hide();
            $("#alertaV4").hide();
            $("#alertaV5").hide();
            $("#alertaV6").hide();
            if(imc < 18.5){
                $("#alertaV1").show();
            }if(18.5 <= imc && imc < 24.9){
                $("#alertaV2").show();
            }if(25 <= imc && imc < 29.9){
                $("#alertaV3").show();
            }if(30 <= imc && imc < 34.9){
                $("#alertaV4").show();
            }if(35 <= imc && imc < 39.9){
                $("#alertaV5").show();
            }if(imc >= 39.9){
                $("#alertaV6").show();
            }
        }
    });

    $("#limpar").click(function(){
        $("#alertaV1").hide();
        $("#alertaV2").hide();
        $("#alertaV3").hide();
        $("#alertaV4").hide();
        $("#alertaV5").hide();
        $("#alertaV6").hide();
        $("#imc").hide();
        $("#imgcalcular").show();
        $("#peso").val("");
        $("#altura").val("");
    });
});
