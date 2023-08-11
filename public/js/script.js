$(document).ready(function(){
	$("#cpf").mask("000.000.000-00")
    $("#telefone").mask("(00) 00000-0000")
    $("#cep").mask("00000-000")
    $("#data").mask("00/00/0000")
    $("#numero").mask("99999")
    $("#rg").mask("99.999.999-9")
});

function formCadastro(){
	document.getElementById('formulario-cadastro').className = "form";
	document.getElementById('formulario-login').className = "to-hide";
}

function formLogin(){
	document.getElementById('formulario-cadastro').className = "to-hide";
	document.getElementById('formulario-login').className = "form";
}

function mostrarSenhaLogin() {
    var senha = document.getElementById("senhaLogin");

    if (senha.type == "password") {
        senha.type = "text";
    } else {
        senha.type = "password";
    }
}

function mostrarSenhaCadastro() {
    var senha = document.getElementById("senhaCadastro");
    var c_senha = document.getElementById("c_senhaCadastro");

    if (senha.type == "password" && c_senha.type == "password") {
        senha.type = "text";
        c_senha.type = "text";
    } else {
        senha.type = "password";
        c_senha.type = "password";
    }
}

function verificaLogin(){
    var email = document.getElementById("emailCliente");
    var senha = document.getElementById("senhaLogin");
    validar = true;
    
    if (email == "") {
        document.getElementById('alert-email').className = "alerta-vermelho";
        validar = false;
    }
    
    if (email.indexOf('@') == -1 & email.indexOf('.com') == -1) {
        document.getElementById('alert-email').className = "alerta-vermelho";
        validar = false;
    }
    
    if (email != "" & email.indexOf('@') != -1 & email.indexOf('.com') != -1) {
        document.getElementById('alert-email').className = "to-hide";
    }
    
    if (senha == "") {
        document.getElementById('alert-senha').className = "alerta-vermelho";
        validar = false;
    }
    
    if (senha.length < 4) {
        document.getElementById('alert-senha').className = "alerta-vermelho";
        validar = false;
    }
    
    if (senha != "" & senha.length >= 8) {
        document.getElementById('alert-senha').className = "to-hide";
    }
    
    return validar;
}