<?php
session_start();
session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Game - Guess The Number</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="bootstrap/css/clean-blog.min.css" rel="stylesheet">
    
  <!-- My CSS -->
  <link href="css/mycss.css" rel="stylesheet">

</head>

<body style="background-color: black">
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/index.html">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>
  <!-- Page Header -->
  <header class="pic" style="background-color: black"></header>

  <!-- Main Content -->
    <div class="container" style="background-color: black; margin-bottom: 20%">
        <h1 class="font" style="margin-top: 20%">Select a Level</h1>
        <p class="font">
            (1) Beginner - 4 guesses, numbers 1 through 10<br>
            (2) Intermediate - 5 guesses, numbers 1 through 50<br>
            (3) Advanced - 6 guesses, numbers 1 through 100<br>
        </p>
        <a href="levelOne.php"><input class="button font" type="submit" style="background-color: lawngreen" name="levelOne" value="1"></a>
        <a href="levelTwo.php"><input class="button font" type="submit" style="background-color: yellow" name="levelTwo" value="2" ></a>
        <a href="levelThree.php"><input class="button font" type="submit" style="background-color: red" name="levelThree" value="3"></a>
    </div>

  <!-- Footer -->
  <footer style="background-color: black">
    <div class="container">
      <p class="copyright text-muted" style="color: white">Copyright &copy; Luiza Lopes 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="bootstrap/js/clean-blog.min.js"></script>

</body>

</html>
