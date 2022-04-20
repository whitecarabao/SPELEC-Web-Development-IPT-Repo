<?php

include_once 'trainerClass.php';
include_once 'pokemonClass.php';
include_once 'movesClass.php';
session_start();

$arrayOfPokemons = unserialize($_SESSION['pokemonArray']);


//enemy trainer object
$enemyTrainer = new Trainer("Professor Oak", array($arrayOfPokemons[2], $arrayOfPokemons[3], $arrayOfPokemons[4], $arrayOfPokemons[5], $arrayOfPoke), 1000);

$_SESSION['enemyTrainer'] = serialize($enemyTrainer);

//redirect to pre-battle page
header("Location: preBattle.php");

?>