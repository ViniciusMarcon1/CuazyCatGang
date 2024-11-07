<?php
    include "conexao.php";

    $resultado = mysqli_query($conn, "SELECT 
                                       *
                                    FROM 
                                        transportador;");

    if(intval(mysqli_num_rows($resultado)) > 0){

        $response["status"] = "s";
        $response["mensagem"] = "lista preenchida";
        $i = 0;

        while($registro = mysqli_fetch_assoc($resultado)){

            $response["transportador"][$i]["id_transportador"] = $registro["id_transportador"];
            $response["transportador"][$i]["fullname"] = $registro["fullname"];
            $response["transportador"][$i]["cell"] = $registro["cell"];
            $response["transportador"][$i]["endereco"] = $registro["endereco"];
            $response["transportador"][$i]["disp"] = $registro["disp"];

            $i++;
        }
    }
    else {
        $response["status"] = "n";
        $response["mensagem"] = "sem dados para mostrar";
    }

    echo json_encode($response);
?>