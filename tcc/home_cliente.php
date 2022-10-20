<?php
    include('conectbd.php');
    include('verificar-login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/home_cliente.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/main1.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include "menu.html";
    ?>
    <div class="container mt-4">
        <h1>Bem-vindo(a) <?php echo"$_SESSION[user]" ?></h1>
        <hr class="mt-4">
        <div class="mt-5" id="atividades">
            <p id="titulo">Atividade</p>
            <hr>
            <div class="ultimas">
                <div class="ultCerti">
                    <p class="mb-1">Último Certificado Gerado</p>
                    <div class="arquivos row" id="certificado">
                        <div class="col-1 content-flex">
                            <img class="icone" src="assets/icon_certificado1.svg" alt="" srcset="">
                        </div>
                        <div class="col-5 content-block d-flex flex-column">
                            <!-- <img src="assets/InsertImg.svg" alt="" srcset=""> -->
                            <p class="dados">Nome do Titular</p>    
                            <p class="dados datas" id="emissao">Data de Emissão: </p> 
                            <p class="dados datas" id="validade">Data de Validade: </p> 
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-3 content-block d-flex flex-column" id="baixar_direita">
                            <div id="baixar">
                                <a href="#">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ultAssina mt-3">
                    <p class="mb-1">Último Arquivo Assinado</p>
                    <div class="arquivos row" id="assinatura">
                    <div class="col-1 content-flex">
                            <img class="icone" src="assets/icon_assinatura4.svg" alt="" srcset="">
                        </div>
                        <div class="col-5 content-block d-flex flex-column">
                            <!-- <img src="assets/InsertImg.svg" alt="" srcset=""> -->
                            <p class="dados">Nome do Titular</p>    
                            <p class="dados datas" id="emissao">Data de Emissão: </p> 
                            <p class="dados datas" id="validade">Data de Validade: </p> 
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-3 content-block d-flex flex-column" id="baixar_direita">
                            <div id="baixar">
                                <a href="#">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr id="antes_ferra">
    </div>

    <?php
        include "cards.html";
    ?>
    
    
</body>
</html>