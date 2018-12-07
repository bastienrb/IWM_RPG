<?php

include 'Structure/header.php';

$level = $session->getSessionValue('Level');
$level == 5 ? $bottomButton = 'Recommencer' : $bottomButton = 'Niveau suivant';
$win = new Win($level);
$rewards = $win->getLevelRewards($level);
$character = $session->getSessionValue('Player');
$session->setSessionValue('Win', true);
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
    $counter = 1;
    if ($level == 5) { ?>
        <div class="col-md-12">
            <img src="../../Assets/icons/win2.png" class="fadeInDown animated" width="75" alt="no reward">
            <h2 class="mt-4 fadeIn animated delay-2s">Félicitations ! </h2>
        </div>
    <?php }
    if ($countRewards < 1){ ?>
            <div class="col-md-12">
                <img src="../../Assets/icons/noReward.png" class="fadeInDown animated" width="75" alt="no reward">
                <h2 class="mt-4 fadeIn animated delay-2s">Pas de récompenses</h2>
                <p class="fadeIn animated delay-3s">"Celui qui accepte son vide peut remplir sa vie."</p>
            </div>
    <?php }
          foreach ($rewards as $key => $reward) { ?>

            <div class="text-primary <?php echo 'col-md-' . 12 / $countRewards ?>">
                <?php

                if ($key == 'arme' && $reward instanceof Weapon) { ?>
                    <div class="fadeIn animated delay-<?php echo $counter . 's' ?>">
                        <img src="../../Assets/icons/weapon.png" width="75" alt="">
                        <h4 class="mt-5"><?php echo $reward->getName();?></h4>
                        <h5>Type d'arme: <?php echo $reward->getType()?></h5>
                        <h5>Bonus en Vitalité: <?php echo $reward->getHpBonus()?></h5>
                        <h5>Bonus en Puissance: <?php echo $reward->getPowerBonus()?></h5>
                        <h5>Bonus en Defense: <?php echo $reward->getDefenseBonus()?></h5>
                        <h5>Bonus en Mana: <?php echo $reward->getManaBonus()?></h5>
                    </div>
                <?php $character->equipWeapon($reward);
                      $character->setWeapon($reward);
                } else {
                        echo '<div class="fadeIn animated delay-' . $counter . 's">';
                        echo '<img src="../../Assets/icons/' . $key .  '.png" width="75"/>';
                        echo '<h4 class="mt-5">'. $key . '</h4>';
                        echo '<h5 class="mt-5"> + '. $reward . '</h5>';
                        echo'</div>';
                }?>
            </div>

          <?php $counter++;} ?>
            <a href="levelAction.php" style="margin: 0 auto;" class="btn btn-primary"><?php echo $bottomButton?></a>
    </div>
</div>
<?php

include 'Structure/footer.php';

?>
