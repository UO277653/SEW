"use strict";
class Calculadora {

    constructor (){

        this.op1 = 0;
        this.op2 = 0;
        this.simbolo = "";

        this.operacion = "";
        this.pantalla = "";
        this.memoria = 0;
        this.estaResuelto = false;
        this.teclado();
    }

    dígitos(digito){

        if (this.estaResuelto) {
            document.getElementById("textAreaResultado").textContent = "";
            
            this.pantalla = "";
            this.operacion = "";
            this.estaResuelto = false;
            
        }

        this.pantalla += digito;
        this.operacion += digito;

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    punto(){

        this.pantalla += ".";
        this.operacion += digito;

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    suma(){

        this.op1 = new Number(this.operacion);
        this.estaResuelto = false;
        this.pantalla += "+";
        this.operacion = "";
        this.simbolo+= "+";

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    resta(){

        this.op1 = new Number(this.operacion);
        this.estaResuelto = false;
        this.pantalla += "-";
        this.operacion = "";
        this.simbolo+= "-";

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    multiplicación(){

        this.op1 = new Number(this.operacion);
        this.estaResuelto = false;
        this.pantalla += "*";
        this.operacion = "";
        this.simbolo+= "*";

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    división(){

        this.op1 = new Number(this.operacion);
        this.estaResuelto = false;
        this.pantalla += "/";
        this.operacion = "";
        this.simbolo+= "/";

        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    mrc(){

        var resultado = this.memoria;
        document.getElementById("textAreaResultado").textContent = resultado;

        this.operacion = resultado;
        this.estaResuelto = true;
        this.pantalla = resultado;
        this.memoria = 0;
        
    }

    mMenos(){

        if (!isNaN(Number(document.getElementById("textAreaResultado").textContent))) {

            this.memoria = Number(this.memoria) - Number(document.getElementById("textAreaResultado").textContent);
            this.pantalla = "";
            this.operacion = "";
        }
    }

    mMas(){
        if (!isNaN(Number(document.getElementById("textAreaResultado").textContent))) {

            this.memoria = Number(this.memoria) + Number(document.getElementById("textAreaResultado").textContent);
            this.pantalla = "";
            this.operacion = "";
            
        }
    }

    borrar(){
        document.getElementById("textAreaResultado").textContent = "";
        this.pantalla = "";
        this.op1 = 0;
        this.op2 = 0;
        this.operacion = "";
        this.simbolo = "";
    }

    igual(){
        this.op2 = new Number(this.operacion)
        this.operacion = eval(this.op1 + this.simbolo + this.op2);
        this.simbolo = "";
        this.pantalla = this.operacion;
        this.estaResuelto = true;

        document.getElementById("textAreaResultado").textContent = this.pantalla;
        
    }

    teclado() {
        document.addEventListener("keydown", (event) => {
            if (["*", "/", "-", "+", "."].some(el => event.key.includes(el))) {
                switch (event.key) {
                    case "+":
                        this.suma()
                        break;
                    case "-":
                        this.resta()
                        break;
                    case "*":
                        this.multiplicación()
                        break;
                    case "/":
                        this.división()
                        break;
                    case ".":
                        this.punto()
                        break;
                }
            }
            else if (!isNaN(event.key)) {
                this.dígitos(event.key)
            }
            else if (event.key == "Enter") {
                this.igual()
            }
        })
    };
}

var calculadora = new Calculadora();