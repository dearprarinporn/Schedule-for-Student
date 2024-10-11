<?php
include("h.php");
include("style.php");
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="wrapper">
            <form action="register_db.php" method="post">
                <img src="pics/logo.png" width="250" height="250">
                <h1>Register</h1>
                <div class="block">
                    <div class="input-box">
                        <input type="text" name="u_name" placeholder="Enter your Username" required>
                        <i class='bx bxs-user'></i>
                    </div>

                    <div class="input-box">
                        <input type="text" name="u_email" placeholder="Enter your Email PSU Passport" required>
                        <i class='bx bxs-envelope'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="u_pass" placeholder="Enter your Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="Confirm Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                </div>

                <button type="submit" class="btn">Register</button>
            </form>
            
            <div class="undertext">
            <form action="index.php" method="post">
                <p>Already have an account?<button type="onclick" class="login">Log in</button></p>
            </form>
            </div>
        </div>
    </div>
</body>

</html>