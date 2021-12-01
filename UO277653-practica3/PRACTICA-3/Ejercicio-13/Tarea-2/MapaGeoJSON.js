var mapaDinamicoGoogle = new Object();

class MapaGeoJSON{

  constructor(){
    
  }

  initMap(){
    var oviedo = {lat: 43.3672702, lng: -5.8502461};
    var mapaOviedo = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:oviedo});
    var marcador = new google.maps.Marker({position:oviedo,map:mapaOviedo});
  }

  cargarArchivoGeoJSON(file) 
  {
    var archivo = file[0];

    this.leerArchivoTexto(archivo)

  }

  leerArchivoTexto(files) 
  { 
      var lector = new FileReader();
      lector.onload = function (evento) {
        
        var textoLeido = lector.result;
        var textoParseado = JSON.parse(textoLeido);
        const centro = new google.maps.LatLng(47.79270262138927, 22.8828136095717);
        var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:centro});

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

}

var mapa = new MapaGeoJSON();

mapaDinamicoGoogle.initMap = mapa.initMap;






