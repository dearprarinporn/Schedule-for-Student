<?php 
    include("h.php");
    include("style.php");
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <div class="container">
        <div class="wrapper">
            <form action="check.php" method="post">
            <img src="pics/logo.png" width="250" height="250">
            <div class="block">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="u_email" placeholder="Enter your Email PSU Passport" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="u_pass" placeholder="Enter your Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>

                <button type="submit" class="btn">Login</button>
            </form>

            <form action="register.php" method="post">
            <p>Dont't have an account?
            <button type="onclick" class="register">Create a new account</button>
            </p>
            </form>
        </div>
    </div>
</div>
</body>

</html>