<?php 
include("h.php");
include("condb.php");

if(isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];

    // สามารถนำ $user_id ไปใช้งานต่อได้ เช่น นำมาใช้ในการเข้าถึงฐานข้อมูลหรือทำอย่างอื่นตามต้องการ
    // ตัวอย่างเช่น
    //echo "Project ID: " . $p_id;
}
?>


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
            border-radius: 8px;
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
            color: #FF8C00;
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

        .cancel-button {
            background-color: red;
            color: white;
            width: 150px;
            border-radius: 40px;
            margin: 40; 
        }

        .confirm-button {
            background-color: green;
            color: white; 
            width: 150px;
            border-radius: 40px;
            margin: 40;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post"> <!-- Corrected typo "from" to "form" -->
    <div id="successPopup" class="popup">
        <!--<span class="popup-close" onclick="closePopup()">×</span>-->
        <p><i class="fas fa-trash-alt popup-check"></i></p> <!-- Changed icon class to trash-alt -->
        <p class="popup-text">Are you sure <br> You want to delete the project?</p><br>
        <div style="text-align: center;">
            <button type="button" class="back-button cancel-button" onclick="cancel()">Cancel</button>
            <button type="button" class="back-button confirm-button" onclick="confirm()">Confirm</button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById("successPopup").style.display = "none";
        }

        function cancel() {
            // Define your login function here
            // For example:
            window.location.href = "home.php"; // Redirect to login page
        }
        function confirm() {
            // Define your login function here
            // For example:
            window.location.href = "project_deletedb.php?p_id=<?php echo $p_id; ?>"; // Redirect to login page
        }

        // Simulate successful registration and display the popup
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("successPopup").style.display = "block";
            //setTimeout(closePopup, 3000); // Close popup after 3 seconds
        });
    </script>
</body>
</html>