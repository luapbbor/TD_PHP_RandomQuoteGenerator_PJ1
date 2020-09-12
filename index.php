<?php
include 'inc/functions.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="20">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
 <style>
   body, #loadQuote {
     background-color: <?php echo getRandomColor(); ?>;
   }
 </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      
      <?php echo printQuote(); ?>
      
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
    <div>

    </div>
  </div>
</body>
</html>

