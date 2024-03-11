<?php
    class User_Model{
        private int $userid;
        private string $email;
        private string $username;
        private string $password;
        private int $type;
        private int $accounttype;
        private string $fullname;
        private string $gender;
        private string $birthdate;
        private string $profilepic;

        private function __construct(){
            
        }

        public function setUserId($userId){
            $this->userid = $userId;
        }

        public function getUserId(){
            return $this->userid;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public static function findUserByUsername($mysqli, $username, $password) {
            /*$sql = "SELECT id, names, lastnames, username, email FROM users WHERE  username = ? AND password = ? LIMIT 1";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss",$username, $password);
            $stmt->execute();
            $result = $stmt->get_result(); 
            $user = $result->fetch_assoc();
            return $user ? User::parseJson($user) : NULL;*/
        }
    }
?>