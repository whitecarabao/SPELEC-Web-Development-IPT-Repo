<?php
include_once 'pokemonClass.php';
include_once 'movesClass.php';
include_once 'trainerClass.php';
session_start();
echo "<h1>Battle!</h1>";

//echo information of trainer and pokemon
$trainer = unserialize($_SESSION['trainer']);
$chosenPokemon = unserialize($_SESSION['chosenStarter']);

//echo trainer information
echo "<h2>Your Trainer: ".$trainer->getName()."</h2>";
echo "<h2>Your Pokemon: ".$trainer->getCurrentPokemon()->getName()."</h2>";
//echo button to go to switchCurr.php
echo '<br>';
echo "<form action='switchCurr.php' method='post'>";
echo "<input type='submit' value='Switch Pokemon'>";
echo "</form>";

//echo button to go to playerAttack.php
echo '<br>';
echo "<form action='playerAttack.php' method='post'>";
echo "<input type='submit' value='Attack'>";
echo "</form>";

//echo button to destroySession.php
echo '<br>';
echo "<form action='destroySession.php' method='post'>";
echo "<input type='submit' value='Logout'>";
echo "</form>";



//echo pokemon information 
echo "<table>";
echo "<tr><th>Name</th><th>Health</th><th>Level</th><th>Moves</th></tr>";
echo "<tr><td>".$trainer->getCurrentPokemon()->getName()."</td><td>".$trainer->getCurrentPokemon()->getHp()."</td><td>".$trainer->getCurrentPokemon()->getLevel()."</td><td>";

foreach($trainer->getCurrentPokemon()->getMoves() as $move){
    echo $move->getName()."<br>";
}
echo "</td><td>";
echo "</tr>";
echo "</table>";

echo "<h2>Your Party:</h2>";
echo "<table>";
echo "<tr><th>Name</th><th>Health</th><th>Level</th><th>Moves</th></tr>";
foreach($trainer->getPokemons() as $pokemon){
    echo "<tr><td>".$pokemon->getName()."</td><td>".$pokemon->getHp()."</td><td>".$pokemon->getLevel()."</td><td>";
    foreach($pokemon->getMoves() as $move){
        echo $move->getName()."<br>";
    }
    echo "</td></tr>";
} 
echo "</table>";


//echo enemy trainer information
$enemyTrainer = unserialize($_SESSION['enemyTrainer']);
$enemyPokemon = $enemyTrainer->getCurrentPokemon();

echo "<h2>Your Enemy: ".$enemyTrainer->getName();
echo "<h2>Your Enemy's Pokemon: ".$enemyPokemon->getName()."</h2>";

//echo enemy party information 
echo "<table>";
echo "<tr><th>Name</th><th>Health</th><th>Level</th><th>Moves</th></tr>";
foreach($enemyTrainer->getPokemons() as $pokemon){
    echo "<tr><td>".$pokemon->getName()."</td><td>".$pokemon->getHp()."</td><td>".$pokemon->getLevel()."</td><td>";
    foreach($pokemon->getMoves() as $move){
        echo $move->getName()."<br>";
    }
    echo "</td></tr>";
}
echo "</table>";







?>