<?php
    class connection{
        static public function connect() {
            //Arturo DB Config
            $host = 'localhost';
            $db = 'DUCKES_DB';
            $user = 'root';
            $password = 'hola12345';
            $port = 3306;

            //Gaby DB DB Config
            /*$host = '127.0.0.1';
            $db = 'DUCKES_DB';
            $user = 'root';
            $password = 'hola12345';*/
            try {
                $mysqli = new mysqli($host,$user,$password,$db, $port);
                if ($mysqli->connect_errno) {
                    $response = (object)array("status"=>500,"message"=>$mysqli->connect_error);
                    echo json_encode($response);
                    die("Error de conexión: " . $mysqli->connect_error);
                }

            } catch(Exception $e) {
                $response = (object)array("status"=>500,"message"=>"Error a conectarse a la base de datos, favor de crear la base de datos en el archivo database.sql o configurar el usuario y contraseña en el archivo db.php");
                echo json_encode($response);
                exit;
            }
            return $mysqli;
        }    

        
    
    }
?>