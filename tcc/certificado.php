<?php
include('verificar-login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/certificado.css">
    <title>Document</title>
</head>
<body onload="EsconderForm()">
    <section>
        <div class="container text-center">
            <form >
                <p class="mb-2 mt-5">Escolha o tipo de Certificado que deseja emitir</p>
                <div class="formulario" id="selecionar">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/certificado_cinza.png" alt="" srcset="">
                        </div>
                        <select class="form-select insert" aria-label="Default select example" onchange="TrocarForm(this.value)">
                            <option value="0" disabled selected>Tipo do Certificado</option>
                            <option value="1">Pessoa Jurídica</option>
                            <option value="2">Pessoa Física</option>
                        </select>
                    </div>
                </div>
                <p class="mt-5 mb-2" id="pform">Insira os dados solicitados</p>
                <div class="formulario" id="fisica">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/nome.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" placeholder="Nome" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs">
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cpf.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" placeholder="CPF" aria-label="Username" aria-describedby="addon-wrapping"required>
                    </div>
                    <div class="input-group flex-nowrap inputs" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control insert" id="senhafis"  placeholder="Senha" aria-label="Username" aria-describedby="addon-wrapping"required>
                        <div class="align-self-center ms-3 me-3" >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarSenhaFis()" alt="" srcset="">
                        </div>
    
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-outline-primary botao" id="btn_secundario" type = “reset”>Cancelar</button>
                        <button class="btn btn-primary botao" id="btn_primario" type="submit">Cadastrar</button>
                    </div>
                </div>    

                <div class="formulario" id="juridica">
                    <div class="input-group flex-nowrap inputs">
                        <div class="align-self-center ms-3 me-3">
                            <img src="assets/nome.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" placeholder="Nome" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs">
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cpf.png" alt="" srcset="">
                        </div>
                        <input type="text" class="form-control insert" placeholder="CNPJ" aria-label="Username" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="input-group flex-nowrap inputs" data-bs-toggle="tooltip" data-bs-title="Sua senha deve conter 8-20 caracteres, letras, números e caracteres especiais." data-bs-trigger="focus" >
                        <div  class="align-self-center ms-3 me-3">
                            <img src="assets/cadeado_cinza.png" alt="" srcset="">
                        </div>
                        <input type="password" class="form-control insert" id="senhajuri"  placeholder="Senha" aria-label="Username" aria-describedby="addon-wrapping"required>
                        <div class="align-self-center ms-3 me-3" >
                            <img src="assets/olho_cinza.png" onclick="MostrarOcultarSenhaJuri()" alt="" srcset="">
                        </div>
    
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button class="btn btn-outline-primary botao" id="btn_secundario" type = “reset”>Cancelar</button>
                        <button class="btn btn-primary botao" id="btn_primario" type="submit">Cadastrar</button>
                    </div>
                </div> 
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="js/certificado.js"></script>
</body>
</html>