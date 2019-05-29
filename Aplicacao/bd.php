<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "", "bdsapdr2");
    if (!$conexao) {
        die("Falha na Conexao: " . mysqli_connect_error());
    }
?>