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
    //Array of markers 
    var markers = [
        {
            coords:{lat:-1.2792673697188326, lng:36.81827677672555},
            content: "<h1 style='color:#04044A'> Central police station</br> <a style='color:#04044A' href='tel:'> Call 0736350100</a></h1>"
        },
        {
            coords:{lat:-1.2912321427863664, lng:36.79509290489097},
            content: "<h1 style='color:#04044A'> Kilimani police station</br> <a style='color:#04044A' href='tel:'>Call 0736350101</a></h1>"
        },
        {
            coords:{lat:-1.3096923825145088, lng:36.912708468070164},
            content: "<h1 style='color:#04044A'> Embakasi police station</br> <a style='color:#04044A' href='tel:'> Call 0736350102</a></h1>"
        },
        {
            coords:{lat:-1.3319025293938949, lng:36.78193390859997},
            content: "<h1 style='color:#04044A'> Langata police station</br> <a style='color:#04044A' href='tel:'>Call 0736350103</a></h1>"
        },
        {
            coords:{lat:-1.3968610409393947, lng:36.756548493254535},
            content: "<h1 style='color:#04044A'> Ongata Rongai police station</br> <a style='color:#04044A' href='tel:'>Call 0736350104</a></h1>"
        },
        {
            coords:{lat:-1.2793322075832412, lng:36.87854149325454},
            content: "<h1 style='color:#04044A'> Buruburu police station</br> <a style='color:#04044A' href='tel:'>Call 0736350105</a></h1>"
        },
        {
            coords:{lat:-1.2192697292201842, lng:36.89331872209089},
            content: "<h1 style='color:#04044A'> Kasarani police station</br> <a style='color:#04044A' href='tel:'>Call 0736350106</a></h1>"
        },
        {
            coords:{lat:-1.264977192045615, lng:36.81214932209089},
            content: "<h1 style='color:#04044A'> Parklands police station</br> <a style='color:#04044A' href='tel:'>Call 0736350109</a></h1>"
        },
        {
            coords:{lat:-1.2697890497845636, lng:36.835803650927254},
            content: "<h1 style='color:#04044A'> Pangani police station</br> <a style='color:#04044A' href='tel:'>Call 0736350110</a></h1>"
        },
        {
            coords:{lat:-1.2590796538336562, lng:36.84306055092725},
            content: "<h1 style='color:#04044A'> Muthaiga police station</br> <a style='color:#04044A' href='tel:'>Call 0736350111</a></h1>"
        }
    ];
    // Loop through markers
    for(var i = 0; i < markers.length; i++){
        addMarker(markers[i]);
    }

    // add marker funtion 
    function addMarker(props){
        var marker = new google.maps.Marker({
            position: props.coords,
            map: map
        });
    
    //check content
    if(props.content){
        var  infoWindow = new google.maps.InfoWindow({
            content: props.content
            // '<h3 style="color:#04044A" > Bruce</h3>' 
        });
        marker.addListener('click', function(){
            infoWindow.open(map,marker);
        });
    }
}

} 