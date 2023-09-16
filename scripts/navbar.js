console.log("aa");
fetch("/pages/navbar.php")
    .then(response => response.text())
    // .then(text => console.log(text))
    .then(text => nav.insertAdjacentHTML("afterbegin", text))

var nav = document.getElementById('navbar');
