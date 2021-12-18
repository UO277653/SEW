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
    <title>Ejercicio 6</title>

    <link rel="stylesheet" type="text/css" href="Ejercicio6.css" />
</head>

<body>
    <h1>Ejercicio 6</h1>
    <nav>
            <a title="Crear base de datos" accesskey="C" tabindex="1" href="#crearBase">Crear base de datos</a>
            <a title="Crear tabla" accesskey="T" tabindex="2" href="#crearTabla">Crear tabla</a>
            <a title="Insertar datos" accesskey="I" tabindex="3" href="#insertarFila">Insertar datos</a>
            <a title="Buscar datos" accesskey="B" tabindex="4" href="#buscarDatos">Buscar datos</a>
            <a title="Modificar datos" accesskey="M" tabindex="5" href="#modificarFila">Modificar datos</a>
            <a title="Eliminar datos" accesskey="E" tabindex="6" href="#borrarDatos">Eliminar datos</a>
            <a title="Generar informe" accesskey="G" tabindex="7" href="#generarInforme">Generar informe</a>
            <a title="Exportar a CSV" accesskey="X" tabindex="8" href="#exportarDatos">Exportar a CSV</a>
            <a title="Importar CSV" accesskey="B" tabindex="9" href="#importarDatos">Importar CSV</a>
        </nav>
    <section > <a id="crearBase"></a>
        <h2>
            Crear la base de datos
        </h2>
        <form name='crearBase' method='post'>
            <fieldset>
                <input id='botonCrearBase' type='submit' name='botonCrearBase' value='Crear base de datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="crearTabla"></a>
        <h2>
            Crear la tabla PruebasUsabilidad
        </h2>
        <form name='crearTabla' method='post'>
            <fieldset>
                <input id='botonCrearTabla' type='submit' name='botonCrearTabla' value='Crear tabla'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="insertarFila"></a>
        <h2>
             Insertar una fila en la tabla
        </h2>
        <form name='insertarFila' method='post' action="Ejercicio6.php">
            <fieldset>
                <p>DNI:<input type="text" name="dni" /> </p>
                <p>Nombre: <input type="text" name="nombre" /> </p>
                <p>Apellidos: <input type="text" name="apellidos" /></p>
                <p>Email: <input type="text" name="email" /></p>
                <p>Teléfono: <input type="text" name="telefono" /></p>
                <p>Edad: <input type="number" name="edad" /></p>
                <p>Sexo: <input type="text" name="sexo" /></p>
                <p>Nivel de pericia informática: <input type="number" name="pericia" /></p>
                <p>Tiempo: <input type="number" name="tiempo" /></p>
                <p>Tarea realizada correctamente (SI/NO): <input type="text" name="correctamente" /></p>
                <p>Comentarios: <input type="text" name="comentarios" /></p>
                <p>Propuestas de mejora: <input type="text" name="propuestas" /></p>
                <p>Valoración: <input type="number" name="valoracion" /></p>
                <input id='botoninsertarFila' type='submit' name='botoninsertarFila' value='Insertar fila'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarDatos"></a>
        <h2>
             Buscar datos de una persona en la tabla
        </h2>
        <form name='buscarDatos' method='post' action="Ejercicio6.php">
            <fieldset>
                <p>DNI:<input type="text" name="dniBuscar" /> </p>
                <input id='botonBuscarDatos' type='submit' name='botonBuscarDatos' value='Buscar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="modificarFila"></a>
        <h2>
             Modifica los datos de una fila
        </h2>
        <form name='modificarFila' method='post' action="Ejercicio6.php">
            <fieldset>
                <p>DNI a modificar:<input type="text" name="dniParam" /> </p>
                <p>DNI:<input type="text" name="dniModificado" /> </p>
                <p>Nombre: <input type="text" name="nombreModificado" /> </p>
                <p>Apellidos: <input type="text" name="apellidosModificado" /></p>
                <p>Email: <input type="text" name="emailModificado" /></p>
                <p>Teléfono: <input type="text" name="telefonoModificado" /></p>
                <p>Edad: <input type="number" name="edadModificado" /></p>
                <p>Sexo: <input type="text" name="sexoModificado" /></p>
                <p>Nivel de pericia informática: <input type="number" name="periciaModificado" /></p>
                <p>Tiempo: <input type="number" name="tiempoModificado" /></p>
                <p>Tarea realizada correctamente (SI/NO): <input type="text" name="correctamenteModificado" /></p>
                <p>Comentarios: <input type="text" name="comentariosModificado" /></p>
                <p>Propuestas de mejora: <input type="text" name="propuestasModificado" /></p>
                <p>Valoración: <input type="number" name="valoracionModificado" /></p>
                <input id='botonModificarFila' type='submit' name='botonModificarFila' value='Modificar fila'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="borrarDatos"></a>
        <h2>
             Borrar datos de una persona en la tabla
        </h2>
        <form name='borrarDatos' method='post' action="Ejercicio6.php">
            <fieldset>
                <p>DNI:<input type="text" name="dniBorrar" /> </p>
                <input id='botonBorrarDatos' type='submit' name='botonBorrarDatos' value='Borrar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="generarInforme"></a>
        <h2>
            Generar el informe de estadísticas
        </h2>
        <form name='generarInforme' method='post'>
            <fieldset>
                <input id='botonGenerarInforme' type='submit' name='botonGenerarInforme' value='Generar informe'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="exportarDatos"></a>
        <h2>
            Exportar los datos a un fichero CSV
        </h2>
        <form name='exportarDatos' method='post'>
            <fieldset>
                <input id='botonExportarDatos' type='submit' name='botonExportarDatos' value='Exportar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="importarDatos"></a>
        <h2>
            Importar los datos desde un fichero CSV
        </h2>
        <form name='importarDatos' action='#' method='post' enctype='multipart/form-data'>
            <fieldset>
                <input id='archivoACargar' type='file' name='archivoACargar'/>
                <input id='botonImportarDatos' type='submit' name='botonImportarDatos' value='Importar datos'/>
            </fieldset>
		</form>
    </section>

    <?php
        class BaseDatos {

            private $servername;
            private $username;
            private $password;

            function __construct() {
                $this->servername = "localhost";
                $this->username = "DBUSER2021";
                $this->password = "DBPSWD2021";
            }
            
            function crearBaseDatos(){

                // Conexión al SGBD local con XAMPP con el usuario creado 
                $db = new mysqli($this->servername,$this->username,$this->password);
                
                //comprobamos conexión
                if($db->connect_error) {
                    exit ("<p>ERROR de conexión:".$db->connect_error."</p>");  
                } else {echo "<p>Conexión establecida con " . $db->host_info . "</p>";}
        
                $cadenaSQL = "CREATE DATABASE IF NOT EXISTS ejercicio6 COLLATE utf8_spanish_ci";

                if($db->query($cadenaSQL) === TRUE){
                    echo "<p>Base de datos creada con éxito</p>";
                } else { 
                    echo "<p>ERROR en la creación de la Base de Datos 'agenda'. Error: " . $db->error . "</p>";
                    exit();
                }   

                //cerrar la conexión
                $db->close();
            }

            function crearTabla(){
                $database = "ejercicio6";

                // Conexión al SGBD local con XAMPP con el usuario creado 
                $db = new mysqli($this->servername,$this->username,$this->password);
                             
                //selecciono la base de datos AGENDA para utilizarla
                $db->select_db($database);
    
                // se puede abrir y seleccionar a la vez
                //$db = new mysqli($servername,$username,$password,$database);
    
                //Crear la tabla persona DNI, Nombre, Apellido
                $crearTabla = "CREATE TABLE IF NOT EXISTS PruebasUsabilidad (
                    DNI varchar(9) NOT NULL,
                    Nombre varchar(255) NOT NULL,
                    Apellidos varchar(255) NOT NULL,
                    Email varchar(255) NOT NULL,
                    Telefono varchar(12) NOT NULL,
                    Edad int(11) NOT NULL,
                    Sexo varchar(15) NOT NULL,
                    Nivel_Pericia_Informatica int(11) NOT NULL,
                    Tiempo int(11) NOT NULL,
                    Tarea_realizada_correctamente varchar(2) NOT NULL,
                    Comentarios varchar(255) NOT NULL,
                    Propuestas_de_mejora varchar(255) NOT NULL,
                    Valoración int(11) NOT NULL
                  )";
                          
                if($db->query($crearTabla) === TRUE){
                    echo "<p>Tabla 'persona' creada con éxito </p>";
                 } else { 
                    echo "<p>ERROR en la creación de la tabla persona. Error : ". $db->error . "</p>";
                    exit();
                 }   
                //cerrar la conexión
                $db->close();
            }

            function insertarDatos(){
                $database = "ejercicio6";

                // Conexión al SGBD local con XAMPP con el usuario creado 
                $db = new mysqli($this->servername,$this->username,$this->password,$database);
    
                // comprueba la conexion
                if($db->connect_error) {
                    exit ("<h2>ERROR de conexión:".$db->connect_error."</h2>");  
                } else {echo "<h2>Conexión establecida</h2>";}
      
                //prepara la sentencia de inserción
                $consultaPre = $db->prepare("INSERT INTO PruebasUsabilidad (DNI, Nombre, Apellidos, Email, Telefono, Edad, Sexo, Nivel_Pericia_Informatica, Tiempo, Tarea_realizada_correctamente, Comentarios, Propuestas_de_mejora, Valoración) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");   
            
                //añade los parámetros de la variable Predefinida $_POST
                // sss indica que se añaden 3 string
                $consultaPre->bind_param('sssssisiisssi', 
                        $_POST["dni"],$_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["telefono"], $_POST["edad"], $_POST["sexo"], $_POST["pericia"], $_POST["tiempo"], $_POST["correctamente"], $_POST["comentarios"], $_POST["propuestas"], $_POST["valoracion"]);    
    
                //ejecuta la sentencia
                $consultaPre->execute();
    
                //muestra los resultados
                echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                 //cierra la base de datos
                $db->close();   
            }

            function buscarDatos(){

                $database = "ejercicio6";

                // Conexión al SGBD local. En XAMPP el usuario debe estar creado previamente 
                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                // compruebo la conexion
                if($db->connect_error) {
                    exit ("<p>ERROR de conexión:".$db->connect_error."</p>");  
                } else {echo "<p>Conexión establecida con " . $db->host_info . "</p>";}
      
                $consultaPre = $db->prepare('SELECT * FROM PruebasUsabilidad WHERE DNI = ?');
                $consultaPre->bind_param('s', $_POST["dniBuscar"]);
                $consultaPre->execute();
                $resultado =  $consultaPre->get_result();
                  
                // compruebo los datos recibidos     
                if ($resultado->num_rows > 0) {
                      // Mostrar los datos en un lista
                      echo "<p>Los datos en la tabla 'persona' son: </p>";
                      echo "<p>Número de filas = " . $resultado->num_rows . "</p>";
                      echo "<ul>";
                      echo "<li>". 'id' . " - " . 'dni' ." - ". 'nombre' ." - ". 'apellidos' ."</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['DNI'] . " - " . $row['Nombre']." - ". $row['Apellidos']."</li>"; 
                      }
                      echo "</ul>";
                  } else {
                      echo "<p>Tabla vacía. Número de filas = " . $resultado->num_rows . "</p>";
                  }          
              //cerrar la conexión
              $db->close(); 
            }

            function modificarDatos(){
                $database = "ejercicio6";

                // Conexión al SGBD local con XAMPP con el usuario creado 
                $db = new mysqli($this->servername,$this->username,$this->password,$database);
    
                // comprueba la conexion
                if($db->connect_error) {
                    exit ("<h2>ERROR de conexión:".$db->connect_error."</h2>");  
                } else {echo "<h2>Conexión establecida</h2>";}
      
                //prepara la sentencia de inserción
                $consultaPre = $db->prepare("UPDATE PruebasUsabilidad SET DNI = ?, Nombre = ?, Apellidos = ? , Email = ?, Telefono = ?, Edad = ?, Sexo = ?, Nivel_Pericia_Informatica = ?, Tiempo = ?, Tarea_realizada_correctamente = ?, Comentarios = ?, Propuestas_de_mejora = ?, Valoración = ? WHERE DNI = ?");   
            
                //añade los parámetros de la variable Predefinida $_POST
                // sss indica que se añaden 3 string
                $consultaPre->bind_param('sssssisiisssis', 
                        $_POST["dniModificado"],$_POST["nombreModificado"], $_POST["apellidosModificado"], $_POST["emailModificado"], $_POST["telefonoModificado"], $_POST["edadModificado"], $_POST["sexoModificado"], $_POST["periciaModificado"], $_POST["tiempoModificado"], $_POST["correctamenteModificado"], $_POST["comentariosModificado"], $_POST["propuestasModificado"], $_POST["valoracionModificado"], $_POST["dniParam"]);    
    
                //ejecuta la sentencia
                $consultaPre->execute();
    
                //muestra los resultados
                echo "<p>Filas modificadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                 //cierra la base de datos
                $db->close();   
            }

            function eliminarDatos(){
                $database = "ejercicio6";
 
                // Conexión al SGBD local con el usuario creado previamente en XAMPP
                $db = new mysqli($this->servername,$this->username,$this->password,$database);
     
                // compruebo la conexion
                if($db->connect_error) {
                        exit ("<h2>ERROR de conexión:".$db->connect_error."</h2>");  
                } else {echo "<h2>Conexión establecida</h2>";}
     
                //prepara la consulta
                $consultaPre = $db->prepare("SELECT * FROM PruebasUsabilidad WHERE DNI = ?");   
            
                //obtiene los parámetros de la variable predefinida $_POST
                // s indica que dni es un string
                $consultaPre->bind_param('s', $_POST["dniBorrar"]);    
    
                //ejecuta la consulta
                $consultaPre->execute();
    
                //guarda los resultados como un objeto de la clase mysqli_result
                $resultado = $consultaPre->get_result();
    
                //Visualización de los resultados de la búsqueda
                 if ($resultado->fetch_assoc()!=NULL) {
                    echo "<p>Las filas de la tabla 'persona' que van a ser eliminadas son:</p>";
                    $resultado->data_seek(0); //Se posiciona al inicio del resultado de búsqueda
                    while($fila = $resultado->fetch_assoc()) {
                        echo "<p>" . "id = " . " / dni = " . $fila["DNI"] . " / nombre = ".$fila['Nombre']." / apellidos = ". $fila['Apellidos'] . "</p>"; 
                    } 
                echo "</ul>";
    
                //Realiza el borrado
                //prepara la sentencia SQL de borrado
                $consultaPre = $db->prepare("DELETE FROM PruebasUsabilidad WHERE DNI = ?");   
                //obtiene los parámetros de la variable almacenada
                $consultaPre->bind_param('s', $_POST["dniBorrar"]);    
                //ejecuta la consulta
                $consultaPre->execute();
                // cierra la consulta
                $consultaPre->close();
                echo "<p>Borrados los datos</p>";               
                } 
                else {
                    echo "<p>Búsqueda sin resultados. No se ha borrado nada</p>";
                }

                //cerrar la conexión
                $db->close();
            }

            function generarInforme(){

                // Dato total de usuarios
                $numeroUsuarios = $this->obtenerNumeroUsuarios();

                if($numeroUsuarios == 0){
                    echo "<p> No hay un número de usuarios suficientes como para hacer el informe </p>";
                } else{
                    // Edad media de los usuarios
                    $edadMediaUsuarios = $this->obtenerValorMedioDe("Edad");

                    // Frecuencia del % de cada tipo de sexo entre los usuarios
                    $numeroUsuariosMasculino = $this->obtenerNumeroUsuariosMasculino();
                    $porcentajeNumeroUsuariosMasculino = ($numeroUsuariosMasculino / $numeroUsuarios) * 100;

                    $numeroUsuariosFemenino = $this->obtenerNumeroUsuariosFemenino();
                    $porcentajeNumeroUsuariosFemenino = ($numeroUsuariosFemenino / $numeroUsuarios) * 100;

                    // Valor medio del nivel o pericia informática de los usuarios
                    $valorMedioPericia = $this->obtenerValorMedioDe("Nivel_Pericia_Informatica");

                    // Tiempo medio para la tarea
                    $valorMedioTiempo = $this->obtenerValorMedioDe("Tiempo");

                    // Porcentaje de usuarios que han realizado la tarea correctamente
                    $numeroUsuariosCorrectamente = $this->obtenerNumeroUsuariosCorrectamente();
                    $porcentajeCorrectamente = ($numeroUsuariosCorrectamente / $numeroUsuarios) * 100;

                    // Valor medio de la puntuación de los usuarios sobre la aplicación
                    $valorMedioPuntuacion = $this->obtenerValorMedioDe("Valoración");

                    echo "<ul>";
                    echo "<li>Edad media de los usuarios: $edadMediaUsuarios años</li>";
                    echo "<li>Porcentaje de usuarios masculinos: $porcentajeNumeroUsuariosMasculino %</li>";
                    echo "<li>Porcentaje de usuarios femenino: $porcentajeNumeroUsuariosFemenino %</li>";
                    echo "<li>Valor medio del nivel o pericia informática de los usuarios: $valorMedioPericia </li>";
                    echo "<li>Tiempo medio para la tarea: $valorMedioTiempo segundos</li>";
                    echo "<li>Porcentaje de usuarios que han realizado la tarea correctamente: $porcentajeCorrectamente %</li>";
                    echo "<li>Valor medio de la puntuación de los usuarios sobre la aplicación: $valorMedioPuntuacion </li>";
                    echo "</ul>";
                }

            }

            private function obtenerNumeroUsuarios(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $numeroUsuarios = $db->query('SELECT COUNT(*) AS numeroTotal FROM PruebasUsabilidad');

                $numero = null;

                if($numeroUsuarios->num_rows > 0){
                    while($row = $numeroUsuarios->fetch_assoc()) {
                        $numero = $row['numeroTotal'];
                    }
                } else{
                    echo "<p>No se pudo obtener el número</p>";
                }

                return $numero;
            }

            private function obtenerNumeroUsuariosMasculino(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $numeroUsuarios = $db->query('SELECT COUNT(*) AS numeroTotal FROM PruebasUsabilidad WHERE sexo="Masculino"');

                $numero = null;

                if($numeroUsuarios->num_rows > 0){
                    while($row = $numeroUsuarios->fetch_assoc()) {
                        $numero = $row['numeroTotal'];
                    }
                } else{
                    echo "<p>No se pudo obtener el número</p>";
                }

                return $numero;
            }

            private function obtenerNumeroUsuariosFemenino(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $numeroUsuarios = $db->query('SELECT COUNT(*) AS numeroTotal FROM PruebasUsabilidad WHERE sexo="Femenino"');

                $numero = null;

                if($numeroUsuarios->num_rows > 0){
                    while($row = $numeroUsuarios->fetch_assoc()) {
                        $numero = $row['numeroTotal'];
                    }
                } else{
                    echo "<p>No se pudo obtener el número</p>";
                }

                return $numero;
            }

            private function obtenerNumeroUsuariosCorrectamente(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $numeroUsuarios = $db->query('SELECT COUNT(*) AS numeroTotalCorrectamente FROM PruebasUsabilidad WHERE Tarea_realizada_correctamente="SI"');

                $numero = null;

                if($numeroUsuarios->num_rows > 0){
                    while($row = $numeroUsuarios->fetch_assoc()) {
                        $numero = $row['numeroTotalCorrectamente'];
                    }
                } else{
                    echo "<p>No se pudo obtener el número</p>";
                }

                return $numero;
            }

            private function obtenerValorMedioDe($valor){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $valorMedio = $db->query('SELECT AVG('. $valor . ') AS valorMedio FROM PruebasUsabilidad');

                $valor = null;

                if($valorMedio->num_rows > 0){
                    while($row = $valorMedio->fetch_assoc()) {
                        $valor = $row['valorMedio'];
                    }
                } else{
                    echo "<p>No se pudo obtener el valor medio</p>";
                }

                return $valor;
            }

            function cargarCSV(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $archivoTexto = fopen($_FILES['archivoACargar']['tmp_name'], "rb");
                
                $linea = fgetcsv($archivoTexto);

                while($linea == true){

                    $consultaPre = $db->prepare("INSERT INTO PruebasUsabilidad (DNI, Nombre, Apellidos, Email, Telefono, Edad, Sexo, Nivel_Pericia_Informatica, Tiempo, Tarea_realizada_correctamente, Comentarios, Propuestas_de_mejora, Valoración) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");   
                    $consultaPre->bind_param('sssssisiisssi', 
                        $linea[0],$linea[1],$linea[2],$linea[3],$linea[4],$linea[5],$linea[6],$linea[7],$linea[8],$linea[9],$linea[10],$linea[11],$linea[12]);    
                    $linea = fgetcsv($archivoTexto);
                    $consultaPre->execute();
                }
            }

            function exportarCSV(){

                $database = "ejercicio6";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);

                $datos = $db->query('SELECT * FROM PruebasUsabilidad');

                $aEscribir = "";

                if($datos->num_rows > 0){
                    while($row = $datos->fetch_assoc()){
                        $aEscribir .= $row["DNI"] . "," . $row["Nombre"] . "," . $row["Apellidos"] . "," . $row["Email"] . "," . $row["Telefono"] . "," . $row["Edad"] . "," . $row["Sexo"] . "," . $row["Nivel_Pericia_Informatica"] . "," . $row["Tiempo"] . "," . $row["Tarea_realizada_correctamente"] . "," . $row["Comentarios"] . "," . $row["Propuestas_de_mejora"] . "," . $row["Valoración"] . "\n";
                    }
                }

                $db->close();
                file_put_contents("pruebasUsabilidad.csv", $aEscribir);
                echo "Se ha generado el archivo pruebasUsabilidad.csv con el contenido de la tabla";
            }
        }

        $baseDatos = new BaseDatos();

        if (count($_POST)>0) 
        {   
            if(isset($_POST['botonCrearBase'])) $baseDatos->crearBaseDatos();  
            if(isset($_POST['botonCrearTabla'])) $baseDatos->crearTabla();
            if(isset($_POST['botoninsertarFila'])) $baseDatos->insertarDatos();
            if(isset($_POST['botonBuscarDatos'])) $baseDatos->buscarDatos();
            if(isset($_POST['botonModificarFila'])) $baseDatos->modificarDatos();
            if(isset($_POST['botonBorrarDatos'])) $baseDatos->eliminarDatos();
            if(isset($_POST['botonGenerarInforme'])) $baseDatos->generarInforme();
            if(isset($_POST['botonExportarDatos'])) $baseDatos->exportarCSV();
            if(isset($_POST['botonImportarDatos'])) $baseDatos->cargarCSV();
        }


    ?>
</body>
</html>