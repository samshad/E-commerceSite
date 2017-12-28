var un = false, p = false;

function loginUname(uname){
    if(uname.length > 0){
        un = true;
    }
}

function loginPass(pass){
    if(pass.length > 0){
        p = true;
    }
}

function login(){
    var uname = document.getElementById("login_uname").value;
    var pass = document.getElementById("login_pass").value;

    loginUname(uname);
    loginPass(pass);

    if(un == true && p == true){
        /*if(uname.length == 0){
            document.getElementById("login_error").innerHTML = "";
            alert("Required All Fields !");
            un = false;
            return false;
        }

        if(pass.length == 0){
            document.getElementById("login_error").innerHTML = "";
            p = false;
            alert("Required All Fields !");
            return false;
        }

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("login_error").innerHTML = this.responseText;
            }
        };

        /*var values = "login_uname=" + uname + "&login_pass=" + pass;
        xhttp.open("GET", "controller/login.php?" + values, true);
        xhttp.send();

        var url = "controller/login.php";
        var par = "login_uname=" + uname + "&login_pass=" + pass;

        //alert("paisi...");

        xhttp.open("POST", url, true);

        xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
        xhttp.setRequestHeader("content-length",par.length);
        xhttp.setRequestHeader("connection","close");

        xhttp.send(par);*/
        return true;
    }
    alert("Required All Fields !");
    return false;
}