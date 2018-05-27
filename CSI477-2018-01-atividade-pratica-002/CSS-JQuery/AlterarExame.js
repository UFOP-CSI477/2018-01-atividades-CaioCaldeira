$(document).ready(function(){
    $("#btn-Alterar").attr('disabled', true);
    $("#selectExame").blur(function(){
        if($("#selectExame").val() > 0 && !$("#inputData").val() == "" && $("#selectProcedimento").val() > 0){
            $("#btn-Alterar").attr('disabled', false);
        }else{
            $("#btn-Alterar").attr('disabled', true);
        }
    });
    $("#selectProcedimento").blur(function(){
        if($("#selectProcedimento").val() > 0 && !$("#inputData").val() == "" && $("#selectExame").val() > 0 ){
            $("#btn-Alterar").attr('disabled', false);
        }else{
            $("#btn-Alterar").attr('disabled', true);
        }
    });
    $("#inputData").blur(function(){
        if(!$("#inputData").val() == "" && $("#selectExame").val() > 0 && $("#selectProcedimento").val() > 0){
            $("#btn-Alterar").attr('disabled', false);
        }else{
            $("#btn-Alterar").attr('disabled', true);
        }
    });
});
