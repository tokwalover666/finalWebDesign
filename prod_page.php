<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLink</title>
    <link rel="icon" type="image/x-icon" href="assets/interlink-logo.png">

    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!-- icon svg  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- bootstrap card  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5KK9e0lGWtTTOlJgeDE59gPGbomF8/xFi9v3eE3OIxT9n2DtN5o9RUoysl2Q5" crossorigin="anonymous">

    <!-- carousel side scroll sa recommended for you  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.flipster/1.1.6/jquery.flipster.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.flipster/1.1.6/jquery.flipster.min.js"></script>

    <script src="https://kit.fontawesome.com/d8bd919f93.js" crossorigin="anonymous"></script>


</head>

<body>

    <nav>
        <div class="header">
            <div class="right-header">
                <div class="logo">
                    <a href="aboutUs.html" class="interlink">
                        <div class="title">
                        <div class="interlink-logo" style="background-image: url(assets/interlink-logo.png);width:100px;  background-size: 100px; height: 100px;background-repeat: no-repeat;">
                            </div>
                            InterLink
                        </div>
                        
                    </a>
                </div>
                
                <div class="search">
                    <form id="search-bar">
                        <input id="user-input" type="search" placeholder="search...">
                        <div class="filters">
                            
                            <div class="category-button" id="video-games">
                                <button class="shrink-border">games</button>
                            </div>
                            <div class="category-button" id="art"> 
                                <button class="shrink-border">art</button>
                            </div>
                            <div class="category-button" id="technology">
                                <button class="shrink-border">tech</button>
                            </div>
                            <div class="category-button" id="others">
                                <button class="shrink-border">others</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
            </div>
            <div class="post-item">
                <a href="add.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" id="mainIconPathAttribute"></path> </svg>
                </a>
                
            </div>
            <div class="menu">
                <a href="home.php" class="home">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="23" width="23"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" id="mainIconPathAttribute"></path></svg>
                </a>
                <div class="dropdown">
                <a href="#" class="user">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zM7 12a5 5 0 0 0 10 0h-2a3 3 0 0 1-6 0H7z"/> </g> </svg>
                    <ul class="dropdown-nav">
                        <li><a href="profile.php" class="user-hover-list">User</a></li>
                        <li><a href="" class="user-hover-list">Messages</a></li>
                        <li><a href="" class="user-hover-list">Groups</a></li>
                        <li><a href="home.php" class="user-hover-list">Explore</a></li>
                        <li><a href="add.php" class="user-hover-list">Post item</a></li>
                        <li><a href="" class="user-hover-list">Saved</a></li>
                        <li><a href="aboutUs.html" class="user-hover-list">Help Center</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </a>
            </div>
        </div>
    </nav>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="pageCenter">
                <div class="container" id="container">
                    <div class="close-span">
                        <span class="close" onclick="closeModal()">&times;</span>
                    </div>
                    <form class="sign-in-container" action="form.php" method="post">
                        <h1>Sign In or Register</h1>

                        <div class="social-icons">
                            <a id="googleSignIn" href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        </div>

                        
                        <span class="form-span">or use your email and password</span>

                        

                        <!-- Your form fields and buttons -->
                        <input type="text" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" id="passw" name="passw">
                        <a href="#">→ Forgot Your Password? ←</a>
                        <button name="login" type="submit">Sign In</button>
                        <span class="form-span">Don't have an account yet?</span>
                        <!-- Added registration field -->
                        <button name="register" type="submit">Sign Up</button>
                    </form>
                </div>
                <div class="password-validator">
                    <div class="aro-pswd_info">
                        <div id="pswd_info">
                            <h4>Password must meet the following:</h4>
                            <ul>
                                <li id="letter" class="invalid">At least one letter</li>
                                <li id="capital" class="invalid">At least one capital letter</li>
                                <li id="number" class="invalid">At least one number</li>
                                <li id="length" class="invalid">Be at least 8 characters</li>
                                <li id="space" class="invalid">At least one [~,!,@,#,$,%,^,&,*,-,=,.,;,']</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="product-box-container">
        <?php
    // Check if the product ID is provided in the URL
    if (isset($_GET['id'])) {
        // Assuming you have already established a database connection
        include 'products.php'; // Include the file with product data

        // Get the product ID from the URL
        $productId = $_GET['id'];

        // Find the product with the specified ID
        $product = null;
        foreach ($products as $p) {
            if ($p['product_id'] == $productId) {
                $product = $p;
                break;
            }
        }

        // Display product details if found
        if ($product) {
            
            ?>
            
        <div class="product-box">
            <div class="product-image">
                <div class="image-container-inside">
                    <img src="assets/<?php echo strtolower(str_replace(' ', '_', $product['product_name'])); ?>.jpg" alt="Product Image">
                </div>
            </div>
            <div class="details-container">
                <div class="details-title"><?php echo $product['product_name']; ?></div>
                <div class="details-price">₱<?php echo $product['price']; ?></div>
                <div class="caption-detail">Details</div>
                <div class="details-desc"> <?php echo $product['description']; ?></div>
                <div class="details-date">Posted: <div class="details-right">1 week ago</div></div>
                <div class="details-seller">By: <div class="details-right"><?php echo $product['seller']; ?></div></div>
                <div class="details-button">
                    <div class="chat-button">
                        <button onclick="openForm()">Message</button>
                    </div>
                    <div class="seller-button">
                    <a href="#">
                    <svg style="color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16"> <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z" fill="#000000"></path> </svg>
                    </a>
                    </div>
                </div>
                
                <div class="product-reviews" >Reviews</div>
                <div class="product-reviews" >
                    <ul>
                        <li>1 star ka sakin lods</li>
                    </ul>
                </div>
            </div>
        </div>
            <?php
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Product ID not provided.";
    }
    ?>
    </div>

    <button class="open-button"onclick="openForm()">Msg</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container-chat">
   <i class="fa-solid fa-chalkboard-user"></i> <h3>Seller: <?php echo $product['seller']; ?></h3>

    <label for="msg">Message</label>
    <textarea placeholder="Still available?.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

    <svg>
        <filter id="bg-filter">
            <feTurbulence type="fractalNoise" baseFrequency="7.5"/>
        </filter>
    </svg>
    </div>
    <footer class="footer">
        <div class="footer__container">
            <span><data>InterLink</data> // ©2024 All rights reserved.</span>
        </div>
    </footer>
    <script>
    function openForm() {
    document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-pzjw8V+Y1E1z0ZZxC0jwkqbsLoeJ48PTnYf5UK+9CRxlFi1jNHDvD6IyXipTiXHp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8BEAHjIc15Lw7Wqj4J8NnRSqzNBZD2N" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
    </script>
    <script src="https://apis.google.com/js/client:platform.js?onload=start" async defer>
    </script>
</body>

</html>