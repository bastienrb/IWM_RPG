<?php

include 'Structure/header.php';

?>
<audio id="audioplayer" autobuffer="" loop="true" preload="auto" src="../../Assets/music2.mp3">
</audio>
<?php
$serializedMonster = $session->getSessionValue('Monster');
$serializedCharacter = $session->getSessionValue('Player');
$newGame = $session->getSessionValue('NewGame');
if ($newGame) {
    $level = $session->getSessionValue('Level');
    $character = $serializedCharacter;
    switch ($level) {
        case 1:
            $weapon = new Weapon('Bâton de bois usé', 'Bâton', 0, 0, 0, 0);
            $monster = new Monster('Quentin le Gobelin', 20, 20, 5, 5, 0, 10, $weapon, 'Gobelin');
            $session->setSessionValue('Monster', $monster);
            $session->setSessionValue('NewGame', 0);
            break;
        case 2:
            $weapon = new Weapon('Griffes lacérantes', 'Griffes', 0, 0, 0, 0);
            $monster = new Monster('Petit dévoreur d\'ombres', 20, 20, 5, 5, 0, 10, $weapon, 'Ombre');
            $session->setSessionValue('Monster', $monster);
            $session->setSessionValue('NewGame', 0);
            break;
        case 3:
            $weapon = new Weapon('Griffes sanglantes', 'Griffes', 0, 0, 0, 0);
            $monster = new Monster('Dévoreur d\'ombres majeur', 20, 20, 5, 5, 0, 10, $weapon, 'Ombre');
            $session->setSessionValue('Monster', $monster);
            $session->setSessionValue('NewGame', 0);
            break;
        case 4:
            $weapon = new Weapon('Crocs givrés', 'Crocs', 0, 0, 0, 0);
            $monster = new Monster('Hydre Vorace', 50, 50, 5, 5, 0, 10, $weapon, 'Hydre');
            $session->setSessionValue('Monster', $monster);
            $session->setSessionValue('NewGame', 0);
            break;
        case 5:
            $weapon = new Weapon('Souffle ardent', 'Flammes', 0, 0, 0, 0);
            $monster = new Monster('Elzram le furieux', 200, 200, 5, 5, 0, 10, $weapon, 'Dragon');
            $session->setSessionValue('Monster', $monster);
            $session->setSessionValue('NewGame', 0);
            break;
        default:
            header('Location: start.php');
    }
} else {
    $level = $session->getSessionValue('Level');
    $monster = $serializedMonster;
    $character = $serializedCharacter;
}

?>

<div class="container-fluid">

    <div class="col-md-12">
        <div class="row">
            <div class="card text-white bg-primary mb-3 <?php if ($newGame) echo "fadeInDown animated"?>" style="max-width: 20rem;">
                <div class="card-header">Niveau <?php echo $level;?></div>
                <div class="card-body">
                    <h6 class="card-title"><?php echo $monster->getName() ?></h6>
                    <p class="card-text">Utilisez vos sorts pour tuer le <?php echo $monster->getClassName() ?> qui vous fait face.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card border-secondary mb-3">
                    <div class="card-header text-primary"><h5><?php echo $character->getName();?></h5></div>
                    <div class="card-body">

                        <h4 class="card-title text-primary">Classe:</h4>
                        <img src=<?php echo '../../Assets/icons/' . $character->getClassName() . '.png';?> width=50 alt="class"> <span class="text-primary font-weight-bold"><?php echo $character->getClassName();?></span>
                        <p class="card-text text-primary mt-1">Puissance: <?php echo $character->getPower();?></p>
                        <p class="card-text text-primary ">Defense: <?php echo $character->getDefense();?></p>
                        <p class="card-text text-primary">Arme: <?php echo $character->getWeapon()->getName();?></p>
                        <p class="card-text text-primary ">Defense: <?php echo $character->getDefense();?></p>
                        <p class="card-text text-primary ">Vie: <?php echo $character->getHp() . '/' . $character->getMaxHp();?></p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $character->getHpPercentage();?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text text-primary mt-1">Mana: <?php echo $character->getMana() . '/' . $character->getMaxMana();?></p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $character->getManaPercentage();?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="logs" class="logs text-center" style="height: 100px; overflow: auto;">
                    <?php
                    $logs = $session->getSessionValue('Logs');
                    foreach ($logs as $log) {
                        echo '<p>' . $log . '</p>';
                    }
                    ?>
                </div>
                <div class="spells text-center" id="level_spells">
                    <div class="row">
                        <?php
                        $spellCount = 1;
                        foreach ($character->getSpells() as $spell) {?>
                        <div class="col-md-4 text-primary mt-3">
                            <span>Dommages: <?php echo $spell->getFullDamage($character->getPower());?></span>
                            <br>
                            <span class="mt-5">Coût en mana: <?php echo $spell->getCost();?></span>
                            <a href=<?php echo 'levelAction.php?spell=' . $spellCount ?>><img src="<?php echo "../../Assets/icons/". $character->getClassName() . "Spell" . $spellCount . ".png" ?>" width="75" alt=""/></a>
                            <br>
                            <?php echo $spell->getName();?>
                        </div>
                         <?php $spellCount++;
                        } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-dark mb-3" style="color: #FFFFFF !important;">
                    <div class="card-header"><h5 style="color: #FFFFFF !important;"><?php echo $monster->getName();?></h5></div>
                    <div class="card-body">

                        <h4 class="card-title">Type:</h4>
                        <img src=<?php echo '../../Assets/icons/monster_level_' . $level . '.png';?> width=50 alt="class"> <span class="font-weight-bold"><?php echo $monster->getClassName();?></span>
                        <p class="card-text mt-1">Puissance: <?php echo $monster->getPower();?></p>
                        <p class="card-text">Defense: <?php echo $monster->getDefense();?></p>
                        <p class="card-text">Arme: <?php echo $monster->getWeapon()->getName();?></p>
                        <p class="card-text">Defense: <?php echo $monster->getDefense();?></p>
                        <p class="card-text">Vie: <?php echo $monster->getHp() . '/' . $monster->getMaxHp();?></p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $monster->getHpPercentage();?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text mt-1">Mana: <?php echo $monster->getMana() . '/' . $monster->getMaxMana();?></p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $monster->getManaPercentage();?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var chatHistory = document.getElementById("logs");
    chatHistory.scrollTop = chatHistory.scrollHeight;</script>
<?php
include 'Structure/footer.php';
?>
