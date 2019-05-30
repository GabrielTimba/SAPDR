<?php
    define(INSERIR,'inseriDoente()')
    include('bd.php');

    if(isset()){
        inserir();
    }
    
    function inserir() {

        $con=getConexao();
        $nome= $_POST['nome'];
        $apelido= $_POST['apelido'];
        $data= $_POST['data'];
        $sintomas= $_POST['genero'];
        $provincia= $_POST['provincia'];
        $distrito= $_POST['distrito'];
        $rua= $_POST['rua'];
        $email= $_POST['email'];
        $tellefone= $_POST['tellefone'];
        $doenca=$_POST['doenca'];

        // prepared statment 
        $stmt = $con->prepare("")
        if(!stmt) {
            echo"Preparo da Insercao Falhou: (".$con->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param() )) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        //colocando valores nos parametros;
        $tipo1 = $tipo;
        $idDoenca1 = 'NULL';
        $nome1 = $nome;
        $prevencao1 = $prevencao;
        $causa1 = $causas;
        $tratamentos1 = $tratamentos;
        $sintoma1 = $sintomas;
        $idTipo1 = 'NULL';
        
        //executando
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }

        $stmt->close();
        $conexao->close();

        header('Location:../admin/registar-doencas.php');
    }