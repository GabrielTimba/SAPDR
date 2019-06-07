<?php
    include('cabecalho-rodape.php');
    include('model/doenteDAO.php');
    
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Cadastro | SAPDR</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="lib/smartwizard/css/smart_wizard.css">
    <link rel="stylesheet" href="lib/smartwizard/css/smart_wizard_theme_arrows.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/RegistarDoentes.css">
    <?php
        favicon();
    ?>
</head>
<body>
    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm mb-5">
    
        <?php
            cabecalho();
        ?>
    
        <div class="container">
    
            <div class="row mt-3">
                <div class="col-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > Minha Conta > <span
                            class="texto-verde">Cadastro</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <h1>Cadastro</h1>
                </div>
            </div>
    
        </div>
    </header>


    <!--Conteudo da pagina-->
    <div class="container">
        <div class="row mb-3 justify-content-center">
            <div class="col-11 mr-4">
                <h5>Formulário de Cadastro (Doente/Representante)</h5>
            </div>
        </div>
        <div class="row mb-5 justify-content-center" id="row-altura">
            <div class="col-11  cor-borda2 cor-creme" id="cadastro">
                <form action="model/DoenteDAO.php?submeter=true" id="myForm" name="formDoente" role="form" method="post" accept-charset="utf-8">
        
                    <!-- SmartWizard html -->
                    <div  id="smartwizard">
                        <ul class="mt-2 cor-creme">
                            <li><a href="#step-1">Passo 1<br /><small>Dados Pessoais</small></a></li>
                            <li><a href="#step-2">Passo 2<br /><small>Contacto e Enderreço</small></a></li>
                            <li><a href="#step-3">Passo 3<br /><small>Dados da Doença</small></a></li>
                            <li><a href="#step-4">Passo 4<br /><small>Dados de Acesso</small></a></li>
                        </ul>
        
                        <div id="form-div">
                            <div id="step-1">
                                <div id="form-step-0" role="form" data-toggle="validator">
                                    <legend>Dados Pessoais</legend>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Nome">Nome:</label>
                                            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Apelido">Apelido:</label>
                                            <input type="text" class="form-control" name="apelido" placeholder="Apelido" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Nome">Data de Nascimento:</label>
                                            <input type="date" class="form-control" name="data" placeholder="Nome" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Genero">Genero:</label>
                                            <select class="form-control valid" name="genero" id="Genero " required>
                                                <option value="0" disabled selected>...</option>
                                                <option value="1" >Masculino</option>
                                                <option value="2">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <div id="step-2">
                                <div id="form-step-1" role="form" data-toggle="validator">
                                    <legend>Enderreço e Contacto</legend>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Provincia">Provincia:</label>
                                            <select class="form-control " name="provincia" id="provincia" onchange="carregarDistrito ()" required>
                                                <option value="0" disabled selected>...</option>
                                                <option value="1">Maputo</option>
                                                <option value="2">Gaza</option>
                                                <option value="3">Inhambane</option>
                                                <option value="4">Sofala</option>
                                                <option value="5">Manica</option>
                                                <option value="6">Zambezia</option>
                                                <option value="7">Tete</option>
                                                <option value="8">Nampula</option>
                                                <option value="9">Niassa</option>
                                                <option value="10">Cabo Delgado</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Distrito">Distrito</label>
                                            <select id="distrito" class="form-control" name="distrito" required></select>
                                        </div>
                                    </div>
        
                                    <div class="form-row">
        
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro"required>
                                            <!--<select class="form-control" id="Bairro" required>
                                                <option disabled selected>...</option>
                                                <option>Bairro</option>
                                                <option>Bairro</option>
                                            </select>-->
                                        </div>
        
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Rua">Rua:</label>
                                            <input type="text" class="form-control"name="rua" placeholder="Rua" required>
                                        </div>
        
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Email">Email:</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="tellefone">Tellefone:</label>
                                            <input type="number" class="form-control" id="tellefone" name="tellefone" placeholder="Tellefone" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-3">
                                <div id="form-step-2" role="form" data-toggle="validator">
                                    <legend>Dados da Doença</legend>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="doenca" >Nome da Doença</label>
                                            <?php doencas();?>
                                        </div>
                                    </div>

                                    <div class="form-row justify-content-leaft">
                                        <div class="form-group col-sm-5 ml-3">
                                            <label for="trat">Encotra-se a recebr tratmaento?</label>
                                        
                                       
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Sim    
                                                </label> 
                                            </div>
                                            <div class="radio">    
                                                <label>       
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked> Não    
                                                </label> 
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-5" id="unidHosp">
                                            <label for="hosp">Em que unidade Hospitalar</label>

                                                <?php
                                                    instituicao();
                                                 ?>
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="step-4" class="">
        
                                <div id="form-step-3" role="form" data-toggle="validator">
                                    <legend>Dados de Acesso</legend>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Nome do Usuario">Nome de Usuario:</label>
                                            <input type="text" name="userName" class="form-control" placeholder="Nome do Usuario" required>
                                        </div>
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Senha">Senha:</label>
                                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Confirme a Senha">Confirme a Senha:</label>
                                            <input type="password" class="form-control" placeholder="Confirme a Senha" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </form>
            </div>
        </div>
    </div>
    
    
    <!--Rodape-->
    <?php
        rodape();
    ?>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- plugins do smartwizard -->
    <script src="lib/smartwizard/js/jquery.min.js"></script>
    <script src="lib/smartwizard/js/validator.js"></script>
    <script src="lib/smartwizard/js/jquery.smartWizard.js"></script>

    <!--script do smartwizard-->
   <script type="text/javascript" src="js/registarDoente.js"></script>  
</body>
</html>



