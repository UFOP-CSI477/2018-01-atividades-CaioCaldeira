$(document).ready(function(){
    $("#btn-Cadastrar").attr('disabled', true);
    $("#inputName").blur(function(){
        if(!$("#inputName").val() == "" && !isNaN($("#inputPreco").val()) && !$("#inputPreco").val() == ""){
            $("#btn-Cadastrar").attr('disabled', false);
        }else{
            $("#btn-Cadastrar").attr('disabled', true);
        }
    });
    $("#inputPreco").blur(function(){
        var Preco = $("#inputPreco").val();
        $("#inputPreco").val(parseFloat(Preco.replace(',','.')));
        Preco = parseFloat(Preco.replace(',','.'));
        if(!$("#inputName").val() == "" && !isNaN(Preco) && !$("#inputPreco").val() == ""){
            $("#btn-Cadastrar").attr('disabled', false);
        }else{
            $("#btn-Cadastrar").attr('disabled', true);
        }
    });
});
