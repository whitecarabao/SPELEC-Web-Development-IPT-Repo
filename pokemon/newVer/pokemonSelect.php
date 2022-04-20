<?php
include_once 'pokemonClass.php';
include_once 'trainerClass.php';
date_default_timezone_set('Asia/Manila');
session_start();
//array of Pokemons
$pokemons = array();
$pokemons[0] = new Pokemon("Pikachu", 0, 1, 100, 10, 10, "Electric", array(new Move("Thunder Shock", 10, "Electric", "Special"), new Move("Thunder Bolt", 10, "Electric", "Special"), new Move("Thunder Punch", 10, "Electric", "Physical"), new Move("Thunder Wave", 10, "Electric", "Special")));
$pokemons[1] = new Pokemon("Bulbasaur", 0, 1, 100, 10, 10, "Grass", array(new Move("Vine Whip", 10, "Grass", "Physical"), new Move("Razor Leaf", 10, "Grass", "Physical"), new Move("Seed Bomb", 10, "Grass", "Physical"), new Move("Solar Beam", 10, "Grass", "Special")));
$pokemons[2] = new Pokemon("Charmander", 0, 1, 100, 10, 10, "Fire", array(new Move("Ember", 10, "Fire", "Special"), new Move("Fire Blast", 10, "Fire", "Special"), new Move("Fire Punch", 10, "Fire", "Physical"), new Move("Flame Wheel", 10, "Fire", "Physical")));
$pokemons[3] = new Pokemon("Squirtle", 0, 1, 100, 10, 10, "Water", array(new Move("Bubble", 10, "Water", "Special"), new Move("Water Gun", 10, "Water", "Special"), new Move("Water Pulse", 10, "Water", "Special"), new Move("Hydro Pump", 10, "Water", "Special")));
$pokemons[4] = new Pokemon("Pidgey", 0, 1, 100, 10, 10, "Normal", array(new Move("Gust", 10, "Normal", "Special"), new Move("Wing Attack", 10, "Normal", "Physical"), new Move("Aerial Ace", 10, "Normal", "Physical"), new Move("Air Cutter", 10, "Normal", "Special")));
$pokemons[5] = new Pokemon("Rattata", 0, 1, 100, 10, 10, "Normal", array(new Move("Quick Attack", 10, "Normal", "Physical"), new Move("Bite", 10, "Normal", "Physical"), new Move("Hyper Fang", 10, "Normal", "Physical"), new Move("Super Fang", 10, "Normal", "Physical")));
$pokemons[6] = new Pokemon("Ekans", 0, 1, 100, 10, 10, "Poison", array(new Move("Poison Sting", 10, "Poison", "Physical"), new Move("Bite", 10, "Poison", "Physical"), new Move("Acid", 10, "Poison", "Special"), new Move("Gunk Shot", 10, "Poison", "Special")));
$pokemons[7] = new Pokemon("Pidgeotto", 0, 1, 100, 10, 10, "Normal", array(new Move("Gust", 10, "Normal", "Special"), new Move("Wing Attack", 10, "Normal", "Physical"), new Move("Aerial Ace", 10, "Normal", "Physical"), new Move("Air Cutter", 10, "Normal", "Special")));
$pokemons[8] = new Pokemon("Raticate", 0, 1, 100, 10, 10, "Normal", array(new Move("Quick Attack", 10, "Normal", "Physical"), new Move("Bite", 10, "Normal", "Physical"), new Move("Hyper Fang", 10, "Normal", "Physical"), new Move("Super Fang", 10, "Normal", "Physical")));
$pokemons[9] = new Pokemon("Arbok", 0, 1, 100, 10, 10, "Poison", array(new Move("Poison Sting", 10, "Poison", "Physical"), new Move("Bite", 10, "Poison", "Physical"), new Move("Acid", 10, "Poison", "Special"), new Move("Gunk Shot", 10, "Poison", "Special")));
$pokemons[10] = new Pokemon("Pikachu", 0, 1, 100, 10, 10, "Electric", array(new Move("Thunder Shock", 10, "Electric", "Special"), new Move("Thunder Bolt", 10, "Electric", "Special"), new Move("Thunder Punch", 10, "Electric", "Physical"), new Move("Thunder Wave", 10, "Electric", "Special")));
$pokemons[11] = new Pokemon("Bulbasaur", 0, 1, 100, 10, 10, "Grass", array(new Move("Vine Whip", 10, "Grass", "Physical"), new Move("Razor Leaf", 10, "Grass", "Physical"), new Move("Seed Bomb", 10, "Grass", "Physical"), new Move("Solar Beam", 10, "Grass", "Special")));
$pokemons[12] = new Pokemon("Charmander", 0, 1, 100, 10, 10, "Fire", array(new Move("Ember", 10, "Fire", "Special"), new Move("Fire Blast", 10, "Fire", "Special"), new Move("Fire Punch", 10, "Fire", "Physical"), new Move("Flame Wheel", 10, "Fire", "Physical")));
$pokemons[13] = new Pokemon("Squirtle", 0, 1, 100, 10, 10, "Water", array(new Move("Bubble", 10, "Water", "Special"), new Move("Water Gun", 10, "Water", "Special"), new Move("Water Pulse", 10, "Water", "Special"), new Move("Hydro Pump", 10, "Water", "Special")));
$pokemons[14] = new Pokemon("Pidgey", 0, 1, 100, 10, 10, "Normal", array(new Move("Gust", 10, "Normal", "Special"), new Move("Wing Attack", 10, "Normal", "Physical"), new Move("Aerial Ace", 10, "Normal", "Physical"), new Move("Air Cutter", 10, "Normal", "Special")));
$pokemons[15] = new Pokemon("Rattata", 0, 1, 100, 10, 10, "Normal", array(new Move("Quick Attack", 10, "Normal", "Physical"), new Move("Bite", 10, "Normal", "Physical"), new Move("Hyper Fang", 10, "Normal", "Physical"), new Move("Super Fang", 10, "Normal", "Physical")));
$pokemons[16] = new Pokemon("Ekans", 0, 1, 100, 10, 10, "Poison", array(new Move("Poison Sting", 10, "Poison", "Physical"), new Move("Bite", 10, "Poison", "Physical"), new Move("Acid", 10, "Poison", "Special"), new Move("Gunk Shot", 10, "Poison", "Special")));
$pokemons[17] = new Pokemon("Pidgeotto", 0, 1, 100, 10, 10, "Normal", array(new Move("Gust", 10, "Normal", "Special"), new Move("Wing Attack", 10, "Normal", "Physical"), new Move("Aerial Ace", 10, "Normal", "Physical"), new Move("Air Cutter", 10, "Normal", "Special")));
$pokemons[18] = new Pokemon("Raticate", 0, 1, 100, 10, 10, "Normal", array(new Move("Quick Attack", 10, "Normal", "Physical"), new Move("Bite", 10, "Normal", "Physical"), new Move("Hyper Fang", 10, "Normal", "Physical"), new Move("Super Fang", 10, "Normal", "Physical")));
$pokemons[19] = new Pokemon("Arbok", 0, 1, 100, 10, 10, "Poison", array(new Move("Poison Sting", 10, "Poison", "Physical"), new Move("Bite", 10, "Poison", "Physical"), new Move("Acid", 10, "Poison", "Special"), new Move("Gunk Shot", 10, "Poison", "Special")));
$pokemons[20] = new Pokemon("Pikachu", 0, 1, 100, 10, 10, "Electric", array(new Move("Thunder Shock", 10, "Electric", "Special"), new Move("Thunder Bolt", 10, "Electric", "Special"), new Move("Thunder Punch", 10, "Electric", "Physical"), new Move("Thunder Wave", 10, "Electric", "Special")));
$pokemons[21] = new Pokemon("Bulbasaur", 0, 1, 100, 10, 10, "Grass", array(new Move("Vine Whip", 10, "Grass", "Physical"), new Move("Razor Leaf", 10, "Grass", "Physical"), new Move("Seed Bomb", 10, "Grass", "Physical"), new Move("Solar Beam", 10, "Grass", "Special")));
$_SESSION['pokemonArray'] = serialize($pokemons);
//array of moves
$moves = array();
$moves[0] = new Move("Quick Attack", 10, "Normal", "Physical");
$moves[1] = new Move("Bite", 10, "Normal", "Physical");
$moves[2] = new Move("Hyper Fang", 10, "Normal", "Physical");
$moves[3] = new Move("Super Fang", 10, "Normal", "Physical");
$moves[4] = new Move("Poison Sting", 10, "Poison", "Physical");










