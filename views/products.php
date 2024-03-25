<?php
    require_once "../controller/products.php"
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">
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
        

         <!--Features products-->
         <div class="small-container">
            <div class="row row-2">
                    <h2>All Products</h2>
                    <select>
                        <option>Default Sorting</option>
                        <option>Sort by Price</option>
                        <option>Sort by Popularity</option>
                        <option>Sort by Rating</option>
                        <option>Sort by Sale</option>
                    </select>
                </div>
            <div class="row">
                <div class="col-4">
                    <img src="../img/air-jordan-black.jpg" alt="">
                    <h4>Air Jordan Black force</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="../views/product.html"><img src="../img/air-jordan-gold.jpg"></a>
                    <h4>Air Jordan Gold force</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$60.00</p>
                </div>
                <div class="col-4">
                    <img src="../img/air-jordan-rb.jpg" alt="">
                    <h4>Air Jordan Black/Red force</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$45.00</p>
                </div>

                <div class="col-4">
                    <img src="../img/air-jordan-rb.jpg" alt="">
                    <h4>Air Jordan Black/Red force</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$45.00</p>
                </div>
            </div>            
            
            <!--div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594</span>
                
            </div-->
            
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
        <!--script src="script.js"></script-->
        <script src="../js/chat.js"></script>
    </body>
</html>