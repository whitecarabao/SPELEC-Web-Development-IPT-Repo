<?php

include_once 'movesClass.php';
include_once 'pokemonClass.php';
include_once 'trainerClass.php';
session_start();

if($_SESSION['trainer']!=null){
  $_SESSION['playerTurn'] = true; //initialize 
    //echo information of trainer and pokemon
    $trainer = unserialize($_SESSION['trainer']);
   $enemyTrainer = unserialize($_SESSION['enemyTrainer']);
    echo "<h1>Battle!</h1>";

    //echo buttons for current pokemon's moves
    echo "<form action='playerAttack.php' method='post'>";
  foreach($trainer->getCurrentPokemon()->getMoves() as $move){
    echo "<input type='submit' name='move' value='".$move->getName()."'>";
  }
  if(isset($_POST['move'])){
    $move = $_POST['move'];
    echo "<h2>You used $move!</h2>";

    foreach($trainer->getCurrentPokemon()->getMoves() as $move){
      if($move->getName()==$_POST['move']){
       $enemyTrainer->getCurrentPokemon()->setHp($enemyTrainer->getCurrentPokemon()->getHp()-$move->getPower());
       $enemyHP = $enemyTrainer->getCurrentPokemon()->getHp();
       if($enemyHP<=0){
        echo "<h2>Your enemy's pokemon fainted!</h2>";
         $enemyTrainer->removePokemonByName($enemyTrainer->getCurrentPokemon()->getName());
         foreach($enemyTrainer->getPokemons() as $pokemon){
          if($pokemon->getHp()>0){
            $enemyTrainer->setCurrentPokemon($pokemon);
            break;
          }
          header("Location: gameOver.php");
         }
       // print_r($enemyTrainer->getCurrentPokemon());

    
    }
       echo "<h2>Your enemy's pokemon's health is now ".$enemyTrainer->getCurrentPokemon()->getHp()."</h2>";
       if($enemyTrainer->getCurrentPokemon()->getHp()>1){
        echo "<h2>Your enemy's pokemon is now ".$enemyTrainer->getCurrentPokemon()->getName()."</h2>";
}
else if($enemyTrainer->getCurrentPokemon()->getHp()<=0){   
 header("Location: gameOver.php");
}
       unset($_SESSION['enemyTrainer']);
    $_SESSION['enemyTrainer'] = serialize($enemyTrainer);
       $_SESSION['playerTurn']=false;
        
    

      
    }
      }
       
       
}
    echo "</form>";

    if($_SESSION['playerTurn'] == true){
    echo "<form action='enemyTurn.php' method='post'>";
    echo "<input type='submit' disabled value='Enemy Turn'>";
    echo "</form>";
    }
    else if($_SESSION['playerTurn'] == false){
    echo "<form action= 'enemyTurn.php' method='post'>";
    echo "<input type='submit' value='Enemy Turn'>";
    echo "</form>";
    }

    //echo button back to preBattle
    echo "<form action='preBattle.php' method='post'>";
    echo "<input type='submit' value='Back to Pre Battle'>";
    echo "</form>";


}


?>