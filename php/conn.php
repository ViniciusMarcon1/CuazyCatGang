<?php

    include "conexao.php";

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];

    $ambiente_seguro = $_POST['ambiente_seguro'];
    $more_pets = $_POST['more_pets'];

    $query1 = "INSERT INTO voluntario_adm(fullname, email, celular, cpf, sexo) VALUES ('$fullname', '$email', '$celular', '$cpf', '$sexo')";
    $query2 = "INSERT INTO casa_voluntario(ambiente_seguro, more_pets) VALUES ('$ambiente_seguro', '$more_pets')";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);


?>