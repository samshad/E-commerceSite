var un = false, p = false;

function login(){
    if(un == true && p == true){
        var uname = document.getElementById("login_uname").value;
        var pass = document.getElementById("login_pass").value;

        if(uname.length == 0){
            document.getElementById("loginerror").innerHTML = "";
            un = false;
            return;
        }

        if(pass.length == 0){
            document.getElementById("loginerror").innerHTML = "";
            p = false;
            return;
        }

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("registrationFailed").innerHTML = this.responseText;
            }
        };
        /*var values = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&uname=" + uname + "&pass1=" + pass1 + "&pass2=" + pass2;
        xhttp.open("GET", "controller/registration.php?" + values, true);
        xhttp.send();*/

        var url = "controller/login.php";
        var par = "uname=" + uname + "&pass=" + pass;

        xmlhttp.open("POST", url, true);

        xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("content-length",par.length);
        xmlhttp.setRequestHeader("connection","close");

        xmlhttp.send(par);
    }
    else{
        alert("Required All Fields !");
        return false;
    }
}