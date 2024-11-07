<?php
    include "conexao.php";

    $resultado = mysqli_query($conn, "SELECT 
                                       *
                                    FROM 
                                        voluntario_adm;");

    if(intval(mysqli_num_rows($resultado)) > 0){

        $response["status"] = "s";
        $response["mensagem"] = "lista preenchida";
        $i = 0;

        while($registro = mysqli_fetch_assoc($resultado)){

            $response["voluntario_adm"][$i]["id"] = $registro["id"];
            $response["voluntario_adm"][$i]["fullname"] = $registro["fullname"];
            $response["voluntario_adm"][$i]["email"] = $registro["email"];
            $response["voluntario_adm"][$i]["celular"] = $registro["celular"];
            $response["voluntario_adm"][$i]["cpf"] = $registro["cpf"];
            $response["voluntario_adm"][$i]["sexo"] = $registro["sexo"];

            $i++;
        }
    }
    else {
        $response["status"] = "n";
        $response["mensagem"] = "sem dados para mostrar";
    }

    echo json_encode($response);
?>