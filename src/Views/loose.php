<?php

include 'Structure/header.php';

$monster = $session->getSessionValue('Monster');

?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-12 col-lg-12">
            <h1 class="mt-5">Vous êtes mort</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12 col-lg-12">
            <img src="../../Assets/icons/loose.png" class="mt-5" width="75" alt="">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12 col-lg-12">
            <h4 class="mt-5">Tué par : <?php echo $monster->getName(); ?></h4>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12 col-lg-12">
            <a href="start.php" class="btn btn-primary mt-5">Recommencer ?</a>
        </div>
    </div>
</div>
<?php

include 'Structure/footer.php';

?>
