$(document).ready(function(){
    $("#btnCadastro").attr('disabled', true);
    $("#password2").blur(function(){
        if($("#password").val() == $("#password2").val() && !($("#inputNome").val() == "") && !$("#inputEmail").val() == ""){
            $("#btnCadastro").attr('disabled', false);
        }else{
            $("#btnCadastro").attr('disabled', true);
        }
    });
    $("#password").blur(function(){
        if($("#password").val() == $("#password2").val() && !($("#inputNome").val() == "") && !$("#inputEmail").val() == ""){
            $("#btnCadastro").attr('disabled', false);
        }else{
            $("#btnCadastro").attr('disabled', true);
        }
    });

    $("#inputNome").blur(function(){
        if($("#password").val() == $("#password2").val() && !($("#inputNome").val() == "") && !$("#inputEmail").val() == ""){
            $("#btnCadastro").attr('disabled', false);
        }else{
            $("#btnCadastro").attr('disabled', true);
        }
    });

    $("#inputEmail").blur(function(){
        if($("#password").val() == $("#password2").val() && !($("#inputNome").val() == "") && !$("#inputEmail").val() == ""){
            $("#btnCadastro").attr('disabled', false);
        }else{
            $("#btnCadastro").attr('disabled', true);
        }
    });
});
