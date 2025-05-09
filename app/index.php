<?php
    include "../database/insert_sample_data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Management System</title>
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
    <div class="landing-page">
        <div class="overlay">
            <div class="content">
                <h1><span class="animated-text">Welcome to the Asset Management System</span></h1>
                <p class="tagline">Your Partner in Efficient Asset Management</p>
                <p class="description">
                    Streamline your asset tracking, optimize resource allocation, and enhance productivity with our cutting-edge asset management system. Whether you're a small business or a large enterprise, our tools are designed to help you manage your assets effortlessly.
                </p>
                <div class="buttons">
                    <a href="signup.php">
                        <button id="signup-btn">Get Started</button>
                    </a>
                    <a href="login.php">
                        <button id="login-btn">Login</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>