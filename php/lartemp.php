<?php

    include "conexao.php";

    $fullname = $_POST['fullname'];
    $cell = $_POST['cell'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $apto_adocao = $_POST['apto_adocao'];
    $outros_pets = $_POST['outros_pets'];

    $query1 = "INSERT INTO voluntario (fullname, cell, endereco, cpf, genero) VALUES ('$fullname', '$cell', '$endereco', '$cpf', '$genero')";
    $query2 = "INSERT INTO info_volunt (apto_adocao, outros_pets) VALUES ('$apto_adocao', '$outros_pets')";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);


?>