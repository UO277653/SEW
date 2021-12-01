"use strict";
class CalculadoraCientífica extends Calculadora{

    constructor (){

        super();

        this.operando1 = 0;
        this.operando2 = 0;

        this.teclado();
    }

    mrc() {
        this.memoria = "";
    }

    mr() {
        document.getElementById("textAreaResultado").textContent = this.memoria;
        this.operacion = this.memoria;
        this.pantalla = this.memoria;
    }

    ms() {
        if (!isNaN(document.getElementById("textAreaResultado").textContent))
            this.memoria = document.getElementById("textAreaResultado").textContent;
    }

    elevarCuadrado() {
        this.operacion = Math.pow(new Number(this.operacion), 2);
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    xElevadoAY() {
        this.operando1 = new Number(this.operacion)
        this.operacion = "";
        this.operador = "**";
        this.pantalla += "^";
        Math.document.getElementById("textAreaResultado").textContent = this.operacionMostrada;
    }

    sin() {
        this.operacion = Math.sin(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    cos() {
        this.operacion = Math.cos(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    tan() {
        this.operacion = Math.tan(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    sec() {
        this.operacion = Math.asin(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    csc() {
        this.operacion = Math.acos(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    cot() {
        this.operacion = Math.atan(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    raizCuadrada() {
        this.operacion = Math.sqrt(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    partidoDeUno() {
        this.operacion = 1/new Number(this.operacion);
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    invertir() {
        this.operacion = -new Number(this.operacion);
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    logN() {
        this.operacion = Math.log(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    log() {
        this.operacion = Math.log10(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    elevarDiez() {
        this.operacion = Math.pow(10, new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    factorial(){
        
        this.operacion = this.calcularFactorialRecursivo(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    calcularFactorialRecursivo(numero) {
        var resultado = [];
        if (numero == 0 || numero == 1)
            return 1;
        if (resultado[numero] > 0)
            return resultado[numero];
        return resultado[numero] = this.factorial(numero-1) * numero;
    }

    modulo() {
        this.operando1 = new Number(this.operacion)
        this.operacion = "";
        this.operador = "%"
        this.pantalla += "Mod";
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    pi() {
        this.operacion += Math.PI;
        this.pantalla += "π";
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    exp() {
        this.operacion = Math.exp(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    valorAbsoluto(){
        this.operacion = Math.abs(new Number(this.operacion));
        this.pantalla = this.operacion;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    retroceso() {
        var nuevoString = this.operacion.substring(0, this.operacion.length - 1);
        this.operacion = nuevoString;
        nuevoString = this.pantalla.substring(0, this.pantalla.length - 1);
        this.pantalla = nuevoString;
        document.getElementById("textAreaResultado").textContent = nuevoString;
        
    }

    e(){
        this.operacion +=Math.E;
        this.pantalla +="e";
        document.getElementById("textAreaResultado").textContent = this.operacionMostrada;
    }
}

var calculadora = new CalculadoraCientífica();