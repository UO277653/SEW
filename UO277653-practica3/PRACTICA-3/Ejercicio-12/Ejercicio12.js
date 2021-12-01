class ProcesadorArchivos {

  constructor(){}

  leerArchivoTexto(file) 
  { 
      //Solamente toma un archivo
      //var archivo = document.getElementById("archivoTexto").files[0];
      var archivo = file; //[0];
      var texto = "<ul><li>Nombre del archivo: " + archivo.name + "</li>";
      texto += "<li>Tamaño del archivo: " + archivo.size + " bytes</li>"; 
      texto += "<li>Tipo del archivo: " + archivo.type + "</li>";
      texto += "<li>Fecha de la última modificación: " + archivo.lastModifiedDate + "</li>";
      
      //Solamente admite archivos de tipo texto
      var tipoTexto = /text.*/;
      var tipoJson = /application.json/
      if (archivo.type.match(tipoTexto) || archivo.type.match(tipoJson)) 
        {
          texto += "<li>Contenido del archivo de texto:"
          var lector = new FileReader();
          lector.onload = function (evento) {
            texto += lector.result + "</li></ul>";
            $("h2").after(texto);
            }      
          lector.readAsText(archivo);
          
          }
      else {
          texto += "<li>Error : ¡¡¡ Archivo no válido para lectura !!!</li></ul>";
          $("h2").after(texto);
      } 
  };
    
    mostrarPropiedadesArchivos() {
      var nBytes = 0,
          archivos = document.getElementById("subirArchivos").files,
          nArchivos = archivos.length;

      for (var i = 0; i < nArchivos; i++) {
        nBytes += archivos[i].size;
      }

      var nombresTiposTamaños="";

      for (var i = 0; i < nArchivos; i++) {
        this.leerArchivoTexto(archivos[i])
        nombresTiposTamaños += "<p>Archivo[" + i +"] = "+ archivos[i].name  + " Tamaño: " + archivos[i].size +" bytes " + " Tipo: " + archivos[i].type+"</p>" ;
      }
    }
}

var procesador = new ProcesadorArchivos();