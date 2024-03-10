<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLink</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5KK9e0lGWtTTOlJgeDE59gPGbomF8/xFi9v3eE3OIxT9n2DtN5o9RUoysl2Q5" crossorigin="anonymous">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="../dist/jquery.flipster.min.css">

    <script src="jquery/jquery.min.js "></script>
    <script src="../dist/jquery.flipster.min.js"></script>
  
   
</head>

<body>

    <nav>
        <div class="header">
            <div class="right-header">
                <div class="logo">
                    <a href="aboutUs.html" class="interlink">
                        <div class="title">
                        InterLink
                    </div>
                    </a>
                </div>
                
                <div class="search">
                    <form id="search-bar">
                        <input id="user-input" type="search" placeholder="search...">
                        <div class="filters">
                            
                            <div class="category-button" id="video-games">
                                <button class="shrink-border">video games</button>
                            </div>
                            <div class="category-button" id="art"> 
                                <button class="shrink-border">art</button>
                            </div>
                            <div class="category-button" id="technology">
                                <button class="shrink-border">tech</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
            </div>
            <div class="post-item">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" id="mainIconPathAttribute"></path> </svg>
                </a>
                
            </div>
            <div class="menu">
                
            <a href="#" class="user">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"> <g> <path fill="none" d="M0 0h24v24H0z"/> <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zM7 12a5 5 0 0 0 10 0h-2a3 3 0 0 1-6 0H7z"/> </g> </svg>
            </a>
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
    <div class="directory">
        <div><a href="home.html">Recommended for you ></a></div>

        
    </div>
    
    <div id="carousel">
        <ul class="flip-items">
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>

            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
             </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
            <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
            </div>
            <div class="info-container">
                <div class="content-title">
                    <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                </div>
                <div class="content-seller">
                    <h2>PHP 6,000</h2>
                </div>
            </div>
        </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="content-container">
                    <div class="content-image" style="background-image: url(assets/final_fantasy_xvi_ffxvi_deluxe.jpg); background-size: 100%; height: 280px;">                
                    </div>
                    <div class="info-container">
                        <div class="content-title">
                            <h1>Final Fantasy XVI (FFXVI) Deluxe PS5 - R3/Asia</h1>
                        </div>
                        <div class="content-seller">
                            <h2>PHP 6,000</h2>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script>
        var carousel = $("#carousel").flipster({
            style: 'carousel',
            spacing: -0.5,

        });
    </script>


    <div class="directory">
        <div><a href="home.html">Explore ></a>
            </div>
    </div>


    <div class="products">
    
        <?php
        include 'products.php';
        foreach ($products as $product) {
            ?>
            <div class="col-md-4 mb-4">
    <div class="card custom-card">
        <img src="assets/<?php echo strtolower(str_replace(' ', '_', $product['product_name'])); ?>.jpg" class="card-img-top" alt="Product Image" style="height: 200px; width: 200px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
            <p class="card-text"><?php echo $product['description']; ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Seller ID: <?php echo $product['seller']; ?></li>
            <li class="list-group-item">Price: $<?php echo $product['price']; ?></li>
            <li class="list-group-item">Quantity: <?php echo $product['quantity']; ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Add to Cart</a>
        </div>
    </div>
</div>

<?php } ?>

    <svg>
        <filter id="bg-filter">
            <feTurbulence type="fractalNoise" baseFrequency="7.5"/>
        </filter>
    </svg>
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-pzjw8V+Y1E1z0ZZxC0jwkqbsLoeJ48PTnYf5UK+9CRxlFi1jNHDvD6IyXipTiXHp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy8BEAHjIc15Lw7Wqj4J8NnRSqzNBZD2N" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>