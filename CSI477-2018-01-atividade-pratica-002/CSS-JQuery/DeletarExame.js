$(document).ready(function(){
    $("#btn-Deletar").attr('disabled', true);
    $("#selectExame").blur(function(){
        if($("#selectExame").val() > 0 ){
            $("#btn-Deletar").attr('disabled', false);
        }else{
            $("#btn-Deletar").attr('disabled', true);
        }
    });
});
