function pesquisarDoencas() {
    formData = new FormData();
    var p = document.getElementById("pesquisar-doenca").value;    
    
    formData.append("pesquisa",p);
    enviarReceberAjax(formData, "POST", "model/doencaDAO.php?acao=lerDoencaNome","row-pesquisa");
}