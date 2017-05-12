function initMap() {
    var westerdals = {lat: 59.9159279, lng: 10.7608717};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: westerdals
    });
    var marker = new google.maps.Marker({
        position: westerdals,
        map: map
    });
}

