<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
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
                            <li><a href="">Cart</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div >   
        </header>
        
        <div class="hero">
            <div class="form-box" id="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>

                <div class="social-icons">
                    <img src="../img/fb.png">
                    <img src="../img/tw.png">
                    <img src="../img/gp.png">
                </div>

                <!-- LOGIN -->
                <form id="login" class="input-group">
                    <input type="email" class="input-field" name="user-email" id="user-email" placeholder="Email">
                    
                    <input type="text" class="input-field"  name="user-password" id="user-password" placeholder="Password">
                                    
                    <input type="checkbox" class="chech-box"><span>Recordar contraseña</span>      
                    <button type="submit" class="submit-btn">Log in</button>
                </form>

                <!-- REGISTER -->
                <form id="register" class="input-group">

                    <!--Nombre(s)-->
                    <input type="text" class="input-field" placeholder="Nombres" id="fullName" name="fullName">
                    
                    <!-- Email -->
                    <input type="email" class="input-field" placeholder="Email" name="user-email" id="user-email">
                    
                    <!-- Username -->
                    <input type="text" class="input-field" placeholder="Usuario" name="user-name" id="user-name">
                    
                    <!-- Password -->
                    <input type="text" class="input-field" id="user-password" name="user-password" placeholder="Contraseña">
                    
                    <!-- Password Verification-->
                    <input type="text" class="input-field" id="password2" placeholder="Verificación de contraseña">
                    
                    <input type="checkbox" class="chech-box"><span>Estoy de acuerdo con los terminos y condiciones</span>  
                    <button type="submit" class="submit-btn" value="Register">Sign in</button>
                </form>

                <form id="register2" class="input-group2">
                    <!--Fecha de nacimiento-->
                    <label for="birthDate">Birth date:</label>
                    <input type="date" class="input-birth" name="birthDate" id="birthDate">
                    
                    <!--Gender-->
                    <label for="gender">Gender:</label>
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" class="input-radio-gen" name="gender" id="male">
                        <label for="female">Female</label>
                        <input type="radio" class="input-radio-gen" name="gender" id="female">
                        <label for="other">Other</label>
                        <input type="radio" class="input-radio-gen" name="gender" id="other">
                    </div>
                        
                    <!--Account Type-->
                    <label for="accountType">Account type:</label>
                    <div>
                        <label for="public">Public:</label>
                        <input type="radio" class="input-radio-acc" name="accountType" id="public">
                        <label for="private">Private:</label>
                        <input type="radio" class="input-radio-acc" name="accountType" id="private">
                    </div>
                </form>

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
        
        <script src="../js/login-signIn.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>
