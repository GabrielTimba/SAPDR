<?php
    include('bd.php');


    function listaAss(){
        $conexao = getConexao();
        define('SQL',"CALL lista_Associacao();");
        
        if(!($stmt = $conexao->prepare(SQL))) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        }
        
        if(!($stmt->execute())){
            echo " Execucao falhou: (".$stmt->errno.")".$stmt->error;
        }
        $resposta = $stmt->get_result();

        //criar tabela 
        if($resposta->num_rows>0) {
            $cb = 1;
            while($linha = $resposta->fetch_assoc()) {
                echo'
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idAssociacao'].'">
                        </td>
                        <td>'.$linha['nome'].'</td>
                        <td>'.$linha['descricao'].'</td>
                        
                    </tr>
                ';
                $cb++;
            }
        }

        
        