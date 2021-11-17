function myFunction(){
    var x = document.querySelector(".nav-bar");
    if (x.style.display === "flex"){
        x.style.display = "none";
    }
    else{
        x.style.display = "flex";
    }
}