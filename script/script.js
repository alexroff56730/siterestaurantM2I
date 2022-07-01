function send() {
    var email = document.getElementById("Email").value
    var name = document.getElementById("name").value
    var fname = document.getElementById("fName").value
    var MSG = document.getElementById("MSG").value

    if(email != "" && name != "" && fname != "" && MSG != "") {
        document.getElementById("notif").innerHTML="le message est bien envoyé";
        document.getElementById("notif").style.visibility="visible";
        document.getElementById("notif").style.backgroundColor="rgb(78, 189, 78)";
    } else {
        document.getElementById("notif").innerHTML="le message n'a pas pu s'envoyer";
        document.getElementById("notif").style.visibility="visible";
        document.getElementById("notif").style.backgroundColor="#b35454";
    }
}