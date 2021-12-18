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
    <title>Ejercicio 3 - Calculadora RPN en PHP</title>

    <link rel="stylesheet" type="text/css" href="CalculadoraRPN.css" />
</head>

<body>
    <h1>Calculadora RPN</h1>
    <p>Práctica PHP</p>
    <?php
        class Pila {

            private $pila;

            function __construct() {
                $this->pila = array();
            }

            function push($valor) {
                array_unshift($this->pila, $valor);
            }

            function pop() {
                if ($this->vacia()) {
                    throw new RunTimeException('¡Pila vacía! No se pueden desapilar elementos');
                } else {
                    return array_shift($this->pila);
                }
            }

            function mostrar() {
                $contenido = "";
                $indice = $this->numeroDeElementos();

                for ($i = $indice; $i>0; $i--) {
                    $contenido .= $i . ":" . $this->pila[$i-1] . "\n";
                }

                return $contenido;
            }

            function numeroDeElementos() {
                return count($this->pila);
            }

            function vaciar() {
                $indice = $this->numeroDeElementos();

                for ($i = $indice; $i>0; $i--) {
                    $this->pop();
                }
            }

            function vacia() {
                return empty($this->pila);
            }
        }

        class CalculadoraRPN {

            private $pila;
            private $pantallaInferior;
            private $pantallaSuperior;

            function __construct(){
                $this->pantallaInferior = "";
                $this->pantallaSuperior = "";
                $this->pila = new Pila();
            }

            function dígitos($digito){

                $this->pantallaInferior .= $digito;
            }

            function punto(){

                $this->pantallaInferior .= ".";
            }

            function enter(){
                $this->pila->push($this->pantallaInferior);
                $this->pantallaSuperior = $this->pila->mostrar();
                $this->pantallaInferior = "";
            }

            function suma(){
                if($this->pila->numeroDeElementos() >= 2){
                    $n1 = $this->pila->pop();
                    $n2 = $this->pila->pop();
                    $res = floatval($n1) + floatval($n2);
                    $this->pila->push($res);
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function resta(){
                if($this->pila->numeroDeElementos() >= 2){
                    $n1 = $this->pila->pop();
                    $n2 = $this->pila->pop();
                    $res = floatval($n2) - floatval($n1);
                    $this->pila->push($res);
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function multiplicacion(){
                if($this->pila->numeroDeElementos() >= 2){
                    $n1 = $this->pila->pop();
                    $n2 = $this->pila->pop();
                    $res = floatval($n1) * floatval($n2);
                    $this->pila->push($res);
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function division(){
                if($this->pila->numeroDeElementos() >= 2){
                    $n1 = $this->pila->pop();
                    $n2 = $this->pila->pop();
                    $res = floatval($n2) / floatval($n1);
                    $this->pila->push($res);
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function sin(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(sin($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function cos(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(cos($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function tan(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(tan($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function arcsin(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(asin($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function arccos(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(acos($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function arctan(){
                if($this->pila->numeroDeElementos() >= 1){
                    $n1 = $this->pila->pop();
                    $this->pila->push(atan($n1));
                    $this->pantallaSuperior = $this->pila->mostrar();
                }
            }

            function retroceder(){
                $nuevoValor = substr($this->pantallaInferior, 0, -1);
                $this->pantallaInferior = $nuevoValor;
            }

            function borrar(){
                $this->pila->vaciar();
                $this->pantallaSuperior = $this->pila->mostrar();
            }

            function getPantallaInferior(){
                return $this->pantallaInferior;
            }

            function getPantallaSuperior(){
                return $this->pantallaSuperior;
            }
        }



        if(!isset($_SESSION['calculadoraRPN'])){
            $_SESSION['calculadoraRPN'] = new CalculadoraRPN();
        }

        $calculadora = $_SESSION['calculadoraRPN'];

        if (count($_POST)>0) 
        {   
            if(isset($_POST['botonArcSin'])) $calculadora->arcsin();
            if(isset($_POST['botonArcCos'])) $calculadora->arccos();
            if(isset($_POST['botonArcTan'])) $calculadora->arctan();
            if(isset($_POST['botonTan'])) $calculadora->tan();

            if(isset($_POST['botonSin'])) $calculadora->sin();
            if(isset($_POST['botonCos'])) $calculadora->cos();
            if(isset($_POST['botonRetroceder'])) $calculadora->retroceder();
            if(isset($_POST['botonEnter'])) $calculadora->enter();

            if(isset($_POST['botonSiete'])) $calculadora->dígitos('7');
            if(isset($_POST['botonOcho'])) $calculadora->dígitos('8');
            if(isset($_POST['botonNueve'])) $calculadora->dígitos('9');
            if(isset($_POST['botonDivision'])) $calculadora->division();

            if(isset($_POST['botonCuatro'])) $calculadora->dígitos('4');
            if(isset($_POST['botonCinco'])) $calculadora->dígitos('5');
            if(isset($_POST['botonSeis'])) $calculadora->dígitos('6');
            if(isset($_POST['botonMultiplicacion'])) $calculadora->multiplicacion();

            if(isset($_POST['botonUno'])) $calculadora->dígitos('1');
            if(isset($_POST['botonDos'])) $calculadora->dígitos('2');
            if(isset($_POST['botonTres'])) $calculadora->dígitos('3');
            if(isset($_POST['botonMenos'])) $calculadora->resta();

            if(isset($_POST['botonCero'])) $calculadora->dígitos('0');
            if(isset($_POST['botonComa'])) $calculadora->punto();
            if(isset($_POST['botonBorrar'])) $calculadora->borrar();
            if(isset($_POST['botonMas'])) $calculadora->suma();
        }

        $pantallaSuperior = $calculadora->getPantallaSuperior();
        $pantallaInferior = $calculadora->getPantallaInferior();


        echo " <form name='CalculadoraRPN' method='post'>
				<fieldset>
					<textarea disabled title='textAreaPantallaSuperior' id='textAreaPantallaSuperior'>$pantallaSuperior</textarea>
					<textarea disabled title='textAreaPantallaInferior' id='textAreaPantallaInferior'>$pantallaInferior</textarea>

					<input id='botonArcSin' type='submit' name='botonArcSin' value='asin'/>
					<input id='botonArcCos' type='submit' name='botonArcCos' value='acos'/>
					<input id='botonArcTan' type='submit' name='botonArcTan' value='atan'/>
					<input id='botonTan' type='submit' name='botonTan' value='tan'/>

					<input id='botonSin' type='submit' name='botonSin' value='sin'/>
					<input id='botonCos' type='submit' name='botonCos' value='cos'/>
					<input id='botonRetroceder' type='submit' name='botonRetroceder' value='Atrás'/>
					<input id='botonEnter' type='submit' name='botonEnter' value='Enter'/>
					

					<input id='botonSiete' type='submit' name='botonSiete' value='7'/>
					<input id='botonOcho' type='submit' name='botonOcho' value='8'/>
					<input id='botonNueve' type='submit' name='botonNueve' value='9'/>
					<input id='botonDivision' type='submit' name='botonDivision' value='/'/>

					
					<input id='botonCuatro' type='submit' name='botonCuatro' value='4'/>
					<input id='botonCinco' type='submit' name='botonCinco' value='5'/>
					<input id='botonSeis' type='submit' name='botonSeis' value='6'/>
					<input id='botonMultiplicacion' type='submit' name='botonMultiplicacion' value='*'/>

					
					<input id='botonUno' type='submit' name='botonUno' value='1'/>
					<input id='botonDos' type='submit' name='botonDos' value='2'/>
					<input id='botonTres' type='submit' name='botonTres' value='3'/>
					<input id='botonMenos' type='submit' name='botonMenos' value='-'/>

					
					<input id='botonCero' type='submit' name='botonCero' value='0'/>
					<input id='botonComa' type='submit' name='botonComa' value='.'/>
					<input id='botonBorrar' type='submit' name='botonBorrar' value='Borrar'/>
					<input id='botonMas' type='submit' name='botonMas' value='+'/>

				</fieldset>
			</form>";
    ?>
</body>
</html>