async function mostrar_lartemp() {
    document.getElementById("dados_tabela").innerHTML = ``
    document.getElementById("head_tabela").innerHTML = `<tr class="table-borderless">
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cell</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Apto adoção</th>
                        <th scope="col">Tem pets?</th>
                      </tr>`
    try {
        const req = await fetch("php/puxar_lartemp.php", {
            method: "GET"
        });

        const lista = await req.json();

        if (lista.status === "s") {
            let conteudoTabela = "";  // Acumula o HTML em uma variável

            for (let i = 0; i < lista.voluntario.length; i++) {
                conteudoTabela += `<tr>
                                    <th scope="row">${lista.voluntario[i].id_voluntario}</th>
                                    <td>${lista.voluntario[i].fullname}</td>
                                    <td>${lista.voluntario[i].cell}</td>
                                    <td>${lista.voluntario[i].endereco}</td>
                                    <td>${lista.voluntario[i].cpf}</td>
                                    <td>${lista.voluntario[i].genero}</td>
                                    <td>${lista.voluntario[i].apto_adocao}</td>
                                    <td>${lista.voluntario[i].outros_pets}</td>
                                </tr>`;
            }

            document.getElementById("dados_tabela").innerHTML = conteudoTabela;  // Insere o conteúdo acumulado uma vez
        } else {
            alert(lista.mensagem);
        }
    } catch (error) {
        console.error("Erro ao buscar os dados:", error);
        alert("Ocorreu um erro ao buscar os dados.");
    }
}