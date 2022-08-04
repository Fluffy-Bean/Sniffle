<?php
include "sniffle.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sniffle test</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@500&amp;display=swap">

  <!-- JQuery -->
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
  </script>

  <script>
    $(document).ready(function() {
      $("#notification").click(function(){
        $(".sniffle").append("<div class='sniffle-notification' onclick='sniffleClose(this)'> <img class='sniffle-img' src='boop.jpg'> <div class='sniffle-content'> <p class='sniffle-header'>Header</p> <p class='sniffle-description'>Description</p> </div> </div>");
      });
    });
  </script>

  <style>
    html, body {
      margin: 0; padding: 0;
    }
    button {
      position: fixed;
      bottom: 1rem;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>
<body>

<button id="notification">Add Notification</button>

</body>
</html>
