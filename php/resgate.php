<?php

    include "conexao.php";

    $resultado = mysqli_query($conn, "SELECT 
                                        card.id_card,
                                        colaborador.fullname,
                                        dados_gato.comentario,
                                        dados_gato.data_registro
                                    FROM 
                                        card
                                    JOIN 
                                        colaborador ON card.id_colaborador = colaborador.id_colaborador
                                    JOIN 
                                        dados_gato ON card.id_dados_gato = dados_gato.id_dados_gato;");

    if(intval(mysqli_num_rows($resultado)) > 0){

        $response["status"] = "s";
        $response["mensagem"] = "lista preenchida";
        $i = 0;

        while($registro = mysqli_fetch_assoc($resultado)){

            $response["card"][$i]["fullname"] = $registro["fullname"];
            $response["card"][$i]["comentario"] = $registro["comentario"];
            $response["card"][$i]["data_registro"] = $registro["data_registro"];
            $i++;
        }
    }
    else {
        $response["status"] = "n";
        // $response["mensagem"] = "block";
    }

    echo json_encode($response);













?>