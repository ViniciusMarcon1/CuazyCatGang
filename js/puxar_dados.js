async function mostrar_voluntario() {
    document.getElementById("dados_tabela").innerHTML = ``
    document.getElementById("head_tabela").innerHTML = `<tr class="table-borderless">
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Gênero</th>
                      </tr>`
    try {
        const req = await fetch("php/puxar_dados.php", {
            method: "GET"
        });

        const lista = await req.json();

        if (lista.status === "s") {
            let conteudoTabela = "";  // Acumula o HTML em uma variável

            for (let i = 0; i < lista.voluntario_adm.length; i++) {
                conteudoTabela += `<tr>
                                    <th scope="row">${lista.voluntario_adm[i].id}</th>
                                    <td>${lista.voluntario_adm[i].fullname}</td>
                                    <td>${lista.voluntario_adm[i].email}</td>
                                    <td>${lista.voluntario_adm[i].celular}</td>
                                    <td>${lista.voluntario_adm[i].cpf}</td>
                                    <td>${lista.voluntario_adm[i].sexo}</td>
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