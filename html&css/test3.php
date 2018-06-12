<?php

class Character{
    public static $type ="";
    
    public $hp=1;
    public $power=1;
    protected $name='';
    
    function __construct($hp,$power,$name){
    $this->hp=$hp;
    $this->power=$power;
    $this->name=$name;
    }
    
    function name(){
        return $this->name;
    }
    
    function attack($character){
        $character->hp = $character->hp - $this->power;
        print $this->name()."が".$character->name()."を攻撃して".$this->power."ポイントのダメージを与えた。" .PHP_EOL;
    }
    
}
    
class People extends Character{
    public static $type="人間";
    
    function __construct($name){
        parent::__construct(30,7,$name);
    }
    
    function name(){
        return $this->name;
    }
    
}

class Zombi extends Character{
    public static $type="ゾンビ";
    
    
    function __construct($name){
        parent::__construct(8,20,$name);
    }
    
    function name(){
        return Zombi::$type.parent::name();
    }
}

$People = new People("Rick");
$Zombi_A = new Zombi("A");

$People->attack($Zombi_A);
$Zombi_A->attack($People);