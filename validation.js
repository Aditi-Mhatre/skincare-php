function matchPassword() {  
    var pw1 = document.getElementById("password");  
    var pw2 = document.getElementById("password-repeat");  
    if(pw1 != pw2)  
    {   
      document.getElementById("error-msg").style.display = "inline-block";
    }else{
        
    }  
}  
var pw2 = document.getElementById("password-repeat");  
pw2.onkeyup = matchPassword();