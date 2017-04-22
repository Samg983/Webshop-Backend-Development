<!doctype html>
<html lang="nl">

    <?php
    include_once './DAO/ProductDAO.php';
    include_once './DAO/HoeveelheidDAO.php';
    include_once './DAO/CategorieDAO.php';
    include_once './DAO/TagDAO.php';
    include_once './DAO/ProductHoeveelheidDAO.php';
    require_once './Head.php';
    ?>

    <body class="hansHendrick">
        <?php
        require_once './Upper.php';
        ?>


        <main class="wrapper ">
            <section class="animated fadeIn">
                <div class="row" style="margin-top:1em">
                    <h4 class="col s12 red-border">Admin page</h4>
                </div>

                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3"><a class="active" href="#all-products">Alle producten</a></li>
                    <li class="tab col s3"><a href="#add-products">Product toevoegen</a></li>
                    <li class="tab col s3"><a href="#add-tags">Tags toevoegen</a></li>
                </ul>
                <div id="all-products" class="col s12">

                    <div class="row">

                        <?php
                        $arrAllProducts = ProductDAO::getProducts();

                        foreach ($arrAllProducts as $product) {
                            $arrAllProductHoeveelheden = ProductHoeveelheidDAO::getProductHoeveelheidByProductId($product->getProductId());
                            ?>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image">
                                        <img class="" src="<?php echo $product->getLocatieFoto(); ?>">
                                        
                                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">remove</i></a>
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title black-text"><a href="product_detail.php?productId=<?php echo $product->getProductId(); ?>" target="_blank"><?php echo $product->getNaam(); ?></a></span>
                                        <p><?php echo $product->getBeschrijving(); ?></p>
                                    </div>
                                    <div class="card-tabs">
                                        <ul class="tabs tabs-fixed-width">
                                            <li class="tab"><a class="active" href="#product-price-<?php echo $product->getProductId(); ?>">Prijzen</a></li>
                                            <li class="tab"><a href="#stock-<?php echo $product->getProductId(); ?>">Voorraad</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-content grey lighten-4">
                                        <div id="product-price-<?php echo $product->getProductId(); ?>">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>#ml</th>
                                                        <th>Excl btw</th>
                                                        <th>Incl btw</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($arrAllProductHoeveelheden as $productHoeveelheid) { ?>

                                                        <tr>
                                                            <td><?php echo HoeveelheidDAO::getHoeveelheidById($productHoeveelheid->getHoeveelheidId())->getNaam(); ?></td>
                                                            <td><?php echo "€ " . number_format($productHoeveelheid->getPrijsExclBtw(), 2, '.', ' '); ?></td>
                                                            <td><?php echo "€ " . number_format($productHoeveelheid->getPrijsInclBtw(), 2, '.', ' '); ?></td>
                                                        </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="stock-<?php echo $product->getProductId(); ?>">5</div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>



                </div>
                <div id="add-products" class="col s12">
                    <div class="row">
                        <form action="addProductToProducts.php" method="post" enctype="multipart/form-data">
                            <div class="input-field col s12 m4">
                                <input id="product_name" type="text" name="productName">
                                <label for="product_name">Product naam</label>
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="price_excl_btw" type="text" name="priceExclBtw">
                                <label for="price_excl_btw">Prijs excl btw</label>
                            </div>

                            <div class="input-field col s12 m4">
                                <select name="categorie">
                                    <?php
                                    $arrCategorieen = CategorieDAO::getCategorieen();
                                    foreach ($arrCategorieen as $categorie) {
                                        ?>
                                        <option value="<?php echo $categorie->getCategorieId(); ?>"><?php echo $categorie->getNaam(); ?></option>
                                    <?php } ?>
                                </select>
                                <label>Categorie</label>
                            </div>



                            <div class="input-field col s12">
                                <textarea id="product_description" class="materialize-textarea" name="productDescription"></textarea>
                                <label for="product_description ">Product beschrijving</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select multiple name="tags[]">
                                    <option value="" disabled selected>Kies tags</option>
                                    <?php
                                    $arrTags = TagDAO::getTags();

                                    foreach ($arrTags as $tag) {
                                        ?>
                                        <option value="<?php echo $tag->getTagId(); ?>"><?php echo $tag->getTagNaam(); ?></option>
                                    <?php } ?>
                                </select>
                                <label>Tags</label>
                            </div>

                            <div class="file-field input-field col s12 m6">
                                <div class="btn">
                                    <span>Photo</span>
                                    <input type="file" name="imgProduct">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>

                            <input type="hidden" name="postcheckProduct" value="true">
                            <button id="addProductToProducts" class="btn waves-effect waves-light red darken-4 full-width" type="submit">Voeg product toe
                                <i class="material-icons left">add</i>
                            </button>
                        </form>
                    </div>
                </div>

                <div id="add-tags" class="col s12">
                    
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>tagId</th>
                                    <th>Naam</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($arrTags as $tag) { ?>
                                    <tr>
                                        <td><?php echo $tag->getTagId(); ?></td>
                                        <td><?php echo $tag->getTagNaam(); ?></td>
                                        <td id="deleteTag"><i class="material-icons" >delete</i></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    
                    <form action="addProductToProducts.php" method="post">
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <input id="tag_name" type="text" name="tagName" placeholder="Beschrijving van de tag">
                                <label for="tag_name">Tag naam</label>
                            </div>
                        </div>
                        <input type="hidden" name="postcheckTag" value="true">
                        <div class="row">
                            <button id="addProductToProducts" class="btn waves-effect waves-light red darken-4" type="submit">Voeg tag toe
                                <i class="material-icons left">add</i>
                            </button>
                        </div>
                    </form>

                </div>
            </section>
        </main>
        <?php require_once './Footer.php'; ?>
    </body>

</html>
