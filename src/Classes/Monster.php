<?php

require_once 'Character.php';
use Character as Character;

class Monster extends Character {

    /**
     * Monster constructor
     * @param string $name      Name of the Character
     * @param int $hp           Health Points
     * @param int $maxHp        Maximum Health Points
     * @param int $mana         Mana Points
     * @param int $maxMana      Maximum Mana Points
     * @param int $defense      Defense
     * @param int $power        Power
     * @param Weapon $weapon    Weapon
     * @param int $className    Class Name
     */
    public function __construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, Weapon $weapon, $className)
    {
        parent::__construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, $weapon, $className);
    }
}