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
                if(isset($_GET['idInstituicao'])) {
                    include('../model/instituicaoDAO.php');
                    lerInstituicaoID($_GET['idInstituicao']);
                } else {
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">

                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Instituicoes e Associacoese</h5>
                    <p class="ml-5 dir"><a href="#">Inicio</a>  >> Usuários >> <span class="text-sucess"> Instituicoes e Associacoes</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-instituicoes.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fas  fa-user-plus mr-2"></i>Adicionar Instituicao e Associacao</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11  cor-borda2 bg-white" id="cadastro">
                        <form  action="../model/instituicaoDAO.php" id="myForm" role="form"  method="post" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                                <legend>Dados</legend>
                                <div class="form-row" >
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="nome" >Nome:</label>
                                        <input type="text" name="nome" id="nome"  class="form-control"  placeholder="Nome" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="tipo" >Tipo:</label>
                                        <select class="form-control valid" name="tipo" id="tipo"  required>
                                            <option disable value="0" >...</option>
                                            <option value="Associacao" >Associacao</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="Farmacia">Farmacia</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="provincia" >Provincia:</label>
                                        <select class="form-control valid" name="provincia" id="provincia" required>
                                            <option value="0">...</option>
                                            <option value="Maputo">Maputo</option>
                                            <option value="Gaza">Gaza</option>
                                            <option value="Inhambane">Inhambane</option>
                                            <option value="Sofala">Sofala</option>
                                            <option value="Manica">Manica</option>
                                            <option value="Zambezia">Zambezia</option>
                                            <option value="Tete">Tete</option>
                                            <option value="Nampula">Nampula</option>
                                            <option value="Niassa">Niassa</option>
                                            <option value="Cabo Delgado">Cabo Delgado</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="distrito" >Distrito:</label>
                                        <input list="distritos" name="distrito" id ="distrito" class="form-control" id="Distrito" required>
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

                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="bairro" >Bairro:</label>
                                        <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required>
                                    </div>

                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <label for="rua" >Rua:</label>
                                        <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" required>
                                    </div>
                                    
                                </div> 
                                <div class="form-row">
                                    <div class="form-group col-sm-5 mt-2 ml-3">
                                        <p class="row justify-content-center">
                                            <button class="btn btn-outline-danger botoes mr-3" type="reset" id="apagar" mame="apagar">Apagar</button>
                                            <button class="btn btn-outline-primary botoes" type="submit" onclick="validar()" id="submeter" name="submeter">Submeter</button>
                                        </p>
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
    <!--script do smartwizard-->
    <script type="text/javascript">

        // Toolbar extra buttons
            
        $("#submeter").on('click', function(){
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
        
        });

        function validar() {
            alert("folege");  
        }

        alert("folege");
        $('#apagar').click( function(){
            alert("folege");
            $('#smartwizard').smartWizard("reset");
            $('#myForm').find("input, textarea").val("");
        }));



        // Smart Wizard
           

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
                    nome:{
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
    </script>   
     
</body>
</html>
















