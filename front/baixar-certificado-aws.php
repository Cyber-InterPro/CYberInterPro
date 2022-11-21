<?php
    include('verificar-login.php');
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">    
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Baixar Certificado </title>
    <script src="https://unpkg.com/pdf-lib@1.4.0"></script>
    <script src="https://unpkg.com/downloadjs@1.4.7"></script>
</head>
<body>
    <?php
        include "menu.php";
        $filename=$_GET['filename'];
    ?>
    <section class="mb-5">
        <div class="mt-5">
            <h1 class="titulo">Geração de Certificado</h1>
            <?php
                include "ProgressBarCert.html";

            ?>
        </div> 
        <div class="container text-center">
            <div class="col-md-12 col-sm-12 align-self-center" id="esc-arquivo">
                <a class="but_pdf btn btn-primary" href="http://localhost/cyberinterpro/aws/files/Joao Silva Neves_12345678.pfx">Aqui está seu arquivo!</a>
                <br><br><br><br><br>
            </div>
        </div>
    </section>
        <?php   
        include "footer.html";
        ?>
<script src="js/assinaturaImg.js"></script>
</body>
</html>