function initMap(){
    const location = {lat: -1.285790 , lng: 36.820030};
    const map = new google.maps.Map(document.getElementById("map"),{
        zoom: 11,
        center: location
    });  
    const marker = new google.maps.Marker({
        position: location,
        map: map
    });
}