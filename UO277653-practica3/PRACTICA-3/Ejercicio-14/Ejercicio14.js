class VisualizadorDeDatos{

    constructor(){
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

    obtenerUbicacion() 
    {
        var datos=''; 
        datos+='<p>Longitud: '+this.longitud +' grados</p>'; 
        datos+='<p>Latitud: '+this.latitud +' grados</p>';

        $("h1").after(datos);
  
    }

    obtenerPortapapeles() 
    {
        navigator.clipboard.readText().then(
            clipText => $("h1").after("<p>Este es el contenido del portapapeles: " + clipText + "</p>"));
            
    }

    cargarArchivoAudio(file) 
    {
    var archivo = URL.createObjectURL(file[0]); 

    document.getElementById("audio_player").src = archivo; 
    document.getElementById("audio_player").play();

  }

  obtenerNumeroHistorial(){
    var datos='<p>El número de páginas visitadas en esta ventana es: ' + window.history.length + '</p>';

    $("h1").after(datos);
  }
}

var visualizador = new VisualizadorDeDatos();