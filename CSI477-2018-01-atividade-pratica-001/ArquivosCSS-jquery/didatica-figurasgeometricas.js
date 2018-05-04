$(document).ready(function(){
    var select1 = 0;
    var select2 = 0;
    var select3 = 0;
    var select4 = 0;

    $("#corrigir").click(function(){
        if(select1 > 0 && select2 > 0 && select3 > 0 && select4 > 0 ){
            if(select1 == 3){
                $("#alertaVF1").hide();
                $("#alertaV1").show();
            }else{
                $("#alertaVF1").show();
                $("#alertaV1").hide();
            }
            if(select2 == 1){
                $("#alertaVF2").hide();
                $("#alertaV2").show();
            }else{
                $("#alertaVF2").show();
                $("#alertaV2").hide();
            }
            if(select3 == 4){
                $("#alertaVF3").hide();
                $("#alertaV3").show();
            }else{
                $("#alertaVF3").show();
                $("#alertaV3").hide();
            }
            if(select4 == 2){
                $("#alertaVF4").hide();
                $("#alertaV4").show();
            }else{
                $("#alertaVF4").show();
                $("#alertaV4").hide();
            }
        }else{
            alert("Por favor selecione todas as figuras.");
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

        $("#select1").val('0').change();
        $("#select2").val('0').change();
        $("#select3").val('0').change();
        $("#select4").val('0').change();

    });

    $("#select1").on('change', function(){
        select1 = parseInt($(this).val());
    });
    $("#select2").on('change', function(){
        select2 = parseInt($(this).val());
    });
    $("#select3").on('change', function(){
        select3 = parseInt($(this).val());
    });
    $("#select4").on('change', function(){
        select4 = parseInt($(this).val());
    });
});
