<?php
require 'inc/data/products.php';
require 'inc/head.php';

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <p>Dans le panier : <?php if (!empty($tabCard[$id])) :?> <?= $tabCard[$id]; else :?> 0 <?php endif ?></p>
                        <a href="?add_to_cart=<?= $id; ?>&amp;name=<?= $cookie['name'];?>&amp;description=<?= $cookie['description']; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                        <a href="?remove_to_cart=<?= $id; ?>&amp;name=<?= $cookie['name'];?>&amp;description=<?= $cookie['description']; ?>" class="btn btn-danger">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> remove to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
