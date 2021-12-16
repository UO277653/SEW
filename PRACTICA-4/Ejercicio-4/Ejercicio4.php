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
    <title>Ejercicio 4</title>

    <link rel="stylesheet" type="text/css" href="Ejercicio4.css" />
</head>

<body>
    <h1>Ejercicio 4 - Consumo de servicios Web de precios del cobre</h1>

    <section> 
        <h2>
            El cobre es uno de los metales que mejor conducen la electricidad (sólo lo supera la plata). Gracias a esto, a su ductilidad y a su maleabilidad, se ha convertido en el material más utilizado para fabricar cables eléctricos y otros elementos eléctricos y componentes electrónicos. Otra propiedad importante con la que cuenta es que puede ser reciclado sin perder ninguna de sus propiedades. Se lleva utilizando desde la prehistoria, ya que al hacer una aleación entre este metal y el estaño obtenemos el bronce, que fue útil para la realización de varias herramientas. A lo largo de la historia se fue utilizando también para hacer campanas, monedas y cañones. Hoy en día, el cobre sigue teniendo muchos usos (es el tercer metal más usado del mundo, sólo por detrás del hierro y el aluminio), como en la fabricación de utensilios de cocina, en algunas partes de los medios de transporte, decoraciones o para transmitir datos. Todo esto influye en el precio del cobre, el cual se muestra a continuación, comparado con varias monedas. Los datos se han obtenido a través de la API Metals-API, y los precios son por unidad de onza.
        </h2>
        <picture>
            <img src="multimedia/cobre.jpg" alt="Imagen de unos tubos de cobre" />
        </picture>
    </section>

    <?php
        class ServiciosCobre {

            private $apikey = "vbocd4c9k6gllidd1ae5t0uj9h0szmpyl37sbfrb72udfmte6n89hip46x5k";
            private $datos;
            private $url = "https://www.metals-api.com/api/latest?access_key=";
            
            function __construct() {
                
                
                $this->url .=  $this->apikey;
                $this->url .= "&base=XCU";
                $this->cargarDatos();
            }

            function cargarDatos(){
                $this->datos = file_get_contents($this->url);
                $json = json_decode($this->datos);

                if($json==null) {
                    echo "<p>Error en el archivo JSON recibido</p>";
                }
                else {
                    echo "<p>Los datos han sido cargados correctamente</p>";
                }

                echo "<ul>";
                echo "<li> Los datos fueron recibidos en esta fecha: " . $json->date . "</li>";
                echo "<li> Precio en euros: " . $json->rates->EUR . "</li>";
                echo "<li> Precio en libras esterlinas: " . $json->rates->GBP . "</li>";
                echo "<li> Precio en dólares: " . $json->rates->USD . "</li>";
                echo "<li> Precio en yen japonés: " . $json->rates->JPY . "</li>";
                echo "<li> Precio en leu rumano: " . $json->rates->RON . "</li>";
                echo "<li> Precio en rublo ruso: " . $json->rates->RUB . "</li>";
                echo "<li> Precio en dírham de los EAU: " . $json->rates->AED . "</li>";
                echo "<li> Precio en bitcoin: " . $json->rates->BTC . "</li>";
                echo "</ul>";
            }
        }

        $servicios = new ServiciosCobre();
    ?>
</body>
</html>