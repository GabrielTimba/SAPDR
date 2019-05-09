   //Total máximo de campos que você permitirá criar em seu site:
   var totalCampos = 10;

   //Não altere os valores abaixo, pois são variáveis controle;
   var iLoop = 1;
   var iCount = 0;
   var linhaAtual;

   function AddCampos() {
         //Total máximo de campos que você permitirá criar em seu site:

           var hidden1 = document.getElementById("hidden1");
           var hidden2 = document.getElementById("hidden2");

           //Executar apenas se houver possibilidade de inserção de novos campos:
           if (iCount < totalCampos) {

           //Limpar hidden1, para atualizar a lista dos campos que ainda estão vazios:
           hidden2.value = "";

           //Atualizando a lista dos campos que estão ocultos.
           //Essa lista ficará armazenada temporiariamente em hidden2;
           for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
                   if (document.getElementById("linha"+iLoop).style.display == "none") {
                           if (hidden2.value == "") {
                                   hidden2.value = "linha"+iLoop;
                           }else{
                                   hidden2.value += ",linha"+iLoop;
                           }
                   }
           }
             //Total máximo de campos que você permitirá criar em seu site:
           //Quebrando a lista que foi armazenada em hidden2 em array:

           linhasOcultas = hidden2.value.split(",");


                   if (linhasOcultas.length > 0) {
                           //Tornar visível o primeiro elemento de linhasOcultas:
                           document.getElementById(linhasOcultas[0]).style.display = "block"; iCount++;
                           
                           //Acrescentando o índice zero a hidden1:
                           if (hidden1.value == "") {
                                   hidden1.value = linhasOcultas[0];
                           }else{
                                   hidden1.value += ","+linhasOcultas[0];
                           }
                           
                           /*Retirar a opção acima da lista de itens ocultos: <-------- OPCIONAL!!!
                           if (hidden2.value.indexOf(","+linhasOcultas[0]) != -1) {
                                   hidden2.value = hidden2.value.replace(linhasOcultas[0]+",","");
                           }else if (hidden2.indexOf(linhasOcultas[0]+",") == 0) {
                                   hidden2.value = hidden2.value.replace(linhasOcultas[0]+",","");
                           }else{
                                   hidden2.value = "";
                           }
                           */
                   }
           }
           }

   function RemoverCampos(id) {
   //Criando ponteiro para hidden1:        
   var hidden1 = document.getElementById("hidden1");

   //Pegar o valor do campo que será excluído:
   var campoValor = document.getElementById("arq"+id).value;
           //Se o campo não tiver nenhum valor, atribuir a string: vazio:
           if (campoValor == "") {
                   campoValor = "vazio";
           }

           if(confirm("O campo que contem o Sintoma:\n» "+campoValor+"\nserá excluído!\n\nDeseja prosseguir?")){
                   document.getElementById("linha"+id).style.display = "none"; iCount--;
                   
                   //Removendo o valor de hidden1:
                   if (hidden1.value.indexOf(",linha"+id) != -1) {
                           hidden1.value = hidden1.value.replace(",linha"+id,"");
                   }else if (hidden1.value.indexOf("linha"+id+",") == 0) {
                           hidden1.value = hidden1.value.replace("linha"+id+",","");
                   }else{
                           hidden1.value = "";
                   }
           }
   }
