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

    <main class="my-page register-page">
        <img src="./images/register.png" alt="">

        <div class="register-card">
            <h2>REGISTER</h2>
            <form class="register-form" method="POST" action="register.php">
                <input type="text" name="username" placeholder="Name" />
                <input type="text" name="surname" placeholder="Surname" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Register</button>
            </form>
        </div>

        <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            setcookie("user", $username, time() + 3600, "/");
            setcookie("password", $password, time() + 3600, "/");

            header("Location: login.php");
        }

        ?>



    </main>

    <?php include './partial/footer.php'; ?>
</body>

</html>