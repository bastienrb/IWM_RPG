<?php
namespace Src\Classes;

require_once 'Character.php';
require_once 'Weapon.php';
use Src\Classes\Character as Character;

class Mage extends Character {

    /**
     * Mage constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $maxHp = 50;
        $hp = $maxHp;
        $maxMana = 100;
        $mana = $maxMana;
        $defense = 0;
        $power = 10;
        $weapon = new Weapon('Bâton de pacotille', 'Bâton', 0, 0, 0, 0);
        $className = 'Mage';
        parent::__construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, $weapon, $className);

    }
}