<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Registar Doença | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../lib/fontawesome/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href="../css/Registar Doenca.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard_theme_circles.css">
        <link rel="stylesheet" href="../lib/summernote/summernote-bs4.css">

        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
        <script src="../js/Registar Doenca.js"></script>

    </head>
    <body>
        <!--Cabecalho-->
        <?php
            cabecalhoAdmin();
        ?>
        
        <!--corpo da pagina-->
        <div id="corpo">

            <!--Menu Lateral Esquerdo-->
            <?php
                menuVertical();

                if(isset($_GET['idDoenca'])) {
                    include('../model/doencaDAO.php');
                    lerDoencaID($_GET['idDoenca']);
                } else {
            ?>
                 <!--Conteudo-->
                <div class="container-fluid" id="conteudo">

                    <div class="row conteudo-dir pt-4">
                        <h5 class="ml-3">Doenças Raras</h5>
                        <p class="ml-5 dir"><a href="#">Inicio</a> >> Doenças Raras >> <span class="text-sucess"> Adicionar Doença</span></p>
                    </div>

                    <div class="row my-2 justify-content-center">
                        <div class="col-sm-11">
                            <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-doencas.php"><i class="fa fa-reply"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-11 borda-titulo">
                            <label><i class="fa fa-pencil-square-o mr-1"></i>Adicionar Doença</label>
                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <div class=" border col-sm-11 bg-white " id="cadastro">
                            <form  action="../model/doencaDAO.php?acao=inserir" id="myForm" role="form"  method="POST" accept-charset="utf-8">

                                <!-- SmartWizard html -->
                                <div id="smartwizard">
                                    <ul class="mt-2">
                                        <li><a href="#step-1">Passo 1<br /><small>Nome e Tipo</small></a></li>
                                        <li><a href="#step-2">Passo 2<br /><small>Causas e Sintomas</small></a></li>
                                        <li><a href="#step-3">Passo 3<br /><small>Tratamentos e Prevenção</small></a></li>
                                        
                                    </ul>
                        
                                    <div>
                                        <div id="step-1">
                                            <div id="form-step-0" role="form" data-toggle="validator">
                                                <legend>Dados </legend>
                                                <div class="form-row">
                                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                                            <label for="NomeDoenca" >Nome da Doença:</label>
                                                            <input type="text"   class="form-control" id="NomeDoenca" name="nome"  placeholder="Nome da Doenca" required>
                                                        </div>
                            
                                                    </div> 
                                    
                                                    <div class="form-row">
                                                    
                                                        <div class="form-group col-sm-5 mt-2 ml-3">
                                                            <label for="Tipo" >Tipo de Doença:</label>
                                                            <select class="form-control" id="Tipo" name="tipo" required>
                                                                <option value="">...</option>
                                                                <option value="Proliferativa">Proliferativa</option>
                                                                <option value="Degenerativa">Degenerativa</option>
                                                            </select>
                                                            
                                                            <!--<input class="form-control" id="Tipo" name="tipo" list="tipos" required>
                                                            <datalist  id="tipos">
                                                                <option selected>...</option>
                                                                <option >Proliferativas</option>
                                                                <option >Degenerativas</option>
                                                            </datalist>-->
                                                        </div>
                                                    </div> 
                        
                                            </div>
                        
                                        </div>
                                        <div id="step-2">
                                            <div id="form-step-1" role="form" data-toggle="validator">
                                                <legend>Causas e Sintomas</legend>
                                                
                                                <div class="form-row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label for="causas">Causas:</label>
                                                        <textarea id="causas" name="causas" class="form-control editor" required></textarea>                         
                                                    </div>
                                                </div>
                        
                                                <div class="form-row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label for="Sintomas">Sintomas:</label>
                                                        <textarea id="Sintomas" name="sintomas" class="form-control" required></textarea>                         
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="step-3">
                                            <div id="form-step-2" role="form" data-toggle="validator">
                                                <legend>Tratamentos e Prevenção</legend>
                                                <div class="form-row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label for="trat">Tratamentos:</label>
                                                        <textarea id="trat" name="tratamentos" class="form-control" required></textarea>                         
                                                    </div>
                                                </div>
                        
                                                <div class="form-row justify-content-center">
                                                    <div class="form-group col-sm-11">
                                                        <label for="prev">Prevenção:</label>
                                                        <textarea id="prev" name="prevencao" class="form-control" required></textarea>                         
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                            </form>
                        </div>

                    </div>

                    <!--Rodape-->
                    <?php
                        rodapeAdmin();
                    ?>
                </div>
            <?php
                }
            ?>

           

        </div>
    
    

        
    <!-- plugins do smartwizard -->
    <script src="../lib/smartwizard/js/jquery.min.js"></script> 
    <script src="../lib/smartwizard/js/validator.js"></script> 
    <script src="../lib/smartwizard/js/jquery.smartWizard.js"></script>  
    
    
    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finalisar')
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
                                                                alert('Bom! Dados salvos com Sucesso');
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
                    theme: 'circles',
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
                    var elmErr = elmForm.find('.has-error');
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
    
    <!--
    <script src="../lib/summernote/summernote-bs4.js"></script> 
    <script src="../lib/summernote/lang/summernote-pt-PT.js"></script>

    <script>
        $(document).ready(function(){
            $('textarea.editor').summernote({ 
                lang:'pt-PT',
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false             // set focus to editable area after initializing summernote
            });
        });
    </script>-->
    
    
    
    </body>
</html>















