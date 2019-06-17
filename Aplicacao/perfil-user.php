<?php
    include('cabecalho-rodape.php');
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
                            class="texto-verde">Perfil</span></p>
                    <hr class="cor-verde">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12">
                    <h1>Perfil</h1>
                </div>
            </div>
    
        </div>
    </header>


    <!--Conteudo da pagina-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 mr-4">
                <h5>Meus Dados</h5>
            </div>
        </div>
        <div class="row mb-5 justify-content-center" id="row-altura">
            <div class="col-11  cor-borda2 cor-creme" id="cadastro">
                <form action="#" id="myForm" role="form" method="post" accept-charset="utf-8">
        
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
                                            <input type="text" class="form-control" placeholder="Nome" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Apelido">Apelido:</label>
                                            <input type="text" class="form-control" placeholder="Apelido" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Nome">Data de Nascimento:</label>
                                            <input type="date" class="form-control" placeholder="Nome" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Genero">Genero:</label>
                                            <select class="form-control" id="Genero " required>
                                                <option disabled selected>...</option>
                                                <option>Maculino</option>
                                                <option>Femenino</option>
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
                                            <select class="form-control" id="Provincia" required>
                                                <option disabled selected>...</option>
                                                <option>Maputo</option>
                                                <option>Gaza</option>
                                                <option>Inhambane</option>
                                                <option>Sofala</option>
                                                <option>Manica</option>
                                                <option>Zambezia</option>
                                                <option>Tete</option>
                                                <option>Nampula</option>
                                                <option>Niassa</option>
                                                <option>Cabo Delgado</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Distrito">Distrito:</label>
                                            <input list="distritos" class="form-control" id="Distrito" required>
                                            <datalist id="distritos">
                                                <option value="Matola">Matola</option>
                                                <option value="Maputo">Maputo</option>
                                                <option value="Xai-xai">Xai-xai</option>
                                                <option value="Chibuto">Chibuto</option>
                                                <option value="Chokwé">Chokwé</option>
                                                <option value="Inhambane">Inhambane</option>
                                                <option value="Maxixe">Maxixe</option>
                                                <option value="Manica">Manica</option>
                                                <option value="Chimoio">Chimoio</option>
                                                <option value="Beira">Beira</option>
                                                <option value="Dondo">Dondo</option>
                                                <option value="Zambezia">Zambezia</option>
                                                <option value="Quelimane">Quelimane</option>
                                                <option value="Mocuba">Mocuba</option>
                                                <option value="Gurué">Gurué</option>
                                                <option value="Tete">Tete</option>
                                                <option value="Nampula">Nampula</option>
                                                <option value="Nacala">Nacala</option>
                                                <option value="Ilha de Moçambique">Ilha de Moçambique</option>
                                                <option value="Pemba">Pemba</option>
                                                <option value="Montepuez">Montepuez</option>
                                                <option value="Lichinga">Lichinga</option>
                                                <option value="Cuamba">Cuamba</option>
                                            </datalist>
                                        </div>
                                    </div>
        
                                    <div class="form-row">
        
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="bairro">Bairro:</label>
                                            <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                                            <!--<select class="form-control" id="Bairro" required>
                                                <option disabled selected>...</option>
                                                <option>Bairro</option>
                                                <option>Bairro</option>
                                            </select>-->
                                        </div>
        
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Rua">Rua:</label>
                                            <input type="text" class="form-control" placeholder="Rua">
                                        </div>
        
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Email">Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Tellefone">Tellefone:</label>
                                            <input type="number" class="form-control" placeholder="Tellefone" required>
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
                                            <input class="form-control" id="doenca" list="doencas">
                                            <datalist id="doencas">
                                                <option value="11111"></option>
                                                <option value="22222"></option>
                                                <option value="33333"></option>
                                            </datalist>
                                        </div>
                                    </div>

                                    <div class="form-row justify-content-leaft">
                                        <div class="form-group col-sm-5 ml-3">
                                            <label for="trat">Encotra-se a recebr tratmaento?</label>
                                        
                                       
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Sim    
                                                </label> 
                                            </div>
                                            <div class="radio">    
                                                <label>       
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Não    
                                                </label> 
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-5">
                                            <label for="hosp">Em que unidade Hospitalar</label>
                                            <input class="form-control" id="hosp" list="hospital">
                                            <datalist id="hospital">
                                                <option value="11111"></option>
                                                <option value="22222"></option>
                                                <option value="33333"></option>
                                            </datalist>
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
                                            <input type="text" class="form-control" placeholder="Nome do Usuario" required>
                                        </div>
                                    </div>
        
                                    <div class="form-row">
                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                            <label for="Senha">Senha:</label>
                                            <input type="password" class="form-control" placeholder="Senha" required>
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
    <script src="lib/smartwizard/js/validator.min.js"></script>
    <script src="lib/smartwizard/js/jquery.smartWizard.js"></script>

    <!--script do smartwizard-->
   <script type="text/javascript">
       $(document).ready(function(){

           // Toolbar extra buttons
           var btnFinish = $('<button></button>').text('Guardar Alterações')
                                            .addClass('btn btn-info')
                                            .on('click', function(){
                                                   if( !$(this).hasClass('disabled')){
                                                       var elmForm = $("#myForm");
                                                       if(elmForm){
                                                           elmForm.validator('validate');
                                                           var elmErr = elmForm.find('.has-error');
                                                           if(elmErr && elmErr.length > 0){
                                                               alert('Oops existem campos que nao foram preenchidos');
                                                               return false;
                                                           }else{
                                                               alert('Bom! Cadastro Feito com Sucesso');
                                                               elmForm.submit();
                                                               return false;
                                                           }
                                                       }
                                                   }
                                               });
           var btnCancel = $('<button></button>').text('Cancelar')
                                            .addClass('btn btn-danger')
                                            .on('click', function(){
                                                   $('#smartwizard').smartWizard("reset");
                                                   $('#myForm').find("input, textarea").val("");
                                               });



           // Smart Wizard
           $('#smartwizard').smartWizard({
                   selected: 0,
                   theme: 'arrows',
                   transitionEffect:'fade',
                   toolbarSettings: {toolbarPosition: 'bottom',
                                     toolbarExtraButtons: [btnFinish, btnCancel]
                                   },
                   anchorSettings: {
                               markDoneStep: true, // add done css
                               markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                               removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                               enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                           }
                });

           $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
               var elmForm = $("#form-step-" + stepNumber);
               // stepDirection === 'forward' :- this condition allows to do the form validation
               // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
               if(stepDirection === 'forward' && elmForm){
                   elmForm.validator('validate');
                   var elmErr = elmForm.children('.has-error');
                   if(elmErr && elmErr.length > 0){
                       // Form validation failed
                       return false;
                   }
               }
               return true;
           });

           $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
               // Enable finish button only on last step
               if(stepNumber == 3){
                   $('.btn-finish').removeClass('disabled');
               }else{

                   $('.btn-finish').addClass('disabled');
               }
           });

       });
   </script>  
</body>
</html>









<!--Programer: Ricardo, Folege Lourenco-->