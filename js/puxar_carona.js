async function mostrar_carona() {
    document.getElementById("dados_tabela").innerHTML = ``
    document.getElementById("head_tabela").innerHTML = `<tr class="table-borderless">
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cell</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Disponibilidade</th>
                      </tr>`
    try {
        const req = await fetch("php/puxar_carona.php", {
            method: "GET"
        });

        const lista = await req.json();

        if (lista.status === "s") {
            let conteudoTabela = "";  // Acumula o HTML em uma variável

            for (let i = 0; i < lista.transportador.length; i++) {
                conteudoTabela += `<tr>
                                    <th scope="row">${lista.transportador[i].id_transportador}</th>
                                    <td>${lista.transportador[i].fullname}</td>
                                    <td>${lista.transportador[i].cell}</td>
                                    <td>${lista.transportador[i].endereco}</td>
                                    <td>${lista.transportador[i].disp}</td>
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