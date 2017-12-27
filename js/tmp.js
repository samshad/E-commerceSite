var fn = false, ln = false, un = false, em = false, p1 = false, p2 = false;

function isValidEmail(email){
    if(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/.test(email)){
        return true;
    }
    else{
        return false;
    }
}

function isValidPassword(p1){
    len = p1.length;
    if(len<6){
        return false;
    }
    if(/[\'^£$%&*()}{@#~?><>,|=_+¬-]/.test(p1)){
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

function emailcheck(elm){
    if(!isValidEmail(elm.value)){
        document.getElementById("emailerror").style.display = "block";
        document.getElementById("emailerror").innerHTML = "Email Not Valid";
        document.getElementById("emailerror").style.color = "red";
        document.getElementById("emailerror").style.textAlign = "center";
        em=false;
    }
    else {
        document.getElementById("emailerror").style.display = "none";
        em=true;
    }
}

function checkall() {
    var str = document.getElementById("emailerror").value;
    alert(str);
    if(str.length == "hoise"){
        return true;
    }
    else return false;
}

function checkSubmit(email){
    //namecheck(document.forms[0].elements[0]);
    //namecheck(document.forms[0].elements[1]);
    //namecheck(document.forms[0].elements[2]);
    //emailcheck(document.forms[0].elements[2]);
    //passonecheck(document.forms[0].elements[5]);
    //passtwocheck(document.forms[0].elements[6]);

    //var email = document.forms[0].elements[2].value;
    if(!isValidEmail(email)){
        document.getElementById("emailerror").innerHTML = "Invalid";
    }

    else{
        document.getElementById("emailerror").innerHTML = "Valid";
    }

    showError(email);

    /*if(un=true && fn==true && ln==true && ph==true && em==true && p1==true && p2==true) {
        document.getElementById("signup").style.disabled = false;
    }
    else alert("Reqired Data Missing");*/
}

function showError(str){
    var xhttp;
    if(str.length == 0){
        document.getElementById("emailerror").innerHTML = "";
        return;
    }
    if(!isValidEmail(str)){
        document.getElementById("emailerror").innerHTML = "Invalid";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("emailerror").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "controller/validation.php?email="+str, true);
    xhttp.send();
}

/*<script>
function namecheck(elm){
    if(elm.getAttribute("name")=="username"){
        if(elm.value=="") {
            document.getElementById("usernameerror").style.display = "block";
            document.getElementById("usernameerror").innerHTML = "Username cannot be blank";
            document.getElementById("usernameerror").style.color = "red";
            document.getElementById("usernameerror").style.textAlign = "left";
            un=true;
        }
        else{
            document.getElementById("usernameerror").style.display="none";
            un=true;
        }
    }
    if(elm.getAttribute("name")=="firstname"){
        if(elm.value=="") {
            document.getElementById("firstnameerror").style.display = "block";
            document.getElementById("firstnameerror").innerHTML = "Firstname cannot be blank";
            document.getElementById("firstnameerror").style.color = "red";
            document.getElementById("firstnameerror").style.textAlign = "left";
            fn=false;
        }
        else{
            document.getElementById("firstnameerror").style.display="none";
            fn=true;
        }
    }
    if(elm.getAttribute("name")=="lastname"){
        if(elm.value=="") {
            document.getElementById("lastnameerror").style.display = "block";
            document.getElementById("lastnameerror").innerHTML = "Lastname cannot be blank";
            document.getElementById("lastnameerror").style.color = "red";
            document.getElementById("lastnameerror").style.textAlign = "left";
            ln=false;
        }
        else{
            document.getElementById("lastnameerror").style.display="none";
            ln=true;
        }
    }
}
function emailcheck(elm) {
    if(!is_valid_email(elm.value)){
        document.getElementById("emailerror").style.display = "block";
        document.getElementById("emailerror").innerHTML = "Email Not Valid";
        document.getElementById("emailerror").style.color = "red";
        document.getElementById("emailerror").style.textAlign = "left";
        em=false;
    }
    else {
        document.getElementById("emailerror").style.display = "none";
        //checkAvailable('email',elm.value);
        em=true;
    }
}
function passonecheck(elm){
    if(!passwordcheck(elm.value)){
        document.getElementById("passwordoneerror").style.display = "block";
        document.getElementById("passwordoneerror").innerHTML = "Password is not Valid";
        document.getElementById("passwordoneerror").style.color = "red";
        document.getElementById("passwordoneerror").style.textAlign = "left";
        p1=false;
    }
    else{
        document.getElementById("passwordoneerror").style.display = "none";
        p1=true;
    }
}
function passtwocheck(elm){
    if(document.getElementById("passtwo").value!=document.getElementById("passone").value){
        document.getElementById("passwordtwoerror").style.display = "block";
        document.getElementById("passwordtwoerror").innerHTML = "Password did no match";
        document.getElementById("passwordtwoerror").style.color = "red";
        document.getElementById("passwordtwoerror").style.textAlign = "left";
        p2=false;
    }
    else{
        document.getElementById("passwordtwoerror").style.display = "none";
        p2=true;
    }
}
function checkSubmit() {
    namecheck(document.forms[0].elements[0]);
    namecheck(document.forms[0].elements[1]);
    namecheck(document.forms[0].elements[2]);
    phonecheck(document.forms[0].elements[3]);
    emailcheck(document.forms[0].elements[4]);
    passonecheck(document.forms[0].elements[5]);
    passtwocheck(document.forms[0].elements[6]);
    if(un=true && fn==true && ln==true && ph==true && em==true && p1==true && p2==true) {
        document.getElementById("signup").style.disabled = false;
    }
    else alert("Reqired Data Missing");
}
</script>


<script>
xmlHttp=new XMLHttpRequest();
function checkAvailable(id,val) {
    xmlHttp.onreadystatechange=function(){
        if(xmlHttp.readyState==4 && xmlHttp.status==200) {
            var ret=xmlHttp.responseText;
            if(ret=='true') {
                if(id=='email') {
                    document.getElementById("uerr").style.visibility="visible";
                    document.getElementById("uerr").innerHTML = "User Name already in use!!";
                    document.forms[0].elements[3].style.borderColor="red";
                    un="";
                }
                else {
                    document.getElementById("eerr").style.visibility="visible";
                    document.getElementById("eerr").innerHTML = "Email Address already in use!!";
                    document.forms[0].elements[4].style.borderColor="red";
                    em="";
                }
            }
            else {
                if(id=='uname') {
                    document.getElementById("uerr").style.visibility="hidden";
                    document.forms[0].elements[3].style.borderColor="#f8efe9";
                    un="ok";
                }
                else {
                    document.getElementById("eerr").style.visibility="hidden";
                    document.forms[0].elements[2].style.borderColor="#f8efe9";
                    em="ok";
                }
            }
        }
    };
    var url="avail_check.php?id="+id+"&val="+val;
    console.log(url);
    xmlHttp.open("GET",url,true);
    xmlHttp.send();
}
</script>*/