<?php

class Trainer{

    private $Name;
    private $Level;
    private $Pokemons;
    private $Money;
    private $CurrentPokemon;
    private $CurrPkmnAlreadySet;

    public function __construct($name, $pokemons, $money){
        $this->Name = $name;
        $this->Pokemons = array($pokemons[0], $pokemons[1], $pokemons[2], $pokemons[3]);
        $this->Money = $money;
        $this->setCurrPkmnAlreadySet(true);
        $this->CurrentPokemon = $pokemons[0];
    }

    public function getName(){
        return $this->Name;
    }

    public function getPokemons(){
        return $this->Pokemons;
    }

    public function getMoney(){
        return $this->Money;
    }

    public function getCurrentPokemon(){
        return $this->CurrentPokemon;
    }

    public function setCurrentPokemon($currentPokemon){
        $this->CurrentPokemon = $currentPokemon;
    }


    public function findPokemonByName($name){
        foreach($this->Pokemons as $pokemon){
            if($pokemon->getName() == $name){
                return $pokemon;
            }
        }
        return null;
    }

    public function setName($name){
        $this->Name = $name;
    }

    public function setMoney($money){
        $this->Money = $money;
    }

    public function setCurrPkmnBasedOnIndex($index){
        $this->CurrentPokemon = $this->Pokemons[$index];
    }

    public function addPokemon($pokemon){
        array_push($this->Pokemons, $pokemon);
    }

    public function removePokemon($pokemon){
        $index = array_search($pokemon, $this->Pokemons);
        array_splice($this->Pokemons, $index, 1);
        
    }

    public function removePokemonByName($name){
        $pokemon = $this->findPokemonByName($name);
        $this->removePokemon($pokemon);
    }
    public function setCurrPkmnAlreadySet($currPkmnAlreadySet){
        $this->CurrPkmnAlreadySet = $currPkmnAlreadySet;
    }

    public function currPkmnAlreadySet():bool{
        return $this->CurrPkmnAlreadySet;
    }

    public function addMoney($money){
        $this->Money += $money;
    }

    public function __toString(){
        return $this->Name;
    }



    
}



?>
