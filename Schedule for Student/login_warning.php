<?
include("popup_style.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ffffff;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        animation: popupFadeIn 0.3s ease-in-out;
    }

    @keyframes popupFadeIn {
        from {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.5);
        }

        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    .popup p {
        margin: 0;
        text-align: center;
        font-size: 20px;
        /* Adjust font size here */
    }

    .popup-check {
        color: #dc3545;
        /* Red color for failure */
        font-size: 72px;
        /* Adjust font size here */
        margin-bottom: 10px;
    }

    .popup-text {
        font-size: 24px;
        /* Adjust font size here */
    }

    .popup-close {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }

    .back-button {
        font-family: Arial, sans-serif;
        font-size: 20px;
        /* Adjust font size here */
    }

    .back-button {
        background-color: #dc3545;
        /* Change button background color to red */
        color: white;
        width: 300px;
        height: 40px;
        border: none;
        border-radius: 40px;
        margin: 40;
    }
</style>
</head>
<body>
    
    <div id="failurePopup" class="popup">
        <!--<span class="popup-close" onclick="closePopup()">×</span>-->
        <p><i class="fas fa-times-circle popup-check"></i></p> <!-- Change icon here -->
        <p class="popup-text">User or Password incorrect<br>Please try again.</p><br>
        <div style="text-align: center;">
            <button type="button" class="back-button" onclick="retry()">Retry</button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("failurePopup").style.display = "none";
        }

        function retry() {
            // Define your retry function here
            // For example:
            window.location.href = "index.php"; // Redirect to registration page
        }

        // Simulate registration failure and display the popup
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("failurePopup").style.display = "block";
            // setTimeout(closePopup, 3000); // Close popup after 3 seconds
        });
    </script>
</body>
</html>