<?php
	session_start();
?>

<!DOCTYPE HTML>

<html lang="es">
<head>
    <!-- Datos que describen el documento -->
    <meta charset="UTF-8" />
    <meta name ="viewport" content ="width=device-width, initial scale=1.0" />
    <meta name="author" content="Stelian Adrian Stanci (UO277653)">
    <title>Ejercicio 1 - Calculadora Básica PHP</title>

    <link rel="stylesheet" type="text/css" href="CalculadoraBasica.css" />
</head>

<body>
    <h1>Calculadora básica</h1>
    <?php
        class CalculadoraBasica {

            private $pantalla;
            private $memoria;

            function __construct(){

                $this->pantalla = "";
                $this->memoria = 0;
            }

            function dígitos($digito){

                $this->pantalla .= $digito;
            }

            function punto(){

                $this->pantalla .= ".";
            }

            function suma(){

                $this->pantalla .= "+";
            }

            function resta(){

                $this->pantalla .= "-";
            }

            function multiplicación(){

                $this->pantalla .= "*";
            }

            function división(){

                $this->pantalla .= "/";
            }

            function mrc(){

                $this->pantalla = $this->memoria;
                $this->memoria = 0;
                
            }

            function mMenos(){

                try{
                    $this->memoria = $this->memoria - eval("return $this->pantalla ;");
                } catch(Error $e){
                    $this->pantalla = "Error: " .$e->getMessage();
                }
            }

            function mMas(){
                
                try{
                    $this->memoria = $this->memoria + eval("return $this->pantalla ;");
                } catch(Error $e){
                    $this->pantalla = "Error: " .$e->getMessage();
                }
            }

            function borrar(){
                $this->pantalla = "";
            }

            function igual(){

                try{
                    $this->pantalla = eval("return $this->pantalla ;");
                } catch(Error $e){
                    $this->pantalla = "Error: " .$e->getMessage();
                }
            }

            function getPantalla(){
                return $this->pantalla;
            }
        }

        if(!isset($_SESSION['calculadoraBasica'])){
            $_SESSION['calculadoraBasica'] = new CalculadoraBasica();
        }

        $calculadora = $_SESSION['calculadoraBasica'];

        if (count($_POST)>0) 
        {   
            if(isset($_POST['botonMrc'])) $calculadora->mrc();
            if(isset($_POST['botonMmenos'])) $calculadora->mMenos();
            if(isset($_POST['botonMmas'])) $calculadora->mMas();
            if(isset($_POST['botonDivision'])) $calculadora->división();
            if(isset($_POST['botonSiete'])) $calculadora->dígitos('7');
            if(isset($_POST['botonOcho'])) $calculadora->dígitos('8');
            if(isset($_POST['botonNueve'])) $calculadora->dígitos('9');
            if(isset($_POST['botonMultiplicacion'])) $calculadora->multiplicación();
            if(isset($_POST['botonCuatro'])) $calculadora->dígitos('4');
            if(isset($_POST['botonCinco'])) $calculadora->dígitos('5');
            if(isset($_POST['botonSeis'])) $calculadora->dígitos('6');
            if(isset($_POST['botonMenos'])) $calculadora->resta();
            if(isset($_POST['botonUno'])) $calculadora->dígitos('1');
            if(isset($_POST['botonDos'])) $calculadora->dígitos('2');
            if(isset($_POST['botonTres'])) $calculadora->dígitos('3');
            if(isset($_POST['botonMas'])) $calculadora->suma();
            if(isset($_POST['botonCero'])) $calculadora->dígitos('0');
            if(isset($_POST['botonComa'])) $calculadora->punto();
            if(isset($_POST['botonC'])) $calculadora->borrar();
            if(isset($_POST['botonIgual'])) $calculadora->igual();
        }

        $pantallaActual = $calculadora->getPantalla();

        echo " <form name='CalculadoraBasica' method='post'>
                <fieldset>
                    <textarea disabled title='Resultado' id='textAreaResultado'>$pantallaActual</textarea>
                    <input id='botonMrc' type='submit' name='botonMrc' value='mrc'/>
                    <input id='botonMmenos' type='submit' name='botonMmenos' value='m-'/>
                    <input id='botonMmas' type='submit' name='botonMmas' value='m+'/>
                    <input id='botonDivision' type='submit' name='botonDivision' value='/'/>
                    <input id='botonSiete' type='submit' name='botonSiete' value='7'/>
                    <input id='botonOcho' type='submit' name='botonOcho' value='8'/>
                    <input id='botonNueve' type='submit' name='botonNueve' value='9'/>
                    <input id='botonMultiplicacion' type='submit' name='botonMultiplicacion' value='*'/>
                    <input id='botonCuatro' type='submit' name='botonCuatro' value='4'/>
                    <input id='botonCinco' type='submit' name='botonCinco' value='5'/>
                    <input id='botonSeis' type='submit' name='botonSeis' value='6'/>
                    <input id='botonMenos' type='submit' name='botonMenos' value='-'/>
                    <input id='botonUno' type='submit' name='botonUno' value='1'/>
                    <input id='botonDos' type='submit' name='botonDos' value='2'/>
                    <input id='botonTres' type='submit' name='botonTres' value='3'/>
                    <input id='botonMas' type='submit' name='botonMas' value='+'/>
                    <input id='botonCero' type='submit' name='botonCero' value='0'/>
                    <input id='botonComa' type='submit' name='botonComa' value='.'/>
                    <input id='botonC' type='submit' name='botonC' value='C'/>
                    <input id='botonIgual' type='submit' name='botonIgual' value='='/>
                </fieldset>
            </form>";

    ?>
</body>
</html>




