<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "../db/connection.php";
        require_once "../models/User_Model.php";

        $json = json_decode(file_get_contents('php://input'),true);

         //Sanitizar JSON
        $filters = [
            'username',
            'password'
        ];
        $options = [
            'username' =>  [ 'flags' => FILTER_NULL_ON_FAILURE ],
            'password' =>  [ 'flags' => FILTER_NULL_ON_FAILURE ],
        ];
        /*$json_safe = [];
        foreach($json as $key=>$value) {
            $json_safe[$key] = filter_var($value, $filters[$key], $options[$key]);
        }*/

        header('Content-Type: application/json');
        $mysqli = connection::connect();
        $user = User_Model::findUserByUsername($mysqli, $json["username"], $json["password"]);
        $json_response = ["success" => true];
        if($user) {
            $json_response["msg" ]= "Bienvenido";
            $json_response ["user"] = $user->toJSON();
            //Iniciamos la sesion
            session_start();
            //Guardamos el ID del usuario en la sesion
            $_SESSION["AUTH"] = (string)$user->getUserId();
            echo json_encode($json_response);
            //header("Location: http://localhost/E-commerce_PF-BDM-PWCI/views/landing-page2.html");
            exit;
        } 
        else {
            $json_response["success"]  = false;
            $json_response["msg"] = "El usuario o la contraseña no son correctos";
            echo json_encode($json_response);
            exit;
        } 
    }
