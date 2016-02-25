<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 25/02/16
 * Time: 21:02
 */

if(isset($_SESSION['notification']['message'])): ?>
    <div class="container">
        <div class="alert alert-"<?= $_SESSION['notification']['message']?>>

            <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">&times;</button>
            <h4><?=$_SESSION['notification']['message']?></h4>

        </div>

    </div>

    <?php $_SESSION['notification']=[]; // pour eviter que le message reste une fois on est
    // sur la page register ?>

<?php endif;?>

<?php // noublier pas de démarer la session dans le fichier
    // register.php sinon pas $_SESSION


  ?>

