$(document).ready(function(){
    $("#btn-Solicitar").attr('disabled', true);
    $("#selectProcedimento").blur(function(){
        if($("#selectProcedimento").val() > 0 && !$("#inputData").val() == ""){
            $("#btn-Solicitar").attr('disabled', false);
        }else{
            $("#btn-Solicitar").attr('disabled', true);
        }
    });
    $("#inputData").blur(function(){
        if($("#selectProcedimento").val() > 0 && !$("#inputData").val() == ""){
            $("#btn-Solicitar").attr('disabled', false);
        }else{
            $("#btn-Solicitar").attr('disabled', true);
        }
    });
});
