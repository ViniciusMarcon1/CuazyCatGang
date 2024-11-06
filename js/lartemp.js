function enviar(){

    var form = document.getElementById('form-voluntario-adm')
    var dados = new FormData(form)

    fetch("php/lartemp.php", {
        method: "POST",
        body: dados,
    })
}