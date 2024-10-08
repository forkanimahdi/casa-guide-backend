let markers = [];

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: {
            lat: 33.57,
            lng: -7.6,
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    const line = new google.maps.Polyline({
        map: map,
        strokeOpacity: 0,
        icons: [
            {
                icon: {
                    path: "M 0,-1 0,1",
                    strokeOpacity: 0.7,
                    scale: 3,
                },
                offset: "0",
                repeat: "15px",
            },
        ],
    });

    map.addListener("click", function (event) {
        const svgMarkerPath = "/assets/markers/path.svg";
        const marker = new google.maps.Marker({
            position: {
                lat: event.latLng.lat(),
                lng: event.latLng.lng(),
            },
            map: map,
            icon: {
                url: svgMarkerPath,
                scaledSize: new google.maps.Size(40, 40),
                anchor: new google.maps.Point(20, 40),
            },
        });

        marker.addListener("click", function () {
            marker.setMap(null);
            markers = markers.filter((m) => m !== marker);
            line.setPath(markers.map((marker) => marker.getPosition()));
        });

        markers.push(marker);

        coordinates.value = JSON.stringify(
            markers.map((marker) => {
                return {
                    latitude: marker.getPosition().lat(),
                    longitude: marker.getPosition().lng(),
                };
            })
        );

        line.setPath(markers.map((marker) => marker.getPosition()));

        nextBtn.disabled = !(markers.length > 1);
    });
}

window.onload = initMap;
