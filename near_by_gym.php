<!DOCTYPE html>
<html>
  <head>
    <title>Find Gyms Near Me</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
      function initMap() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function (position) {
            var userLocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            var map = new google.maps.Map(document.getElementById("map"), {
              center: userLocation,
              zoom: 15,
            });
            var request = {
              location: userLocation,
              radius: "500",
              type: ["gym"],
            };
            var service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, function (results, status) {
              if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                  var marker = new google.maps.Marker({
                    map: map,
                    position: results[i].geometry.location,
                  });
                }
              }
            });
          });
        } else {
          alert("Geolocation is not supported by this browser.");
        }
      }
    </script>
  </head>
  <body onload="initMap()">
    <div id="map" style="height: 500px"></div>
  </body>
</html>
