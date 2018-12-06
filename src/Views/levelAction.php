<?php

spl_autoload_register(function ($class) {
    require_once '../Classes/' . $class . '.php';
});

$session = new Session();

if (isset($_GET['spell'])) {
    $spells = $session->getSessionValue('Spells');
    $spellnumber = $_GET['spell'] - 1;
    $spell = $spells[$spellnumber];
    $character = $session->getSessionValue('Player');
    $monster = $session->getSessionValue('Monster');

    $monster->takeDamage($character, $spell);
    $character->takeDamage($monster, null);
    $character->removeManaSpell($spell);
    if ($character->isAlive() && $monster->isAlive()){
    $session->setSessionValue('Player', $character);
    $session->setSessionValue('Monster', $monster);

    header('Location: level.php');
    } else {
        $character->isAlive() ? header('Location: win.php') : header('Location: loose.php');
    }
}

if ($session->getSessionValue('Win')) {
    $session->setSessionValue('Level', $session->getSessionValue('Level') + 1);
    $session->setSessionValue('Win', false);
    $session->setSessionValue('NewGame', 1);

    header('Location: level.php');
}

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

                $spell1 = new Spell('Coup de bâton', 0, 0);
                $spell2 = new Spell('Boule de feu mineure', 5, 10);
                $spell3 = new Spell('Explosion Incandescente', 10, 20);
                $spells = [$spell1, $spell2, $spell3];
                $character->setSpells($spells);

                $session->setSessionValue("Player", $character);
                $session->setSessionValue('Level', 1);
                $session->setSessionValue('Spells', $spells);
                $session->setSessionValue('NewGame', 1);
                header('Location: level.php');
            } else if ($class == "Warrior") {
                $character = new Warrior($name);

                $spell1 = new Spell('Coup d\'épée', 0, 0);
                $spell2 = new Spell('Furie enchantée', 5, 5);
                $spell3 = new Spell('Découpage', 10, 10);
                $spells = [$spell1, $spell2, $spell3];
                $character->setSpells($spells);

                $session->setSessionValue("Player", $character);
                $session->setSessionValue('Level', 1);
                $session->setSessionValue('Spells', $spells);
                $session->setSessionValue('NewGame', 1);
                header('Location: level.php');
            } else {
                $character = new Archer($name);

                $spell1 = new Spell('Flèche rapide', 0, 0);
                $spell2 = new Spell('Pluie de flèches', 5, 5);
                $spell3 = new Spell('Flèches enflamées', 15, 10);
                $spells = [$spell1, $spell2, $spell3];
                $character->setSpells($spells);

                $session->setSessionValue("Player", $character);
                $session->setSessionValue('Level', 1);
                $session->setSessionValue('Spells', $spells);
                $session->setSessionValue('NewGame', 1);
                header('Location: level.php');
            }
        }
    }
} else {
    if ($session->getSessionValue('Spell') == null && $session->getSessionValue('Player') != null && $session->getSessionValue('Monster') == null) {
        $spell = $session->getSessionValue('Spell');

    }
}


