console.log("aa")
fetch("/pages/navbar.html")
    .then(response => response.text())
    // .then(text => console.log(text))
    .then(text => nav.insertAdjacentHTML("afterbegin", text))

var nav = document.getElementById('navbar');
