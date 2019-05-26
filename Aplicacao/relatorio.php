<?php
    include('cabecalho-rodape.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Relatorio</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="lib/fontawesome">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/relatorio.css">
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

    <header class="container-fluid navbar-expand-sm">
        <?php
            cabecalho();
        ?>  
    </header>
    <div class="container border my-5 py-3">
        <label class="text-success">Relatorios</label><br/>
        <div class="row justify-content-center">
            <div class="col-10 border ml-2 text-center cor-verde">
                <label class=" py-1 text-white " >Ano 2019</label>
            </div>
        </div>
        
        <div id="janeiro">
            <label class="border py-1 px-3 ml-4 my-2 bg-primary text-light" >Janeiro</label>
            <div class="border ml-5 py-3">
                <div class="row ml-2">
                    <div class="col-9 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class='fa fa-file-pdf-o'></i>
                        <i class="fa fa-file-excel-o"></i>
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>

            <div class="border ml-5 py-3 my-2">
                <div class="row ml-2">
                    <div class="col-9 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" fa fa-file-pdf-o"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="fevereiro">
        <label class="border py-1 px-3 ml-4 my-2 bg-dark text-light" >Fevereiro</label>
            <div class="border ml-5 py-3">
                <div class="row ml-2">
                    <div class="col-9 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" fa fa-file-pdf-o"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>

            <div class="border ml-5 py-3 my-2">
                <div class="row ml-2">
                    <div class="col-9 ">
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                    <div class="col-3">
                        <i class=" fa fa-file-pdf-o"></i>
                    </div>
                </div>
                <div class="row mt-2 ml-3">
                    <div class="col-2">
                        <button class="btn botao">Descricao</button>
                    </div>
                    <div class="col-2">
                        <button class="btn botao">Baixar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="marco">
        </div>
    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>
</body>
</html>