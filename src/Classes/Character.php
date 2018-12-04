<?php
namespace Src\Classes;
require 'Weapon.php';


abstract class Character {
    protected $name;
    protected $className;
    protected $hp;
    protected $maxHp;
    protected $mana;
    protected $maxMana;
    protected $defense;
    protected $power;
    protected $weapon;

    /**
     * Character constructor
     * @param string $name      Name of the Character
     * @param int $hp           Health Points
     * @param int $maxHp        Maximum Health Points
     * @param int $mana         Mana Points
     * @param int $maxMana      Maximum Mana Points
     * @param int $defense      Defense
     * @param int $className    Class Name
     */
    public function __construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, $weapon, $className)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->maxHp = $maxHp;
        $this->mana = $mana;
        $this->maxMana = $maxMana;
        $this->defense = $defense;
        $this->power = $power;
        $this->weapon = $weapon;
        $this->className = $className;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getMaxHp()
    {
        return $this->maxHp;
    }

    /**
     * @param int $maxHp
     */
    public function setMaxHp($maxHp)
    {
        $this->maxHp = $maxHp;
    }

    /**
     * @return int
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    public function setMana($mana)
    {
        $this->mana = $mana;
    }

    /**
     * @return int
     */
    public function getMaxMana()
    {
        return $this->maxMana;
    }

    /**
     * @param int $maxMana
     */
    public function setMaxMana($maxMana)
    {
        $this->maxMana = $maxMana;
    }

    /**
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param int $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param int $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * @return Weapon
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param Weapon $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return float|int
     */
    public function getManaPercentage() {
        return $this->getMana() / $this->getMaxMana() * 100;
    }

    /**
     * @return float|int
     */
    public function getHpPercentage() {
        return $this->getHp() / $this->getMaxHp() * 100;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName($className)
    {
        $this->className = $className;
    }

    /**
     * @param Weapon $weapon
     */
    public function equipWeapon(Weapon $weapon) {
        $this->maxMana += $weapon->getManaBonus();
        $this->maxHp += $weapon->getHpBonus();
        $this->defense += $weapon->getManaBonus();
        $this->power += $weapon->getPowerBonus();
        $this->weapon = $weapon;
    }

    /**
     * @param Weapon $weapon
     */
    public function unequipWeapon(Weapon $weapon) {
        $this->maxMana -= $weapon->getManaBonus();
        $this->maxHp -= $weapon->getHpBonus();
        $this->defense -= $weapon->getManaBonus();
        $this->power -= $weapon->getPowerBonus();
        $this->weapon = null;
    }

}

