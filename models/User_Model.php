<?php
    class User_Model{
        private int $userId;
        private string $email;
        private string $username;
        private string $pass;
        private int $userType;
        private int $accountPrivacy;
        private string $fullName;
        private string $gender;
        private string $birthDate;
        private string $profilePic;

        private function __construct($fullName, $username, $email){
            $this->fullName = $fullName;
            $this->username = $username;
            $this->email = $email;
        }

        public function setUserId($userId){
            $this->userId = $userId;
        }

        public function getUserId(){
            return $this->userId;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getUsername () {
            return $this->username;
        }

        public function setFullName($fullName) {
            $this->fullName = $fullName;
        }

        public function getFullName () {
            return $this->fullName;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function findUserByUsername($mysqli, $username, $password) {
            $sql = "SELECT userId, fullName, username, email FROM DUCKES_DB.Users WHERE email = ? AND pass = ? LIMIT 1";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss",$username, $password);
            $stmt->execute();
            $result = $stmt->get_result(); 
            $user = $result->fetch_assoc();
            return $user ? User_Model::parseJson($user) : NULL;
        }

        public static function findUserById($mysqli, $id) {
            $sql = "SELECT userId, fullName, username, email FROM DUCKES_DB.Users WHERE userId = ? LIMIT 1";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $result = $stmt->get_result(); 
            $user = $result->fetch_assoc();
            return $user ? User_Model::parseJson($user) : NULL;
        }

        static public function parseJson($json) {
            $user =  new User_Model(
                isset($json["fullName"]) ? $json["fullName"] : "",              
                isset($json["username"]) ? $json["username"] : "",
                isset($json["email"]) ? $json["email"] : ""
            );
            if(isset($json["userId"]))
                $user->setUserId((int)$json["userId"]);
            return $user;
        }

        public function toJSON() {
            return get_object_vars($this);
        }
    }
