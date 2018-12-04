<?php
namespace Src\Classes;

require_once 'Character.php';
require_once 'Weapon.php';
use Src\Classes\Character as Character;
use Src\Classes\Weapon;

class Archer extends Character {

    public function __construct($name)
    {
        $maxHp = 75;
        $hp = $maxHp;
        $maxMana = 50;
        $mana = $maxMana;
        $defense = 10;
        $power = 10;
        $weapon = new Weapon('Arc de pacotille', 'Epée', 0, 0, 0, 0);
        $className = 'Archer';

        parent::__construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, $weapon, $className);
    }
}