"use strict";

var mapaDinamicoGoogle = new Object();

class MapaEjercicio11{

    constructor(){
        
    }

    initMap(){
        var latitud = miPosicion.getLatitud();
        var longitud = miPosicion.getLongitud();
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();

        //var ciudad = {lat: latitud, lng: longitud};
        const ciudad = new google.maps.LatLng(latitud, longitud);
        const sanfran = new google.maps.LatLng(43.361717, -5.850186);

        var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:sanfran});

        directionsRenderer.setMap(mapaCiudad);
    }

    cambiarCiudad(latitud, longitud){
        var ciudad = {lat: latitud, lng: longitud};
        var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:ciudad});
        new google.maps.Marker({position:ciudad,map:mapaCiudad});
    }

    leerArchivoTexto(files) 
    { 
        var archivo = files[0];
        var tipoTexto = /text.*/;
        if (archivo.type.match(tipoTexto)) 
        {
            var lector = new FileReader();
            lector.onload = function (evento) {
            var textoLeido = lector.result;

            const sanfran = new google.maps.LatLng(40.463667, -3.74922);
            var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:sanfran});

            var coordenadas = textoLeido.split(';');
            for(var coord in coordenadas){
                var componentesCoordenada = coordenadas[coord].split(',');
                var latitud = parseFloat(componentesCoordenada[0]);
                var longitud = parseFloat(componentesCoordenada[1]);
                var ciudad = {lat: latitud, lng: longitud};
                new google.maps.Marker({position:ciudad, map:mapaCiudad});
            }
            }      
            lector.readAsText(archivo);
            }
        else {
            errorArchivo.innerText = "Error : ¡¡¡ Archivo no válido !!!";
            }       
    };

}

var miMapa = new MapaEjercicio11();
mapaDinamicoGoogle.initMap = miMapa.initMap;


class Geolocalizacion {
    constructor (){
        navigator.geolocation.getCurrentPosition(this.getPosicion.bind(this));
    }
    getPosicion(posicion){
        this.longitud         = posicion.coords.longitude; 
        this.latitud          = posicion.coords.latitude;  
        this.precision        = posicion.coords.accuracy;
        this.altitud          = posicion.coords.altitude;
        this.precisionAltitud = posicion.coords.altitudeAccuracy;
        this.rumbo            = posicion.coords.heading;
        this.velocidad        = posicion.coords.speed;       
    }
    getLongitud(){
        return this.longitud;
    }
    getLatitud(){
        return this.latitud;
    }
    getAltitud(){
        return this.altitud;
    }
    verTodo(dondeVerlo){
        var ubicacion=document.getElementById(dondeVerlo);
        var datos=''; 
        datos+='<p>Longitud: '+this.longitud +' grados</p>'; 
        datos+='<p>Latitud: '+this.latitud +' grados</p>';
        datos+='<p>Precision de la latitud y longitud: '+ this.precision +' metros</p>';
        datos+='<p>Altitud: '+ this.altitude +' metros</p>';
        datos+='<p>Precision de la altitud: '+ this.precisionAltitud +' metros</p>'; 
        datos+='<p>Rumbo: '+ this.rumbo +' grados</p>'; 
        datos+='<p>Velocidad: '+ this.velocidad +' metros/segundo</p>';
        ubicacion.innerHTML = datos;
    }
}
var miPosicion = new Geolocalizacion();
