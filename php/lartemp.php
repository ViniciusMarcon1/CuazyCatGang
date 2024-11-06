<?php

    $conn = mysqli_connect("localhost:3306","root","446527","lar_temp");  

    $fullname = $_POST['fullname'];
    $cell_voluntario = $_POST['cell_voluntario'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    // $genero = $_POST['genero'];
    // $apto_adocao = $_POST['apto_adocao'];
    // $outros_pets = $_POST['outros_pets'];

    $query1 = "INSERT INTO voluntario (fullname, cell_voluntario, endereco, cpf) VALUES ('$fullname', '$cell_voluntario', '$endereco', '$cpf')";
    // $query2 = "INSERT INTO info_volunt (apto_adocao, outros_pets) VALUES ('$apto_adocao', '$outros_pets')";

    mysqli_query($conn, $query1);
    // mysqli_query($conn, $query2);





?>