<?php 
    require 'inc/data/products.php';
    require 'inc/head.php'; 

    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
?>
<section class="cookies container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Description</th>
                <th scope="col">Nombre de paquets</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catalog as $id => $cookie) { ?>
                <?php if (!empty($tabCard[$id])) :?> 
                    <tr>
                        <th scope="row"><?= $id; ?></th>
                        <td><?= $cookie['name']; ?></td>
                        <td><?= $cookie['description']; ?></td>
                        <td><?= $tabCard[$id];?></td>
                        <td><a href="?add_to_cart=<?= $id; ?>&amp;name=<?= $cookie['name'];?>&amp;description=<?= $cookie['description']; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a></td>
                        <td><a href="?remove_to_cart=<?= $id; ?>&amp;name=<?= $cookie['name'];?>&amp;description=<?= $cookie['description']; ?>" class="btn btn-danger">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> remove to cart<?= $tabCard[$id];?></td>
                    </tr>
                <?php endif ?>
                
            <?php } ?>
        </tbody>
    </table>    
</section>
<?php require 'inc/foot.php'; ?>
