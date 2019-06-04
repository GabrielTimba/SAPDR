<?php
    include('bd.php');

    if(isset($_GET['acao']) && ($_GET['acao'] == 'inserir'))
        inserir();

    function inserir() {
        $conexao = getConexao();  //faz conexao com bd (metodo defenido no ficheiro bd.php)  

        //defenindo uma constante que contem uma instrucao sql (opcional)
        define('SQL',"CALL inserirArtigo(?,?,?);"); // '?' indicam o uso de prepared statment 
                                                          //para controlar injencoes sql

        //captura qualquer erro que pode ocorrer no prepared statment 
        if(!($stmt = $conexao->prepare(SQL))) { //'prepare()' prepara a insercao
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        //'bind_param' define variaveis que vao receber os dados 
        //Nota: nunca inserir dados diretamente ao inveis de definir vairiaveis, pode ocorrer um erro
        if(!($stmt->bind_param('sss',$autor,$titulo,$artigo))) { //captura qualquer erro que pode ocorrer
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //Atribuindo valores as variaveis;
        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $artigo = $_POST['artigo'];
       
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        //Nota: apos a instrucao execute() pode-se atribuir novos valores as variaveis e executar novamente. 

        $stmt->close(); //fecha o prepared statment
        fechaConexao($conexao); //fecha a conexao com a bd (metodo defenido no ficheiro bd.php)

        header('Location:../admin/adicionar-artigos.php');//redirecionando  
    }



?>