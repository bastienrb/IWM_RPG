<?php
include_once "Structure/header.php";
session_destroy();
?>
    <div class="container">

            <div class="col-md-12 col-lg-12" id="start_landingmenu">
                <div class="row">
                    <h1 class="fadeInDown animated" id="start_title">Minima</h1>
                </div>
                <div class="row mt-5">
                    <form action="character_choose.php" id="start_playform" method="POST">
                        <input class="btn btn-lg btn-primary fadeIn animated delay-2s" id="start_playbutton" type="submit" name="play" value="Jouer"/>
                    </form>
                </div>
            </div>
    </div>


<?php
include_once "Structure/footer.php";
?>