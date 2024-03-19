<?php
session_start();
// Database connection
$conn = new mysqli('localhost', 'root', '', 'interlink');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = $_POST['passw'];

        $checkStmt = $conn->prepare("SELECT COUNT(*) FROM profile WHERE email = ?");
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkStmt->bind_result($emailCount);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($emailCount > 0) {
            echo "Email already exists. Please choose a different email.";
            header ("Location: index.php?error=Email already exists!");
        } else {
            if (strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[A-Z]+#", $password)) {
                echo "Invalid password. It must be at least 8 characters long, contain at least one number, and one uppercase letter.";
                header ("Location: index.php?error=Invalid email or password!");
            } else {
                
                $stmt = $conn->prepare("INSERT INTO profile (email, password) VALUES (?, ?)");
                $stmt->bind_param("ss", $email, $password);

                if ($stmt->execute()) {
                    echo "Registered successfully!";
                    header ("Location: profile.html?=Registered successful!");
                } else {
                    echo "Error during registration: " . $stmt->error;
                    header ("Location: index.php?error=Error during registration!");
                }

                $stmt->close();
            }
        }
    }

    // Login user
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['passw'];

        $stmt = $conn->prepare("SELECT email, password FROM profile WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($dbEmail, $dbPassword);
        $stmt->fetch();

        if ($password == $dbPassword) {
            $_SESSION['email'] = $email;
            header ("Location: profile.php?status=Login%20successful!");
            exit;
            
        } else {
            echo "Invalid email or password!";
            header ("Location: login.php?error=Invalid email or password!");
        }

        if (empty($email)) {
            header ("Location: login.php?error=Email is empty!");

            
        } else if (empty($password)) {
            echo "Invalid email or password!";
            header ("Location: login.php?error=Password is empty!");
        }

        $stmt->close();
    }
}

$conn->close();
?>
