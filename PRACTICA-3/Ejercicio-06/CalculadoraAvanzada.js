class CalculadoraAvanzada extends CalculadoraRPN{

    constructor(){
        super();
        this.simbolos = new Array();
    }
    derivada(){

        var polinomio = this.pila.pop();
        var componentesMas = polinomio.split('+');

        var componentes = new Array();
        for(var comp in componentesMas){
            var elemento = componentesMas[comp];
            componentes = componentes.concat(elemento.split('-'));
        }

        var resultado = "";
        for(var componente in componentes){
            var partes = componentes[componente].split('*');

            if(partes.length == 1){
                if(partes[0] =='x'){
                    resultado += '1';
                } else{
                    var noSimbolo = true;
                }
            } else{
                var numero = partes[0];

                var partesX = partes[1].split('^');

                if(partesX.length == 1){
                    resultado += partes[0];
                } else{
                    var exponente = partesX[1];

                    resultado += Number(numero) * Number(exponente) + "*x"

                    if(!((Number(exponente) - 1) == 1)){
                        resultado += "^" + (exponente-1);
                    }
                }
            }
            
            if(this.simbolos.length > 0){
                if(noSimbolo){
                    this.simbolos.shift();
                } else{
                    resultado += this.simbolos.shift();
                }
                
                noSimbolo = false;
            }
        }

        nuevoResultado = resultado;

        while((resultado.substring(resultado.length-1, resultado.length) == '+') || (resultado.substring(resultado.length-1, resultado.length) == '-')){
            var nuevoResultado = resultado.substring(0, resultado.length - 1);
            resultado = nuevoResultado;
        }
        
        this.simbolos = new Array();

        this.pila.push(nuevoResultado)
        document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
    }

    sustituir(){
        
        var aSustituir = this.pila.pop();

        var resultado = "";

        var polinomio = this.pila.pop();

        for(var i = 0; i<polinomio.length; i++){
            var caracter = polinomio.charAt(i);

            if(caracter == 'x'){
                resultado += aSustituir;
            } else{
                resultado += polinomio.charAt(i)
            }
        }

        this.pila.push(resultado);
        document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
    }

    insertarMas(){
        super.dígitos('+');
        this.simbolos.push('+');
    }

    insertarMenos(){
        super.dígitos('-');
        this.simbolos.push('-');
    }

}

var calculadora = new CalculadoraAvanzada();