function enviar(){

    var form = document.getElementById('form-voluntario-adm')
    var dados = new FormData(form)

    fetch("php/carona.php", {
        method: "POST",
        body: dados,
    })
}