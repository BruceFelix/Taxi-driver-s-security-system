// function getLocation(){
//     if (navigator.geolocation){
//         navigator.geolocation.getCurrentPosition(showPosition);
//     }
//     else{
//         alert("Geolocation is not supported by this browser.");
//     }
// }
function initMap(){
    var location = {lat: -1.2841 , lng:  36.8155};
    var map = new google.maps.Map(document.getElementById("map"),{
        zoom: 11,
        center: location
    });  
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
    var  infoWindow = new google.maps.InfoWindow({
        content: '<h3 style="color:#04044A" > Bruce</h3>'
    });
    marker.addListener('click', function(){
        infoWindow.open(map,marker);
    });
} 