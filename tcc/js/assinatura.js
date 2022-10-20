// var form = $('#form_arquivo');
// form.submit(function(event){
//    event.preventDefault();
//    if(!$('input[name="pdf"]').val()){
//       alert("É Obrigatório Anexar Seu Currículo!" );
//    }else{
//       alert("Arquivo anexado!" );
//    }
// });

var arquivo = document.getElementById("form_arquivo");

function ValidaArquivo() {
        alert ("Eu sou um alert!");
}
function ValidaArquivo() {
    document.getElementById('teste').innerHTML = 'Total Files: <b>'+ arquivo.files.length + '</b></br >';
    // if (arquivo.files.length > 0) {
    //     alert ("Nenhum arquivo selecionado!");
    // } else {
    //     alert ("Arquivo selecionado!");
    // }
}
document.getElementById('teste').innerHTML = 'Total Files:';
    