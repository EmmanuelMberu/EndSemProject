<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="endsem.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>

<body>
    <!--Navigation Bar Section-->
    <section class="navigation">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
            <div class="container">
                <img src="images/minilogo.png" class="img-fluid" alt="">
                <h1><b><a class="navbar-brand" href="#">Career Guidance</a></b></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href=index.php>Home</a>
                
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href=signup.html>Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <br>
    <center>
    <h1>Login</h1>

    <form method="post" id="signup" novalidate>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <br>
        <p>Don't have an account? <a href=signup.html>Sign up</a></p>
        <br>
        <button class ="btn btn-primary">Login</button>
    </form>
    </center>
</body>

</html>