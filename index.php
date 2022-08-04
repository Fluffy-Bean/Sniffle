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
      $("#red").click(function(){
        sniffleAdd("head", "desk", "red", "boop.jpg");
      });

      $("#blue").click(function(){
        sniffleAdd("head", "desk", "blue", "boop2.jpg");
      });

      $("#green").click(function(){
        sniffleAdd("head", "desk", "green", "boop3.jpg");
      });

      $("#black").click(function(){
        sniffleAdd("head", "desk", "#151515");
      });
    });
  </script>

  <style>
    html, body {
      margin: 0; padding: 0;
    }
    .buttons {
      position: fixed;
      bottom: 1rem;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>
<body>

<div class="buttons">
  <button id="red">Add Red Notification</button>
  <button id="blue">Add Blue Notification</button>
  <button id="green">Add Green Notification</button>
  <button id="black">Add Black Notification</button>
</div>

</body>
</html>
