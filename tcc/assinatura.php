    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assinatura.css">
    <link rel="stylesheet" href="css/main1.css">
    <script src="pdf/mostrarpdf.js"></script>
    <script src="pdf/pdf.js"></script>
    <title> Assinatura </title>
</head>
<body>
    <?php
        include "menu-jan.html";
    ?>
    <section id="assinatura">
        <div class="container pt-md-0 pt-5 pb-0" >
            <div class="row-as mt-3">
                <div class="col-md-12 col-sm-12 align-self-center" id="titulo">
                    <h1 class="titulo">Assinatura de Arquivos</h1>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="etapas-jan">
                </div>
                <div class="col-md-12 col-sm-12 align-self-center" id="esc-arquivo">
                <div class="input-group input-group-sm mb-3">
                    
                </div>
                <form action="test.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="form-control mb-3 pdf" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" accept=".pdf" name="pdf">
                    <h5 class="pdf_text ms-2"> Escolha somente arquivos com extensão .pdf </h5>
                    <input type="submit" value="Validar PDF" name="submit" class="but_pdf btn btn-primary"> 
                    </form>
                </div>
                <div class="col-md-12 col-sm-12 align-self-center mt-2 mb-5" id="pdf_viewer">
                    <iframe src="../assets/Array" width="100%" height="700" class="pdf_viewer">
                    </iframe>
                </div>    
            </div>
        </div>
    </section>
    <?php   
        include "footer.html";
    ?>
</body>
</html>