<?php
        //Conexion A Servidor Remoto
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="hexadash";
    /*
        //Conexion A Servidor Local
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="sl_credinieto";
    */
        
        $mysqli   = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (mysqli_connect_errno()) {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // Create connection
        try{
            $connPDO = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
            $connPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('Unable to connect with the database');
        }
?>