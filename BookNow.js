function clickConfirm(){
    document.getElementById("after-confirm").style.display="block";
}





function initMap(){

    /**
     * Location Markers
     */
    const markers=[
        {
            locationName:'Boys Hostel',
            lat:30.764831827719497, 
            lng:76.57503421364252,
            address:'CHANDIGARH UNIVERSITY <br> Punjab 140413'
        },
        {
            locationName:'Sukhna Hostel',
            lat:30.77059756968224, 
            lng:76.57797329114803,
            address:'CHANDIGARH UNIVERSITY <br>Punjab 140413'
        },
        {
            locationName:'Gate 1',
            lat:30.772043267014595, 
            lng:76.57979512596297,
            address:'CHANDIGARH UNIVERSITY <br>Punjab 140413'
        },
        {
            locationName:'Tagore Hostel',
            lat:30.76593392151042, 
            lng:76.57575511352147,
            address:'CHANDIGARH UNIVERSITY <br>Punjab 140413'
        },
        {
            locationName:'Govind Hostel',
            lat:30.773757607807195, 
            lng:76.5707503656272,
            address:'CHANDIGARH UNIVERSITY <br>Punjab 140413'
        }
    ];

    const newMarker='https://www.frontendhero.dev/wp-content/uploads/2023/03/feh-marker.png';



    const location= {lat: 30.772085638252488,lng: 76.57981232992934};
    const mapOptions={
        center:location,
        zoom:15,
        disableDefaultUI:true,
        styles: [
            {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "weight": "2.00"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#9c9c9c"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#7b7b7b"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#c8d7d4"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#070707"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            }
        ]
        
    }
    const map= new google.maps.Map(document.getElementById("map"),mapOptions);

    const infoWindow= new google.maps.InfoWindow({
        minWidth:200,
        maxWidth:200
    })


   const bounds=new google.maps.LatLngBounds();

    /**
     * loop through all markers
     */
    for(let i=0;i<markers.length;i++){

        const marker= new google.maps.Marker({
            position:{lat: markers[i]['lat'],lng:markers[i]['lng']},
            map:map,
            icon:newMarker
        });
        function createInfoWindow(){
            const infoWindowContent= `
            <div class="newMarker-content">
            <h3>${markers[i]['locationName']}</h3>
            <address>
            <p>${markers[i]['address']}</p>
            </address>
            </div>
            
            `;
           google.maps.event.addListener(marker,'click',function()
           {
            infoWindow.setContent(infoWindowContent);
            infoWindow.open(map,marker);
           });
           bounds.extend(new google.maps.LatLng(markers[i]['lat'],markers[i]['lng']));
           map.fitBounds(bounds);
        }
        createInfoWindow();
    }
}

//AIzaSyBf3XPFXjTzYK8HA4gjf8dKyzVynZWyPZU 