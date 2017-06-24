function leer() {
    var xmlhtpp;
    if (window.XMLHttpRequest) {
        xmlhtpp = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xmlhtpp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhtpp.onreadystatechange = function () {
        if (xmlhtpp.readyState == 4 && xmlhtpp.status == 200) {
            document.getElementById("mydiv").innerHTML = xmlhtpp.responseText;
        }
    }
    xmlhtpp.open("GET", "http://localhost/hello/www/trae.php", true);
    xmlhtpp.send(null);
}