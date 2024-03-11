<?php
    class connection{
       private string $host = '';
       private string $db = '';
       private string $user = '';
       private string $password = '';

        static public function connect() {
            try {
                $mysqli = new mysqli(self::$host,self::$user,self::$password,self::$db);
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