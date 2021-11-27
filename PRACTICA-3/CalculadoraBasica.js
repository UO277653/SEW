"use strict";
class Calculadora {

    constructor (){

        this.operacion = "";
        this.pantalla = "";
        this.memoria = 0;
        this.estaResuelto = false;

        this.teclado();
    }

    dígitos(digito){

        if (this.estaResuelto) {
            document.getElementById("textAreaResultado").textContent = "";
            this.estaResuelto = false;
            this.pantalla = ""
        }

        this.pantalla += digito;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    punto(){

        this.pantalla += ".";
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    suma(){

        this.pantalla += "+";
        this.estaResuelto = false;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    resta(){

        this.pantalla += "-";
        this.estaResuelto = false;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    multiplicación(){

        this.pantalla += "*";
        this.estaResuelto = false;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    división(){

        this.pantalla += "/";
        this.estaResuelto = false;
        document.getElementById("textAreaResultado").textContent = this.pantalla;
    }

    mrc(){

        var resultado = this.memoria;
        document.getElementById("textAreaResultado").textContent = resultado;

        this.estaResuelto = true
        this.pantalla = resultado;
        this.memoria = 0;
        
    }

    mMenos(){

        if (!isNaN(Number(document.getElementById("textAreaResultado").textContent))) {

            this.memoria = Number(this.memoria) - Number(document.getElementById("textAreaResultado").textContent);
            this.pantalla = "";
            
        }
    }

    mMas(){
        if (!isNaN(Number(document.getElementById("textAreaResultado").textContent))) {

            this.memoria = Number(this.memoria) + Number(document.getElementById("textAreaResultado").textContent);
            this.pantalla = "";
            
        }
    }

    borrar(){
        document.getElementById("textAreaResultado").textContent = "";
        this.pantalla = "";
    }

    igual(){

        this.operacion = eval(this.pantalla);
        this.pantalla = this.operacion;
        this.estaResuelto = true;

        document.getElementById("textAreaResultado").textContent = this.pantalla;
        
    }

    teclado() {
        document.addEventListener("keydown", (event) => {
            if (["+", "-", "*", "/", "."].some(el => event.key.includes(el))) {
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
                this.digitos(event.key)
            }
            else if (event.key == "Enter") {
                this.igual()
            }
        })
    };
}

var calculadora = new Calculadora();