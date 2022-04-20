<?php
session_start();
//show inputs for trainer name
if($_SESSION["name"] != null){
echo "Input of Trainer Name no longer needed <br>";
echo "Welcome, ".$_SESSION["name"] . "<br>";
echo "Logged in as ".$_SESSION["email"] . "<br>";
$name = $_SESSION["name"];
$_SESSION['trainerNameHldr'] = serialize($name);
//echo button that redirects to pokemonSelect.php
echo "<form action='pokemonSelect.php' method='post'>";
echo "<input type='submit' value='Select Pokemon'>";
echo "</form>";



}
else if($_SESSION["name"] == null){
echo "<h1>Welcome to the Pokemon Game!</h1>";
echo "<h2>Please enter your name:</h2>";
echo "<form action='newGame.php' method='post'>";
echo "<input type='text' name='name'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
}
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $_SESSION['trainerNameHldr'] = $name;
    $_SESSION['trainerNameHldr'] = serialize($name);
    echo "<h2>Welcome $name!</h2>";
    //countdown from 5 to 0 before redirecting to pokemonSelect.php
    for($i = 5; $i >= 0; $i--){
        echo "<h3>Redirecting to Pokemon Selection in $i seconds...</h3>";

    }
    header("Location: pokemonSelect.php");
}

?>