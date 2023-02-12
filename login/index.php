<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,500;0,600;1,400;1,500&family=Roboto+Slab:wght@200;300;400;500;600&display=swap"
        rel="stylesheet" />


</head>

<body>
    <div class="container" id="container">
        <h1 class="label">Login</h1>

        <form class="login_form" action="home.php" method="post" name="form" onsubmit="return validated()" id="form">
            <?php if (isset($_SESSION['error'])) {
        echo "<div style='  color: #842029;background-color: #f8d7da;border-color: #f5c2c7;padding :10px'>";

        echo $_SESSION['error'];
        echo '</div>';
      }
      session_destroy();
      ?>

            <div class="font">Email</div>

            <input autocomplete="off" type="text" name="email" class="emailtxt" id="email" />


            <div id="email_error">Please enter a valid Email</div>
            <div class="font font2">Password</div>

            <input type="password" name="password" id="password" />

            <div id="pass_error">Please enter a valid password</div>
            <button type="submit" id="submit">Login</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>