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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href="../css/Registar Doenca.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard_theme_circles.css">
        
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
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">

                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Profissional da Saúde</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a> >> Doenças Raras >> <span class="text-sucess"> Adicionar Doença</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-doencas.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class=""></i>Cadastro de Doenca</label>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class=" border col-sm-11 bg-white " id="cadastro">
                        <form  action="#" id="myForm" role="form"  method="post" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="mt-2">
                                    <li><a href="#step-1">Passo 1<br /><small>Nome e Tipo</small></a></li>
                                    <li><a href="#step-2">Passo 2<br /><small>Sintomas e Caracteristicas</small></a></li>
                                    <li><a href="#step-3">Passo 3<br /><small>Descricao</small></a></li>
                                </ul>
                    
                                <div>
                                    <div id="step-1">
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <legend>Dados </legend>
                                            <div class="form-row">
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="NomeDoenca" >Nome da Doenca:</label>
                                                        <input type="text"   class="form-control"  placeholder="Nome da Doenca" required>
                                                    </div>
                        
                                                </div> 
                                
                                                <div class="form-row">
                                                
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="Tipo" >Tipo de Doenca:</label>
                                                        <select class="form-control" id="Genero " required>
                                                            <option selected>...</option>
                                                            <option >Proliferativas</option>
                                                            <option >Degenerativas</option>
                                                        </select>
                                                    </div>
                                                </div> 
                    
                                        </div>
                    
                                    </div>
                                    <div id="step-2">
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <legend>Sintomas e Descricao</legend>
                                            <div class="form-row">
                                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                                        <label for="Sintomas">Sintomas:</label><br>
                                                        <input type="text" class="form-control" placeholder="Espetactiva de Vida" required>
                                                        <input  type="button" class="form-control btn-outline-primary mt-2" value="Adicionar Sintoma">
                                                    </div>
                    
                                                </div>
                    
                                                <div class="form-row">
                                                    <div class="form-group col-sm-8 mt-2 ml-3">
                                                        <label for="Descricao">Descricao:</label><br>
                                                        <textarea name="Descricao" id="Descricao" cols="70" rows="6" class="form-control"></textarea>
                                                    </div>
                    
                                                </div>
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <div id="form-step-2" role="form" data-toggle="validator">
                                            <legend>Caracteristicas</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-8 mt-2 ml-3">
                                                    <label for="Caracteristicas" >Caracteristicas:</label>
                                                    <textarea class="form-control" id="Caracteristicas" cols="70" rows="7" required></textarea>
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

        </div>


    <!-- plugins do smartwizard -->
    <script src="../lib/smartwizard/js/jquery.min.js"></script>
    <script src="../lib/smartwizard/js/validator.min.js"></script>
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















