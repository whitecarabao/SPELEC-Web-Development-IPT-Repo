<?php

//class for pokemon moves
class Move { 

    private $name;
    private $type;
    private $power;

    
    public function __construct($name, $power, $type){
        $this->name = $name;
        $this->type = $type;
        $this->power = $power;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }

    public function getPower(){
        return $this->power;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function setPower($power){
        $this->power = $power;
    }

    public function __toString(){
        return $this->name . " " . $this->type . " " . $this->power;
    }

    
}

?>