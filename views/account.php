<?php
    session_start();
    //session_regenerate_id();
    if(!isset($_SESSION["AUTH"])) {
        //Si la sesion de usuario no existe redirigir a login
        header("Location: login-register2.php");
        exit;
    }
    require_once "../models/User_Model.php";
    require_once "../db/connection.php";
    $idUser = $_SESSION["AUTH"];
    $mysqli = connection::connect();
    $user = User_Model::findUserById($mysqli,(int)$idUser);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/commons.css"> 
        <title>THE DU(C)KE'S</title>
    </head>

    <body>

        <!--Header/Navbar-->
        <header>
            <div class="container">
                <div class="navbar">
                    <div class ="logo">
                        <img src="../img/logo.png" width="100px">
                    </div>
                    <nav>
                        <ul>
                            <li><a href="../views/landing-page2.html">Home</a></li>
                            <li><a href="../views/products.html">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="../views/account.html">Account</a></li>
                            <li><a href="../views/cart.html">Cart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>  
        </header>
        
        <div class="hero2">
            <div class="profile-box" id="profile-box">
                <img src="../img/menu.png" class="menu-icon">
                <img src="../img/setting.png" class="setting-icon">
                <img src="../img/palutena_icon.jpg" class="profile-pic">
                <h3><?= $user->getUsername() ?></h3>        
                <p>Comprador</p>
                <h3>Datos personales</h3>
                <label for="p-fullname"></label>
                <p name="p-fullname"> <?= $user->getFullName()?></p>
                <label for="p-email"></label>
                <p name="p-email"> <?= $user->getEmail()?></p>
                <div class="social-media">
                    <img src="../img/instagram.png">
                    <img src="../img/telegram.png">
                    <img src="../img/dribble.png">
                </div>
                <button type="button">Follow</button>
                <div class="profile-bottom">
                    <p>Conoce más acerca de Mi Perfil</p>
                    <img src="../img/arrow.png">
                </div>



            </div>

       </div>

       <!--Chat-->
       <div class="chat-bubble" id="chatBubble">
        <div class="chat-icon">
          <img src="../img/chat-icon.png" alt="Chat Icon">
        </div>

    </div>
      
      <div class="chat-box" id="chatBox">
        <div class="chat-header">
          <h3>Chat</h3>
          <button id="closeChat">Close</button>
        </div>
        <div class="chat-content">
          <!-- Chat messages will appear here -->
        </div>
        <div class="chat-input">
          <textarea id="messageInput" placeholder="Type your message..."></textarea>
          <button id="sendMessage">Send</button>
        </div>
    </div>

        <!--Footer-->
        <div class="footer">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Donwload App for Android and iOS mobile phone</p>
                </div>
                <div class="footer-col-2">
                    <img src="">
                    <p>Our purpose is to sustainably make the pleasure and benefits of clothes accesible to everyone</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links:</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us:</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>X</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="../js/chat.js"></script>

    </body>
</html>
