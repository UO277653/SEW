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
    <title>Ejercicio 2 - Calculadora Científica PHP</title>

    <link rel="stylesheet" type="text/css" href="CalculadoraCientifica.css" />
</head>

<body>
    <h1>Calculadora científica</h1>
    <p>Práctica JavaScript</p>

    <?php
        class Calculadora {

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

        class CalculadoraCientífica extends Calculadora{

            private $operando1;
            private $operando2;

            function __construct(){

                parent::__construct();

                $this->operando1 = 0;
                $this->operando2 = 0;
            }

            function mrc() {
                $this->memoria = "";
            }

            function mr() {
                $this->operacion = $this->memoria;
                $this->pantalla = $this->memoria;
            }

            function ms() {
                if (!isNaN($this->pantalla))
                    $this->memoria = $this->pantalla;
            }

            function elevarCuadrado() {
                $this->operacion = pow(new Number($this->operacion), 2);
                $this->pantalla = $this->operacion;
            }

            function xElevadoAY() {
                $this->operando1 = new Number($this->operacion);
                $this->operacion = "";
                $this->simbolo = "**";
                $this->pantalla += "^";
            }

            function sin() {
                $this->operacion = sin(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function cos() {
                $this->operacion = cos(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function tan() {
                $this->operacion = tan(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function sec() {
                $this->operacion = asin(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function csc() {
                $this->operacion = acos(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function cot() {
                $this->operacion = atan(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function raizCuadrada() {
                $this->operacion = sqrt(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function partidoDeUno() {
                $this->operacion = 1/new Number($this->operacion);
                $this->pantalla = $this->operacion;
            }

            function invertir() {
                $this->operacion = -new Number($this->operacion);
                $this->pantalla = $this->operacion;
            }

            function logN() {
                $this->operacion = log(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function log() {
                $this->operacion = log10(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function elevarDiez() {
                $this->operacion = pow(10, new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function factorial(){
                
                $this->operacion = $this->calcularFactorial(new Number($this->pantalla));
                $this->pantalla = $this->operacion;
            }

            function calcularFactorial($numero) {
                $res = 1;
                for($i = 1; $i < valueOf($numero); $i++){
                    $res*=$i;
                }
                return $res;
            }

            function modulo() {
                $this->operando1 = new Number($this->operacion);
                $this->operacion = "";
                $this->simbolo = "%";
                $this->pantalla += "Mod";
            }

            function pi() {
                $this->operacion += 3.14; // CAMBIAR
                $this->pantalla += "π";
            }

            function exp() {
                $this->operacion = exp(new Number($this->operacion));
                $this->pantalla = $this->operacion;
            }

            function valorAbsoluto(){
                $this->operacion = abs(new Number($this->pantalla));
                $this->pantalla = $this->operacion;
            }

            function retroceso() {
                $nuevoString = $this->operacion.substring(0, $this->operacion->length - 1);
                $this->operacion = $nuevoString;
                $nuevoString = $this->pantalla.substring(0, $this->pantalla->length - 1);
                $this->pantalla = $nuevoString;
            }

            function e(){
                $this->operacion += 2.72; // CAMBIAR
                $this->pantalla +="e";
            }
        }

        if(!isset($_SESSION['calculadoraCientifica'])){
            $_SESSION['calculadoraCientifica'] = new CalculadoraCientífica();
        }

        $calculadora = $_SESSION['calculadoraCientifica'];

        // isset
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

        // pantalla
        $pantallaActual = $calculadora->getPantalla();

        echo " <form name='CalculadoraCientifica'  method='post'>
                <fieldset>
                    <textarea disabled title='Resultado' id='textAreaResultado' >$pantallaActual</textarea>

                    <input id='botonMrc' type='submit' name='botonMrc' value='mrc'/>
                    <input id='botonMR' type='submit' name='botonMR' value='MR'/>
                    <input id='botonMmas' type='submit' name='botonMmas' value='M+'/>
                    <input id='botonMmenos' type='submit' name='botonMmenos' value='M-'/>
                    <input id='botonMS' type='submit' name='botonMS' value='MS'/>
                    
                    <input id='botonSin' type='submit' name='botonSin' value='sin'/>
                    <input id='botonCos' type='submit' name='botonCos' value='cos'/>
                    <input id='botonTan' type='submit' name='botonTan' value='tan'/>

                    <input id='botonSec' type='submit' name='botonSec' value='sec'/>
                    <input id='botonCsc' type='submit' name='botonCsc' value='csc'/>
                    <input id='botonCot' type='submit' name='botonCot' value='cot'/>

                    <input id='botonPi' type='submit' name='botonPi' value='π'/>
                    <input id='botonE' type='submit' name='botonE' value='e'/>
                    <input id='botonC' type='submit' name='botonC' value='C'/>
                    <input id='botonRetroceso' type='submit' name='botonRetroceso' value='Retroceder'/>

                    <input id='botonElevarCuadrado' type='submit'  name='botonElevarCuadrado' value='x^2'/>
                    <input id='botonPartidoUno' type='submit' name='botonPartidoUno' value='1/x'/>
                    <input id='botonAbsoluto' type='submit' name='botonAbsoluto' value='|x|'/>
                    <input id='botonExp' type='submit' name='botonExp' value='exp'/>
                    <input id='botonModulo' type='submit' name='botonModulo' value='mod'/>

                    <input id='botonRaizCuadrada' type='submit' name='botonRaizCuadrada' value=&#x221A;/>
                    <input id='botonParentesisIzquierdo' type='submit' name='botonParentesisIzquierdo' value='('/>
                    <input id='botonParentesisDerecho' type='submit' name='botonParentesisDerecho' value=')'/>
                    <input id='botonFactorial' type='submit' name='botonFactorial' value='n!'/>
                    <input id='botonDivision' type='submit' name='botonDivision' value=&#xF7;/>

                    <input id='botonXelevadoAY' type='submit' name='botonXelevadoAY' value='x^y'/>
                    <input id='botonSiete' type='submit' name='botonSiete' value='7'/>
                    <input id='botonOcho' type='submit' name='botonOcho' value='8'/>
                    <input id='botonNueve' type='submit' name='botonNueve' value='9'/>
                    <input id='botonMultiplicacion' type='submit' name='botonMultiplicacion' value='x'/>

                    <input id='botonDiezElevado' type='submit' name='botonDiezElevado' value='10^x'/>
                    <input id='botonCuatro' type='submit' name='botonCuatro' value='4'/>
                    <input id='botonCinco' type='submit' name='botonCinco' value='5'/>
                    <input id='botonSeis' type='submit' name='botonSeis' value='6'/>
                    <input id='botonMenos' type='submit' name='botonMenos' value='-''/>

                    <input id='botonLogaritmoDecimal' type='submit' name='botonLogaritmoDecimal' value='log'/>
                    <input id='botonUno' type='submit' name='botonUno' value='1'/>
                    <input id='botonDos' type='submit' name='botonDos' value='2'/>
                    <input id='botonTres' type='submit' name='botonTres' value='3'/>
                    <input id='botonMas' type='submit' name='botonMas' value='+'/>
                    
                    <input id='botonLogaritmoNeperiano' type='submit' name='botonLogaritmoNeperiano' value='ln'/>
                    <input id='botonInvertir' type='submit' name='botonInvertir' value='+/-'/>
                    <input id='botonCero' type='submit' name='botonCero' value='0'/>
                    <input id='botonComa' type='submit' name='botonComa' value=','/>
                    <input id='botonIgual' type='submit' name='botonIgual' value='='/>
                </fieldset>
            </form>";
    ?>
</body>
</html>