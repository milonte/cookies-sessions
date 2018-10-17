<?php 

session_start();

require 'inc/head.php';

if (!isset($_SESSION['login']) || !($_SESSION['login'])) {
        header('location: login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        
        <?php
        if (!isset($_SESSION['cart']) || !($_SESSION['cart'])) {
            echo "Tu n'as rien dans ton panier.... Achète !! Viiite !!!";
        } else {
            foreach (array_keys($_SESSION['cart']) as $item) { ?>

                <div class="card col-lg-3 col-md-4 col-xs-12">
                    <img class="card-img-top img-thumbnail" src="assets/img/product-<?= $item; ?>.jpg" alt="" />
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $_SESSION['cart'][$item] ?> article(s) dans le panier</h5>
                    </div>
                </div>
                    
            <?php 
        }
    }
    ?>
        
    </div>
</section>
<?php require 'inc/foot.php'; ?>
