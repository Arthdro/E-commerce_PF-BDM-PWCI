<?php 
class Product_Model{
    private int $productId;
    private string $prodName;
    private string $descrip;
    private string $categoryId;
    private float $factoryPrice;  
    private float $generalPrice;
    private int $stock;
    private float $score;
    private string $quotable;
    private int $userId;

    private function __construct($productId, $prodName, $descrip, $categoryId, $factoryPrice, $generalPrice,
        $stock, $score, $quotable, $userId){
        $this->productId = $productId;
        $this->prodName = $prodName;
        $this->descrip = $descrip;
        $this->categoryId = $categoryId;
        $this->factoryPrice = $factoryPrice;
        $this->generalPrice = $generalPrice;
        $this->stock = $stock;
        $this->score = $score;
        $this->quotable = $quotable;
        $this->userId = $userId;
    }

    public static function findProductByID($mysqli, $productId = null) {
        $sql = "SELECT productId, prodName, descrip, factoryPrice, generalPrice, stock, score, quotable, userId, categoryId FROM DUCKES_DB.Products";
        $stmt = $mysqli->prepare($sql);
        //$stmt->bind_param("ss",$productId);
        $stmt->execute();
        $result = $stmt->get_result(); 
        /*$product = $result->fetch_assoc();
        return $product ? Product_Model::parseJson($product) : NULL;*/

        $products = array();
        foreach ($result->count as $row) {
            $product = new Product_Model(
                $row['productId'],
                $row['prodName'],
                $row['descrip'],
                $row['categoryId'],
                $row['factoryPrice'],
                $row['generalPrice'],
                $row['stock'],
                $row['score'],
                $row['quotable'],
                $row['userId']
            );
            $products[$row] = $product;
        }
        return $products;
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

    /*public function toJSON() {
        return get_object_vars($this);
    }*/
}

?>