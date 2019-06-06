//requisita dados para tabela doencas a cada 1 segundos
/*requisitarAjax("GET","../model/doencaDAO.php?acao=lerNomeTipo","tabela-corpo");
setInterval(function(){requisitarAjax("GET","../model/doencaDAO.php?acao=lerNomeTipo","tabela-corpo");},1000); //define o tempo*/

//variavei globais
var cont = 0;

//apaga doenca na bd
function apagarDoenca(linkPost, linkGet) {
    var resp = confirm("Tem certeza que deseja apagar!");
    if(resp) {
        var linhas = document.getElementById("tabela-doencas").getElementsByTagName("tr");
        var numLinhas = linhas.length - 2;
        var cont = 1;
        formData = new FormData(); //objecto que envia dados pelo metodo POST


        for (i = 1; i <= numLinhas; i++) {
            var cb = document.getElementById("cb-" + i);
            if (cb.checked) {
                var id = cb.value;
                cont++;
                formData.append("cb-" + cont, id);
            }
        }
        enviarAjax(formData, "POST", linkPost+cont); //metodo defenido no ficheiro ajax.js
        requisitarAjax("GET", linkGet, "tabela-corpo"); //metodo defenido no ficheiro ajax.js
        requisitarAjax("GET", linkGet, "tabela-corpo"); //metodo defenido no ficheiro ajax.js
    }
    
}

//seleciona checkboxes
function selecionar() {
    //alert("fui chamado!");
    if(cont == 1){
        selecionarTodas();
        cont--;
    } else if(cont == 0) {
        desmarcarTodas();
        cont++;
    }
}

//seleciona todas os checkboxes
function selecionarTodas() {
    var comp =  document.getElementsByTagName("input");

    for(i=0; i<comp.length; i++) {
        if (comp[i].type == "checkbox"){
            comp[i].checked = true;
        }
    }
}

//desmarca todos os checkboxes
function desmarcarTodas() {
    var comp = document.getElementsByTagName("input");
    //alert("fui chamado!");
    for (i = 0; i < comp.length; i++) {
        if (comp[i].type == "checkbox") {
            comp[i].checked = false;
        }
    }
}