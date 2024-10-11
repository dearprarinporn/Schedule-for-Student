<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
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
            border-radius: 10px;
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
            font-size: 24px; /* Adjust font size here */
        }

        .popup-check {
            color: #28a745;
            font-size: 72px; /* Adjust font size here */
            margin-bottom: 10px;
        }

        .popup-text {
            font-size: 24px; /* Adjust font size here */
        }

        .popup-close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }

        .back-button {
            font-size: 20px; /* Adjust font size here */
        }
        .back-button {
            background-color: #28a745; /* Change button background color to green */
            color: white; 
            width: 300px;
            border-radius: 40px;
            margin: 40;
}

    </style>
</head>
<body>
    
    <div id="successPopup" class="popup">
        <!--<span class="popup-close" onclick="closePopup()">×</span>-->
        <p><i class="fas fa-check-circle popup-check"></i></p>
        <p class="popup-text">Create New Project Successful!</p></br>
        <div style="text-align: center;">
            <button type="button" class="back-button" onclick="done()">Done</button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("successPopup").style.display = "none";
        }

        function done() {
            // Define your login function here
            // For example:
            window.location.href = "home.php"; // Redirect to login page
        }

        // Simulate successful registration and display the popup
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("successPopup").style.display = "block";
            // setTimeout(closePopup, 3000); // Close popup after 3 seconds
        });
    </script>
</body>
</html>
