<?php
    include('bd.php');

    if(isset($_GET['accao'])){
        busca($_GET['n']);
    }

    function busca($n){
        $conexao = getConexao();
        $sql="select estatistica(?)";
        
        if(!($stmt = $conexao->prepare($sql))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 
        if(!($stmt->bind_param('i',$n1))) {
            echo " Parâmetros de ligação falhados: (".$stmt->errno.")".$stmt->error;
        }

        $n1=$n;
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();
        $linha = $resposta->fetch_row();

        echo $linha['0'];

        fechaConexao($conexao);
    }
?>