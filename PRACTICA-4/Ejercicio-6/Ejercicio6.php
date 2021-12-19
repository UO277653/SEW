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
        <h2>Crear la base de datos</h2>
        <p>Pulsa el botón para que la base de datos de este ejercicio se cree</p>
        <form name='crearBase' method='post' action="Ejercicio6.php">
            <fieldset>
                <input id='botonCrearBase' type='submit' name='botonCrearBase' value='Crear base de datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="crearTabla"></a>
        <h2>Crear la tabla PruebasUsabilidad</h2>
        <p>Pulsa el botón para que se cree una tabla en la base de datos</p>
        <form name='crearTabla' method='post' action="Ejercicio6.php">
            <fieldset>
                <input id='botonCrearTabla' type='submit' name='botonCrearTabla' value='Crear tabla'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="insertarFila"></a>
        <h2>Insertar una fila en la tabla</h2>
        <p>Introduce los datos y pulsa el botón para agregar una fila en la tabla</p>
        <form name='insertarFila' method='post' action="Ejercicio6.php">
            <fieldset>
                <label for="txtDni"> DNI:<input id="txtDni" type="text" name="dni" /> </label>
                <label for="txtNombre"> Nombre: <input id="txtNombre" type="text" name="nombre" /> </label>
                <label for="txtApellidos"> Apellidos: <input id="txtApellidos" type="text" name="apellidos" /></label>
                <label for="txtEmail"> Email: <input id="txtEmail" type="text" name="email" /></label>
                <label for="txtTelefono"> Teléfono: <input id="txtTelefono" type="text" name="telefono" /></label>
                <label for="nEdad"> Edad: <input id="nEdad" type="number" name="edad" /></label>
                <label for="txtSexo"> Sexo: <input id="txtSexo" type="text" name="sexo" /></label>
                <label for="nNivelPericia"> Nivel de pericia informática: <input id="nNivelPericia" type="number" name="pericia" /></label>
                <label for="nTiempo"> Tiempo: <input id="nTiempo" type="number" name="tiempo" /></label>
                <label for="txtCorrecto"> Tarea realizada correctamente (SI/NO): <input id="txtCorrecto" type="text" name="correctamente" /></label>
                <label for="txtComentario"> Comentarios: <input id="txtComentario" type="text" name="comentarios" /></label>
                <label for="txtPropuesta"> Propuestas de mejora: <input id="txtPropuesta" type="text" name="propuestas" /></label>
                <label for="nValoracion"> Valoración: <input id="nValoracion" type="number" name="valoracion" /></label>
                <input id='botoninsertarFila' type='submit' name='botoninsertarFila' value='Insertar fila'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarDatos"></a>
        <h2>Buscar datos de una persona en la tabla</h2>
        <p>Introduce el DNI de la persona y pulsa el botón para que se muestren sus datos</p>
        <form name='buscarDatos' method='post' action="Ejercicio6.php">
            <fieldset>
                <label for="dniBuscar">DNI:<input id="dniBuscar" type="text" name="dniBuscar" /> </label>
                <input id='botonBuscarDatos' type='submit' name='botonBuscarDatos' value='Buscar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="modificarFila"></a>
        <h2>Modifica los datos de una fila</h2>
        <p>Introduce el DNI de la persona cuyos datos quieres modificar, introduce los datos nuevos y pulsa el botón para modificarlos</p>
        <form name='modificarFila' method='post' action="Ejercicio6.php">
            <fieldset>
                <label for="txtDniAModificar">DNI a modificar:<input id="txtDniAModificar" type="text" name="dniParam" /> </label>
                <label for="dniModificado">DNI:<input id="dniModificado" type="text" name="dniModificado" /> </label>
                <label for="nombreModificado">Nombre: <input id="nombreModificado" type="text" name="nombreModificado" /> </label>
                <label for="apellidosModificado">Apellidos: <input id="apellidosModificado" type="text" name="apellidosModificado" /></label>
                <label for="emailModificado">Email: <input id="emailModificado" type="text" name="emailModificado" /></label>
                <label for="telefonoModificado">Teléfono: <input id="telefonoModificado" type="text" name="telefonoModificado" /></label>
                <label for="edadModificado">Edad: <input id="edadModificado" type="number" name="edadModificado" /></label>
                <label for="sexoModificado">Sexo: <input id="sexoModificado" type="text" name="sexoModificado" /></label>
                <label for="periciaModificado">Nivel de pericia informática: <input id="periciaModificado" type="number" name="periciaModificado" /></label>
                <label for="tiempoModificado">Tiempo: <input id="tiempoModificado" type="number" name="tiempoModificado" /></label>
                <label for="correctamenteModificado">Tarea realizada correctamente (SI/NO): <input id="correctamenteModificado" type="text" name="correctamenteModificado" /></label>
                <label for="comentariosModificado">Comentarios: <input id="comentariosModificado" type="text" name="comentariosModificado" /></label>
                <label for="propuestasModificado">Propuestas de mejora: <input id="propuestasModificado" type="text" name="propuestasModificado" /></label>
                <label for="valoracionModificado">Valoración: <input id="valoracionModificado" type="number" name="valoracionModificado" /></label>
                <input id='botonModificarFila' type='submit' name='botonModificarFila' value='Modificar fila'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="borrarDatos"></a>
        <h2>Borrar datos de una persona en la tabla</h2>
        <p>Introduce el DNI de la persona y pulsa el botón para que se borren sus datos</p>
        <form name='borrarDatos' method='post' action="Ejercicio6.php">
            <fieldset>
                <label for="dniBorrar">DNI:<input id="dniBorrar" type="text" name="dniBorrar" /> </label>
                <input id='botonBorrarDatos' type='submit' name='botonBorrarDatos' value='Borrar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="generarInforme"></a>
        <h2>Generar el informe de estadísticas</h2>
        <p>Pulsa el botón para generar el informe</p>
        <form name='generarInforme' method='post'>
            <fieldset>
                <input id='botonGenerarInforme' type='submit' name='botonGenerarInforme' value='Generar informe'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="exportarDatos"></a>
        <h2>Exportar los datos a un fichero CSV</h2>
        <p>Pulsa el botón para exportar los datos actuales</p>
        <form name='exportarDatos' method='post'>
            <fieldset>
            <input id='botonExportarDatos' type='submit' name='botonExportarDatos' value='Exportar datos'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="importarDatos"></a>
        <h2>Importar los datos desde un fichero CSV</h2>
        <p>Selecciona el archivo CSV a importar y pulsa el botón para cargar los datos</p>
        <form name='importarDatos' action='#' method='post' enctype='multipart/form-data'>
            <fieldset>
                <label for="archivoACargar">Selecciona el archivo a cargar<input id='archivoACargar' type='file' name='archivoACargar'/></label>
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
                    echo "<p>Tabla 'PruebasUsabilidad' creada con éxito </p>";
                 } else { 
                    echo "<p>ERROR en la creación de la tabla PruebasUsabilidad. Error : ". $db->error . "</p>";
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
                      echo "<li>". 'id' . " - " . 'dni' ." - ". 'nombre' ." - ". 'apellidos'
                      ." - ". 'email'
                      ." - ". 'teléfono'
                      ." - ". 'edad'
                      ." - ". 'sexo'
                      ." - ". 'nivel de pericia informática'
                      ." - ". 'tiempo'
                      ." - ". 'tarea realizada correctamente'
                      ." - ". 'comentarios'
                      ." - ". 'propuestas de mejora'
                      ." - ". 'valoración' ."</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['DNI'] . " - " . $row['Nombre']." - ". $row['Apellidos']
                          ." - ". $row['Email']
                          ." - ". $row['Telefono']
                          ." - ". $row['Edad']
                          ." - ". $row['Sexo']
                          ." - ". $row['Nivel_Pericia_Informatica']
                          ." - ". $row['Tiempo']
                          ." - ". $row['Tarea_realizada_correctamente']
                          ." - ". $row['Comentarios']
                          ." - ". $row['Propuestas_de_mejora']
                          ." - ". $row['Valoración']."</li>"; 
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
                    echo "<p>Las filas de la tabla 'PruebasUsabilidad' que van a ser eliminadas son:</p>";
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