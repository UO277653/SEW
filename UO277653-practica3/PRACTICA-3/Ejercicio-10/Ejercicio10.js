"use strict";
class CotizacionBitcoin {

    constructor(){
        this.url = "https://api.coingecko.com/api/v3/coins/bitcoin?localization=false";
    }   

    crearElemento(tipoElemento, texto, insertarDespuesDe){
        var elemento = document.createElement(tipoElemento); 
        elemento.innerHTML = texto;
        $(insertarDespuesDe).after(elemento);
    }

    cargarDatos(){
        $.ajax({
            dataType: "json",
            url: this.url,
            method: 'GET',
            success: function(datos){
                    //$("button").before(JSON.stringify(datos, null, 2));
                    var cabecera = "El Bitcoin (" + datos.symbol + ") ";
                        cabecera += '<img src=' + datos.image.small + ' alt ="Imagen del bitcoin"/>';

                    var elementoCabecera = document.createElement("h3"); 
                    elementoCabecera.innerHTML = cabecera;
                    $("h2").after(elementoCabecera);

                    var descripcion = "El Bitcoin es una de las primeras criptomonedas de éxito. Su funcionamiento no está controlado por bancos centrales o autoridades, ni tampoco su producción. Se creó por un grupo anónimo identificado por el nombre de Satoshi Nakamoto. El código fuente está disponible públicamente, todos pueden verlo. Está cambiando la forma en la que vemos el dinero. Está diseñado para tener 21 millones de BTC creados. Utiliza el algoritmo SHA-256. Hay gente que se dedica a minar Bitcoin. Esta moneda ha inspirado la aparición de otras más, como el Litecoin o el Peercoin.";

                    var elementoDescripcion = document.createElement("p"); 
                    elementoDescripcion.innerHTML = descripcion;
                    $("h3").after(elementoDescripcion);

                    // Precio actual
                    var precioActual = "<p>Precio actual del Bitcoin en comparación con otras monedas: </p>" 
                    precioActual  += "<ul><li> Dólar americano: " + datos.market_data.current_price.usd + "</li>";
                    precioActual  += "<li> Euro: " + datos.market_data.current_price.eur + "</li>";
                    precioActual  += "<li> Libra esterlina: " + datos.market_data.current_price.gbp + "</li>";
                    precioActual  += "<li> Rublo: " + datos.market_data.current_price.rub + "</li>";
                    precioActual  += "<li> Yen: " + datos.market_data.current_price.jpy + "</li>";
                    precioActual  += "<li> Corona checa: " + datos.market_data.current_price.czk + "</li></ul>";

                    // Capitalización del mercado
                    var capitalizacionActual = "<p>Capitalización actual del Bitcoin en varias monedas: </p>" 
                    capitalizacionActual  += "<ul><li> Dólar americano: " + datos.market_data.market_cap.usd + "</li>";
                    capitalizacionActual  += "<li> Euro: " + datos.market_data.market_cap.eur + "</li>";
                    capitalizacionActual  += "<li> Libra esterlina: " + datos.market_data.market_cap.gbp + "</li>";
                    capitalizacionActual  += "<li> Rublo: " + datos.market_data.market_cap.rub + "</li>";
                    capitalizacionActual  += "<li> Yen: " + datos.market_data.market_cap.jpy + "</li>";
                    capitalizacionActual  += "<li> Corona checa: " + datos.market_data.market_cap.czk + "</li></ul>";
                    capitalizacionActual += "<p>Actualmente, el Bitcoin ocupa el siguiente puesto en cuanto a capitalización del mercado de criptomonedas: " 
                                            + datos.market_data.market_cap_rank + "";

                    var estadisticas = "\r\n Otras estadísticas relevantes sobre la cotización del Bitcoin son:  </p>";
                        estadisticas += "<ul><li> Valor más alto en las últimas 24h (en USD): " + datos.market_data.high_24h.usd + "</li>";
                        estadisticas += "<li> Valor más bajo en las últimas 24h (en USD): " + datos.market_data.low_24h.usd + "</li>";
                        estadisticas += "<li> Cambio del precio en las últimas 24h (en USD): " + datos.market_data.price_change_24h + "</li></ul>";

                    //var datos = document.createElement("p"); 
                    //datos.innerHTML = precioActual + capitalizacionActual + estadisticas;

                    var datos = precioActual + capitalizacionActual + estadisticas
                    $("p").after(datos);


                },
            error:function(){
                $("h2").append("¡Tenemos problemas! No puedo obtener JSON"); 
                }
        });
    }



    verJSONBitcoin(){
        this.cargarDatos();

        $("button").attr("disabled","disabled");
}

}

var bitcoin = new CotizacionBitcoin();