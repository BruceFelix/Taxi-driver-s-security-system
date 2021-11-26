
function matchPassword() {  
  var pw1 = document.querySelector("#password").value;  
  var pw2 = document.querySelector("#passcode").value;  
  var sub = document.querySelector("submission");   
    if(pw1 != pw2)  
    {   
      // alert("Passwords did not match");  
      event.preventDefault();
      return false;
    }
    else {  
      alert("Account created successfully");  
    }  
  }  
  

