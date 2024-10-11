<!DOCTYPE html>
<html>
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
</html>