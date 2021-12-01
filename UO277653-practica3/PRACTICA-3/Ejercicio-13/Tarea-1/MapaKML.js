var mapaDinamicoGoogle = new Object();

class MapaKML{

  constructor(){
    
  }

  initMap(){
  var oviedo = {lat: 43.3672702, lng: -5.8502461};
  var mapaOviedo = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:oviedo});
  var marcador = new google.maps.Marker({position:oviedo,map:mapaOviedo});
  }

  cargarArchivoKML(file) 
  {
    var archivo = file[0];

    this.leerArchivoTexto(archivo)

  }

  leerArchivoTexto(files) 
  { 
    var lector = new FileReader();
    lector.onload = function (evento) {
      
      var textoLeido = lector.result;
      const centro = new google.maps.LatLng(47.79270262138927, 22.8828136095717);
      var mapaCiudad = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:centro});

      $('Placemark',textoLeido).each(function() {
        var nombrePunto = $('name', this).text();
        var coordenadasPunto = $('coordinates', this).text();

        var componentesCoordenada = coordenadasPunto.split(',');
        var longitud = parseFloat(componentesCoordenada[0]);
        var latitud = parseFloat(componentesCoordenada[1]);
        var ciudad = {lat: latitud, lng: longitud};
        new google.maps.Marker({position:ciudad, map:mapaCiudad, title:nombrePunto});
      }) 
    }     

    lector.readAsText(files); 
  };

}

var mapa = new MapaKML();

mapaDinamicoGoogle.initMap = mapa.initMap;





