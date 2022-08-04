<!DOCTYPE html>
<html>
<head>
  <title>sniffle test</title>
  <!-- JQuery must be included -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Snuffle script! -->
  <script src="Sniffle/sniffle.js"></script>

  <!-- These scripts should only be loaded after the document has finished loading -->
  <script>
    $(document).ready(function() {
      $("#red").click(function(){
        sniffleAdd("New Notification!", "I am a red notification!", "red", "boop.jpg");
      });

      $("#blue").click(function(){
        sniffleAdd("New Notification!", "I am a blue notification!", "blue", "boop2.jpg");
      });

      $("#green").click(function(){
        sniffleAdd("New Notification!", "I am a green notification!", "green", "boop3.jpg");
      });

      $("#black").click(function(){
        sniffleAdd("Default color", "Black, or #151515, is the default color");
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
