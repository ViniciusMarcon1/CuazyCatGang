<?php
    include "resgate_conn.php";

    $fullname = $_POST['fullname'];
    $cell_colaborador = $_POST['cell_colaborador'];
    $localizacao = $_POST['localizacao'];
    $comentario = $_POST['comentario'];


    $query1 = "INSERT INTO colaborador (fullname, cell_colaborador, comentario) VALUES ('$fullname', '$cell_colaborador', '$comentario')";
    $query2 = "INSERT INTO dados_gato (localizacao, comentario) VALUES ('$localizacao', '$comentario')";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);











?>