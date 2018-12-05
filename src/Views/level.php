<?php

include 'Structure/header.php';
//include '../Classes/Mage.php';
//include '../Classes/Warrior.php';
//include '../Classes/Archer.php';
//include '../Classes/Monster.php';
//include '../Classes/Weapon.php';

?>

<?php
$level = $session->getSessionValue('Level');
$serializedCharacter = $session->getSessionValue('Player');
$character = unserialize($serializedCharacter);

switch ($level) {
    case 1:
        $weapon = new Weapon('Bâton de bois usé', 'Bâton', 0, 0, 0, 0);
        $monster = new Monster('Quentin le Gobelin', 20, 20, 5, 5, 0, 10, $weapon, 'Gobelin');
}
?>

<div class="container">

    <div class="col-md-12">
        <div class="row">
            <div class="card text-white bg-primary mb-3 fadeInDown animated" style="max-width: 20rem;">
                <div class="card-header">Niveau 1</div>
                <div class="card-body">
                    <h4 class="card-title">De simples gobelins</h4>
                    <p class="card-text">Utilisez vos sorts pour tuer les gobelins qui vous font face.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header text-primary"><?php echo $character->getName();?></div>
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
            <div class="col-md-4">
                <div class="spells" id="level_spells">
                    <div class="row">
                    <div class="col-md-6">
                        <img src="../../Assets/icons/mage_spell.png" width="75" alt="">
                        test
                    </div>
                    <div class="col-md-6">
                        <img src="../../Assets/icons/mage_spell2.png" width="75" alt="">
                        test
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark mb-3" style="max-width: 20rem; color: #FFFFFF !important;">
                    <div class="card-header"><?php echo $monster->getName();?></div>
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
<?php
include 'Structure/footer.php';
?>
