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
                $this->rewards = [new Weapon('Arme 2', 'Arme', 5, 5, 5, 5), 'Or', 'Xp'];
                return $this->rewards;
        }
    }




}