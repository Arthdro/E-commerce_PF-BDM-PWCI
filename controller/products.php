<?php
    require_once "../db/connection.php";
    require_once "../models/Product_Model.php";

    
    $mysqli = connection::connect();
    $products = Product_Model::findProductByID($mysqli);