//array of starter pokemon
$starterPokemons = array();
$starterPokemons[0] = new Pokemon("Bulbasaur", 0, 1, 325, 10, 10, "Grass", array(new Move("Vine Whip", 10, "Grass", "Physical"), new Move("Razor Leaf", 10, "Grass", "Physical"), new Move("Seed Bomb", 10, "Grass", "Physical"), new Move("Solar Beam", 10, "Grass", "Special")));
$starterPokemons[1] = new Pokemon("Charmander", 0, 1, 325, 10, 10, "Fire", array(new Move("Ember", 10, "Fire", "Special"), new Move("Fire Blast", 10, "Fire", "Special"), new Move("Fire Punch", 10, "Fire", "Physical"), new Move("Flame Wheel", 10, "Fire", "Physical")));
$starterPokemons[2] = new Pokemon("Squirtle", 0, 1, 325, 10, 10, "Water", array(new Move("Bubble", 10, "Water", "Special"), new Move("Water Gun", 10, "Water", "Special"), new Move("Water Pulse", 10, "Water", "Special"), new Move("Hydro Pump", 10, "Water", "Special")));

//drop down of starter pokemon for trainer to choose
echo "<h1>Welcome to the Pokemon Game!</h1>";
echo "<h2>Please select your starter Pokemon:</h2>";
echo "<form action='pokemonSelect.php' method='post'>";
echo "<select name='starterPokemon'>";
for($i = 0; $i <= 2; $i++){
    echo "<option value='$i'>".$starterPokemons[$i]->getName()."</option>";
}
echo "</select>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
if(isset($_POST['starterPokemon'])){
    echo "<h2>Your starter Pokemon is ".$starterPokemons[$_POST['starterPokemon']]."</h2>";
    $starterPokemon = $_POST['starterPokemon'];
     echo "<h2>Welcome!</h2>";
     //echo chosen pokemon name and its stats in a table

     //find pokemon in starter pokemon and assign to $chosenPokemon

     $time = date("H");

           
            if($time >= 0 && $time < 12){
                echo "<h3>Good morning, ".unserialize($_SESSION['trainerNameHldr'])."!</h3>";
            }
            else if($time >= 12 && $time < 18){
                echo "<h3>Good afternoon, ". unserialize($_SESSION['trainerNameHldr'])."!</h3>";
            }
            else{
                echo "<h3>Good evening, ".unserialize($_SESSION['trainerNameHldr'])."!</h3>";
            }
  

            $chosenPokemon = $starterPokemons[$starterPokemon];
            $_SESSION['trainer'] = serialize(new Trainer(unserialize($_SESSION['trainerNameHldr']), array($chosenPokemon, $pokemons[7], $pokemons[6], $pokemons[0]), 5000));
            $_SESSION['chosenStarter'] = serialize($chosenPokemon);
            echo $chosenPokemon->getName();
        //echo table of chosen pokemon's name, health, level, and moves
        echo "<table>";
        echo "<tr><th>Name</th><th>Health</th><th>Level</th><th>Moves</th></tr>";
        echo "<tr><td>".$chosenPokemon->getName()."</td><td>".$chosenPokemon->getHp()."</td><td>".$chosenPokemon->getLevel()."</td><td>";
        foreach($chosenPokemon->getMoves() as $move){
            echo $move->getName()."<br>";
        }
        echo "</td></tr>";
        echo "</table>";
        
        
    




        //echo button to redirect to battle.php
        echo "<form action='initializeEnemy.php' method='post'>";
        echo "<input type='submit' value='Battle!'>";
        echo "</form>";

}





?>