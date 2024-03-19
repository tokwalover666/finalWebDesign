<?php
session_start(); // Start session to retrieve user information
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect if user is not logged in
    exit;
}

// Retrieve email from session
$email = $_SESSION['email'];

$conn = new mysqli('localhost', 'root', '', 'interlink');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

// Retrieve products associated with the logged-in user
$stmt = $conn->prepare("SELECT * FROM products WHERE seller = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterLink</title>
    <link rel="icon" type="image/x-icon" href="assets/interlink-logo.png">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


</head>
<body>
    <nav>
        <div class="header">
            <div class="left-header">
                <div class="logo">
                    <a href="aboutUs.html" class="interlink">
                        <div class="title">
                        InterLink
                    </div>
                    </a>
                </div>
                
                
            </div>
            
            <div class="menu">
                <a href="index.php" class="home">
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
    <div class="profile-container">
        <h1>Welcome, <?php echo $email ?>!</h1>
        
        <div>LISTINGS</div>
        <?php while ($product = $result->fetch_assoc()) { ?>

            </div>
            <div class="user-listings">
                <a href="prod_page.php?id=<?php echo $product['product_id']; ?>" class="product-link-page">
                <img src="assets/<?php echo strtolower(str_replace(' ', '_', $product['product_name'])); ?>.jpg" class="card-img-top" alt="Product Image" style="width: 100%; 
                height: 280px; 
                object-fit: cover;
                object-position: 25% 25%;  border-bottom: 2px solid black; ">
                <div class="user-card-body">
                    <h1 class="card-title"><?php echo $product['product_name']; ?></h1>
                    <h2> Price: ₱<?php echo $product['price']; ?></h2>
                    <p class="card-text"><?php echo $product['description']; ?></p>
                </div>

        
                </a>
    </div>
        <?php } ?>



    </div>
        <svg>
        <filter id="bg-filter">
            <feTurbulence type="fractalNoise" baseFrequency="7.5"/>
        </filter>
    </svg>

    <footer class="footer">
        <div class="footer__container">
            <span><data>InterLink</data> // ©2024 All rights reserved.</span>
        </div>
    </footer>
<script src="main.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
</script>
<script src="https://apis.google.com/js/client:platform.js?onload=start" async defer>
</script>
</body>
</html>