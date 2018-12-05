<?php

include 'Structure/header.php';

$level = $session->getSessionValue('Level');

switch ($level) {
    case 1:
        $rewards = ['1' => 'Rien'];
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Niveau 1 terminé !</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Récompenses:</h1>
        </div>
    </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="../../Assets/icons/gold.png" width="75" alt="">
                <p>Or</p>
                <p>(Cherche pas ça sert à rien)</p>
            </div>
            <div class="col-md-4">
                <img src="../../Assets/icons/gold.png" width="75" alt="">
                <p>Or</p>
                <p>(Cherche pas ça sert à rien)</p>
            </div>
            <div class="col-md-4">
                <img src="../../Assets/icons/gold.png" width="75" alt="">
                <p>Or</p>
                <p>(Cherche pas ça sert à rien)</p>
            </div>
        </div>
    </div>
</div>
<?php

include 'Structure/footer.php';

?>
