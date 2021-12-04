function initMap(){
    var location = {lat: -1.285790 , lng: 36.820030};
    var map = new google.maps.Map(document.getElementById("map"),{
        zoom: 8,
        center: location
    });  
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}