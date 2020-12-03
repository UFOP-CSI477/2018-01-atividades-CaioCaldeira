$(document).ready(function(){
    $("#btn-Alterar").attr('disabled', true);
    $("#selectProcedimento").blur(function(){
        if($("#selectProcedimento").val() > 0 && !isNaN($("#inputPreco").val()) && !$("#inputPreco").val() == ""){
            $("#btn-Alterar").attr('disabled', false);
        }else{
            $("#btn-Alterar").attr('disabled', true);
        }
    });
    $("#inputPreco").blur(function(){
        var Preco = $("#inputPreco").val();
        $("#inputPreco").val(parseFloat(Preco.replace(',','.')));
        Preco = parseFloat(Preco.replace(',','.'));
        if($("#selectProcedimento").val() > 0 && !isNaN(Preco) ){
            $("#btn-Alterar").attr('disabled', false);
        }else{
            $("#btn-Alterar").attr('disabled', true);
        }
    });
});
