<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include './partial/header.php'; ?>

    <main class="my-page login-page">
        <img src="./images/login.jpg" alt="">
        <div class="login-card">
            <h2>Login</h2>
            <form class="login-form" method="POST" action="login.php">
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Login</button>
            </form>
        </div>


        <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (isset($_COOKIE['user']) && isset($_COOKIE['password'])) {

                if ($_COOKIE['user'] === $username && $_COOKIE['password'] === $password) {
                    $_SESSION['user'] = $username;
                    header("Location: admin.php");
                } 
            } else {
                header("Location: register.php");
            }
        }
        
        ?>
    </main>

    <?php include './partial/footer.php'; ?>
</body>

</html>