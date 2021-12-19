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
    <title>Ejercicio 7</title>

    <link rel="stylesheet" type="text/css" href="Ejercicio7.css" />
</head>

<body>
    <h1>Ejercicio 7 - Gestión de ligas, clubes y patrocinadores</h1>
    <p>Contamos con una base de datos en la que hay clubes, que forman parte de una liga y tienen jugadores y patrocinadores. Esta aplicación permite realizar operaciones sobre esta base de datos.</p>  

    <nav>
            <a title="Añadir jugador" accesskey="J" tabindex="1" href="#añadirJugador">Añadir jugador</a>
            <a title="Añadir club" accesskey="C" tabindex="2" href="#añadirClub">Añadir club</a>
            <a title="Añadir liga" accesskey="L" tabindex="3" href="#añadirLiga">Añadir liga</a>
            <a title="Añadir patrocinador" accesskey="P" tabindex="4" href="#añadirPatrocinador">Añadir patrocinador</a>
            <a title="Ver datos jugador" accesskey="U" tabindex="5" href="#buscarJugador">Ver datos jugador</a>
            <a title="Ver datos club" accesskey="B" tabindex="6" href="#buscarClub">Ver datos club</a>
            <a title="Ver datos liga" accesskey="I" tabindex="7" href="#buscarLiga">Ver datos liga</a>
            <a title="Ver datos patrocinador" accesskey="A" tabindex="8" href="#buscarPatrocinador">Ver datos patrocinador</a>
        </nav>
    <section > <a id="añadirJugador"></a>
        <h2>Añadir un jugador</h2>
        <p>Introduce los datos del jugador y pulsa el botón para añadirlo (se necesita que exista un club previamente)</p>
        <form name='añadirJugador' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="txtIDJugador"> Id del jugador:<input id="txtIDJugador" type="text" name="id_jugador" /> </label>
                <label for="txtNombre"> Nombre: <input id="txtNombre" type="text" name="nombre" /> </label>
                <label for="txtApellido1"> Primer apellido: <input id="txtApellido1" type="text" name="apellido1" /></label>
                <label for="txtApellido2"> Segundo apellido: <input id="txtApellido2" type="text" name="apellido2" /></label>
                <label for="txtIDClubJ"> Id del club: <input id="txtIDClubJ" type="text" name="id_clubJ" /></label>
                <input id='botonAñadirJugador' type='submit' name='botonAñadirJugador' value='Añadir jugador'/>
            </fieldset>
		</form>
    </section>
    <section > <a id="añadirClub"></a>
        <h2>Añadir un club</h2>
        <p>Introduce los datos del club y pulsa el botón para añadirlo (se necesita que exista una liga previamente)</p>
        <form name='añadirClub' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="txtIDClub"> Id del club:<input id="txtIDClub" type="text" name="id_club" /> </label>
                <label for="txtNombreClub"> Nombre: <input id="txtNombreClub" type="text" name="nombre_club" /> </label>
                <label for="nFundacion"> Año de fundación: <input id="nFundacion" type="number" name="fundacion" /></label>
                <label for="txtIDLigaC"> Id de la liga: <input id="txtIDLigaC" type="text" name="id_ligaC" /></label>
                <input id='botonAñadirClub' type='submit' name='botonAñadirClub' value='Añadir club'/>
            </fieldset>
		</form>
    </section>
    <section > <a id="añadirLiga"></a>
        <h2>Añadir una liga</h2>
        <p>Introduce los datos de la liga y pulsa el botón para añadirla</p>
        <form name='añadirLiga' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="txtIDLiga"> Id de la liga: <input id="txtIDLiga" type="text" name="id_liga" /></label>
                <label for="txtNombreLiga"> Nombre: <input id="txtNombreLiga" type="text" name="nombre_liga" /> </label>
                <label for="nFundacionLiga"> Año de fundación de la liga: <input id="nFundacionLiga" type="number" name="fundacion" /></label>
                <input id='botonAñadirLiga' type='submit' name='botonAñadirLiga' value='Añadir liga'/>
            </fieldset>
		</form>
    </section>
    <section > <a id="añadirPatrocinador"></a>
        <h2>Añadir un patrocinador</h2>
        <p>Introduce los datos del patrocinador y pulsa el botón para añadirlo (se necesita que exista un club previamente)</p>
        <form name='añadirPatrocinador' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="txtIDPatrocinador"> Id del patrocinador:<input id="txtIDPatrocinador" type="text" name="id_patrocinador" /> </label>
                <label for="txtNombrePatrocinador"> Nombre: <input id="txtNombrePatrocinador" type="text" name="nombre_patrocinador" /> </label>
                <label for="nDinero"> Dinero que proporciona: <input id="nDinero" type="number" name="dinero" /></label>
                <label for="txtIDClubP"> Id del club: <input id="txtIDClubP" type="text" name="id_clubP" /></label>
                <input id='botonAñadirPatrocinador' type='submit' name='botonAñadirPatrocinador' value='Añadir patrocinador'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarJugador"></a>
        <h2>Buscar datos de un jugador</h2>
        <p>Introduce el id del jugador y pulsa el botón para que se muestren sus datos</p>
        <form name='buscarJugador' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="idJugadorBuscar">ID del jugador:<input id="idJugadorBuscar" type="text" name="idJugadorBuscar" /> </label>
                <input id='botonBuscarJugador' type='submit' name='botonBuscarJugador' value='Buscar jugador'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarClub"></a>
        <h2>Buscar datos de un club</h2>
        <p>Introduce el id del club y pulsa el botón para que se muestren sus datos</p>
        <form name='buscarClub' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="idClubBuscar">ID del club:<input id="idClubBuscar" type="text" name="idClubBuscar" /> </label>
                <input id='botonBuscarClub' type='submit' name='botonBuscarClub' value='Buscar club'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarLiga"></a>
        <h2>Buscar datos de una liga</h2>
        <p>Introduce el id de la liga y pulsa el botón para que se muestren sus datos</p>
        <form name='buscarLiga' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="idLigaBuscar">ID de la liga:<input id="idLigaBuscar" type="text" name="idLigaBuscar" /> </label>
                <input id='botonBuscarLiga' type='submit' name='botonBuscarLiga' value='Buscar liga'/>
            </fieldset>
		</form>
    </section>

    <section > <a id="buscarPatrocinador"></a>
        <h2>Buscar datos de un patrocinador</h2>
        <p>Introduce el id del patrocinador y pulsa el botón para que se muestren sus datos</p>
        <form name='buscarPatrocinador' method='post' action="Ejercicio7.php">
            <fieldset>
                <label for="idPatrocinadorBuscar">ID del patrocinador:<input id="idPatrocinadorBuscar" type="text" name="idPatrocinadorBuscar" /> </label>
                <input id='botonBuscarPatrocinador' type='submit' name='botonBuscarPatrocinador' value='Buscar patrocinador'/>
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

                $this->crearBaseDatos();
            }
            
            function crearBaseDatos(){

                // Conexión al SGBD local con XAMPP con el usuario creado 
                $db = new mysqli($this->servername,$this->username,$this->password);
                
                //comprobamos conexión
                if($db->connect_error) {
                    exit ("<p>ERROR de conexión:".$db->connect_error."</p>");  
                }
        
                $cadenaSQL = "CREATE DATABASE IF NOT EXISTS ejercicio7 COLLATE utf8_spanish_ci";

                if($db->query($cadenaSQL) === TRUE){
                    // La base se ha creado con éxito
                } else { 
                    echo "<p>ERROR en la creación de la Base de Datos 'ejercicio7'. Error: " . $db->error . "</p>";
                    exit();
                }   

                $database = "ejercicio7";

                $db->select_db($database);

                // Liga
                $crearTabla = "CREATE TABLE IF NOT EXISTS liga (
                    id_liga int(11) NOT NULL,
                    nombre varchar(255) NOT NULL,
                    año_fundacion_liga int(11) NOT NULL,
                    PRIMARY KEY (id_liga)
                )";
                            
                if($db->query($crearTabla) === TRUE){
                    // La tabla se ha creado con éxito
                } else { 
                    echo "<p>ERROR en la creación de la tabla liga. Error : ". $db->error . "</p>";
                    exit();
                }

                // Club
                $crearTabla = "CREATE TABLE IF NOT EXISTS club (
                    id_club int(11) NOT NULL,
                    nombre varchar(255) NOT NULL,
                    añofundacion int(11) NOT NULL,
                    id_liga int(11) NOT NULL,
                    PRIMARY KEY (id_club),
                    FOREIGN KEY (id_liga) REFERENCES liga(id_liga)
                  )";
                          
                if($db->query($crearTabla) === TRUE){
                    // La tabla se ha creado con éxito
                 } else { 
                    echo "<p>ERROR en la creación de la tabla club. Error : ". $db->error . "</p>";
                    exit();
                 }

                // Jugador
                $crearTabla = "CREATE TABLE IF NOT EXISTS jugador (
                    id_jugador int(11) NOT NULL,
                    nombre varchar(255) NOT NULL,
                    apellido1 varchar(255) NOT NULL,
                    apellido2 varchar(255) NOT NULL,
                    id_club int(11) NOT NULL,
                    PRIMARY KEY (id_jugador),
                    FOREIGN KEY (id_club) REFERENCES club(id_club)
                  )";
                          
                if($db->query($crearTabla) === TRUE){
                    // La tabla se ha creado con éxito
                 } else { 
                    echo "<p>ERROR en la creación de la tabla jugador. Error : ". $db->error . "</p>";
                    exit();
                 }



                // Patrocinador
                $crearTabla = "CREATE TABLE IF NOT EXISTS patrocinador (
                    id_patrocinador int(11) NOT NULL,
                    nombre varchar(255) NOT NULL,
                    dinero int(11) NOT NULL,
                    id_club int(11) NOT NULL,
                    PRIMARY KEY (id_patrocinador),
                    FOREIGN KEY (id_club) REFERENCES club(id_club)
                  )";
                          
                if($db->query($crearTabla) === TRUE){
                    // La tabla se ha creado con éxito
                 } else { 
                    echo "<p>ERROR en la creación de la tabla patrocinador. Error : ". $db->error . "</p>";
                    exit();
                 }

                //cerrar la conexión
                $db->close();
            }

            function insertarDatosLiga(){
                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare("INSERT INTO liga (id_liga, nombre, año_fundacion_liga) VALUES (?,?,?)");   
            
                $consultaPre->bind_param('isi', 
                        $_POST["id_liga"],$_POST["nombre_liga"], $_POST["fundacion"]);    
    
                $consultaPre->execute();
    
                echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                $db->close();   
            }

            function insertarDatosClub(){
                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare("INSERT INTO club (id_club, nombre, añofundacion, id_liga) VALUES (?,?,?,?)");   
            
                $consultaPre->bind_param('isii', 
                        $_POST["id_club"],$_POST["nombre_club"], $_POST["fundacion"], $_POST["id_ligaC"]);    
    
                $consultaPre->execute();
    
                echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                $db->close();   
            }

            function insertarDatosPatrocinador(){
                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare("INSERT INTO patrocinador (id_patrocinador, nombre, dinero, id_club) VALUES (?,?,?,?)");   
            
                $consultaPre->bind_param('isii', 
                        $_POST["id_patrocinador"],$_POST["nombre_patrocinador"], $_POST["dinero"], $_POST["id_clubP"]);    
    
                $consultaPre->execute();
    
                echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                $db->close();   
            }

            function insertarDatosJugador(){
                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare("INSERT INTO jugador (id_jugador, nombre, apellido1, apellido2, id_club) VALUES (?,?,?,?,?)");   
            
                $consultaPre->bind_param('isssi', 
                        $_POST["id_jugador"],$_POST["nombre"], $_POST["apellido1"], $_POST["apellido2"], $_POST["id_clubJ"]);    
    
                $consultaPre->execute();
    
                echo "<p>Filas agregadas: " . $consultaPre->affected_rows . "</p>";
    
                $consultaPre->close();
    
                $db->close();   
            }

            function buscarDatosLiga(){

                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare('SELECT * FROM liga WHERE id_liga = ?');
                $consultaPre->bind_param('s', $_POST["idLigaBuscar"]);
                $consultaPre->execute();
                $resultado =  $consultaPre->get_result();
                  
                // compruebo los datos recibidos     
                if ($resultado->num_rows > 0) {
                      // Mostrar los datos en un lista
                      echo "<p>Los datos en la tabla 'liga' son: </p>";
                      echo "<ul>";
                      echo "<li>". 'id_liga' . " - " . 'nombre' ." - ". 'año de fundación' . "</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['id_liga'] . " - " . $row['nombre']." - ". $row['año_fundacion_liga']."</li>"; 
                      }
                      echo "</ul>";
                  } else {
                      echo "<p>Tabla vacía. Número de filas = " . $resultado->num_rows . "</p>";
                  }          
              //cerrar la conexión
              $db->close(); 
            }

            function buscarDatosJugador(){

                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare('SELECT * FROM jugador WHERE id_jugador = ?');
                $consultaPre->bind_param('s', $_POST["idJugadorBuscar"]);
                $consultaPre->execute();
                $resultado =  $consultaPre->get_result();
                  
                // compruebo los datos recibidos     
                if ($resultado->num_rows > 0) {
                      // Mostrar los datos en un lista
                      echo "<p>Los datos en la tabla 'jugador' son: </p>";
                      echo "<ul>";
                      echo "<li>". 'id_jugador' . " - " . 'nombre' ." - ". 'apellido1' ." - ". 'apellido2' ." - ". 'id_club' . "</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['id_jugador'] . " - " . $row['nombre']." - ". $row['apellido1']." - ". $row['apellido2']." - ". $row['id_club']."</li>"; 
                      }
                      echo "</ul>";
                  } else {
                      echo "<p>Tabla vacía. Número de filas = " . $resultado->num_rows . "</p>";
                  }          
              //cerrar la conexión
              $db->close(); 
            }

            function buscarDatosPatrocinador(){

                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare('SELECT * FROM patrocinador WHERE id_patrocinador = ?');
                $consultaPre->bind_param('s', $_POST["idPatrocinadorBuscar"]);
                $consultaPre->execute();
                $resultado =  $consultaPre->get_result();
                  
                // compruebo los datos recibidos     
                if ($resultado->num_rows > 0) {
                      // Mostrar los datos en un lista
                      echo "<p>Los datos en la tabla 'patrocinador' son: </p>";
                      echo "<ul>";
                      echo "<li>". 'id_patrocinador' . " - " . 'nombre' ." - ". 'dinero'." - ". 'id_club' . "</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['id_patrocinador'] . " - " . $row['nombre']." - ". $row['dinero']." - ". $row['id_club']."</li>"; 
                      }
                      echo "</ul>";
                  } else {
                      echo "<p>Tabla vacía. Número de filas = " . $resultado->num_rows . "</p>";
                  }          
              //cerrar la conexión
              $db->close(); 
            }

            function buscarDatosClub(){

                $database = "ejercicio7";

                $db = new mysqli($this->servername,$this->username,$this->password,$database);
      
                $consultaPre = $db->prepare('SELECT * FROM club WHERE id_club = ?');
                $consultaPre->bind_param('s', $_POST["idClubBuscar"]);
                $consultaPre->execute();
                $resultado =  $consultaPre->get_result();
                  
                // compruebo los datos recibidos     
                if ($resultado->num_rows > 0) {
                      // Mostrar los datos en un lista
                      echo "<p>Los datos en la tabla 'club' son: </p>";
                      echo "<ul>";
                      echo "<li>". 'id_club' . " - " . 'nombre' ." - ". 'año de fundación'." - ". 'id_liga' . "</li>";
                      while($row = $resultado->fetch_assoc()) {
                          echo "<li>". $row['id_club'] . " - " . $row['nombre']." - ". $row['añofundacion']." - ". $row['id_liga']."</li>"; 
                      }
                      echo "</ul>";
                  } else {
                      echo "<p>Tabla vacía. Número de filas = " . $resultado->num_rows . "</p>";
                  }          
              //cerrar la conexión
              $db->close(); 
            }
        }

        $baseDatos = new BaseDatos();

        if (count($_POST)>0) 
        {   
            if(isset($_POST['botonAñadirLiga'])) $baseDatos->insertarDatosLiga();  
            if(isset($_POST['botonAñadirClub'])) $baseDatos->insertarDatosClub();
            if(isset($_POST['botonAñadirJugador'])) $baseDatos->insertarDatosJugador();
            if(isset($_POST['botonAñadirPatrocinador'])) $baseDatos->insertarDatosPatrocinador();
            if(isset($_POST['botonBuscarLiga'])) $baseDatos->buscarDatosLiga();
            if(isset($_POST['botonBuscarClub'])) $baseDatos->buscarDatosClub();
            if(isset($_POST['botonBuscarPatrocinador'])) $baseDatos->buscarDatosPatrocinador();
            if(isset($_POST['botonBuscarJugador'])) $baseDatos->buscarDatosJugador();
        }


    ?>
</body>
</html>