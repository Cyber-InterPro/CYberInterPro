//Mostrar e Ocultar Senha

function MostrarOcultarSenhaFis(){
    var senhafis = document.querySelector('#senhafis');

    if(senhafis.type=="password"){
        senhafis.type = "text";
    }else{
        senhafis.type = "password";
    }
} 
function MostrarOcultarSenhaJuri(){
    var senhajuri = document.querySelector('#senhajuri');

    if(senhajuri.type=="password"){
        senhajuri.type = "text";
    }else{
        senhajuri.type = "password";
}
}

//Trocar Formulários
var formfis = document.querySelector("#fisica");
var formjuri = document.querySelector("#juridica");
var formparag = document.querySelector("#pform");

function TrocarForm(valor){

    if (valor === "2"){
        formfis.style.display = "block";
        formjuri.style.display = "none";
        formparag.style.display = "block";
    }
    else{
        formfis.style.display = "none";
        formjuri.style.display = "block";
        formparag.style.display = "block";
    }
}

function EsconderForm(){
    formfis.style.display = "none";
    formjuri.style.display = "none";
    formparag.style.display = "none";
}