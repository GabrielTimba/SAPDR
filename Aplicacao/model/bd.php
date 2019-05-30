<?php

    function getConexao(){
        $conexao = mysqli_connect("127.0.0.1", "root", "", "bdsapdr2");
        //mysqli_set_charset('UTF8') OR die(); 
        if (!$conexao) {
            die("Falha na Conexao: " . mysqli_connect_error());
        }

        return $conexao;
    }

    function fechaConexao($con){
        mysqli_close($con) or die(mysqli_close_error($con));;

    }
?>