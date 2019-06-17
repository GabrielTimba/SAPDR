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
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/relatorio.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

    <header class="container-fluid navbar-expand-sm">
        <?php
            cabecalho();
        ?>

        <div class="container">

            <div class="row mt-3">
                <div class="col-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > <span class="texto-verde">Relatórios</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Relatórios</h1>
                </div>
            </div>

        </div>  
    </header>
    <div class="container border  my-5 py-3">

        <div class="col-sm-12 mb-5">
            <div class="row justify-content-center">
                <!--<div class=" border ml-2 text-center cor-verde">
                    <h5 class=" py-1 text-white " >Ano - 2019</h5>
                </div>-->
                <input class="col-sm-10 navbar-toggler bg-success btn-success" type="button" data-toggle="collapse" data-target="#ano-2019" value="Ano - 2019">
            </div>
            
            <div class="row justify-content-center collapse" id="ano-2019">
                <div class="col-sm-9">
                    
                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#a-2019-m-1">
                        Janeiro
                        </button>

                        <div class="collapse" id="a-2019-m-1">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#a-2019-m-2">
                        Fevereiro
                        </button>

                        <div class="collapse" id="a-2019-m-2">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#a-2019-m-3">
                        Marco
                        </button>

                        <div class="collapse" id="a-2019-m-3">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
        
                </div>
            </div>
        </div>

        <div class="col-sm-12 mb-5">
            <div class="row justify-content-center">
                <!--<div class=" border ml-2 text-center cor-verde">
                    <h5 class=" py-1 text-white " >Ano - 2019</h5>
                </div>-->
                <input class="col-sm-10 navbar-toggler bg-success btn-success" type="button" data-toggle="collapse" data-target="#ano-2018" value="Ano - 2018">
            </div>
            
            <div class="row justify-content-center collapse" id="ano-2018">
                <div class="col-sm-9">
                    
                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#mes-1">
                        Janeiro
                        </button>

                        <div class="collapse" id="mes-1">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#mes-2">
                        Fevereiro
                        </button>

                        <div class="collapse" id="mes-2">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="my-4" >                  
                        <button class="navbar-toggler btn btn-primary bg-primary my-2 col-sm-7" type="button" data-toggle="collapse" data-target="#mes-3">
                        Marco
                        </button>

                        <div class="collapse" id="mes-3">
                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="border py-3 my-3" >
                                <div class="row px-4">
                                    <div class="col-9 ">
                                        Lorem ipsum dolor sit amet consectetur
                                    </div>
                                    <div class="col-3">
                                        <i class=" far fa-file-pdf fa-3x icon"></i>
                                    </div>
                                </div>
                                <div class="row mt-2 px-4">
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 px-3" data-toggle="modal" data-target="#siteModal">Descrição</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn botao my-1 col-sm-10 ">Baixar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
        
                </div>
            </div>
        </div>

    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>

    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title">Relatorio 01</h1>
                    <button type="button" class="close" data-dismiss="modal">
                        <samp>&times;</samp>
                    </button>
                </div>

                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Ex voluptas suscipit iste sapiente 
                    assumenda cupiditate delectus aliquam dolore culpa officia ratione ipsum tenetur, 
                    similique nemo quam nostrum adipisci, aliquid maxime.

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                </div>

            </div>

        </div>
    </div>
</body>
</html>