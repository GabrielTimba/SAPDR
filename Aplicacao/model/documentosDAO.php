<?php
     include('bd.php');

    function listaDoc(){
        $conexao = getConexao();
        define('SQL',"CALL lista_de_documentos();");
        
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
                            <input type="checkbox" id="cb-'.$cb.'" value="'.$linha['idPost'].'">
                        </td>
                        <td>'.$linha['titulo'].'</td>
                        <td>'.$linha['data'].'</td>
                        <td> 
                            <a class="btn cor-verde"  href="../model/profissionalDAO.php?id='.$linha['idPost'].'">
                                Ler Mais
                            </a>
                        </td>
                        
                    </tr>
                ';
                $cb++;
            }
        }

        
        
        $stmt->close();
        fechaConexao($conexao);
    }

?>