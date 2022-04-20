<?php

include_once 'movesClass.php';

//class for Pokemon

class Pokemon{ 
    private $name;
    private $exp;
    private $level;
    private $hp;
    private $defense;
    private $speed;
    private $type;
    private $moves = array();

    


    public function __construct($name, $exp, $level, $hp, $defense, $speed, $type, $arrayOfMoves){
        $this->name = $name;
        $this->exp = $exp;
        $this->level = $level;
        $this->hp = $hp;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->type = $type;
        $this->moves = $arrayOfMoves;

        
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }


    public function getExp(){
        return $this->exp;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getHp(){
        return $this->hp;
    }

    public function getDefense(){
        return $this->defense;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setExp($exp){
        $this->exp = $exp;
    }

    public function setLevel($level){
        $this->level = $level;
    }

    public function setHp($hp){
        $this->hp = $hp;
    }

    public function getMoves(){
        return $this->moves;
    }

    public function setDefense($defense){
        $this->defense = $defense;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }

    public function attack($pokemon){
        $pokemon->setHp($pokemon->getHp() - $this->getAttack());
    }

    public function __toString(){
        return $this->name;
    }

}

?>