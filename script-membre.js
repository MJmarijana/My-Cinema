var bouton = document.getElementById("img-modify");
var infos = document.getElementById("thiden");

function show() {
    if (infos.style.display == "none") {
        infos.style.display = "block";
    }
    else {
        infos.style.display = "none";
    }  
}

bouton.onclick = show;