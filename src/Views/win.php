<?php

include 'Structure/header.php';

$level = $session->getSessionValue('Level');
//$session->setSessionValue('Level', 2);
$win = new Win($level);
$rewards = $win->getLevelRewards($level);
$character = $session->getSessionValue('Player');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Niveau <?php echo $level ?> terminé !</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Récompenses:</h1>
        </div>
    </div>
    <div class="row text-center mt-5">
    <?php $countRewards = count($rewards);

    if ($countRewards < 1){ ?>
            <div class="col-md-12">
                <img src="../../Assets/icons/noReward.png" class="fadeInDown animated" width="75" alt="no reward">
                <h2 class="mt-4 fadeIn animated delay-2s">Pas de récompenses</h2>
                <p class="fadeIn animated delay-3s">(Tu t'attendais à quoi ?)</p>
            </div>
    <?php }
          foreach ($rewards as $reward) { ?>

            <div class="text-primary <?php echo 'col-md-' . 12 / $countRewards ?>">
                <?php

                if ($reward instanceof Weapon) { ?>
                    <img src="../../Assets/icons/weapon.png" width="75" alt="">

                    <h4 class="mt-5"><?php echo $reward->getName();?></h4>
                    <h5>Type d'arme: <?php echo $reward->getType()?></h5>
                    <h5>Bonus en Vitalité: <?php echo $reward->getHpBonus()?></h5>
                    <h5>Bonus en Puissance: <?php echo $reward->getPowerBonus()?></h5>
                    <h5>Bonus en Defense: <?php echo $reward->getDefenseBonus()?></h5>
                    <h5>Bonus en Mana: <?php echo $reward->getManaBonus()?></h5>
                <?php $character->equipWeapon($reward);
                      $character->setWeapon($reward);
                      var_dump($character);
                      exit;
                } else {
                    if ($reward == 'Or'){

                    }
                }?>
            </div>

          <?php } ?>
    </div>
</div>
<?php

include 'Structure/footer.php';

?>
