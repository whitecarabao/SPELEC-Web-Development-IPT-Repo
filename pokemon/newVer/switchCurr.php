<?php

include_once 'trainerClass.php';
include_once 'pokemonClass.php';

session_start();
if($_SESSION['trainer'] == null){
    echo 'No Trainer Data!';
}
else{

    $newTrn = unserialize($_SESSION['trainer']);
    //show trainer info
    echo '<h1>Trainer Info</h1>';
    echo '<p>Name: '.$newTrn->getName().'</p>';
    echo '<p>Money: '.$newTrn->getMoney().'</p>';


//check if trainer has set pokemon, if not - set first pokemon on list
    if($newTrn->currPkmnAlreadySet() == false){
        echo '<h1>Welcome to Pokemon!</h1>';
        $newTrn->setCurrentPokemon($newTrn->getPokemons()[0]);
        $newTrn->setCurrPkmnAlreadySet(true);
        echo '<p>Current Pokemon: '.$newTrn->getCurrentPokemon()->getName().'</p>';
    }
    else{
        echo '<p>Current Pokemon: '.$newTrn->getCurrentPokemon()->getName().'</p>';
    }

    //show pokemon with trainer
    echo '<h1>Pokemon</h1>';
    foreach ($newTrn->getPokemons() as $pokemon) {
                echo '<p>'.$pokemon->getName().'</p>';
    }
//show buttons to change pokemon
    echo '<h1>Change Pokemon</h1>';
    foreach ($newTrn->getPokemons() as $pokemon) {
        echo '<form action="switchCurr.php" method="post">';
        echo '<input type="hidden" name="swPkmn" value="'.$pokemon->getName().'">';
        echo '<input type="submit" value="'.$pokemon->getName().'">';
        echo '</form>';
    }
    if(isset($_POST['swPkmn'])){
        if($newTrn->findPokemonByName($_POST['swPkmn'])->getHp() > 0){

        
        $newTrn->setCurrentPokemon($newTrn->findPokemonByName($_POST['swPkmn']));
        $_SESSION['trainer'] = serialize($newTrn);
        echo '<p>Current Pokemon: '.$newTrn->getCurrentPokemon()->getName().'</p>';
        }
         else{ 
                         echo '<p>Pokemon is fainted!</p>';
        }
    }

    //go back to pokemon.php
    echo '<form action="preBattle.php" method="post">';
    echo '<input type="submit" value="Back to Battle">';
    echo '</form>';





}


//header('Location: pokemon.php');
?>