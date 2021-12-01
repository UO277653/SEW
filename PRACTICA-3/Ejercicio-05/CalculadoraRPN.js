"use strict";
class CalculadoraRPN{

    constructor(){
        this.pantallaInferior = "";
        this.pila = new Pila();
    }

    dígitos(digito){

        this.pantallaInferior += digito;
        document.getElementById("textAreaPantallaInferior").textContent = this.pantallaInferior;
    }

    punto(){

        this.pantallaInferior += ".";
        document.getElementById("textAreaPantallaInferior").textContent = this.pantallaInferior;
    }

    enter(){
        this.pila.push(this.pantallaInferior);
        document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        document.getElementById("textAreaPantallaInferior").textContent = "";
        this.pantallaInferior = "";
    }

    suma(){
        if(this.pila.numeroDeElementos() >= 2){
            var n1 = this.pila.pop();
            var n2 = this.pila.pop();
            var res = parseFloat(n1) + parseFloat(n2);
            this.pila.push(res);
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    resta(){
        if(this.pila.numeroDeElementos() >= 2){
            var n1 = this.pila.pop();
            var n2 = this.pila.pop();
            var res = parseFloat(n2) - parseFloat(n1);
            this.pila.push(res);
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    multiplicacion(){
        if(this.pila.numeroDeElementos() >= 2){
            var n1 = this.pila.pop();
            var n2 = this.pila.pop();
            var res = parseFloat(n1) * parseFloat(n2);
            this.pila.push(res);
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    division(){
        if(this.pila.numeroDeElementos() >= 2){
            var n1 = this.pila.pop();
            var n2 = this.pila.pop();
            var res = parseFloat(n2) / parseFloat(n1);
            this.pila.push(res);
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    sin(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.sin(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    cos(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.cos(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    tan(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.tan(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    arcsin(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.asin(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    arccos(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.acos(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    arctan(){
        if(this.pila.numeroDeElementos() >= 1){
            var n1 = this.pila.pop();
            this.pila.push(Math.atan(n1));
            document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
        }
    }

    retroceder(){
        var nuevoValor = this.pantallaInferior.substring(0, this.pantallaInferior.length - 1);
        this.pantallaInferior = nuevoValor;
        document.getElementById("textAreaPantallaInferior").innerHTML = this.pantallaInferior;
    }

    borrar(){
        this.pila.vaciar();
        document.getElementById("textAreaPantallaSuperior").innerHTML = this.pila.mostrar();
    }
}

class Pila {
    constructor() {
        this.pila = new Array();
    }
    push(valor) {
        this.pila.push(valor);
    }

    pop() {
        return (this.pila.pop());
    }

    mostrar() {
        var contenido = ""
        var indice = this.pila.length;

        for (var i in this.pila){
            contenido += indice + ":" + this.pila[i]+"\n";
            indice--;
        }

        return contenido;
    }

    numeroDeElementos() {
        return this.pila.length;
    }

    vaciar() {
        for (var i = 0; i < numeroDeElementos(); i++)
            this.pila.pop();
    }
}

var calculadora = new CalculadoraRPN();