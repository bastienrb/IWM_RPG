<?php

class Win {

    protected $rewards;
    protected $level;

    /**
     * Win constructor.
     * @param $rewards
     * @param $level
     */
    public function __construct($level)
    {
        $this->level = $level;
    }


    public function getLevelRewards($level) {
        switch ($level) {
            case 1:
                $this->rewards = [];
                return $this->rewards;
                break;
            case 2:
                $this->rewards = ['arme' => new Weapon('Arme 2', 'Arme', 5, 5, 5, 5), 'Or' => '20', 'Exp' => '200'];
                return $this->rewards;
        }
    }




}