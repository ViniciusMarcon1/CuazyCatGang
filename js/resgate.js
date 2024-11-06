
function enviar(){

    var form = document.getElementById('form-voluntario-adm')
    var dados = new FormData(form)

    fetch("php/send_resgate.php", {
        method: "POST",
        body: dados,
    })
}


window.onload = async function(){
    var req = await fetch("php/resgate.php", {
        method: "GET"
    })

    var lista = await req.json()

    if(lista.status == "s"){
        for(var i = 0; i< lista.card.length; i++){
            var comentario = `
            <div class="card">
                <p><strong>${lista.card[i].fullname}</strong></p>
                <p>${lista.card[i].comentario}</p>
                <h5>${lista.card[i].data_registro}</h5>
            </div>`
        document.getElementById("container-pedidos").innerHTML += comentario;
        } 
    } else {
        alert(lista.mensagem)
    }
}