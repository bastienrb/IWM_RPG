<?php

class Session {

    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @param $sessionParameter
     * @param $value
     */
    public function setSessionValue($sessionParameter, $value)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
            $_SESSION[$sessionParameter] = $value;
    }


    /**
     * @param $sessionParameter
     * @return mixed
     */
    public function getSessionValue($sessionParameter) {
        if (!isset($_SESSION)) {
            session_start();
        }
        return $_SESSION[$sessionParameter];
    }

    /**
     * Destroy Session
     *
     * @return void
     */
    public function destroySession(){
        session_destroy();
    }

    public function saveCharacters($character, $monster) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $this->setSessionValue('Player', $character);
        $this->setSessionValue('Monster', $monster);
    }
}