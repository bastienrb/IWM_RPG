<?php

spl_autoload_register(function ($class) {
    require_once '../Classes/' . $class . '.php';
});

$session = new Session();

if (isset($_POST['level'])){
    if($_POST['level'] == 1) {
        $name = 'Joueur';

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }

        if (isset($_POST['class'])) {
            $class = $_POST['class'];

            if ($class == "Mage") {
                $character = new Mage($name);
                $session->setSessionValue("Player", serialize($character));
                $session->setSessionValue('Level', 1);
                header('Location: level.php');
            } else if ($class == "Warrior") {
                $character = new Warrior($name);
                $session->setSessionValue("Player", serialize($character));
                $session->setSessionValue('Level', 1);
                header('Location: level.php');
            } else {
                $character = new Archer($name);
                $session->setSessionValue("Player", serialize($character));
                $session->setSessionValue('Level', 1);
                header('Location: level.php');
            }
        }
    }
}


