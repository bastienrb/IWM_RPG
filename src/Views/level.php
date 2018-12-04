<?php
include 'Structure/header.php';
include '../Classes/Mage.php';
include '../Classes/Warrior.php';
include '../Classes/Archer.php';
use Src\Classes\Mage;
use Src\Classes\Warrior;
use Src\Classes\Archer;
?>

<?php
$level = $session->getSessionValue('Level');
$serializedCharacter = $session->getSessionValue('Player');
$character = unserialize($serializedCharacter);
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

            <div class="card border-secondary mb-3 offset-md-7" style="max-width: 20rem;">
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
    </div>
</div>
<?php
include 'Structure/footer.php';
?>
