function matchPassword() {  
    var pw1 = document.querySelector("#password").value;  
    var pw2 = document.querySelector("#passcode").value;  
    if(pw1 === pw2)  
    {   
      alert("Account created successfully");  
    }
    else {  
      alert("Passwords did not match");  
    }  
  }  
// submission.addEventListener("click",function(e){
//   e.preventDefault();
// })