<!doctype html>
<html lang="nl">

   <?php 
   require_once './Head.php';
   
    ?>

    <body class="hansHendrick">
        <?php
        require_once './Upper.php';
        include_once './DAO/ProductDAO.php';
        $arrProducten = ProductDAO::getProducts();
        ?>
        <main class="wrapper">
            <div class="row" style="margin-top:1em">
                <h4 class="col s12 red-border">Populaire drankjes
                </h4>
            </div>

            <div class="row">
                <?php
                foreach ($arrProducten as $product) {
                    ?>
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator fixed-height" src="<?php echo $product->getLocatieFoto(); ?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4"><?php
                                    echo $product->getNaam();
                                    ?><i class="material-icons right">more_vert</i></span>
                                <p><a href="product_detail.php?productId=<?php echo $product->getProductId(); ?>">See more</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">
                                    <?php
                                    echo $product->getNaam();
                                    ?>
                                    <i class="material-icons right">close</i></span>
                                <p>
                                    <?php
                                    echo $product->getBeschrijving();
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </main>
        <?php require './Footer.php'; ?>
    </body>
</html>