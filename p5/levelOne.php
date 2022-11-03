<?php
session_start();

$_SESSION['randNum'] = isset($_SESSION['randNum']) ?
    $_SESSION['randNum'] : rand(1, 10);
$_SESSION['numTries'] = isset($_SESSION['numTries']) ?
    $_SESSION['numTries'] : 0;
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Guess The Number - Level 1</title>

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
  <!-- Page Header -->
  <header class="picOne" style="background-color: black"></header>

  <!-- Main Content -->
    
    <div class="container font" style="margin-bottom: 20%; margin-top: 20%">
        <?php
    
        $randNum = $_SESSION['randNum'];

        if((isset($randNum)) && (isset($_POST['guessNum']))) {
            $guessNum = $_POST['guessNum'];
            $triesLeft = 3 - $_SESSION['numTries'];
            
            //if guess is correct
            if(($randNum == $guessNum)) {
                echo "<h1>You won that round!</h1>";
                //reset the number of tries left
                $triesLeft = 3;
                //get a new random number 
                //reset the number of tries
                unset($_SESSION['randNum'], $_SESSION['numTries']);
            }
            //if guess is too high
            elseif(($randNum < $guessNum) && ($triesLeft > 0)) {
                echo "<p>Your guess was too high.</p>";
                echo "<p>You have $triesLeft left</p>"; 
                $_SESSION['numTries']++; //increment number of tries
            }
            //if guess is too low
            elseif (($randNum > $guessNum) && ($triesLeft > 0)) {
                echo "<p>Your guess was too low.</p>";
                echo "<p>You have $triesLeft left</p>";
                $_SESSION['numTries']++; //increment number of tries
            }
            //if game was lost
            else {
                echo "<p>You lost that round.</p>";
                echo "<p>The solution was $randNum.</p>"; 
                //reset the number of tries left
                $triesLeft = 3;
                //get a new random number 
                //reset the number of tries
                unset($_SESSION['randNum'], $_SESSION['numTries']);
            }
        }
        ?>
        <form action="" method="post" >
            <p class="font"> Enter Guess: <input type="number" id="guessNum" name="guessNum" min="1" max="10"/></p>
            <input class="font" type="submit" value="Guess" name="button">
        </form>
        <a href="index.php" style="align-items: flex-start" ><input class="reset" type="submit" value="New Game"></a><br><br>
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

  <!-- Contact Form JavaScript -->
  <script src="bootstrap/js/jqBootstrapValidation.js"></script>
  <script src="bootstrap/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="bootstrap/js/clean-blog.min.js"></script>

</body>

</html>
