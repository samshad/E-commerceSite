var fn = false, ln = false, un = false, em = false, p1 = false, p2 = false;

function isValidEmail(email){
    if(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/.test(email)){
        return true;
    }
    else{
        return false;
    }
}

function isValidPassword(pass){
    len = pass.length;
    if(len<6){
        return false;
    }
    if(/[\'^£$%&*()}{@#~?><>,|=_+¬-]/.test(pass)){
        return true;
    }
    else {
        return false;
    }
}

function isValidName(name){
    if(/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/.test(name)){
        return true;
    }
    else {
        return false;
    }
}

function isValidUserName(name){
    if(/^[a-z0-9_-]{5,100}$/.test(name)){
        return true;
    }
    else {
        return false;
    }
}

function checkFirstName(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("firstnameerror").innerHTML = "";
        fn = false;
        return;
    }
    if(!isValidName(str)){
        document.getElementById("firstnameerror").innerHTML = "Invalid Name !";
        fn = false;
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("firstnameerror").innerHTML = this.responseText;
        }
    };
    fn = true;
    xhttp.open("GET", "controller/registration.php?fname="+str, true);
    xhttp.send();
}

function checkLastName(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("lastnameerror").innerHTML = "";
        ln = false;
        return;
    }
    if(!isValidName(str)){
        document.getElementById("lastnameerror").innerHTML = "Invalid Name !";
        ln = false;
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("lastnameerror").innerHTML = this.responseText;
        }
    };
    ln = true;
    xhttp.open("GET", "controller/registration.php?lname="+str, true);
    xhttp.send();
}

function checkEmail(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("emailerror").innerHTML = "";
        em = false;
        return;
    }
    if(!isValidEmail(str)){
        document.getElementById("emailerror").innerHTML = "Invalid Email !";
        em = false;
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("emailerror").innerHTML = this.responseText;
        }
    };
    em = true;
    xhttp.open("GET", "controller/registration.php?email="+str, true);
    xhttp.send();
}

function checkUserName(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("usernameerror").innerHTML = "";
        un = false;
        return;
    }
    if(!isValidUserName(str)){
        document.getElementById("usernameerror").innerHTML = "Invalid User Name !";
        un = false;
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("usernameerror").innerHTML = this.responseText;
        }
    };
    un = true;
    xhttp.open("GET", "controller/registration.php?uname="+str, true);
    xhttp.send();
}

function checkPass1(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("passwordoneerror").innerHTML = "";
        p1 = false;
        return;
    }
    if(!isValidPassword(str)){
        document.getElementById("passwordoneerror").innerHTML = "Invalid Password !";
        p1 = false;
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("passwordoneerror").innerHTML = this.responseText;
        }
    };
    p1 = true;
    xhttp.open("GET", "controller/registration.php?pass1="+str, true);
    xhttp.send();
}

function checkPass2(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("passwordtwoerror").innerHTML = "";
        p2 = false;
        return;
    }
    if(!isValidPassword(str)){
        document.getElementById("passwordtwoerror").innerHTML = "Invalid Password !";
        p2 = false;
        return;
    }

    var pass1 = document.getElementById("password1").value;
    if(pass1 != str){
        document.getElementById("passwordtwoerror").innerHTML = "Passwords didn't matched !";
        p2 = false;
        return;
    }

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("passwordtwoerror").innerHTML = this.responseText;
        }
    };
    p2 = true;
    xhttp.open("GET", "controller/registration.php?" + "pass1=" + pass1 + "&pass2=" + str, true);
    xhttp.send();
}

function checkSubmit(){
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var uname = document.getElementById("username").value;
    var pass1 = document.getElementById("password1").value;
    var pass2 = document.getElementById("password2").value;

    checkFirstName(fname);
    checkLastName(lname);
    checkEmail(email);
    checkUserName(uname);
    checkPass1(pass1);
    checkPass2(pass2);

    if(fn == true && ln == true && em == true && un == true && p1 == true && p2 == true) {
        /*var fname = document.getElementById("firstname").value;
        var lname = document.getElementById("lastname").value;
        var email = document.getElementById("email").value;
        var uname = document.getElementById("username").value;
        var pass1 = document.getElementById("password1").value;
        var pass2 = document.getElementById("password2").value;

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("registrationFailed").innerHTML = this.responseText;
            }
        };
        /*var values = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&uname=" + uname + "&pass1=" + pass1 + "&pass2=" + pass2;
        xhttp.open("GET", "controller/registration.php?" + values, true);
        xhttp.send();

        var url = "controller/registration.php";
        var par = "fname=" + fname + "&lname=" + lname + "&email=" + email + "&uname=" + uname + "&pass1=" + pass1 + "&pass2=" + pass2;

        xhttp.open("POST", url, true);

        xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
        xhttp.setRequestHeader("content-length",par.length);
        xhttp.setRequestHeader("connection","close");

        xhttp.send(par);*/
        return true;
    }
    else{
        alert("Required All Fields !");
        return false;
    }
}