// Lineas para insertar mapa. Zoom 11
var map = L.map('map').setView([-16.3040524,-71.5390115], 10);
L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
    maxZoom: 18,
    minZoom:2,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    id: 'examples.map-i87786ca'// 'examples.map-i86knfo3'
}).addTo(map);




/*
// Agregar pin con popup
L.marker([51.5, -0.09]).addTo(map)
    .bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

//Al hacer click mapa aparece popup
var popup = L.popup();
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
}
map.on('click', onMapClick);


//Icono personalizado
//Clase
var LeafIcon = L.Icon.extend({
    options: {
        // shadowUrl: 'leaf-shadow.png',
       // iconSize:     [38, 95],
        // shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        // shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});
var blueIcon = new LeafIcon({iconUrl: 'img/iconred.png'});

L.marker([40.5, -0.09], {icon: blueIcon}).addTo(map).bindPopup("I am a green leaf.");

// Cluster
//var points_rand = new L.geoJson(points
  //  ).addTo(map);
   
   // map.fitBounds(markers.getBounds());
  // for (var i = 0; i < planes.length; i++) {
  //  marker = new L.marker([planes[i][1],planes[i][2]])
  //   .bindPopup(planes[i][0])
  //   .addTo(map);
  // }

    var map = L.map('map').setView([52.52,13.384], 8);
    L.tileLayer('http://{s}.www.toolserver.org/tiles/bw-mapnik/{z}/{x}/{y}.png').addTo(map); //will be our basemap.
  */

  // ---------------------------------
    // var markers = L.markerClusterGroup();
    // var points_rand = L.geoJson(points, {
    //     onEachFeature: function (feature, layer) //functionality on click on feature
    //         {
    //         layer.bindPopup("hi! I am one of thousands"); //just to show something in the popup. could be part of the geojson as well!
    //         }
    //     });
    // markers.addLayer(points_rand); // add it to the cluster group
    // map.addLayer(markers);      // add it to the map
    // map.fitBounds(markers.getBounds()); //set view on the cluster extend




// ---------------------------------------------
$(document).ready(function() {
    $('#loginForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
   })
    .on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();
        
        // Get the form instance
        var $form = $(e.target);
        
        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');
       
        // Use Ajax to submit form data
        // I comment the $.post since it's not possible to send the real Ajax request here
        $.post($form.attr('action'), $form.serialize(), function(result) {
            $('#alertBox').removeClass('hide').alert();
            var message;
            if (result)
                message = "Datos guardados";
            else
                message = "Sucedió una falla al guardar datos. Intente de nuevo por favor.";

            $('#alertBox').html(message);
            $("#text").html("Time on the server is:"+message);
            //map.removeLayer(map.getLayer(map.graphicsLayerIds[0]));
            showmarkers();
        });
    });


    $("#btn-location").click(function () {
    
            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                   alert("Geolocation is not supported by this browser.");
                }
            }
            function showPosition(position) {
               alert("Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude); 
            }
            
        
      });

    showmarkers();


});

function showmarkers(){
    //Cargar puntos en mapa automaticamente
     var data = $(this).attr('id');      
        $.ajax({
            type: 'POST',
            url: 'index.php/test/position_item', //name of function in controller..
            dataType:'json',
            data:data,
            success: function( response ) 
            {   

                var markers = new L.MarkerClusterGroup();
                var geoJsonLayer = L.geoJson(response,{
                        style:function(feature){
                            return {color: feature.properties.color};
                        },
                        onEachFeature: function (feature, layer) {
                            var popupText = 'Tipo Test: ' + feature.properties.id_test;

                            if (feature.properties.res_username) {
                                popupText += '<br/>Usuario: ' + feature.properties.res_username;
                            }
                            if (feature.properties.description) {
                                popupText += '<br/>Descripción: ' + feature.properties.description;
                            }
                            if (feature.properties.color) {
                                popupText += '<br/>color: ' + feature.properties.color;
                            }

                            layer.bindPopup(popupText).on('mouseover', onClick);
                            $("#texttest").html("Time on the server is:"+popupText);
                        }
                    });
                 markers.addLayer(geoJsonLayer);
                 map.addLayer(markers);


            }
        });
    
}
function onClick(e) {
    $("#textlat").html("Latitud: "+this.getLatLng().lat);
    $("#textlng").html("Longitud: "+this.getLatLng().lng);   
}



//---------------------- Agregar capas --------------------
// var layers = document.getElementById('menu-ui');

// addLayer(L.mapbox.tileLayer('examples.map-i87786ca'), 'Base Map', 1);
// addLayer(L.mapbox.tileLayer('examples.bike-lanes'), 'Bike Lanes', 2);
// addLayer(L.mapbox.tileLayer('examples.bike-locations'), 'Bike Stations', 3);

// function addLayer(layer, name, zIndex) {
//     layer
//         .setZIndex(zIndex)
//         .addTo(map);

//     // Create a simple layer switcher that
//     // toggles layers on and off.
//     var link = document.createElement('a');
//         link.href = '#';
//         link.className = 'active';
//         link.innerHTML = name;

//     link.onclick = function(e) {
//         e.preventDefault();
//         e.stopPropagation();

//         if (map.hasLayer(layer)) {
//             map.removeLayer(layer);
//             this.className = '';
//         } else {
//             map.addLayer(layer);
//             this.className = 'active';
//         }
//     };

//     layers.appendChild(link);
// }


