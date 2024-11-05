function gravar(){
    var form = document.getElementById("form-voluntario-adm")
    var data = new FormData(form)

    fetch("php/gravar.php", {
        method: "POST",
        body: data 
    })
}
