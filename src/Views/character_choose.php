<?php
include_once "Structure/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 text-center mt-5">
            <h1>Choisissez votre héros: </h1>
        </div>
    </div>
    <div class="row" id="cc_classes">
        <div class="col-md-4 fadeInDown animated" id="cc_warrior">
            <img src="../../Assets/icons/Guerrier.png" width="75" alt="">
            <p class="text-primary mt-3">Guerrier</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores at, ducimus eius esse iure laudantium, maiores maxime minima quae voluptate? Aspernatur cupiditate in ipsum iusto laudantium, molestias provident!</p>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cc_modal_warrior">
                Choisir
            </button>

            <div class="modal fade" id="cc_modal_warrior" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quel sera le nom de votre héros, Guerrier?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="levelAction.php" method="POST" class="form-group">
                                <input type="hidden" name="class" value="Warrior">
                                <input type="hidden" name="level" value="1">
                                <input type="text" name="name" class="form-control" placeholder="Longduzboub, XxXKiller99Xx..." required>
                                <input type="submit" class="btn btn-success mt-3" value="Valider">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 fadeInDown animated" id="cc_mage">
            <img src="../../Assets/icons/Mage.png" width="75" alt="">
            <p class="text-primary mt-3">Mage</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores at, ducimus eius esse iure laudantium, maiores maxime minima quae voluptate? Aspernatur cupiditate in ipsum iusto laudantium, molestias provident!</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cc_modal_mage">
                Choisir
            </button>

            <div class="modal fade" id="cc_modal_mage" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quel sera le nom de votre héros, Mage?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="levelAction.php" method="POST" class="form-group">
                                <input type="hidden" name="class" value="Mage">
                                <input type="hidden" name="level" value="1">
                                <input type="text" name="name" class="form-control" placeholder="Gandalfondlacaisse, HarryP0wner..." required>
                                <input type="submit" class="btn btn-success mt-3" value="Valider">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 fadeInDown animated" id="cc_archer">
            <img src="../../Assets/icons/Archer.png" width="75" alt="">
            <p class="text-primary mt-3">Archer</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid asperiores at, ducimus eius esse iure laudantium, maiores maxime minima quae voluptate? Aspernatur cupiditate in ipsum iusto laudantium, molestias provident!</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cc_modal_archer">
                Choisir
            </button>

            <div class="modal fade" id="cc_modal_archer" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Quel sera le nom de votre héros, Archer?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="levelAction.php" method="POST" class="form-group">
                                <input type="hidden" name="class" value="Archer">
                                <input type="hidden" name="level" value="1">
                                <input type="text" name="name" class="form-control" placeholder="Dégolas, BatmanEtRobindesBois..." required>
                                <input type="submit" class="btn btn-success mt-3" value="Valider">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "Structure/footer.php";
?>
