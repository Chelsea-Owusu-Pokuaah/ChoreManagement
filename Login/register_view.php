<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/registerPage.css">

</head>

<body>
    <div class="content" id="content">
        <section class="side2" id="side2">
            <h2 class="welcomeBackAdress2"> Welcome Back!</h2>
            <span class="welcomeBackAdress2">
                Enter your personal details and <br> start your journey with us
            </span>
        </section>
        <section class="side1" id="side1">
            <h2 class="signIn">
                Sign Up
            </h2>
            <form action="../action/register_user.php" method="POST" name="registrationForm" id="registrationForm">

                <?php
                session_start();

                if (isset($_SESSION["email_exists"])) {
                    echo '<p class="error-message">' . $_SESSION["email_exists"] . '</p>';
                    unset($_SESSION["email_exists"]); 
                }

                if (isset($_SESSION["account_created"])) {
                    echo '<p class="success-message">' . $_SESSION["account_created"] . '</p>';
                    unset($_SESSION["account_created"]); 
                }
                ?>
                <div class="input-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>

                <div class="input-group gender-group">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="0" required>
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="1" required>
                </div>

                <div class="input-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="input-group">
                    <label for="familyRole">Family Role:</label>
                    <select id="familyRole" name="familyRole" required>
                        <option disabled selected value="0">Choose a role</option>
                        <?php
                        include("../function/select_role.php");

                        foreach ($familyRoles as $role) {
                            echo "<option value='{$role['fid']}'>{$role['fam_name']}</option>";
                        }
                        ?>
                </div>

                <div class="input-group">
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                </div>

                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="input-group">
                    <input type="password" id="retypePassword" name="retypePassword" placeholder="Retype Password"
                        required>
                </div>
                <button type="submit" class="signUpbtn" id="signUpbtn" name="signUpbtn">Register</button>
            </form>
            <p>Already have an account? <a href="../Login/login_view.php" id="registerHere">Login here</a></p>
        </section>
    </div>
</body>

<script src="../js/registerPage.js"></script>

</html>