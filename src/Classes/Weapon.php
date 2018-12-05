<?php

class Weapon {
    protected $name;
    protected $type;
    protected $powerBonus;
    protected $defenseBonus;
    protected $hpBonus;
    protected $manaBonus;

    /**
     * Weapon constructor.
     * @param string $name      Name Of the Weapon
     * @param string $type      Type of Weapon
     * @param int $powerBonus   Power Bonus
     * @param int $defenseBonus Defense Bonus
     * @param int $hpBonus      Max Hp Bonus
     * @param int $manaBonus    Max Mana Bonus
     */
    public function __construct($name, $type, $powerBonus, $defenseBonus, $hpBonus, $manaBonus)
    {
        $this->name = $name;
        $this->type = $type;
        $this->powerBonus = $powerBonus;
        $this->defenseBonus = $defenseBonus;
        $this->hpBonus = $hpBonus;
        $this->manaBonus = $manaBonus;
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPowerBonus()
    {
        return $this->powerBonus;
    }

    /**
     * @param int $powerBonus
     */
    public function setPowerBonus($powerBonus)
    {
        $this->powerBonus = $powerBonus;
    }

    /**
     * @return int
     */
    public function getDefenseBonus()
    {
        return $this->defenseBonus;
    }

    /**
     * @param int $defenseBonus
     */
    public function setDefenseBonus($defenseBonus)
    {
        $this->defenseBonus = $defenseBonus;
    }

    /**
     * @return int
     */
    public function getHpBonus()
    {
        return $this->hpBonus;
    }

    /**
     * @param int $hpBonus
     */
    public function setHpBonus($hpBonus)
    {
        $this->hpBonus = $hpBonus;
    }

    /**
     * @return int
     */
    public function getManaBonus()
    {
        return $this->manaBonus;
    }

    /**
     * @param int $manaBonus
     */
    public function setManaBonus($manaBonus)
    {
        $this->manaBonus = $manaBonus;
    }


}