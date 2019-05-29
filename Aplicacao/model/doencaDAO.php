<?php
    
    inserir2();
    
    function inserir() {
        include('../bd.php');

        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $causas= $_POST['causas'];
        $sintomas= $_POST['sintomas'];
        $tratamentos= $_POST['tratamentos'];
        $prevencao= $_POST['prevencao'];

        $insere = "
            IF (SELECT idTipo FROM tipod t WHERE t.nome='$tipo') IS NOT NULL THEN
                INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, sintoma, idTipo) VALUES ('NULL','$nome','$prevencao','$causas','$tratamentos','$sintomas',(SELECT idTipo FROM tipod t WHERE t.nome='$tipo'));
            ELSE
                INSERT INTO tipod (idTipo,nome) VALUES('NULL','$tipo');
                INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, sintoma, idTipo) VALUES ('NULL','$nome','$prevencao','$causas','$tratamentos','$sintomas',(SELECT idTipo FROM tipod t WHERE t.nome='$tipo')); 
            END IF;
            " ;
        
        if (mysqli_query($conexao, $insere)) {
            header('Location:../admin/registar-doencas.php');
        } else {
            echo "Erro na gravacao de dados: $insere <br>" . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    }

    function inserir2() {
        include('../bd.php');

        $nome= $_POST['nome'];
        $tipo= $_POST['tipo'];
        $causas= $_POST['causas'];
        $sintomas= $_POST['sintomas'];
        $tratamentos= $_POST['tratamentos'];
        $prevencao= $_POST['prevencao'];

        // prepared statment 
        if(!($stmt = $conexao->prepare("
            IF (SELECT idTipo FROM tipod t WHERE t.nome=?) IS NOT NULL THEN
                INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, sintoma, idTipo) VALUES (?,?,?,?,?,?,(SELECT idTipo FROM tipod t WHERE t.nome=?));
            ELSE
                INSERT INTO tipod (idTipo,nome) VALUES(?,?);
                INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, sintoma, idTipo) VALUES (?,?,?,?,?,?,(SELECT idTipo FROM tipod t WHERE t.nome=?)); 
            END IF;")
        )) {
            echo"Preparo da Insercao Falhou: (".$conexao->errno.") ".$conexao->error;
        } 

        if(!($stmt->bind_param(
            'sssssssssssssssss',$tipo1,$idDoenca1,$nome1,$prevencao1,$causa1,$tratamentos1,$sintoma1, $tipo1,$idTipo1,$tipo1,$idDoenca1,$nome1,$prevencao1,$causa1,$tratamentos1,$sintoma1,$nome1)
        )) {
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
        

       /* if (mysqli_query($conexao, $insere)) {
            header('Location:../admin/registar-doencas.php');
        } else {
            echo "Erro na gravacao de dados: $insere <br>" . mysqli_error($conexao);
        }*/

        $stmt->close();
        $conexao->close();

        header('Location:../admin/registar-doencas.php');
    }
?>