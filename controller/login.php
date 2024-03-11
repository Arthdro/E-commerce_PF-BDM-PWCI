<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "../db/connection.php";
        require_once "../models/User_Model.php";

        $json = json_decode(file_get_contents('php://input'),true);

        

        header('Content-Type: application/json');
        $mysqli = connection::connect();
        $user = User_Model::findUserByUsername($mysqli, $json["username"], $json["password"]);
    }
?>