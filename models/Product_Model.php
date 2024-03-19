<?php 
class Product_Model{
    private int $productId;
    private string $name;
    private string $description;
    private string $category;
    private float $price;
    private int $stock;
    private float $rank;
    private int $sellerId;

    private function __construct(){
        
    }

    public static function findProductByID($mysqli, $username, $password) {
        /*$sql = "SELECT userId, fullName, username, email FROM DUCKES_DB.Users WHERE email = ? AND pass = ? LIMIT 1";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss",$username, $password);
        $stmt->execute();
        $result = $stmt->get_result(); 
        $user = $result->fetch_assoc();
        return $user ? User_Model::parseJson($user) : NULL;*/
    }

    static public function parseJson($json) {
        /*$user =  new User_Model(
            isset($json["fullName"]) ? $json["fullName"] : "",              
            isset($json["username"]) ? $json["username"] : "",
            isset($json["email"]) ? $json["email"] : ""
        );
        if(isset($json["userId"]))
            $user->setUserId((int)$json["userId"]);
        return $user;*/
    }

    public function toJSON() {
        return get_object_vars($this);
    }
}

?>