<?php
namespace Src\Classes;

require_once 'Character.php';
require_once 'Weapon.php';
use Src\Classes\Character as Character;

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