<?php
    include('bd.php');
    function listaMsg(){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_Mensagens();");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idMensagem'].'">
                        </td>
                        <td>'.$linha['assunto'].'</td>
                        <td>'.$linha['email'].'</td>
                        <td> 
                            <a href="" data-toggle="modal" data-target="#siteModal">Ler mais</a>
                        </td>
                    </tr>
                ';
                $cb++;
            }
        }
        
        $stmt->close();
        fechaConexao($conexao);
    } 