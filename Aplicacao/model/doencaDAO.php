<?php
    
    inserir();
    
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
?>