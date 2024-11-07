<?php

    include "conexao.php";

    $fullname = $_POST['fullname'];
    $cell = $_POST['cell'];
    $endereco = $_POST['endereco'];
    $tipo_veiculo = $_POST['tipo_veiculo'];
    $pode_transportar = $_POST['pode_trasportar'];
    $disp = $_POST['disp'];

    $query1 = "INSERT INTO transportador (fullname, cell, endereco, disp) VALUES ('$fullname', '$cell', '$endereco', '$disp')";
    $query2 = "INSERT INTO veiculo (pode_transportar, tipo_veiculo) VALUES ('$pode_transportar', '$tipo_veiculo')";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);


?>