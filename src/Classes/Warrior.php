<?php

spl_autoload_register(function ($class) {
    require_once '../Classes/' . $class . '.php';
});

class Warrior extends Character {

    public function __construct($name)
    {
        $maxHp = 100;
        $hp = $maxHp;
        $maxMana = 10;
        $mana = $maxMana;
        $defense = 15;
        $power = 10;
        $weapon = new Weapon('Epée de pacotille', 'Epée', 0, 0, 0, 0);
        $className = 'Guerrier';


        parent::__construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, $weapon, $className);
    }
}