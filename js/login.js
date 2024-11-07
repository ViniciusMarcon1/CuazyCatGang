function logar(){
    const login_email = document.getElementById("login_email").value
    const login_password = document.getElementById("login_password").value

    if ((login_email === "admin@crazycat.com") && (login_password === "gatinho")) {
        window.location.href = './consulta.html'
    } else {
        window.alert("Email e/ou senha incorretos");
    }
}