<?php
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
    protected $spells;

    /**
     * Character constructor
     * @param string $name      Name of the Character
     * @param int $hp           Health Points
     * @param int $maxHp        Maximum Health Points
     * @param int $mana         Mana Points
     * @param int $maxMana      Maximum Mana Points
     * @param int $defense      Defense
     * @param int $power        Power
     * @param Weapon $weapon    Weapon
     * @param int $className    Class Name
     * @param array $spells     Sorts
     */
    public function __construct($name, $hp, $maxHp, $mana, $maxMana, $defense, $power, Weapon $weapon, $className, $spells)
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
        $this->spells = $spells;
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
     * Equip Weapon function
     *
     * @param Weapon $weapon
     */
    public function equipWeapon(Weapon $weapon) {
        if ($this->weapon->getName() != $weapon->getName()){
        $this->maxMana += $weapon->getManaBonus();
        $this->maxHp += $weapon->getHpBonus();
        $this->defense += $weapon->getManaBonus();
        $this->power += $weapon->getPowerBonus();
        $this->weapon = $weapon;
        }
    }

    /**
     * Unequip Weapon Function
     *
     * @param Weapon $weapon
     */
    public function unequipWeapon(Weapon $weapon) {
        $this->maxMana -= $weapon->getManaBonus();
        $this->maxHp -= $weapon->getHpBonus();
        $this->defense -= $weapon->getManaBonus();
        $this->power -= $weapon->getPowerBonus();
        $this->weapon = null;
    }

    /**
     * @return array
     */
    public function getSpells()
    {
        return $this->spells;
    }

    /**
     * @param array $spells
     */
    public function setSpells($spells)
    {
        foreach ($spells as $key => $spell) {
            $this->spells[$key] = $spell;
        }
    }

    /**
     * Take Damage Function
     *
     * @param Character $attacker Character that attacks
     * @param $spell
     * @param Session $session
     */
    public function takeDamage(Character $attacker, $spell, $session) {
        if ($spell instanceof Spell) {
            $this->hp > 0 ? $this->hp -= $spell->getFullDamage($attacker->getPower()) + $this->defense : $this->hp = 0;
            $logs = $session->getSessionValue('Logs');
            $message = $attacker->getName() . ' lance ' . $spell->getName() . '.<br> ' . $this->getName() . ' perd ' . $spell->getFullDamage($attacker->getPower()) . ' points de vie. <br> Vous perdez ' . $spell->getCost() . ' points de mana';
            array_push($logs, $message);
            $session->setSessionValue('Logs', $logs);
        }
        else {
            $this->hp > 0 ? $this->hp -= $attacker->getPower() + $this->defense : $this->hp = 0;
            $logs = $session->getSessionValue('Logs');
            $message = $attacker->getName() . ' vous attaque. '  .  'Vous perdez ' . $attacker->getPower() . ' points de vie.';
            array_push($logs, $message);
            $session->setSessionValue('Logs', $logs);
        }
    }

    /**
     * Remove Mana from spell
     * @param Spell $spell
     */
    public function removeManaSpell(Spell $spell) {
            $this->mana -= $spell->getCost();
    }

    public function isAlive() {
        return $this->hp > 0;
    }

}

