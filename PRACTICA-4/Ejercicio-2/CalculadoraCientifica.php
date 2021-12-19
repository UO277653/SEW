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
    <p>Práctica PHP</p>

    <?php
        class CalculadoraBasica {

            protected $pantalla;
            protected $memoria;

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

        class CalculadoraCientífica extends CalculadoraBasica{

            function mr() {
                $this->pantalla = $this->memoria;
            }

            function ms() {
                $this->memoria = $this->pantalla;
            }

            function elevarCuadrado() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return pow($pantallaActual, 2) ;");
            }

            function xElevadoAY() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = $pantallaActual . "**";
            }

            function sin() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return sin($pantallaActual) ;");
            }

            function cos() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return cos($pantallaActual) ;");
            }

            function tan() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return tan($pantallaActual) ;");
            }

            function sec() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return 1/cos($pantallaActual) ;");
            }

            function csc() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return 1/sin($pantallaActual) ;");
            }

            function cot() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return 1/tan($pantallaActual) ;");
            }

            function raizCuadrada() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return sqrt($pantallaActual) ;");
            }

            function partidoDeUno() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return 1/$pantallaActual ;");
            }

            function invertir() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return - $pantallaActual ;");
            }

            function logN() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return log($pantallaActual) ;");
            }

            function log() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return log10($pantallaActual) ;");
            }

            function elevarDiez() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return pow(10, $pantallaActual) ;");
            }

            function factorial(){
                $pantallaActual = $this->getPantalla();
                $this->pantalla = $this->calcularFactorial(floatval($pantallaActual));
            }

            function calcularFactorial($numero) {
                $res = 1;
                for($i = 1; $i < $numero; $i++){
                    $res*=$i;
                }
                return $res;
            }

            function modulo() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = $pantallaActual . "%";
            }

            function pi() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = $pantallaActual . "3.14";
            }

            function exp() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return exp($pantallaActual) ;");
            }

            function valorAbsoluto(){
                $pantallaActual = $this->getPantalla();
                $this->pantalla = eval("return abs($pantallaActual) ;");
            }

            function retroceso() {
                $pantallaActual = $this->getPantalla();
                $this->pantalla = substr($pantallaActual, 0, -1);
            }

            function e(){
                $pantallaActual = $this->getPantalla();
                $this->pantalla = $pantallaActual . "2.72";
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
            if(isset($_POST['botonMR'])) $calculadora->mr();
            if(isset($_POST['botonMmenos'])) $calculadora->mMenos();
            if(isset($_POST['botonMmas'])) $calculadora->mMas();
            if(isset($_POST['botonMS'])) $calculadora->ms();
            
            if(isset($_POST['botonSin'])) $calculadora->sin();
            if(isset($_POST['botonCos'])) $calculadora->cos();
            if(isset($_POST['botonTan'])) $calculadora->tan();
            if(isset($_POST['botonSec'])) $calculadora->sec();
            if(isset($_POST['botonCsc'])) $calculadora->csc();

            if(isset($_POST['botonCot'])) $calculadora->cot();
            if(isset($_POST['botonPi'])) $calculadora->pi();
            if(isset($_POST['botonE'])) $calculadora->e();
            if(isset($_POST['botonC'])) $calculadora->borrar();
            if(isset($_POST['botonRetroceso'])) $calculadora->retroceso();

            if(isset($_POST['botonElevarCuadrado'])) $calculadora->elevarCuadrado();
            if(isset($_POST['botonPartidoUno'])) $calculadora->partidoDeUno();
            if(isset($_POST['botonAbsoluto'])) $calculadora->valorAbsoluto();
            if(isset($_POST['botonExp'])) $calculadora->exp();
            if(isset($_POST['botonModulo'])) $calculadora->modulo();

            if(isset($_POST['botonRaizCuadrada'])) $calculadora->raizCuadrada();
            if(isset($_POST['botonParentesisIzquierdo'])) $calculadora->dígitos('(');
            if(isset($_POST['botonParentesisDerecho'])) $calculadora->dígitos(')');
            if(isset($_POST['botonFactorial'])) $calculadora->factorial();
            if(isset($_POST['botonDivision'])) $calculadora->división();

            if(isset($_POST['botonXelevadoAY'])) $calculadora->xElevadoAY();
            if(isset($_POST['botonSiete'])) $calculadora->dígitos('7');
            if(isset($_POST['botonOcho'])) $calculadora->dígitos('8');
            if(isset($_POST['botonNueve'])) $calculadora->dígitos('9');
            if(isset($_POST['botonMultiplicacion'])) $calculadora->multiplicación();

            if(isset($_POST['botonDiezElevado'])) $calculadora->elevarDiez();
            if(isset($_POST['botonCuatro'])) $calculadora->dígitos('4');
            if(isset($_POST['botonCinco'])) $calculadora->dígitos('5');
            if(isset($_POST['botonSeis'])) $calculadora->dígitos('6');
            if(isset($_POST['botonMenos'])) $calculadora->resta();

            if(isset($_POST['botonLogaritmoDecimal'])) $calculadora->log();
            if(isset($_POST['botonUno'])) $calculadora->dígitos('1');
            if(isset($_POST['botonDos'])) $calculadora->dígitos('2');
            if(isset($_POST['botonTres'])) $calculadora->dígitos('3');
            if(isset($_POST['botonMas'])) $calculadora->suma();

            if(isset($_POST['botonLogaritmoNeperiano'])) $calculadora->logN();
            if(isset($_POST['botonInvertir'])) $calculadora->invertir();
            if(isset($_POST['botonCero'])) $calculadora->dígitos('0');
            if(isset($_POST['botonComa'])) $calculadora->punto();
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
                    <input id='botonDivision' type='submit' name='botonDivision' value='/'/>

                    <input id='botonXelevadoAY' type='submit' name='botonXelevadoAY' value='x^y'/>
                    <input id='botonSiete' type='submit' name='botonSiete' value='7'/>
                    <input id='botonOcho' type='submit' name='botonOcho' value='8'/>
                    <input id='botonNueve' type='submit' name='botonNueve' value='9'/>
                    <input id='botonMultiplicacion' type='submit' name='botonMultiplicacion' value='x'/>

                    <input id='botonDiezElevado' type='submit' name='botonDiezElevado' value='10^x'/>
                    <input id='botonCuatro' type='submit' name='botonCuatro' value='4'/>
                    <input id='botonCinco' type='submit' name='botonCinco' value='5'/>
                    <input id='botonSeis' type='submit' name='botonSeis' value='6'/>
                    <input id='botonMenos' type='submit' name='botonMenos' value='-'/>

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