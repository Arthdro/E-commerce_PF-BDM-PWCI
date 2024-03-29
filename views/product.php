<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/commons.css">
        <link rel="stylesheet" href="../css/product.css"> 
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

        </div > 
        <!--div class="header">
            <div class="container">
                <div class="nav-bar">
                    <div class="logo">
                        <img src="" width="125px">
                    </div>
                    <nav>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Log in</a></li>
                        </ul>
                    </nav>
                </div>   
            </div>
        </div-->

         <!--Single product details-->
         <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="../img/Yellow-Ochre00.jpg" width="100%" id="productImg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="../img/Yellow-Ochre00.jpg" width="100%" class="smallImg">
                        </div>
                        <div class="small-img-col">
                            <img src="../img/Yellow-Ochre01.jpg" width="100%" class="smallImg">
                        </div>
                        <div class="small-img-col">
                            <img src="../img/Yellow-Ochre02.jpg" width="100%" class="smallImg">
                        </div>
                        <div class="small-img-col">
                            <img src="../img/Yellow-Ochre03.jpg" width="100%" class="smallImg">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <p>Home / Nike</p>
                    <h1>Air Jordan 1 Chigago</h1>
                    <h4>$35.99</h4>
                    <select name="" id="">
                        <option value="">Select size</option>
                        <option value="">XS</option>
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">L</option>
                        <option value="">XL</option>
                    </select>
                    <input type="number" value="1">
                    <a href="" class="btn"></a>
                    <h3>Product details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
         </div>

         <div class="small-container">
            <div class="row row-2">
                <h2>Related products</h2>
                <p>View more</p>
            </div>
         </div>

         <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <img src="../img/pants.jpg" alt="">
                    <h4>Sunzel Flare Leggings</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$28.99</p>
                </div>
                <div class="col-4">
                    <img src="../img/sweat_hoodie.jpg" alt="">
                    <h4>Womens Oversized Hoodies</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>$36.99</p>
                </div>
                <div class="col-4">
                    <img src="../img/blazer.jpg" alt="">
                    <h4>Blazer de rayas de otoño e invierno</h4>
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
                    <div class="app-logo">
                        <img src="../img/google_play.png">
                        <img src="../img/app_store.png">
                    </div>
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
        <script src="../js/single-product.js"></script>
        <script src="../js/chat.js"></script>
    </body>
</html>


