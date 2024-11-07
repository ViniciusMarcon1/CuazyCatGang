<?php
    include "conexao.php";

    $resultado = mysqli_query($conn, "SELECT * FROM projeto_cuazy_cat.voluntario JOIN info_volunt on (voluntario.id_voluntario = info_volunt.id_info_volunt);");

    if(intval(mysqli_num_rows($resultado)) > 0){

        $response["status"] = "s";
        $response["mensagem"] = "lista preenchida";
        $i = 0;

        while($registro = mysqli_fetch_assoc($resultado)){

            $response["voluntario"][$i]["id_voluntario"] = $registro["id_voluntario"];
            $response["voluntario"][$i]["fullname"] = $registro["fullname"];
            $response["voluntario"][$i]["cell"] = $registro["cell"];
            $response["voluntario"][$i]["cpf"] = $registro["cpf"];
            $response["voluntario"][$i]["genero"] = $registro["genero"];
            $response["voluntario"][$i]["apto_adocao"] = $registro["apto_adocao"];
            $response["voluntario"][$i]["outros_pets"] = $registro["outros_pets"];

            $i++;
        }
    }
    else {
        $response["status"] = "n";
        $response["mensagem"] = "sem dados para mostrar";
    }

    echo json_encode($response);
?>