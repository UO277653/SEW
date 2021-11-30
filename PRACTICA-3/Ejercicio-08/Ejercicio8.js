"use strict";
class ServicioMeteorologico{

    constructor(){
        this.apikey = "f0ae2231c391b57d3da38c526a97d1fa";
        this.ciudad = "Oviedo";
        this.codigoPais = "ES";
        this.unidades = "&units=metric";
        this.idioma = "&lang=es";
        this.url = "http://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + "," + this.codigoPais + this.unidades + this.idioma + "&APPID=" + this.apikey;
    }

    cargarDatos(){
        $.ajax({
            dataType: "json",
            url: this.url,
            method: 'GET',
            success: function(datos){
                    var stringDatos = "<ul><li>Ciudad: " + datos.name + "</li>";
                        stringDatos += "<li>País: " + datos.sys.country + "</li>";
                        stringDatos += "<li>Latitud: " + datos.coord.lat + " grados</li>";
                        stringDatos += "<li>Longitud: " + datos.coord.lon + " grados</li>";
                        stringDatos += "<li>Temperatura: " + datos.main.temp + " grados Celsius</li>";
                        stringDatos += "<li>Temperatura máxima: " + datos.main.temp_max + " grados Celsius</li>";
                        stringDatos += "<li>Temperatura mínima: " + datos.main.temp_min + " grados Celsius</li>";
                        stringDatos += "<li>Presión: " + datos.main.pressure + " milibares</li>";
                        stringDatos += "<li>Humedad: " + datos.main.humidity + " %</li>";
                        stringDatos += "<li>Amanece a las: " + new Date(datos.sys.sunrise *1000).toLocaleTimeString() + "</li>";
                        stringDatos += "<li>Oscurece a las: " + new Date(datos.sys.sunset *1000).toLocaleTimeString() + "</li>";
                        stringDatos += "<li>Dirección del viento: " + datos.wind.deg + " grados</li>";
                        stringDatos += "<li>Velocidad del viento: " + datos.wind.speed + " metros/segundo</li>";
                        stringDatos += "<li>Hora de la medida: " + new Date(datos.dt *1000).toLocaleTimeString() + "</li>";
                        stringDatos += "<li>Fecha de la medida: " + new Date(datos.dt *1000).toLocaleDateString() + "</li>";
                        stringDatos += "<li>Descripción: " + datos.weather[0].description + "</li>";
                        stringDatos += "<li>Visibilidad: " + datos.visibility + " metros</li>";
                        stringDatos += "<li>Nubosidad: " + datos.clouds.all + " %</li>";
                        stringDatos += '<li><img src="https://openweathermap.org/img/w/' + datos.weather[0].icon + '.png" alt ="' + datos.weather[0].description + '"/></li></ul>'
                    
                    $("p").after(stringDatos);
                },
            error:function(){
                $("p").after("¡Tenemos problemas! No puedo obtener JSON de <a href='http://openweathermap.org'>OpenWeatherMap</a>"); 
                }
        });
    }
    crearElemento(tipoElemento, texto, insertarDespuesDe){
        var elemento = document.createElement(tipoElemento); 
        elemento.innerHTML = texto;
        $(insertarDespuesDe).after(elemento);
    }

    verJSONCiudad(ciudad, codigoPais){
              
              this.ciudad = ciudad;
              this.codigoPais = codigoPais;
              this.url = "http://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + "," + this.codigoPais + this.unidades + this.idioma + "&APPID=" + this.apikey;
              this.cargarDatos();
              $("button").attr("disabled","disabled");
    }

    crearIcono(){
        document.write('<img src="https://openweathermap.org/img/w/' + datos.weather[2] + '.png" alt ="' + datos.weather[1] + '"/>');
    }

    cargarJSONCiudades(){
        
        this.crearElemento("p","Datos: ","h2");
        this.verJSONCiudad('Satu Mare','RO');
        this.verJSONCiudad('Călinești','RO');
        this.verJSONCiudad('Odoreu','RO');
        this.verJSONCiudad('Ardud','RO');
        this.verJSONCiudad('Mădăraș','RO');
    }
}

var meteo = new ServicioMeteorologico();