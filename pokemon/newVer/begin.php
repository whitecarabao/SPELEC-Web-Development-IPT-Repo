<?php
require "vendor/autoload.php";
?>
<?php 
  session_start();
  if(!isset($_SESSION["email"])){
    header("location:login.php");
  }
?>
<html>
  <head>
    <title>Home</title>
  </head>
  <body>
    <h1>Welcome <?php echo $_SESSION["name"]; ?></h1>

  </body>
</html>

<?php
echo "<h1>Welcome to the Pokemon Game!</h1>";
echo "<h2>Please select an option:</h2>";
echo "<a href='newGame.php'>New Game</a>";
echo "<br>";
echo "<a href='loadGame.php'>Load Game</a><br>";
echo "<a href='destroySession.php'>Logout</a>"


?>