$(document).ready(function(){

    //unidades hospitalares
    $("#unidHosp").hide();
    $('#optionsRadios1').click(function(){
         $("#unidHosp").fadeToggle()();
    });

    $('#optionsRadios2').click(function(){
         $("#unidHosp").fadeToggle()();
    });
    

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
                                                        alert('Cadastro Feito com Sucesso');
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
                              toolbarExtraButtons: [btnFinish, btnCancel] //mudar background
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
             if($('.valid').val() == 0 || $('.valid').val() == null ){
                // $('.valid').css('border', '1px solid');
                 $('.valid').focus();
                 return false;
             }

             if (stepNumber == 1 ) {
                 var po= $("#provincia");
                 var te= $("#tellefone");
                // te.value = parseInt(te.value) ;   
                tellefone=document.getElementById('tellefone').value;
                 if (po.val() == 0 || po.val() == null) {
                     po.focus();
                     return false;
                 }

                 if(tellefone<820000000 || tellefone>879999999){
                     te.focus();
                     return false;
                 }
                
             }

             if (stepNumber == 2) {
                 var un= $("#doenca");
                 
                 if (un.val() == 0 || un.val() == null) {
                     un.focus();
                     return false;
                 }
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
//Carregar distritos consoate a provincia
function carregarDistrito () {
     var maputo = ['KaMpfumo ', 'Nlhamankulu', 'KaMaxaquene', 'KaMavota','KaMubukwana','KaTembe','KaNyaka'];
     var gaza= ['Bilene', 'Chibuto', 'Chicualacuala', 'Chigubo','Chókwè','Chonguene','Guijá','Massingir',' Xai-Xai'];
     var inhab = ['Funhalouro', 'Govuro', 'Inharrime', 'Inhassoro','Mabote','Maxixe','Morrumbene','Panda','Vilanculos','Zavala'];
     var manica= ['Bárue', 'Chimoio', 'Gondola', 'Guro','Macate','Manica','Mossurize','Sussundenga','Vanduzi'];
     var sofala=['Beira','Búzi','Caia','Chemba','Cheringoma','Chibabava','Dondo','Gorongosa','Maringué','Muanza','Marromeu'];
     var zambezia=['Alto Molócuè','Chinde','Derre','Gilé','Gurué','Inhassunge','Luabo','Lugela','Maganja da Costa','Milange','Mocubela',
                  'Mulevala','Namacurra','Nicoadala',' Pebane'];
     var tete=['Angónia','Cahora-Bassa','Changara','Chifunde','Dôa','Macanga','Macanga','Moatize',' Mutarara','Zumbo'];
     var nampula=['Angoche','Ilha de Moçambique','Liúpo','Malema','Meconta','Mecubúri','Memba','Mogovolas','Monapo','Muecate',
                 'Murrupula','Nacala-a-Velha','Nacala Porto',' Ribaué'];
     var niassa=['Chimbonila','Cuamba','Lago','Lago','Mandimba','Marrupa','Mavago','Mecanhelas','Muembe','Nipepe','Sanga'];
     var cDelgado=['Ancuabe','Balama','Macomia','Meluco','Montepuez','Mueda','Palma','Quissanga','Pemba']
     var prov = document.getElementById('provincia');
    
     $("#distrito").empty();
     if(prov.value==1){
         auxiliar(maputo);
     }
     if(prov.value==2){
        auxiliar(gaza);
     }
     if(prov.value==3){
        auxiliar(inhab);
     }
     if(prov.value==4){
         auxiliar(sofala)
     }
     if(prov.value==5){
        auxiliar(manica);
     }
     if(prov.value==6){
         auxiliar(zambezia)
     }
     if(prov.value==7){
         auxiliar(tete)
     }
     if(prov.value==8){
         auxiliar(nampula);
     }
     if(prov.value==9){
         auxiliar(niassa)
     }
     if(prov.value==10){
         auxiliar(cDelgado)
     }  
 }

 function auxiliar(provincia){
     var listaSelect = document.getElementById('distrito');
     for (i = 0; i < provincia.length; i++){
         var optns = document.createElement('option');
         optns.value =provincia[i];
         optns.text = provincia[i];
         listaSelect.add(optns, listaSelect.options[i]);
     }
 }