<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/loginPage.css">
    <script src="../js/loginPage.js" defer></script>
</head>

<body>
    <div class="content" id="content">
        <section class="side1" id="side1">
            <h2 class="signIn">
                Sign in
            </h2>
            <form action="../action/login_user.php" name="signIn" id="signIn" class="signIn" method="post">
                <?php
                session_start();

                if (isset($_SESSION["password_incorrect"])) {
                    echo '<p class="error-message">' . $_SESSION["password_incorrect"] . '</p>';
                    unset($_SESSION["password_incorrect"]);
                }

                if (isset($_SESSION["email_DNE"])) {
                    echo '<p class="success-message">' . $_SESSION["email_DNE"] . '</p>';
                    unset($_SESSION["email_DNE"]);
                }
                ?>
                <input name="email" id="emailSignIn" type="email" placeholder="Email">
                <input name="password" id="passwordSignIn" type="password" placeholder="Password" required>
                <button type="submit" class="signInbtn" id="signInbtn" name="signInbtn">Log in</button>
            </form>
            <p>Don't have an account? <a href="../Login/register_view.php" id="registerHere"> Register Here</a> </p>
        </section>
        <section class="side2" id="side2">
            <!-- Content for the second section goes here -->
            <h2>Hello, Friend!</h2>
            <p>Enter your details to start your journey with us.</p>
        </section>
    </div>
</body>

</html>