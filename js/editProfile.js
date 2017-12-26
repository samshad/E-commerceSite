var em = false, fn = false, ln = false, m = false, d = false;

function isValidEmail(email){
    if(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/.test(email)){
        return true;
    }
    else{
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

function echeckEmail(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("emailerror").innerHTML = "";
        return;
    }
    if(!isValidEmail(str)){
        document.getElementById("emailerror").innerHTML = "Invalid Email !";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("emailerror").innerHTML = this.responseText;
        }
    };
    em = true;
    xhttp.open("GET", "controller/editProfileAjax.php?email="+str, true);
    xhttp.send();
}

function echeckFirstName(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("firstnameerror").innerHTML = "";
        return;
    }
    if(!isValidName(str)){
        document.getElementById("firstnameerror").innerHTML = "Invalid Name !";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("firstnameerror").innerHTML = this.responseText;
        }
    };
    fn = true;
    xhttp.open("GET", "controller/editProfileAjax.php?fname="+str, true);
    xhttp.send();
}

function echeckLastName(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("lastnameerror").innerHTML = "";
        return;
    }
    if(!isValidName(str)){
        document.getElementById("lastnameerror").innerHTML = "Invalid Name !";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("lastnameerror").innerHTML = this.responseText;
        }
    };
    ln = true;
    xhttp.open("GET", "controller/editProfileAjax.php?lname="+str, true);
    xhttp.send();
}

function checkMobile(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("mobileerror").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("mobileerror").innerHTML = this.responseText;
        }
    };
    m = true;
    xhttp.open("GET", "controller/editProfileAjax.php?mobile="+str, true);
    xhttp.send();
}

function checkDob(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("doberror").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("doberror").innerHTML = this.responseText;
        }
    };
    d = true;
    xhttp.open("GET", "controller/editProfileAjax.php?dob="+str, true);
    xhttp.send();
}

function checkEditProfile(){
    //var em = false, fn = false, ln = false, m = false, d = false;
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;

    echeckFirstName(fname);
    echeckLastName(lname);
    echeckEmail(email);
    checkMobile(mobile);
    checkDob(dob);

    alert("adf All Fields !");

    if(em == true && m == true && d == true && ln == true && fn == true){
        return true;
    }
    alert("Required All Fields !");
    return false;
}
