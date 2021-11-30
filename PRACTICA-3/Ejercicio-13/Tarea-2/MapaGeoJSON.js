var mapaDinamicoGoogle = new Object();

function initMap(){
  var oviedo = {lat: 43.3672702, lng: -5.8502461};
  var mapaOviedo = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:oviedo});
  var marcador = new google.maps.Marker({position:oviedo,map:mapaOviedo});
}

mapaDinamicoGoogle.initMap = initMap;

function cargarArchivoGeoJSON(file) 
{
  archivo = file[0];

  leerArchivoTexto(archivo)

}

function leerArchivoTexto(files) 
{ 
        var lector = new FileReader();
        lector.onload = function (evento) {
          
          var textoLeido = lector.result;
          var textoParseado = JSON.parse(textoLeido);
          const sanfran = new google.maps.LatLng(40.463667, -3.74922);
          var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:sanfran});

          var datos = textoParseado.features;

          for(var dato in datos){
            var elemento = datos[dato];
            var nombrePunto = elemento.properties.Name;
            var coordenadasPunto = elemento.geometry.coordinates;
            var longitud = parseFloat(coordenadasPunto[0]);
            var latitud = parseFloat(coordenadasPunto[1]);
            var ciudad = {lat: latitud, lng: longitud};
            new google.maps.Marker({position:ciudad, map:mapaCiudad, title:nombrePunto});
          }
        }     

        lector.readAsText(files); 
};





