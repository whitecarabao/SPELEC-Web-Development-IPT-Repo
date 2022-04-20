<?php
include_once 'movesClass.php';
include_once 'pokemonClass.php';
include_once 'trainerClass.php';
session_start();


echo "<h1>Battle!</h1>";

if($_SESSION['trainer']!=null){
    $trainer = unserialize($_SESSION['trainer']);
    $enemyTrainer = unserialize($_SESSION['enemyTrainer']);

    //echo enemy pokemon information
    echo "<h2>Your Enemy: ".$enemyTrainer->getName()."</h2>";
    echo "<h2>Your Enemy's Pokemon: ".$enemyTrainer->getCurrentPokemon()->getName()."</h2>";

    //choose a random enemy move
    $enemyMove = $enemyTrainer->getCurrentPokemon()->getMoves()[rand(0,2)];
    echo "<h2>Your Enemy's Pokemon used ".$enemyMove->getName()."!</h2>";
    
    //echo health reduced from current trainer pokemon
    $trainer->getCurrentPokemon()->setHp($trainer->getCurrentPokemon()->getHp()-$enemyMove->getPower());
    echo "<h2>Your Pokemon's health is now ".$trainer->getCurrentPokemon()->getHp()."</h2>";

    $_SESSION['trainer'] = serialize($trainer);
    $_SESSION['playerTurn']=true;

    if($_SESSION['playerTurn'] == false){
        echo "<form action='playerAttack.php' method='post'>";
        echo "<input type='submit' disabled value='Player Turn'>";
        echo "</form>";
        }
        else if($_SESSION['playerTurn'] == true){
        echo "<form action='playerAttack.php' method='post'>";
        echo "<input type='submit' value='Player Turn'>";
        echo "</form>";
        }
    
        //echo button back to preBattle
        echo "<form action='preBattle.php' method='post'>";
        echo "<input type='submit' value='Back to Pre Battle'>";
        echo "</form>";
    

}

?>
