function myFunction(){
    var x = document.getElementsByClassName("nav-bar");
    if (x.style.display === "block"){
        x.style.display = "none";
    }
    else{
        x.style.display = "block";
    }
}