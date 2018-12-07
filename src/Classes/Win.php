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
                $this->rewards = ['arme' => new Weapon('Arme 2', 'Arme', 5, 5, 5, 5), 'Or' => '20', 'Exp' => '200', 'Respect' => '10'];
                return $this->rewards;
                break;
            case 3:
                $this->rewards = ['arme' => new Weapon('Arme 3', 'Arme', 20, 20, 20, 20), 'Or' => '200', 'Exp' => '400', 'Respect' => '10'];
                return $this->rewards;
                break;
            case 4:
                $this->rewards = ['Or' => '500', 'Exp' => '1000', 'Respect' => '40'];
                return $this->rewards;
                break;
            case 5:
                $this->rewards = ['Respect' => '1000000'];
                return $this->rewards;
                break;


        }
    }




}