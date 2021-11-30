"use strict";
class Acciones{

    constructor(){
    }

    ocultarParrafos(){
        $("p").hide();
    }

    mostrarParrafos(){
        $("p").show();
    }

    ocultarEncabezados1(){
        $("h1").hide();
    }

    mostrarEncabezados1(){
        $("h1").show();
    }

    mostrarAtributosEncabezados(){
        alert("Atributos actuales"
                    + "\n" + "Atributos de h1 : id = " + $("h1").attr("id") 
                    + "\n" + "Atributos de h2 : id = " + $("h2").attr("id") 
                    + "\n" + "Atributos de h3 : id = " + $("h3").attr("id") 
                    );
    }

    modificarAtributosEncabezados(){
        $("h1").attr("id", "header1");
        $("h2").attr("id", "header2");
        $("h3").attr("id", "header3");
        alert("Atributos modificados"
                    + "\n" + "Atributos de h1 : id = " + $("h1").attr("id") 
                    + "\n" + "Atributos de h2 : id = " + $("h2").attr("id") 
                    + "\n" + "Atributos de h3 : id = " + $("h3").attr("id") 
                    );
    }

    crearElementos(){
        $("#append").append(" Este elemento ha sido añadido con append ");
    }

    eliminarAppend(){
        $("#append").remove();
    }

    recorrerDOM(){
        $("*", document.body).each(function() {
            var etiquetaPadre = $(this).parent().get(0).tagName;
            $(this).prepend(document.createTextNode( "Etiqueta padre : <"  + etiquetaPadre + "> elemento : <" + $(this).get(0).tagName +"> valor: "));
        })
    }

    sumarFilasYColumnas(){
        var sumaTotal = 0;

        $("td", document.body).each(function() {
            sumaTotal = sumaTotal + Number($(this).text());
        })

        document.body.append(document.createTextNode("El total es " + sumaTotal));
    }
}

var acciones = new Acciones();