<?php

class Spell {
    protected $name;
    protected $damage;
    protected $cost;

    /**
     * Spell constructor.
     * @param string $name  Spell Name
     * @param int $damage   Damage added to power
     * @param int $cost     Mana Cost
     */
    public function __construct($name, $damage, $cost)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->cost = $cost;
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
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @param int $basePower Base Power
     * @return int
     */
    public function getFullDamage($basePower) {
        return $this->damage + $basePower;
    }


}