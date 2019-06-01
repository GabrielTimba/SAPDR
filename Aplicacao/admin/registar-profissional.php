<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Profissional da Saúde | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
    
        <link rel="stylesheet" href="../css/painel-admin.css">
        <link rel="stylesheet" href="../css/Registar Profissional.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard.css">
        <link rel="stylesheet" href="../lib/smartwizard/css/smart_wizard_theme_circles.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
        <script src="../js/Registar Profissional.js"></script>
        
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
                    <p class="ml-5 dir"><a href="#">Inicio</a>  >> Usuários >> <span class="text-sucess"> Profissional da Saúde</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-profissionais.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fas  fa-user-plus mr-2"></i>Adicionar Profissional</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11  cor-borda2 bg-white" id="cadastro">
                        <form  action="#" id="myForm" role="form"  method="post" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <ul class="mt-2">
                                    <li><a href="#step-1">Passo 1<br /><small>Dados Pessoais</small></a></li>
                                    <li><a href="#step-2">Passo 2<br /><small>Contacto e Endereco</small></a></li>
                                    <li><a href="#step-3">Passo 3<br /><small>Informacao Profissional</small></a></li>
                                    <li><a href="#step-4">Passo 4<br /><small>Dados de Acesso</small></a></li>
                                </ul>
                    
                                <div>
                                    <div id="step-1">
                                        <div id="form-step-0" role="form" data-toggle="validator">
                                            <legend>Dados Pessoais</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="nome" >Nome:</label>
                                                    <input type="text" name="nome" id="nome"  class="form-control"  placeholder="Nome" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="apelido" >Apelido:</label>
                                                    <input type="text" name="apelido" id="apelido" class="form-control" placeholder="Apelido" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="dataN" >Data de Nascimento:</label>
                                                    <input type="date"  name="dataN" id="dataN" class="form-control" placeholder="Nome" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="genero" >Genero:</label>
                                                    <select class="form-control valid" name="genero" id="genero "  required>
                                                        <option disable value="0" >...</option>
                                                        <option value="1" >Maculino</option>
                                                        <option value="2">Femenino</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> 
                                            
                                        </div>
                                        
                                    </div>
                                    <div id="step-2">
                                        <div id="form-step-1" role="form" data-toggle="validator">
                                            <legend>Endereco e Contacto</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="provincia" >Provincia:</label>
                                                    <select class="form-control valid" name="provincia" id="provincia" required>
                                                        <option value="0">...</option>
                                                        <option value="1">Maputo</option>
                                                        <option value="1">Gaza</option>
                                                        <option value="1">Inhambane</option>
                                                        <option value="1">Sofala</option>
                                                        <option value="1">Manica</option>
                                                        <option value="1">Zambezia</option>
                                                        <option value="1">Tete</option>
                                                        <option value="1">Nampula</option>
                                                        <option value="1">Niassa</option>
                                                        <option value="1">Cabo Delgado</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="distrito" >Distrito:</label>
                                                    <select class="form-control" name="distrito" id="distrito" required>
                                                        <option value="0">...</option>
                                                        <option value="1" >...</option>
                                                        <option value="1">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="bairro" >Bairro:</label>
                                                    <select class="form-control " name="bairro" id="bairro" required>
                                                        <option selected value="0">...</option>
                                                        <option value="1">Bairro</option>
                                                        <option value="2">Bairro</option>
                                                    </select>
                                                </div>
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="rua" >Rua:</label>
                                                    <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" required>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="email" >Email:</label>
                                                    <input type="email" name="email" id="email" class="form-control"  placeholder="Email" required>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="tellefone" >Tellefone:</label>
                                                    <input type="number" name="tellefone" id="tellefone" class="form-control" placeholder="Tellefone" required>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div id="step-3">
                                        <div id="form-step-2" role="form" data-toggle="validator">
                                            <legend>Informaco Profissional</legend>
                                            <div class="form-row">
                            
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="unidade_h" >Unidade Hospitalar:</label>
                                                    <select class="form-control " name="unidade_h" id="unidade_h" required>
                                                        <option value="0" >...</option>
                                                        <option value="1">Hospital Centra</option>
                                                        <option value="1">Hospital Jose Macamo</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="">
                                        
                                        <div id="form-step-3" role="form" data-toggle="validator">
                                            <legend>Dados de Acesso</legend>
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="nome_u" >Nome de Usuario:</label>
                                                    <input type="text"  name="nome_u" id="nome_u" class="form-control valid"  placeholder="Nome do Usuario" required>
                                                </div>
                                            </div>
                            
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="senha" >Senha:</label>
                                                    <input type="password" name="senha" id="senha" class="form-control"  placeholder="Senha" required>
                                                </div>
                                                <div class="form-group col-sm-5 mt-2 ml-3">
                                                    <label for="Confirme a Senha" >Confirme a Senha:</label>
                                                    <input type="password" name="c_senha" id="c_senha" class="form-control" placeholder="Confirme a Senha" required>
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
   <!-- <script src="../lib/smartwizard/js/validator.min.js"></script>-->
    <script src="../lib/smartwizard/js/jquery.smartWizard.js"></script>
    <script src="../lib/smartwizard/js/validator.js"></script>

    <!--script do smartwizard-->
    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Submeter')
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
                    //alert('A caminho');
                    var elmErr = elmForm.find('.has-error');
                   
                    if(elmErr && elmErr.length > 0){
                        
                        // Form validation failed
                        return false;
                    }
                    
                    if (stepNumber == 1) {
                        var ba= $("#bairro");
                        var po= $("#provincia");
                        var di= $("#distrito");
                            
                        if (po.val() == 0) {
                            po.focus();
                            return false;
                        }
                        if (di.val() == 0) {
                            di.focus();
                            return false;
                        }
                        if (ba.val() == 0) {
                            ba.focus();
                            return false;
                        }
                    }
                    if (stepNumber == 2) {
                        var un= $("#unidade_h");
                        
                        if (un.val() == 0) {
                            un.focus();
                            return false;
                        }
                    }

                    if (stepNumber == 3) {
                        valida();
                    }
                     
                    if($('.valid').val() == 0){
                       // $('.valid').css('border', '1px solid');
                        $('.valid').focus();
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
/*
            $("#submeter").on('click',function(){
                var validator = $("#myForm").bind("invalid-form.validate",function(){
                    $("#msg").html("Este formulari tem "+ validator.numberOfInvalids()+" erro(s)");
                
                }).validate(
                    {
                    errorElement:"el",  
                    errorPlacement: function(error,element){
                        element.parent("td").next("td").html(error);
                    },
                    success: function (label){
                        
                        label.text("Ok!").removeClass("error").addClass("ok");
                    },
                    submitHandler: function(form){
                        form.submit();
                    },
                    rules:{
                        nome_u:{
                        required:true,
                        maxlength:15          
                        },
                        senha:{
                        required:true,
                        password:true       
                        },
                        c_senha:{
                        required:true,
                        equal: senha
                        }
                        
                    },
                    messages:{
                        numero:{
                        required:"Esse campo não pode ser vazio",
                        maxlength:"apenas 15 caracteres"
                        },
                        senha:{
                        required:"Esse campo não pode ser vazio",
                        password: "digite devmedia"
                        },
                        c_senha:{
                        required:"Esse campo não pode ser vazio",
                        equal: "digite a mesma senha"
                        }
                        
                    }
                        
                    
                }
                
            });
            
*/
        });
    </script>   
     
</body>
</html>
















