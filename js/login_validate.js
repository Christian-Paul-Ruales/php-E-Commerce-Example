function validar(){

    var email=document.getElementById("inputEmail").value; 
    var pass=document.getElementById("inputPassword").value;

    var cont=0;
    if(email.length == 0 || /^\s+$/.test(email)){

        document.getElementById("error_ie").innerHTML="<FONT COLOR='red'>You have not entered an email</FONT>";
        document.getElementById("inputEmail").style.borderColor="red";
         cont= cont+1;
    }else{
        document.getElementById("error_ie").innerHTML="";  
        document.getElementById("inputEmail").style.borderColor="#ced4da";
        var rp_email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        
        if(rp_email.test(email)){
            document.getElementById("error_ie").innerHTML="";
            document.getElementById("inputEmail").style.borderColor="#ced4da";
        }else{
            document.getElementById("error_ie").innerHTML="<FONT COLOR='red'>Wrong email</FONT>";
            document.getElementById("inputEmail").style.borderColor="red";
            cont= cont+1;
            
        }
    }

    if(pass.length == 0 || /^\s+$/.test(pass)){

        document.getElementById("error_pass").innerHTML="<FONT COLOR='red'>You have not entered password</FONT>";
        document.getElementById("inputPassword").style.borderColor="red";
         cont= cont+1;
    }else{
        document.getElementById("error_pass").innerHTML="";  
        document.getElementById("inputPassword").style.borderColor="#ced4da";
    }

    

    

    if(cont==0){
        return true;
    }else{
        return false;
    }
   
}
function validate_register(){
    var name=document.getElementById("username").value; 
    var lastname=document.getElementById("userlastname").value;
    var email=document.getElementById("useremail").value;
    var pass=document.getElementById("userpass").value;
    var pass2=document.getElementById("userrepeatpass").value;
    var cont =0;

    if(name.length == 0 || /^\s+$/.test(name)){
        document.getElementById("errorUserName").innerHTML="<FONT COLOR='red'>You have not entered your name</FONT>";
        document.getElementById("username").style.borderColor="red";
         cont= cont+1;
    }else{
        document.getElementById("errorUserName").innerHTML="";  
        document.getElementById("username").style.borderColor="#ced4da";
    }

    if(lastname.length == 0 || /^\s+$/.test(lastname)){
        document.getElementById("errorUserLastName").innerHTML="<FONT COLOR='red'>You have not entered your lastname</FONT>";
        document.getElementById("userlastname").style.borderColor="red";
         cont= cont+1;
    }else{
        document.getElementById("errorUserLastName").innerHTML="";  
        document.getElementById("userlastname").style.borderColor="#ced4da";
    }

    if(email.length == 0 || /^\s+$/.test(email)){
        document.getElementById("errorUserEmail").innerHTML="<FONT COLOR='red'>You have not entered your Email Adress</FONT>";
        document.getElementById("useremail").style.borderColor="red";
         cont= cont+1;
    }else{


        document.getElementById("errorUserEmail").innerHTML="";  
        document.getElementById("useremail").style.borderColor="#ced4da";
        var rp_email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        
        if(rp_email.test(email)){
            document.getElementById("errorUserEmail").innerHTML="";
            document.getElementById("useremail").style.borderColor="#ced4da";
        }else{
            document.getElementById("errorUserEmail").innerHTML="<FONT COLOR='red'>Wrong email</FONT>";
            document.getElementById("useremail").style.borderColor="red";
            cont= cont+1;
            
        }
    }

    if(pass.length == 0 || /^\s+$/.test(pass)){
        document.getElementById("errorUserPass").innerHTML="<FONT COLOR='red'>You have not entered any password</FONT>";
        document.getElementById("userpass").style.borderColor="red";
         cont= cont+1;
    }else{
        document.getElementById("errorUserPass").innerHTML="";  
        document.getElementById("userpass").style.borderColor="#ced4da";
    }

    if(pass2.length == 0 || /^\s+$/.test(pass2)){
        document.getElementById("errorUserRepeatPass").innerHTML="<FONT COLOR='red'>You have not entered anything</FONT>";
        document.getElementById("userrepeatpass").style.borderColor="red";
         cont= cont+1;
    }else{
        if(pass != pass2){
                document.getElementById("errorUserRepeatPass").innerHTML="<FONT COLOR='red'>Passwords do not match</FONT>";
                document.getElementById("userrepeatpass").style.borderColor="red";
                cont= cont+1;
        }else{
            document.getElementById("errorUserRepeatPass").innerHTML="";  
            document.getElementById("userrepeatpass").style.borderColor="#ced4da";
        }
        
    }

    if(cont==0){
        return true;
    }else{
        return false;
    }
}